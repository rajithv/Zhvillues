<?php
/*
 * Author Sachith
 * This will generate a new HR Report.
 */
namespace System\ReportGenerationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use System\TrackingBundle\Entity\Expence;
use System\ProjectBundle\Entity\Budget;
use Symfony\Component\HttpFoundation\Request;

class SummaryProfitandLossReportGenerationController extends Controller
{
    public function addAction(Request $request)
    {
        $message = $request->get('message', null);
        $budget = new Budget();
        $expence = new Expence();
        
        $form = $this->createFormBuilder($budget)
                ->add('ProjectID', 'text')
                ->add('load', 'submit')
                ->add('clear', 'submit')
                ->getForm();
                       
        $form->handleRequest($request); 
        
        if($form->isValid()){
            /*
            $hr=$form->getData();
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery(
            //'SELECT p FROM hr:Product p WHERE p.code = :code'
            'SELECT name FROM hr WHERE code = :tosearch'
            )->setParameter('tosearch', $hr->getCode());
            $products = $query->getResult(); */
            $budget=$form->getData();
            $expence->setProjectID($budget->getProjectID());
            $em = $this->getDoctrine()->getManager();
            //'SELECT h FROM SystemResourceBundle:HR h WHERE h.code = :tobesearched'
            $budgetquery = $em->createQuery(
            'SELECT h FROM SystemProjectBundle:Budget h WHERE h.projectID = :tobesearched'
            )->setParameter('tobesearched', $budget->getProjectID());
            $budgetproducts = $budgetquery->getResult();
            $expencequery = $em->createQuery(
            'SELECT h FROM SystemTrackingBundle:Expence h WHERE h.projectID = :tobesearched'
            )->setParameter('tobesearched', $expence->getProjectID());
            $expenceproducts = $expencequery->getResult();
            $totalexpenceconsumablecost=0;
            $totalexpencemachinerycost=0;
            $totalexpencehrcost=0;
            //$workedhours = array(0=>7,1=>8,2=>9);
            for ( $i=0;$i<sizeof($expenceproducts);$i=$i+1){
                $totalexpencehrcost = $totalexpencehrcost + $expenceproducts[$i]->gethrCost();
                $totalexpencemachinerycost = $totalexpencemachinerycost + $expenceproducts[$i]->getmachineryCost();
                $totalexpenceconsumablecost = $totalexpenceconsumablecost + $expenceproducts[$i]->getconsumableCost();
            }
            $totalexpectedconsumablecost=$budgetproducts[0]->getconsumableCost();
            $totalexpectedmachinerycost=$budgetproducts[0]->getmachineryCost();
            $totalexpectedhrcost=$budgetproducts[0]->gethrCost();
            
            //$em->persist($hr);
            //$em->flush();
            //{$products->$code}
            //search for 3rfas
            //echo get_class($products[0]);
            //$hr = $products[0];
            //$hr->setName($products[0]->getName());
            $response = array('message' => "New Human Resource added successfully.");
            //$data = $hr->getProject();
            $sentdata = array('form' => $form->createView(),
                    'projectid'=>$budget->getProjectID(),
                    'totalexpencehrcost'=>$totalexpencehrcost,
                    'totalexpencemachinerycost'=>$totalexpencemachinerycost,
                    'totalexpenceconsumablecost'=>$totalexpenceconsumablecost,
                    'totalexpectedhrcost'=>$totalexpectedhrcost,
                    'totalexpectedconsumablecost'=>$totalexpectedconsumablecost,
                    'totalexpectedmachinerycost'=>$totalexpectedmachinerycost);
            return $this->render('SystemReportGenerationBundle:Pages:newPLReport.html.twig', $sentdata);
            //return $this->redirect($this->generateUrl('add', $response));
        }
       
         return $this->render('SystemReportGenerationBundle:Pages:addNewHRReport.html.twig', array('form' => $form->createView(), 'name'=>$message));
    }

}
