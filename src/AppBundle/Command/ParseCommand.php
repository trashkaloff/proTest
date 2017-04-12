<?php
namespace AppBundle\Command;

use AppBundle\Entity\ClassSymfony;
use AppBundle\Entity\NamespaceSymfony;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DomCrawler\Crawler;

class ParseCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('app:parse')
            ->setDescription('Parse api.symfony.com')
            ->setHelp('This command allows you to create a user...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $html = file_get_contents('http://api.symfony.com/3.2/namespaces.html');
        $crawler = new Crawler($html);

        foreach ($crawler->filter('div.namespaces') as $item){
            $url = 'http://api.symfony.com/3.2/' .$item->getAttribute('href');
            $nameSpaces = new NamespaceSymfony();
            $nameSpaces->setName($item->textContent);
            $nameSpaces->setUrl($url);

            $target = file_get_contents($url);
            $DOMcrawler = new Crawler($target);

            foreach ($DOMcrawler->filter('p') as $itemes){
                    $itemes->getAttribute('href');
                    $class = new ClassSymfony();
                    $class->setUrl($itemes);
                    $class->setName($itemes->textContent);
                    $class->setNamespace($nameSpaces);
             }

            var_dump($item->nodeValue);
        }
    }

}