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

/**
 * Class ParseCommand
 * @package AppBundle\Command
 */
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

        return $this->getRecursion($crawler, 'http://api.symfony.com/3.2/');
    }

        public function getRecursion(Crawler $el,$links)
    {
        $html = file_get_contents($links);
        $crawler = new Crawler($html);
        $nodeLinks = $crawler->filter('div.namespace-container > ul > li > a');

        if($nodeLinks->count() > 0){
            foreach ($nodeLinks as $item){
                var_dump('Namespaces: '.'http://api.symfony.com/3.2/'.$item->getAttribute('href'));
                $this->getRecursion($el,'http://api.symfony.com/3.2/' . $item->getAttribute('href'));
            }
     }
        $DOMcrawler = $crawler->filter('div#page-content > div.container-fluid.underlined > div.row > div > a');
            if($DOMcrawler->count() > 0){
                foreach ($DOMcrawler as $item){
                }
                var_dump('Classes: '.'http://api.symfony.com/3.2/'.$item->getAttribute('href'));
            }
        $node = $crawler->filter('h2');
            if ($node->count() > 0){
                foreach ($node as $item){
                    if ($item->textContent == 'Interfaces'){
                        $hItem = $item->nextSibling->nextSibling->getElementsByTagName('a');
                        foreach ($hItem as $row){
                            var_dump('Interfaces: '.'http://api.symfony.com/3.2/'.$item->getAttribute('href'));
                        }
                    }
                }
            }
//               var_dump($item->nodeValue);
        }
}