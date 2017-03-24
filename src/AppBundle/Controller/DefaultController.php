<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Class DefaultController
 * @package AppBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $Article = $this->getDoctrine()->getRepository(Article::class);
        $Articles = $Article->findAll();

        return $this->render('entity/index.html.twig');

    }

    /**
     * @return string
     */
    public function createAction()
    {
        $Article = new Article();
        $Article->setName("name");
        $Article->setDescription("description");
        $Article->setCreatedAt(new \DateTime());

        return new Response('got ID').$Article->getId();
    }


    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request)
    {
        $form = $this->createFormBuilder($Article);

        if($form->isValid()) {
            $Articles = $this->getDoctrine()->getManager();
            $Articles->persist($Article);
            $Articles->flush();
        }
        return $this->render('entity/new.html.twig');
    }

    /**
     * @param $id
     */
    public function showAction($id)
    {
        $Article = $this->getDoctrine()->getRepository(Article::class)->find($id);

        return $this->render('entity/show.html.twig');
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function updateAction($id)
    {
        $Articles = $this->getDoctrine()->getManager();
        $Article =$Articles->getRepository(Article::class)->find($id);
        if (!$Article) {
            throw $this->createNotFoundException(
                'No WTF id '.$id
            );
        }
        $Article->setName("name");
        $Articles->flush();

        return $this->redirectToRoute('entity/index.html.twig');
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction($id)
    {
        $Articles = $this->getDoctrine()->getManager();
        $Article = $Articles->getRepository(Article::class)->find($id);
        $Articles->remove($id);
        $Articles->flush();

        return $this->redirectToRoute('entity/index.html.twig');
    }

}
