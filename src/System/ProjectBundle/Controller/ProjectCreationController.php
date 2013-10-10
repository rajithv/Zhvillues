<?php

namespace System\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjectCreationController extends Controller {

    public function createProjectAction() {

        $form = $this->createFormBuilder()
                ->add('projectID', 'text')
                ->add('client', 'text')
                ->add('manager', 'text')
                ->add('budget', 'text')
                ->add('listOfConsumable','text')
                ->add('listOfMachinery','text')
                ->add('listOfHR','text')
                ->add('listOfExpences','text')
                ->add('dateOfCompletion','date')
                ->add('status','textarea')
                ->add('create', 'submit')
                ->getForm();

        return $this->render('SystemProjectBundle:ProjectCreation:createProject.html.twig', array('form' => $form->createView()));
        //return $this ->render('SystemProjectBundle:ProjectCreation:createProject.html.twig');
    }

}
