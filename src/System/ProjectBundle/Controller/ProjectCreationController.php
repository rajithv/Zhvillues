<?php

namespace System\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjectCreationController extends Controller {

    public function createProjectAction() {

        $form = $this->createFormBuilder()
                ->add('Project_Code', 'text')
                ->add('Client', 'text')
                ->add('Manager', 'text')
                ->add('Budget', 'text')
                ->add('List_of_Consumable','text')
                ->add('List_of_Machinery','text')
                ->add('List_of_Human_Resources','text')
                ->add('List_of_Actual_Expences','text')
                ->add('Date_of_Completion','date')
                ->add('Status','textarea')
                ->add('create', 'submit')
                ->getForm();

        return $this->render('SystemProjectBundle:ProjectCreation:createProject.html.twig', array('form' => $form->createView()));
        //return $this ->render('SystemProjectBundle:ProjectCreation:createProject.html.twig');
    }

}
