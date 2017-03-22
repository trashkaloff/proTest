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
        var_dump($Articles);
        exit;
    }
    public function showAction($id)
    {
        $Article = $this->getDoctrine()->getRepository(Article::class)->find($id);
    }
    public function updateAction($id)
    {
        $Articles = $this->getDoctrine()->getManager();
        $Article =$Articles->getRepository(Article::class)->find($id);
        $Article->setName();
        $Articles->flush();

        return $this->redirectToRoute();
    }
    public function deleteAction($id)
    {
        $Articles = $this->getDoctrine()->getManager();
        $Article =$Articles->getRepository(Article::class)->find($id);
        $Article->setName();
        $Articles->remove($id);
        $Articles->flush();

        return $this->redirectToRoute();

        var_dump($Articles);
        exit;
    }
}
