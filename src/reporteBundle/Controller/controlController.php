<?php

namespace reporteBundle\Controller;

use reporteBundle\Entity\control;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Control controller.
 *
 */
class controlController extends Controller
{
    /**
     * Lists all control entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $controls = $em->getRepository('reporteBundle:control')->findAll();

        return $this->render('control/index.html.twig', array(
            'controls' => $controls,
        ));
    }

    /**
     * Creates a new control entity.
     *
     */
    public function newAction(Request $request)
    {
        $control = new Control();
        $form = $this->createForm('reporteBundle\Form\controlType', $control);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($control);
            $em->flush();

            return $this->redirectToRoute('control_show', array('id' => $control->getId()));
        }

        return $this->render('control/new.html.twig', array(
            'control' => $control,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a control entity.
     *
     */
    public function showAction(control $control)
    {
        $deleteForm = $this->createDeleteForm($control);

        return $this->render('control/show.html.twig', array(
            'control' => $control,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing control entity.
     *
     */
    public function editAction(Request $request, control $control)
    {
        $deleteForm = $this->createDeleteForm($control);
        $editForm = $this->createForm('reporteBundle\Form\controlType', $control);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('control_edit', array('id' => $control->getId()));
        }

        return $this->render('control/edit.html.twig', array(
            'control' => $control,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a control entity.
     *
     */
    public function deleteAction(Request $request, control $control)
    {
        $form = $this->createDeleteForm($control);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($control);
            $em->flush();
        }

        return $this->redirectToRoute('control_index');
    }

    /**
     * Creates a form to delete a control entity.
     *
     * @param control $control The control entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(control $control)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('control_delete', array('id' => $control->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
