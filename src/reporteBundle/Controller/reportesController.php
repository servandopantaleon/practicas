<?php

namespace reporteBundle\Controller;

use reporteBundle\Entity\reportes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Reporte controller.
 *
 */
class reportesController extends Controller
{
    /**
     * Lists all reporte entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reportes = $em->getRepository('reporteBundle:reportes')->findAll();

        return $this->render('reportes/index.html.twig', array(
            'reportes' => $reportes,
        ));
    }

    /**
     * Creates a new reporte entity.
     *
     */
    public function newAction(Request $request)
    {
        $reporte = new Reporte();
        $form = $this->createForm('reporteBundle\Form\reportesType', $reporte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reporte);
            $em->flush();

            return $this->redirectToRoute('reportes_show', array('id' => $reporte->getId()));
        }

        return $this->render('reportes/new.html.twig', array(
            'reporte' => $reporte,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a reporte entity.
     *
     */
    public function showAction(reportes $reporte)
    {
        $deleteForm = $this->createDeleteForm($reporte);

        return $this->render('reportes/show.html.twig', array(
            'reporte' => $reporte,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reporte entity.
     *
     */
    public function editAction(Request $request, reportes $reporte)
    {
        $deleteForm = $this->createDeleteForm($reporte);
        $editForm = $this->createForm('reporteBundle\Form\reportesType', $reporte);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reportes_edit', array('id' => $reporte->getId()));
        }

        return $this->render('reportes/edit.html.twig', array(
            'reporte' => $reporte,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a reporte entity.
     *
     */
    public function deleteAction(Request $request, reportes $reporte)
    {
        $form = $this->createDeleteForm($reporte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reporte);
            $em->flush();
        }

        return $this->redirectToRoute('reportes_index');
    }

    /**
     * Creates a form to delete a reporte entity.
     *
     * @param reportes $reporte The reporte entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(reportes $reporte)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reportes_delete', array('id' => $reporte->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
