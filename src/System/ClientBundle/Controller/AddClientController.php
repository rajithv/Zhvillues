<?php

namespace System\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use System\ClientBundle\Entity\Client;
use Symfony\Component\HttpFoundation\Request;

class AddClientController extends Controller
{
    public function addAction(Request $request)
    {
       //return $this->render('SystemClientBundle:Pages:addClient.html.twig');
        
        $message = $request->get('message', null);
        
        $client = new Client();
        
        $form = $this->createFormBuilder($client)
                ->add('code', 'text')
                ->add('name', 'text')
                ->add('contactPerson', 'text')
                ->add('tel', 'text')
                ->add('address', 'text')
                ->add('create', 'submit')
                ->add('clear', 'submit')
                ->getForm();
        
        $form->handleRequest($request);
        
        
        
        if($form->isValid()){
            
            $client=$form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();
            
            $response = array(
              'message' => "New client added successfully.",
            );
            
            
            //return $this->forward('SystemClientBundle:AddClient:add', array("message" => "New client added successfully."));
            return $this->redirect($this->generateUrl('add', $response));
        }

        return $this->render('SystemClientBundle:Pages:addClient.html.twig', array('form' => $form->createView(), 'message' => $message));

    }

}
