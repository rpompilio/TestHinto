<?php

namespace App\Provider;

use ApiPlatform\State\ProviderInterface;
use ApiPlatform\Metadata\Operation;
use App\Services\MailService;
use App\Services\TypicodeService;

class ApplicationProvider implements ProviderInterface
{

    public function __construct(private TypicodeService $typicodeService, private MailService $mailService)
    {
    }

    public function provide(Operation $operation, array $uriVariables = [], array $context = []): object|array |null
    {
        $operationName = $operation->getName();
        $result = [];
        $numeroRisultati = array_key_exists('numeroRisultati', $uriVariables) ? $uriVariables["numeroRisultati"] : getenv('NUMERO_RISULTATI_DEFAULT');
        switch ($operationName) {
            case "recupera_utenti":
                $result = $this->recuperaDati($numeroRisultati);
                break;
            case "invia_mail":
                $result = $this->recuperaDati($numeroRisultati);
                $this->inviaMail($result, $numeroRisultati);
                break;
        }
        return $result;
    }

    private function recuperaDati(int $numeroRisultati): array
    {
        return $this->typicodeService->recuperaDati($numeroRisultati);
    }

    private function inviaMail(array $dati, int $numeroRisultati): void
    {
        $this->mailService->inviaMail($dati, $numeroRisultati);
    }
}