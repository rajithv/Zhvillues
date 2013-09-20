<?php

namespace System\ResourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewMachineryController extends Controller
{
    public function addAction()
    {
         //return $this->render('SystemResourceBundle:Pages:addNewMachinery.html.twig');
        $form = $this->createFormBuilder()
                ->add('Machinery_Code', 'text')
                ->add('Name', 'text')
                ->add('Purchase_Value', 'text')
                ->add('Hourly_Rate', 'text')
                ->add('Useful_Life', 'text')
                ->add('Submit', 'submit')
                ->add('Clear', 'submit')
                ->getForm();
         return $this->render('SystemResourceBundle:Pages:addNewMachinery.html.twig', array('form' => $form->createView()));
    }

}
