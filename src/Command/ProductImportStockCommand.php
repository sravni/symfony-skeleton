<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:product:import-stock',
)]
class ProductImportStockCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // TODO: import products stock

        $io = new SymfonyStyle($input, $output);
        $io->success('Done!');

        return Command::SUCCESS;
    }
}
