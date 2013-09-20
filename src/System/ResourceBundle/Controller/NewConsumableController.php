<?php

namespace System\ResourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewConsumableController extends Controller
{
    public function addAction()
    {
        //return $this->render('SystemResourceBundle:Pages:addNewConsumable.html.twig');
        
        $form = $this->createFormBuilder()
                ->add('Consumable_Code', 'text')
                ->add('Name', 'text')
                ->add('Quantity', 'text')
                ->add('Unit_Value', 'text')
                ->add('Hourly_Rate', 'text')
                ->add('create', 'submit')
                ->add('clear', 'submit')
                ->getForm();
         return $this->render('SystemResourceBundle:Pages:addNewConsumable.html.twig', array('form' => $form->createView()));
    }
}
