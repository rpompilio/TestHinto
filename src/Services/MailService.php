<?php

namespace App\Services;

use Psr\Log\LoggerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;

class MailService
{
    public function __construct(private MailerInterface $mailer, private LoggerInterface $logger)
    {
    }

    public function inviaMail(array $dati, int $numeroRisultati): void
    {
        $this->logger->debug('Invio mail lista post per utenti');
        $mail = new TemplatedEmail();
        $mail->to('prova@robertopompilio.com');
        $mail->subject('Test hinto');
        $mail->htmlTemplate('emails/mail.hinto.twig');
        $mail->context(['risultati' => $dati, 'numero_risultati' => $numeroRisultati]);
        $this->mailer->send($mail);
        $this->logger->debug('Mail inviata');
    }

}