<?php

namespace ItemsBundle\Controller;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use TrocBundle\Entity\Items;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Item controller.
 *
 */
class ItemsController extends Controller
{
    /**
     * Lists all item entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $items = $em->getRepository(Items::class)->findAll();

        return $this->render('@Items/items/index.html.twig', array(
            'items' => $items,
        ));
    }

    /**
     * Creates a new item entity.
     *
     */
    public function newAction(Request $request)
    {
        $user = $this->getUser();

        if($user == null)
            return $this->redirectToRoute('fos_user_security_login');
        else{
            $item = new Items();
            $form = $this->createForm('ItemsBundle\Form\itemsType', $item);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                /**
                 * @var UploadedFile $file
                 */
                $file = $item->getImgiems();
                $filename = md5(uniqid()).'.'.$file->guessExtension();
                $file->move(
                  $this->getParameter('image_dir'),$filename
                );
                $item->setImgiems($filename);

                $em = $this->getDoctrine()->getManager();
                $em->persist($item);
                $em->flush();

                return $this->redirectToRoute('items_show', array('iditems' => $item->getIditems()));
            }

            return $this->render('@Items/items/new.html.twig', array(
                'item' => $item,
                'form' => $form->createView(),
            ));
        }

    }

    /**
     * Finds and displays a item entity.
     *
     */
    public function showAction(Items $item)
    {
        $deleteForm = $this->createDeleteForm($item);

        return $this->render('@Items/items/show.html.twig', array(
            'item' => $item,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing item entity.
     *
     */
    public function editAction(Request $request, items $item)
    {
        $user = $this->getUser();
        if($user == null)
        {
            return $this->redirectToRoute('troc_signin');
        }
        else {
            $deleteForm = $this->createDeleteForm($item);
            $editForm = $this->createForm('ItemsBundle\Form\itemsType', $item);
            $editForm->handleRequest($request);

            if ($editForm->isSubmitted() && $editForm->isValid()) {
                $this->getDoctrine()->getManager()->flush();

                return $this->redirectToRoute('items_edit', array('iditems' => $item->getIditems()));
            }

            return $this->render('items/edit.html.twig', array(
                'item' => $item,
                'edit_form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }
    }

    /**
     * Deletes a item entity.
     *
     */
    public function deleteAction(Request $request, items $item)
    {
        $user = $this->getUser();
        if($user == null)
        {
            return $this->redirectToRoute('troc_signin');
        }
        else {
            $form = $this->createDeleteForm($item);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->remove($item);
                $em->flush();
            }

            return $this->redirectToRoute('items_index');
        }
    }

    /**
     * Creates a form to delete a item entity.
     *
     * @param items $item The item entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(items $item)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('items_delete', array('iditems' => $item->getIditems())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
