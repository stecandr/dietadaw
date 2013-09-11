<?php

namespace Daw\DietaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Daw\DietaBundle\Entity\Usuario;
use Daw\DietaBundle\Form\UsuarioType;

/**
 * Usuario controller.
 *
 */
class UsuarioController extends Controller
{
    /**
     * Lists all Usuario entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DawDietaBundle:Usuario')->findAll();

        return $this->render('DawDietaBundle:Usuario:index.html.twig', array(
            'entities' => $entities,
        ));
    }

     /**
     * Lists all Usuario entities.
     *
     */
    public function usuarioAction()
    {
        return $this->render('DawDietaBundle:Usuario:usuario.html.twig');
    }

    /**
     * Creates a new Usuario entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Usuario();
        $form = $this->createForm(new UsuarioType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $factory = $this->get('security.encoder_factory');

            $encoder = $factory->getEncoder($entity);
            $password = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
            $entity->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('usuario_show', array('id' => $entity->getId())));
        }

        return $this->render('DawDietaBundle:Usuario:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Usuario entity.
     *
     */
    public function newAction()
    {
        $entity = new Usuario();
        $form   = $this->createForm(new UsuarioType(), $entity);

        return $this->render('DawDietaBundle:Usuario:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Usuario entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DawDietaBundle:Usuario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DawDietaBundle:Usuario:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Usuario entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DawDietaBundle:Usuario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }

        $editForm = $this->createForm(new UsuarioType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DawDietaBundle:Usuario:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Usuario entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DawDietaBundle:Usuario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usuario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new UsuarioType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('usuario_edit', array('id' => $id)));
        }

        return $this->render('DawDietaBundle:Usuario:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Usuario entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DawDietaBundle:Usuario')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Usuario entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('usuario'));
    }

    /**
     * Creates a form to delete a Usuario entity by id.
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
