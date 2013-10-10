<?php

namespace System\ResourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use System\ResourceBundle\Entity\Machinery;
use Symfony\Component\HttpFoundation\Request;


class AllocateMachineryController extends Controller{
    
    public function showAction(Request $request, $project)
    {
        $message = $request->get('message',null);
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT m FROM SystemResourceBundle:Machinery m WHERE m.project = :projectId '
            )->setParameter('projectId', $project);
        $allocatedProducts = $query->getResult();
            
        $machine = new Machinery();
        
        $form = $this->createFormBuilder($machine)
                ->add('code', 'text')
                ->add('Allocate', 'submit')
                ->add('Clear', 'submit')
                ->getForm();
                       
        $form->handleRequest($request); 
        
        if($form->isValid()){
            $machine=$form->getData();
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery(
            'SELECT m FROM SystemResourceBundle:Machinery m WHERE m.code = :tobesearched '
            )->setParameter('tobesearched', $machine->getCode());
            $products = $query->getResult();
            $machine->setName($products[0]->getName());
            
            $machine->setStatus('Allocate');
            $products[0]->setStatus('Allocate');
            //$product->setProject($message->get('projectId',null));
            $machine->setProject($project);
            $products[0]->setProject($project);
            $em->flush();
            $response = array('message' => "Machine ".$machine->getCode()." successfully.",);
            $data=$request->get('message',null).'\n'.$machine->getCode().':'.$machine->getName();
            return $this->render('SystemResourceBundle:Pages:allocateMachinery.html.twig', array('form' => $form->createView(), 'name'=>$data, 'Allocations'=>$allocatedProducts));
            
        }
       
         return $this->render('SystemResourceBundle:Pages:allocateMachinery.html.twig', array('form' => $form->createView(), 'name'=>$message, 'Allocations'=>$allocatedProducts));
        
    }
    
}

?>
