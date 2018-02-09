<?php

namespace Adir\DanielBundle\Controller;

use Adir\DanielBundle\Entity\daniel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Daniel controller.
 *
 */
class danielController extends Controller
{
    /**
     * Lists all daniel entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $daniels = $em->getRepository('AdirDanielBundle:daniel')->findAll();

        return $this->render('daniel/index.html.twig', array(
            'daniels' => $daniels,
        ));
    }

    /**
     * Creates a new daniel entity.
     *
     */
    public function newAction(Request $request)
    {
        $daniel = new Daniel();
        $form = $this->createForm('Adir\DanielBundle\Form\danielType', $daniel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($daniel);
            $em->flush();

            return $this->redirectToRoute('daniel_show', array('id' => $daniel->getId()));
        }

        return $this->render('daniel/new.html.twig', array(
            'daniel' => $daniel,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a daniel entity.
     *
     */
    public function showAction(daniel $daniel)
    {
        $deleteForm = $this->createDeleteForm($daniel);

        return $this->render('daniel/show.html.twig', array(
            'daniel' => $daniel,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing daniel entity.
     *
     */
    public function editAction(Request $request, daniel $daniel)
    {
        $deleteForm = $this->createDeleteForm($daniel);
        $editForm = $this->createForm('Adir\DanielBundle\Form\danielType', $daniel);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('daniel_edit', array('id' => $daniel->getId()));
        }

        return $this->render('daniel/edit.html.twig', array(
            'daniel' => $daniel,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a daniel entity.
     *
     */
    public function deleteAction(Request $request, daniel $daniel)
    {
        $form = $this->createDeleteForm($daniel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($daniel);
            $em->flush();
        }

        return $this->redirectToRoute('daniel_index');
    }

    /**
     * Creates a form to delete a daniel entity.
     *
     * @param daniel $daniel The daniel entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(daniel $daniel)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('daniel_delete', array('id' => $daniel->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
