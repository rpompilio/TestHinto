<?php

namespace App\Services;

use App\Entity\Post;
use App\Entity\User;
use Psr\Log\LoggerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class TypicodeService
{
    public function __construct(private SerializerInterface $serializer, private HttpClientInterface $typicodeComClient, private LoggerInterface $logger)
    {
    }

    public function recuperaDati(int $maxResults = 1): array
    {
        $userCollection = $this->recuperaUtenti($maxResults);
        return $userCollection;
    }

    private function recuperaUtenti(int $maxResults = 1): array
    {
        $this->logger->debug('recupero lista utenti.');
        $this->logger->debug('Numero elementi da recuperare: ' . $maxResults);
        $userResponse = $this->typicodeComClient->request('GET', '/users');
        $this->logger->debug('deserializzo lista utenti');
        $userCollection = $this->serializer->deserialize($userResponse->getContent(), User::class . '[]', 'json');
        foreach ($userCollection as $singoloUtente) {
            $idUtente = $singoloUtente->getId();
            $listaPosts = $this->recuperaPostUtente($idUtente, $maxResults);
            $singoloUtente->setListaPost($listaPosts);
        }
        return $userCollection;
    }

    private function recuperaPostUtente(int $idUtente, int $maxResults = 1): array
    {
        $this->logger->debug('recupero lista post utente: '.$idUtente);
        $postResponse = $this->typicodeComClient->request('GET', '/users/' . $idUtente . '/posts');
        $this->logger->debug('deserializzo lista post');
        $listaPosts = $this->serializer->deserialize($postResponse->getContent(), Post::class . '[]', 'json');
        array_splice($listaPosts, $maxResults);
        return $listaPosts;
    }

}