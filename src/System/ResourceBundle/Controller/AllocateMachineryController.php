<?php

namespace System\ResourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use System\ResourceBundle\Entity\Machinery;
use System\ResourceBundle\Entity\Consumable;
use System\ResourceBundle\Entity\HR;
use Symfony\Component\HttpFoundation\Request;


class AllocateMachineryController extends Controller{
    
    public function showAction(Request $request, $project)
    {
        $message = $request->get('message',null);
        $em = $this->getDoctrine()->getManager();
        
        // init machinery
        $query = $em->createQuery(
            'SELECT m FROM SystemResourceBundle:Machinery m WHERE m.project = :projectId '
            )->setParameter('projectId', $project);
        $p = $query->getResult();
              
        $allocatedMachines=array();
        foreach ($p as $Machinery){
            array_push( $allocatedMachines, $Machinery->getName());
        }  
        $machine = new Machinery();
        
        $Mform = $this->createFormBuilder($machine)
                ->add('code', 'text')
                ->add('Allocate', 'submit')
                ->add('Clear', 'submit')
                ->getForm();
                       
        $Mform->handleRequest($request); 
        //end init Machinery
        
        //init HR
        $query = $em->createQuery(
                'SELECT h FROM SystemResourceBundle:HR h WHERE h.project = :projectId '
                )->setParameter('projectId', $project);
            $p = $query->getResult();

            $allocatedHR=array();
            foreach ($p as $HR){
                array_push( $allocatedHR, $HR->getName());
            }  
            $hr = new HR();

            $Hform = $this->createFormBuilder($hr)
                    ->add('code', 'text')
                    ->add('Allocate', 'submit')
                    ->add('Clear', 'submit')
                    ->getForm();

            $Hform->handleRequest($request); 
        //end init HR
        
        //init consumables
            $con = new Consumable();

            $Cform = $this->createFormBuilder($con)
                    ->add('name', 'text')
                    ->add('quantity','integer')
                    ->add('Allocate', 'submit')
                    ->add('Clear', 'submit')
                    ->getForm();

            $Cform->handleRequest($request); 
        //end init consumables
       
            
        //Consumable submition
        if($Cform->isValid()){
            $con=$Cform->getData();
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery(
            'SELECT c FROM SystemResourceBundle:Consumable c WHERE c.name = :tobesearched' 
            )->setParameter('tobesearched', $con->getName());
            $cProducts = $query->getResult();
            if(count($cProducts)<1 ){
                $response = array('message' => "Consumable ".$con->getName()." cannot be found.",);
            }elseif($cProducts[0]->getQuantity()< $con->getQuantity()){
                $response = array('message' => "Stock insufficient",);
            }else{
                $q=$cProducts[0]->getQuantity()- $con->getQuantity();
                $con->setQuantity($q);
                $cProducts[0]->setQuantity($q);
                $em->flush();
            $response = array('message' => "Consumables ".$con->getName()." added successfully.",);
            }
            return $this->render('SystemResourceBundle:Pages:allocateMachinery.html.twig', array('Mform' => $Mform->createView(),'MAllocations'=>$allocatedMachines,'Hform' => $Hform->createView(),'Hallocations'=>$allocatedHR,'Cform' => $Cform->createView()));
        }
            //end consumable submition
            
        //Machinery submition
        if($Mform->isValid()){
            $machine=$Mform->getData();
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery(
                'SELECT m FROM SystemResourceBundle:Machinery m WHERE m.code = :tobesearched' 
                )->setParameter('tobesearched', $machine->getCode());
                $mProducts = $query->getResult();
                if(count($mProducts)<1 ){
                    $response = array('message' => "Machinery ".$machine->getCode()." cannot be found.",);
                }elseif(strcmp($mProducts[0]->getStatus(),"Available")!=0){          
                    $response = array('message' => "Machine ".$machine->getCode()." is not available for Allocation.",);
                }else{
                    $machine->setName($mProducts[0]->getName());
                    $machine->setStatus("Available");
                    $mProducts[0]->setStatus("Available");
                    $machine->setProject($project);
                    $mProducts[0]->setProject($project);
                    $em->flush();
                    $response = array('message' => "Machine ".$machine->getCode()." added successfully.",);
                }
            return $this->render('SystemResourceBundle:Pages:allocateMachinery.html.twig', array('Mform' => $Mform->createView(),'MAllocations'=>$allocatedMachines,'Hform' => $Hform->createView(),'Hallocations'=>$allocatedHR,'Cform' => $Cform->createView()));
        }
            //end machinery submition
        
            //start HR submition
           if($Hform->isValid()){
                $hr=$Hform->getData();
                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery(
                'SELECT h FROM SystemResourceBundle:HR h WHERE h.code = :tobesearched' 
                )->setParameter('tobesearched', $hr->getCode());
                $hProducts = $query->getResult();
                if(count($hProducts)<1 ){
                    $response = array('message' => "HR ".$hr->getCode()." cannot be found.",);
                }elseif(strcmp($hProducts[0]->getProject(),'HO')!=0){           //HO-head office
                    $response = array('message' => "HR ".$hr->getCode()." is not available for Allocation.",);
                }else{
                    $hr->setName($hProducts[0]->getName());
                    $hr->setProject($project);
                    $hProducts[0]->setProject($project);
                    $em->flush();
                    $response = array('message' => "HR ".$hr->getCode()." added successfully.",);
                }
           return $this->render('SystemResourceBundle:Pages:allocateMachinery.html.twig', array('Mform' => $Mform->createView(),'MAllocations'=>$allocatedMachines,'Hform' => $Hform->createView(),'Hallocations'=>$allocatedHR,'Cform' => $Cform->createView()));
           //end HR submition
            
        }
       
         return $this->render('SystemResourceBundle:Pages:allocateMachinery.html.twig', array('Mform' => $Mform->createView(),'MAllocations'=>$allocatedMachines,'Hform' => $Hform->createView(),'Hallocations'=>$allocatedHR,'Cform' => $Cform->createView()));
        
    }
    
}

?>