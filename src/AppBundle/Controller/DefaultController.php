<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Form\ArticleType;
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
     * @Route("/", name="entity_index")
     */
    public function indexAction()
    {
        $article = $this->getDoctrine()->getRepository(Article::class);
        $articles = $article->findAll();

        return $this->render('entity/index.html.twig', array('articles' => $articles));
    }

    /**
     * @Route("/new", name="entity_new")
     *
     * @param Request $request
     *
     * @return string|\Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request)
    {
        $article = new Article();
        $form = $this->createForm(Article::class, $article);
        $form->handleRequest($request);

        if($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->getData();
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('entity_index');
        }
        return $this->render('entity/new.html.twig', array('article' => $article,
            'form' => $form->createView()));
    }

    /**
     * @Route("/show/{id}", name="entity_show")
     *
     * @param $id
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager()
        $article = $em->getRepository(Article::class)->find($id);

        return $this->render('entity/show.html.twig', array('article' => $article));
    }

    /**
     * @Route("/edit/{id}", name="entity_edit")
     *
     * @param $id
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $article =$em->getRepository(Article::class)->find($id);

        if (!$article) {
            throw $this->createNotFoundException('No WTF id '.$id);
        }

       $editForm = $this->createForm(new ArticleType(), $article);

        if($editForm->isValid()){
            $em->persist($article);
            $em->flush();

            return $this->redirect('entity_edit');
        }

        return $this->render('entity/edit.html.twig', array('article' => $article,
            'edit_form' => $editForm->createView()));
    }

    /**
     * @Route("/delete/{id}", name="entity_delete")
     *
     * @param $id
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository(Article::class)->find($id);
        $em->remove($id);
        $em->flush();

        return $this->redirectToRoute('entity_index');
    }
}
