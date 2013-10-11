<?php

namespace System\ResourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use System\ResourceBundle\Entity\Consumable;
use Symfony\Component\HttpFoundation\Request;

class NewConsumableController extends Controller
{
    public function addAction(Request $request)
    {
        //return $this->render('SystemResourceBundle:Pages:addNewConsumable.html.twig');
        
        $message = $request -> get('message', null);
        
        $consumable = new Consumable();
        
        $form = $this->createFormBuilder($consumable)
                //->add('id', 'text')
                ->add('name', 'text')
                ->add('quantity', 'text')
                ->add('unitValue', 'text')
                //->add('Hourly_Rate', 'text')
                ->add('create', 'submit')
                ->add('clear', 'submit')
                ->getForm();
        
        $form->handleRequest($request);
        
        if (isset($_POST['form_Submit'])) { 
           $consumable=$form->getData();
            $consumable->setPendingOrders(0);
            $consumable->setToBeOrdered(0);
            $em = $this->getDoctrine()->getManager();
            $em->persist($consumable);
            $em->flush();
            
            $response = array(
              'message' => "New consumable added successfully.",
            );
        
            return $this->redirect($this->generateUrl('add_new_consumable', $response));
        } else if (isset($_POST['form_reset'])) { 
             return $this->render('SystemResourceBundle:Pages:addNewConsumable.html.twig', array('form' => $form->createView(),'message' => $message));
        }
                
        if($form->isValid()){
            
            $consumable=$form->getData();
            $consumable->setPendingOrders(0);
            $consumable->setToBeOrdered(0);
            $em = $this->getDoctrine()->getManager();
            $em->persist($consumable);
            $em->flush();
            
            $response = array(
              'message' => "New consumable added successfully.",
            );
        
            return $this->redirect($this->generateUrl('add_new_consumable', $response));
        }
        return $this->render('SystemResourceBundle:Pages:addNewConsumable.html.twig', array('form' => $form->createView(),'message' => $message));
    }
}
