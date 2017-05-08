<?php

namespace AppBundle\Command;


use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FakerCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('app:faker')
            ->setDescription('Populate database with fake date, just for testing purposes');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Start!');
        $this->getAppFaker()->createLocation();
        $output->writeln('Location done!');
        $this->getAppFaker()->createCategory();
        $output->writeln('Category done!');
        $this->getAppFaker()->createActivity(15);
        $output->writeln('Activity done!');
        $output->writeln('Exit!');
    }

    /**
     * @return \AppBundle\Faker
     */
    private function getAppFaker()
    {
        return $this->getContainer()->get('app.faker');
    }

}
