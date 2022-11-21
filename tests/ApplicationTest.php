<?php

namespace App\Tests;

use App\Command\RecuperaUtentiCommand;
use App\Services\TypicodeService;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Tester\CommandTester;

class ApplicationTest extends KernelTestCase
{
    public function testSomething(): void
    {
        $kernel = self::bootKernel();
        $application = new Application($kernel);

        $command = $application->find(RecuperaUtentiCommand::class);
        $commandTester = new CommandTester($command);
        $commandTester->execute([
            // pass arguments to the helper
            //'username' => 'Wouter',

            // prefix the key with two dashes when passing options,
            // e.g: '--some-option' => 'option_value',
            // use brackets for testing array value,
            // e.g: '--some-option' => ['option_value'],
        ]);

        $commandTester->assertCommandIsSuccessful();
    }
}
