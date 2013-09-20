<?php

namespace System\ResourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use System\ResourceBundle\Entity\Machinery;
use Symfony\Component\HttpFoundation\Request;


class NewMachineryController extends Controller
{
    public function addAction(Request $request)
    {
        $message = $request -> get('message', null);
        
        $machinery = new Machinery();
         
        $form = $this->createFormBuilder($machinery)
                ->add('code', 'text')
                ->add('name', 'text')
                ->add('netPresentValue', 'text')
                ->add('opCostHour', 'text')
                ->add('depRate', 'text')
                ->add('project', null)
                ->add('status', null)
                ->add('operator', null)
                ->add('Submit', 'submit')
                ->add('Clear', 'submit')
                ->getForm();
        
        $form->handleRequest($request);
                       
        if($form->isValid()){
            
            $machinery=$form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($machinery);
            $em->flush();
            
            $response = array('message' => "New Machinery added successfully.",);
        
            return $this->redirect($this->generateUrl('add_new_machinery', $response));
        }
        
         return $this->render('SystemResourceBundle:Pages:addNewMachinery.html.twig', array('form' => $form->createView(), 'message'=>$message));
    }

}
