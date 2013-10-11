<?php

namespace System\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use System\ProjectBundle\Entity\Budget;
use Symfony\Component\HttpFoundation\Request;

class BudgetCreationController extends Controller {

    public function createBudgetAction(Request $request) {
        $message = $request->get('message', null);

        $budget = new Budget();
        $form = $this->createFormBuilder($budget)
                ->add('projectID', 'text')
                ->add('machineryCost', 'text')
                ->add('consumableCost', 'text')
                ->add('hrCost', 'text')
                ->add('timeEstimate', 'integer')
                ->add('variationPercentage', 'percent')
                ->add('create', 'submit')
                ->add('clear', 'reset')
                ->getForm();
        $form->handleRequest($request);

        if (isset($_POST['buttonSub'])) {                
                $budget = $form->getData();
                $em = $this->getDoctrine()->getManager();
                $em->persist($budget);
                $em->flush();

                $response = array('message' => "New Budget Created Successfully");

                return $this->redirect($this->generateUrl('create_budget', $response));
        } else if (isset($_POST['buttonRes'])) { 
            return $this->render('SystemProjectBundle:BudgetCreation:createBudget.html.twig', array('form' => $form->createView(), 'message' => $message)); 
        }
        
        
        
        if ($form->isValid()) {
            $budget = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($budget);
            $em->flush();

            $response = array('message' => "New Budget Created Successfully");

            return $this->redirect($this->generateUrl('create_budget', $response));
        }

        return $this->render('SystemProjectBundle:BudgetCreation:createBudget.html.twig', array('form' => $form->createView(), 'message' => $message));
    }

}
