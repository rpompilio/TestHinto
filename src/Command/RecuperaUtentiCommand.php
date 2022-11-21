<?php

namespace App\Command;
use App\Services\TypicodeService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[AsCommand(name: 'app:recupera-utenti')]
class RecuperaUtentiCommand extends Command
{


    public function __construct(private TypicodeService $typicodeService){
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Recupera lista utenti');
    }
    protected function execute(InputInterface $input, OutputInterface $output) : int
    {
        $output->writeln('Init recupera-utenti');
        $result = $this->typicodeService->recuperaDati(3);
        $output->writeln('Lista recuperata');
        return 0;
    }
}