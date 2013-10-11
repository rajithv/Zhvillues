<?php

namespace System\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use System\ProjectBundle\Entity\Project;
class ProjectCreationController extends Controller {

    public function createProjectAction(Request $request) {

        $message = $request->get('message', null);
        $project = new Project();
        
        $form = $this->createFormBuilder($project)
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

        $form->handleRequest($request);
        
       if (isset($_POST['form_Submit'])) { 
           $project = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($project);
            $em->flush();

            $response = array('message' => "New Project Created Successfully");

            return $this->redirect($this->generateUrl('create_project', $response));
            
        } else if (isset($_POST['form_reset'])) { 
             return $this->render('SystemProjectBundle:ProjectCreation:createProject.html.twig', array('form' => $form->createView(), 'message' => $message));
        }
        
        
        if ($form->isValid()) {
            $project = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($project);
            $em->flush();

            $response = array('message' => "New Project Created Successfully");

            return $this->redirect($this->generateUrl('create_project', $response));
        }

        return $this->render('SystemProjectBundle:ProjectCreation:createProject.html.twig', array('form' => $form->createView(), 'message' => $message));


        //return $this->render('SystemProjectBundle:ProjectCreation:createProject.html.twig', array('form' => $form->createView()));
        //return $this ->render('SystemProjectBundle:ProjectCreation:createProject.html.twig');
    }

}
