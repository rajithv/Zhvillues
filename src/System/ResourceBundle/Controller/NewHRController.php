<?php

namespace System\ResourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewHRController extends Controller
{
    public function addAction()
    {
                $form = $this->createFormBuilder()
                ->add('Emloyee_Code', 'text')
                ->add('Name', 'text')
                ->add('Department', 'text')
                ->add('NIC_Number', 'text')
                ->add('Hourly_Rate', 'text')
                ->add('Allocated_Project', 'text')
                ->add('create', 'submit')
                ->add('clear', 'submit')
                ->getForm();
         return $this->render('SystemResourceBundle:Pages:addNewHR.html.twig', array('form' => $form->createView()));
    }

}
