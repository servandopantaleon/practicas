<?php

namespace reporteBundle\Controller;

use reporteBundle\Entity\alumnos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Alumno controller.
 *
 */
class alumnosController extends Controller
{
    /**
     * Lists all alumno entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $alumnos = $em->getRepository('reporteBundle:alumnos')->findAll();

        return $this->render('alumnos/index.html.twig', array(
            'alumnos' => $alumnos,
        ));
    }

    /**
     * Creates a new alumno entity.
     *
     */
    public function newAction(Request $request)
    {
        $alumnos = new Alumnos();
        $form = $this->createForm('reporteBundle\Form\alumnosType', $alumnos);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($alumnos);
            $em->flush();

            return $this->redirectToRoute('alumnos_show', array('id' => $alumnos->getId()));
        }

        return $this->render('alumnos/new.html.twig', array(
            'alumnos' => $alumnos,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a alumno entity.
     *
     */
    public function showAction(alumnos $alumno)
    {
        $deleteForm = $this->createDeleteForm($alumno);

        return $this->render('alumnos/show.html.twig', array(
            'alumno' => $alumno,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing alumno entity.
     *
     */
    public function editAction(Request $request, alumnos $alumno)
    {
        $deleteForm = $this->createDeleteForm($alumno);
        $editForm = $this->createForm('reporteBundle\Form\alumnosType', $alumno);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('alumnos_edit', array('id' => $alumno->getId()));
        }

        return $this->render('alumnos/edit.html.twig', array(
            'alumno' => $alumno,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a alumno entity.
     *
     */
    public function deleteAction(Request $request, alumnos $alumno)
    {
        $form = $this->createDeleteForm($alumno);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($alumno);
            $em->flush();
        }

        return $this->redirectToRoute('alumnos_index');
    }

    /**
     * Creates a form to delete a alumno entity.
     *
     * @param alumnos $alumno The alumno entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(alumnos $alumno)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('alumnos_delete', array('id' => $alumno->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
