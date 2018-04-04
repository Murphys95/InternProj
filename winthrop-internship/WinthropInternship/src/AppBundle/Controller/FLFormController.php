<?php

namespace AppBundle\Controller;

use AppBundle\Entity\FLForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Flform controller.
 *
 * @Route("flform")
 */
class FLFormController extends Controller
{
    /**
     * Lists all fLForm entities.
     *
     * @Route("/", name="flform_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

//        $fLForms = $em->getRepository('AppBundle:FLForm')->findAll();

        // return $this->render('flForms/index.html.twig', array(
        //     'fLForms' => $fLForms,
        // ));
        
        $em = $this->getDoctrine()->getManager();

        $studentFormOnes = $em->getRepository('AppBundle:StudentFormOne')->findAll();
        
        if ($this->getUser()) {
            return $this->render('flForms/index.html.twig', array(
                'studentFormOnes' => $studentFormOnes,
            ));
        }
    }

    /**
     * Creates a new fLForm entity.
     *
     * @Route("/new", name="flform_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $fLForm = new Flform();
        $form = $this->createForm('AppBundle\Form\FLFormType', $fLForm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fLForm);
            $em->flush();

            return $this->redirectToRoute('flform_show', array('id' => $fLForm->getId()));
        }

        return $this->render('flForms/new.html.twig', array(
            'fLForm' => $fLForm,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a fLForm entity.
     *
     * @Route("/{id}", name="flform_show")
     * @Method("GET")
     */
    public function showAction(FLForm $fLForm)
    {
        $deleteForm = $this->createDeleteForm($fLForm);

        return $this->render('flForms/show.html.twig', array(
            'fLForm' => $fLForm,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing fLForm entity.
     *
     * @Route("/{id}/edit", name="flform_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, FLForm $fLForm)
    {
        $deleteForm = $this->createDeleteForm($fLForm);
        $editForm = $this->createForm('AppBundle\Form\FLFormType', $fLForm);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('flform_edit', array('id' => $fLForm->getId()));
        }

        return $this->render('flForms/edit.html.twig', array(
            'fLForm' => $fLForm,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a fLForm entity.
     *
     * @Route("/{id}", name="flform_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, FLForm $fLForm)
    {
        $form = $this->createDeleteForm($fLForm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fLForm);
            $em->flush();
        }

        return $this->redirectToRoute('flform_index');
    }

    /**
     * Creates a form to delete a fLForm entity.
     *
     * @param FLForm $fLForm The fLForm entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FLForm $fLForm)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('flform_delete', array('id' => $fLForm->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
