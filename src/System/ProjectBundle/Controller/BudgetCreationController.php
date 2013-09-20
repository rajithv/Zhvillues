<?php

namespace System\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BudgetCreationController extends Controller
{
    public function createBudgetAction()
    {
        $form = $this->createFormBuilder()
                ->add('Machinery_Cost', 'text')
                ->add('Consumable_Cost', 'text')
                ->add('Human_Resource_Cost', 'text')
                ->add('Time_Estimate_in_Months', 'integer')
                ->add('Variation_Precentage','percent')
                ->getForm();

        return $this->render('SystemProjectBundle:BudgetCreation:createBudget.html.twig', array('form' => $form->createView(),));
    }

}
