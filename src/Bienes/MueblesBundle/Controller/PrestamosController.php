<?php

namespace Bienes\MueblesBundle\Controller;

use Bienes\MueblesBundle\Entity\Prestamos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Prestamo controller.
 *
 */
class PrestamosController extends Controller
{
    /**
     * Lists all prestamo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $prestamos = $em->getRepository('BienesMueblesBundle:Prestamos')->findAll();

        return $this->render('prestamos/index.html.twig', array(
            'prestamos' => $prestamos,
        ));
    }

    /**
     * Creates a new prestamo entity.
     *
     */
    public function newAction(Request $request)
    {
        $prestamo = new Prestamos();
        $form = $this->createForm('Bienes\MueblesBundle\Form\PrestamosType', $prestamo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($prestamo);
            $em->flush();

            return $this->redirectToRoute('prestamos_show', array('id' => $prestamo->getId()));
        }

        return $this->render('prestamos/new.html.twig', array(
            'prestamo' => $prestamo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a prestamo entity.
     *
     */
    public function showAction(Prestamos $prestamo)
    {
        $deleteForm = $this->createDeleteForm($prestamo);

        return $this->render('prestamos/show.html.twig', array(
            'prestamo' => $prestamo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing prestamo entity.
     *
     */
    public function editAction(Request $request, Prestamos $prestamo)
    {
        $deleteForm = $this->createDeleteForm($prestamo);
        $editForm = $this->createForm('Bienes\MueblesBundle\Form\PrestamosType', $prestamo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('prestamos_edit', array('id' => $prestamo->getId()));
        }

        return $this->render('prestamos/edit.html.twig', array(
            'prestamo' => $prestamo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a prestamo entity.
     *
     */
    public function deleteAction(Request $request, Prestamos $prestamo)
    {
        $form = $this->createDeleteForm($prestamo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($prestamo);
            $em->flush();
        }

        return $this->redirectToRoute('prestamos_index');
    }

    /**
     * Creates a form to delete a prestamo entity.
     *
     * @param Prestamos $prestamo The prestamo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Prestamos $prestamo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('prestamos_delete', array('id' => $prestamo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
