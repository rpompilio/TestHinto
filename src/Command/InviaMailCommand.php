<?php

namespace App\Command;
use App\Services\MailService;
use App\Services\TypicodeService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[AsCommand(name: 'app:invia-mail')]
class InviaMailCommand extends Command
{


    public function __construct(private TypicodeService $typicodeService, private MailService $mailService){
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Invia mail');
    }
    protected function execute(InputInterface $input, OutputInterface $output) : int
    {
        $output->writeln('Init invia-mail');
        $numeroRisultati = 3;
        $result = $this->typicodeService->recuperaDati($numeroRisultati);
        $output->writeln('Lista recuperata');
        $this->mailService->inviaMail($result, $numeroRisultati);
        $output->writeln('Mail inviata');
        return 0;
    }
}