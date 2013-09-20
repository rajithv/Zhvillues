<?php

namespace System\TrackingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ActualExpencesController extends Controller
{
    public function createActualExpencesAction()
    {
        $form = $this->createFormBuilder()
                ->add('Machinery_Cost', 'text')
                ->add('Consumable_Cost', 'text')
                ->add('HR_Cost', 'text')
                ->add('Ending_date', 'date')
     
                ->getForm();

        return $this->render('SystemTrackingBundle:ActualExpences:createActualExpences.html.twig', array('form' => $form->createView()));
        
        
    }

}
