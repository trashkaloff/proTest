<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;

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
     * @param Request $request
     */
    public function newAction(Request $request)
    {
        $Article = new Article();
        $form = $this->createFormBuilder($Article);

        if($form->isValid()){
            $Article = $this->getDoctrine()->getManager();
            $Articles->persist($Article);
            $Articles->flush($Article);
        }
        return $this->render('entity/new.html.twig');
    }

    /**
     * @return int
     */
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
        $Article->setName();
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
        $Article =$Articles->getRepository(Article::class)->find($id);
        $Article->setName();
        $Articles->remove($id);
        $Articles->flush();

        return $this->redirectToRoute('entity/edit.html.twig');

    }

    /**
     * @param Article $Article
     * @return \Symfony\Component\Form\Form
     */
    private function createDeleteForm(Article $Article)
    {
        return $this->createFormBuilder()->setAction($this->generateUrl($Article->getId()))->setMethod('delete')->getForm();
    }
}
