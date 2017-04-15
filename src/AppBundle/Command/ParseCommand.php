<?php
namespace AppBundle\Command;

use AppBundle\Entity\ClassSymfony;
use AppBundle\Entity\InterfaceSymfony;
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

        foreach ($crawler->filter('div.namespace-container > ul > li > a') as $item) {
            $url = 'http://api.symfony.com/3.2/' . $item->getAttribute('href');
            $namespace = new NamespaceSymfony();
            $namespace->setName($item->textContent);
            $namespace->setUrl($url);
            $em->persist($namespace);

            $target = file_get_contents($url);
            $DOMcrawler = new Crawler($target);

            foreach ($DOMcrawler->filter('div#page-content > div.container-fluid.underlined > div.row > div > a') as $classItem) {
                $class = new ClassSymfony();
                $class->setUrl('http://api.symfony.com/3.2/' . str_replace("../", "", $classItem->getAttribute('href')));
                $class->setName($classItem->textContent);
                $class->setNamespace($namespace);
                $em->persist($class);
            }
            foreach ($DOMcrawler->filter('h2') as $hItem) {

                if ($hItem->textContent == "Interfaces") {

                    $node = $hItem->nextSibling->nextSibling->getElementsByTagName('a');

                    foreach ($node as $element) {
                        $interface = new InterfaceSymfony();
                        $interface->setUrl('http://api.symfony.com/3.2/' . str_replace("../", "", $element->getAttribute('href')));
                        $interface->setName($element->textContent);
                        $interface->setNamespace($namespace);
                        $em->persist($interface);
                    }
                }
                var_dump($item->nodeValue);
            }
            $em->flush();
        }
    }
}