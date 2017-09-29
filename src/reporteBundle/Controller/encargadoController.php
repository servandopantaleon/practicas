<?php

namespace reporteBundle\Controller;

use reporteBundle\Entity\encargado;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Encargado controller.
 *
 */
class encargadoController extends Controller
{
    /**
     * Lists all encargado entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $encargados = $em->getRepository('reporteBundle:encargado')->findAll();

        return $this->render('encargado/index.html.twig', array(
            'encargados' => $encargados,
        ));
    }

    /**
     * Creates a new encargado entity.
     *
     */
    public function newAction(Request $request)
    {
        $encargado = new Encargado();
        $form = $this->createForm('reporteBundle\Form\encargadoType', $encargado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($encargado);
            $em->flush();

            return $this->redirectToRoute('encargado_show', array('id' => $encargado->getId()));
        }

        return $this->render('encargado/new.html.twig', array(
            'encargado' => $encargado,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a encargado entity.
     *
     */
    public function showAction(encargado $encargado)
    {
        $deleteForm = $this->createDeleteForm($encargado);

        return $this->render('encargado/show.html.twig', array(
            'encargado' => $encargado,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing encargado entity.
     *
     */
    public function editAction(Request $request, encargado $encargado)
    {
        $deleteForm = $this->createDeleteForm($encargado);
        $editForm = $this->createForm('reporteBundle\Form\encargadoType', $encargado);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('encargado_edit', array('id' => $encargado->getId()));
        }

        return $this->render('encargado/edit.html.twig', array(
            'encargado' => $encargado,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a encargado entity.
     *
     */
    public function deleteAction(Request $request, encargado $encargado)
    {
        $form = $this->createDeleteForm($encargado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($encargado);
            $em->flush();
        }

        return $this->redirectToRoute('encargado_index');
    }

    /**
     * Creates a form to delete a encargado entity.
     *
     * @param encargado $encargado The encargado entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(encargado $encargado)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('encargado_delete', array('id' => $encargado->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
