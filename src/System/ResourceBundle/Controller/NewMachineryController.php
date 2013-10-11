<?php

namespace System\ResourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use System\ResourceBundle\Entity\Machinery;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints;

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
                ->add('Submit', 'submit')
                ->add('Clear', 'submit')
                ->getForm();
        
        $form->handleRequest($request);
       
        if (isset($_POST['form_Submit'])) { 
           $machinery=$form->getData();
            $machinery->setProject("");
            $machinery->setStatus("Available");
            $machinery->setOperator("");
        
            $validator = $this->get('validator');
            $errors = $validator->validate($machinery);
            if(count($errors)==0){
                $em = $this->getDoctrine()->getManager();
                $em->persist($machinery);
                $em->flush();
                $response = array('message' => "New Machinery added successfully.",);
            }else{
                 $response = array('message' => "Invalid input. Please check again");
            }
            return $this->redirect($this->generateUrl('add_new_machinery', $response));
            
        } else if (isset($_POST['form_reset'])) { 
             return $this->render('SystemResourceBundle:Pages:addNewMachinery.html.twig', array('form' => $form->createView(), 'message'=>$message));
        }
        
        
        if($form->isValid()){
            
            $machinery=$form->getData();
            $machinery->setProject("");
            $machinery->setStatus("Available");
            $machinery->setOperator("");
            
            $validator = $this->get('validator');
            $errors = $validator->validate($machinery);
            if(count($errors)==0){
                $em = $this->getDoctrine()->getManager();
                $em->persist($machinery);
                $em->flush();

                $response = array('message' => "New Machinery added successfully.",);
            }else{
                 $response = array('message' => "Invalid input. Please check again");
            }
            return $this->redirect($this->generateUrl('add_new_machinery', $response));
        }
        
         return $this->render('SystemResourceBundle:Pages:addNewMachinery.html.twig', array('form' => $form->createView(), 'message'=>$message));
    }

}
