<?php

namespace System\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AddClientController extends Controller
{
    public function addAction()
    {
       //return $this->render('SystemClientBundle:Pages:addClient.html.twig');
        $form = $this->createFormBuilder()
                ->add('Client_code', 'text')
                ->add('Name', 'text')
                ->add('Contact_Person', 'text')
                ->add('Telephone_number', 'text')
                ->add('Address', 'text')
                ->add('create', 'submit')
                ->add('clear', 'submit')
                ->getForm();

        return $this->render('SystemProjectBundle:ProjectCreation:createProject.html.twig', array('form' => $form->createView()));

    }

}
