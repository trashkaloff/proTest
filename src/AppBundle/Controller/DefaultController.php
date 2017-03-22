<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $Article = $this->getDoctrine()->getRepository(Article::class);
        $Articles = $Article->findAll();
        var_dump($Articles);
        exit;
    }
    public function createAction()
    {
        $Article = new Article();
        $Article->setName();
        $Article->setDescription();
        $Article->setCreatedAt();

        $Articles = $this->getDoctrine()->getManager();
        $Articles->persist($Article);
        $Articles->flush();

        return $Article->getId();
    }
}
