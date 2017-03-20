<?php

namespace Trashkalov\FirstBundle\Controller;

use Trashkalov\FirstBundle\Entity\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Entity controller.
 *
 */
class EntityController extends Controller
{
    /**
     * Lists all entity entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TrashkalovFirstBundle:Entity')->findAll();

        return $this->render('entity/index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new entity entity.
     *
     */
    public function newAction(Request $request)
    {
        $entity = new Entity();
        $form = $this->createForm('Trashkalov\FirstBundle\Form\EntityType', $entity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush($entity);

            return $this->redirectToRoute('entity_show', array('id' => $entity->getId()));
        }

        return $this->render('entity/new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a entity entity.
     *
     */
    public function showAction(Entity $entity)
    {
        $deleteForm = $this->createDeleteForm($entity);

        return $this->render('entity/show.html.twig', array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing entity entity.
     *
     */
    public function editAction(Request $request, Entity $entity)
    {
        $deleteForm = $this->createDeleteForm($entity);
        $editForm = $this->createForm('Trashkalov\FirstBundle\Form\EntityType', $entity);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('entity_edit', array('id' => $entity->getId()));
        }

        return $this->render('entity/edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a entity entity.
     *
     */
    public function deleteAction(Request $request, Entity $entity)
    {
        $form = $this->createDeleteForm($entity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($entity);
            $em->flush($entity);
        }

        return $this->redirectToRoute('entity_index');
    }

    /**
     * Creates a form to delete a entity entity.
     *
     * @param Entity $entity The entity entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Entity $entity)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('entity_delete', array('id' => $entity->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
