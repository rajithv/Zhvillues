<?php

namespace System\ResourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use System\ResourceBundle\Entity\HR;
use Symfony\Component\HttpFoundation\Request;

class NewHRController extends Controller
{
    public function addAction(Request $request)
    {
        $message = $request->get('message', null);
        
        $hr = new HR();
        
        $form = $this->createFormBuilder($hr)
                ->add('code', 'text')
                ->add('name', 'text')
                ->add('department', 'text')
                ->add('idNo', 'text')
                ->add('rateHour', 'text')
                ->add('project', 'text')
                ->add('create', 'submit')
                ->add('clear', 'submit')
                ->getForm();
                       
        $form->handleRequest($request); 
        
        if (isset($_POST['form_Submit'])) { 
           $hr=$form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($hr);
            $em->flush();
            
            $response = array('message' => "New Human Resource added successfully.",);
            //echo     $this->generateUrl('add_new_hr', $response); 
            return $this->redirect($this->generateUrl('add_new_hr', $response));
            
        } else if (isset($_POST['form_reset'])) { 
            return $this->render('SystemResourceBundle:Pages:addNewHR.html.twig', array('form' => $form->createView(), 'message'=>$message)); 
        }
        
        if($form->isValid()){
            
            $hr=$form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($hr);
            $em->flush();
            
            $response = array('message' => "New Human Resource added successfully.",);
                 
            return $this->redirect($this->generateUrl('add', $response));
        }
       
         return $this->render('SystemResourceBundle:Pages:addNewHR.html.twig', array('form' => $form->createView(), 'message'=>$message));
    }

}
