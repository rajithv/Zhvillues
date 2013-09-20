<?php

namespace System\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AddClientController extends Controller
{
    public function addAction()
    {
        //return $this->render('SystemClientBundle:Pages:addClient.html.twig');
        // create a task and give it some dummy data for this example
        

        $form = $this->createFormBuilder()
                ->add('Client_Code', 'text')
                ->add('Name', 'text')
                ->add('Contact_Person', 'text')
                ->add('Contact_Details', 'text')
                ->add('Project', 'text')
                ->add('save', 'submit')
                ->add('clear','submit')
                ->getForm();

        return $this->render('SystemClientBundle:Pages:addClient.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
