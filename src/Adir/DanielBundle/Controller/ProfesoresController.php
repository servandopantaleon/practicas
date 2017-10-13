<?php

namespace Adir\DanielBundle\Controller;

use Adir\DanielBundle\Entity\Profesores;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Profesore controller.
 *
 */
class ProfesoresController extends Controller
{
    /**
     * Lists all profesore entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $profesores = $em->getRepository('AdirDanielBundle:Profesores')->findAll();

        return $this->render('profesores/index.html.twig', array(
            'profesores' => $profesores,
        ));
    }

    /**
     * Creates a new profesore entity.
     *
     */
    public function newAction(Request $request)
    {
        $profesore = new Profesore();
        $form = $this->createForm('Adir\DanielBundle\Form\ProfesoresType', $profesore);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($profesore);
            $em->flush();

            return $this->redirectToRoute('profesores_show', array('id' => $profesore->getId()));
        }

        return $this->render('profesores/new.html.twig', array(
            'profesore' => $profesore,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a profesore entity.
     *
     */
    public function showAction(Profesores $profesore)
    {
        $deleteForm = $this->createDeleteForm($profesore);

        return $this->render('profesores/show.html.twig', array(
            'profesore' => $profesore,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing profesore entity.
     *
     */
    public function editAction(Request $request, Profesores $profesore)
    {
        $deleteForm = $this->createDeleteForm($profesore);
        $editForm = $this->createForm('Adir\DanielBundle\Form\ProfesoresType', $profesore);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('profesores_edit', array('id' => $profesore->getId()));
        }

        return $this->render('profesores/edit.html.twig', array(
            'profesore' => $profesore,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a profesore entity.
     *
     */
    public function deleteAction(Request $request, Profesores $profesore)
    {
        $form = $this->createDeleteForm($profesore);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($profesore);
            $em->flush();
        }

        return $this->redirectToRoute('profesores_index');
    }

    /**
     * Creates a form to delete a profesore entity.
     *
     * @param Profesores $profesore The profesore entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Profesores $profesore)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('profesores_delete', array('id' => $profesore->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
