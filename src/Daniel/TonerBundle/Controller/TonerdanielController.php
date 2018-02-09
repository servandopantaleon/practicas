<?php

namespace Daniel\TonerBundle\Controller;

use Daniel\TonerBundle\Entity\Tonerdaniel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Tonerdaniel controller.
 *
 */
class TonerdanielController extends Controller
{
    /**
     * Lists all tonerdaniel entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tonerdaniels = $em->getRepository('DanielTonerBundle:Tonerdaniel')->findAll();

        return $this->render('tonerdaniel/index.html.twig', array(
            'tonerdaniels' => $tonerdaniels,
        ));
    }

    /**
     * Creates a new tonerdaniel entity.
     *
     */
    public function newAction(Request $request)
    {
        $tonerdaniel = new Tonerdaniel();
        $form = $this->createForm('Daniel\TonerBundle\Form\TonerdanielType', $tonerdaniel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tonerdaniel);
            $em->flush();

            return $this->redirectToRoute('tonerdaniel_show', array('id' => $tonerdaniel->getId()));
        }

        return $this->render('tonerdaniel/new.html.twig', array(
            'tonerdaniel' => $tonerdaniel,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tonerdaniel entity.
     *
     */
    public function showAction(Tonerdaniel $tonerdaniel)
    {
        $deleteForm = $this->createDeleteForm($tonerdaniel);

        return $this->render('tonerdaniel/show.html.twig', array(
            'tonerdaniel' => $tonerdaniel,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tonerdaniel entity.
     *
     */
    public function editAction(Request $request, Tonerdaniel $tonerdaniel)
    {
        $deleteForm = $this->createDeleteForm($tonerdaniel);
        $editForm = $this->createForm('Daniel\TonerBundle\Form\TonerdanielType', $tonerdaniel);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tonerdaniel_edit', array('id' => $tonerdaniel->getId()));
        }

        return $this->render('tonerdaniel/edit.html.twig', array(
            'tonerdaniel' => $tonerdaniel,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tonerdaniel entity.
     *
     */
    public function deleteAction(Request $request, Tonerdaniel $tonerdaniel)
    {
        $form = $this->createDeleteForm($tonerdaniel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tonerdaniel);
            $em->flush();
        }

        return $this->redirectToRoute('tonerdaniel_index');
    }

    /**
     * Creates a form to delete a tonerdaniel entity.
     *
     * @param Tonerdaniel $tonerdaniel The tonerdaniel entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tonerdaniel $tonerdaniel)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tonerdaniel_delete', array('id' => $tonerdaniel->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
