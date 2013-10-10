<?php

namespace System\TrackingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use System\TrackingBundle\Entity\Expence;

class ActualExpencesController extends Controller {

    public function createActualExpencesAction(Request $request) {
        $message = $request->get('message', null);
        $expence = new Expence();
        $form = $this->createFormBuilder($expence)
                ->add('projectID', 'text')
                ->add('machineryCost', 'text')
                ->add('consumableCost', 'text')
                ->add('hrCost', 'text')
                ->add('endingDate', 'date')
                ->add('Submit', 'submit')
                ->add('Reset', 'reset')
                ->getForm();
        $form->handleRequest($request);
        
        if($form->isValid()){
            $expence = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($expence);
            $em->flush();
            
            $response = array('message' => "Actual Expences Updated Successfully");
            
            return $this->redirect($this->generateUrl('create_actual_expences', $response));
        }
        return $this->render('SystemTrackingBundle:ActualExpences:createActualExpences.html.twig', array('form' => $form->createView()));
    }

}
