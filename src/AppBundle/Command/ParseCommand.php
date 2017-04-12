<?php
namespace AppBundle\Command;

use AppBundle\Entity\ClassSymfony;
use AppBundle\Entity\NamespaceSymfony;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DomCrawler\Crawler;

class ParseCommand extends ContainerAwareCommand
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
        $em = $this->getContainer()->get('doctrine')->getManager();
//        var_dump($em);
//        exit;

        foreach ($crawler->filter('div.namespace-container > ul > li > a') as $item){
            $url = 'http://api.symfony.com/3.2/' .$item->getAttribute('href');
            $namespace = new NamespaceSymfony();
            $namespace->setName($item->textContent);
            $namespace->setUrl($url);
            $em->persist($namespace);

            var_dump($item->nodeValue);

//            $target = file_get_contents($url);
//            $DOMcrawler = new Crawler($target);
//
//            foreach ($DOMcrawler->filter('p') as $itemes){
//                    $itemes->getAttribute('href');
//                    $class = new ClassSymfony();
//                    $class->setUrl($itemes);
//                    $class->setName($itemes->textContent);
//                    $class->setNamespace($namespace);
//                    $em->persist($class);
//             }
//
//            var_dump($item->nodeValue);
        }
        $em->flush();
    }

}