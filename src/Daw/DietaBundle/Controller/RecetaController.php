<?php

namespace Daw\DietaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Daw\DietaBundle\Entity\Receta;
use Daw\DietaBundle\Form\RecetaType;

/**
 * Receta controller.
 *
 */
class RecetaController extends Controller
{
    /**
     * Lists all Receta entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DawDietaBundle:Receta')->findAll();

        return $this->render('DawDietaBundle:Receta:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Receta entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Receta();
        $form = $this->createForm(new RecetaType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('receta_show', array('id' => $entity->getId())));
        }

        return $this->render('DawDietaBundle:Receta:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Receta entity.
     *
     */
    public function newAction()
    {
        $entity = new Receta();
        $form   = $this->createForm(new RecetaType(), $entity);

        return $this->render('DawDietaBundle:Receta:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Receta entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DawDietaBundle:Receta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Receta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DawDietaBundle:Receta:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Receta entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DawDietaBundle:Receta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Receta entity.');
        }

        $editForm = $this->createForm(new RecetaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DawDietaBundle:Receta:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Receta entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DawDietaBundle:Receta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Receta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new RecetaType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('receta_edit', array('id' => $id)));
        }

        return $this->render('DawDietaBundle:Receta:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Receta entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DawDietaBundle:Receta')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Receta entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('receta'));
    }

    /**
     * Creates a form to delete a Receta entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
