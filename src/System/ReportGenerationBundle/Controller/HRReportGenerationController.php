<?php
/*
 * Author Sachith
 * This will generate a new HR Report.
 */
namespace System\ReportGenerationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use System\ResourceBundle\Entity\HR;
use Symfony\Component\HttpFoundation\Request;
use System\TrackingBundle\Entity\Expence;
use System\ProjectBundle\Entity\Budget;

class HRReportGenerationController extends Controller
{
    public function addAction(Request $request)
    {
        $message = $request->get('message', null);
        $hr = new HR();
        $budget = new Budget();
        $expence = new Expence();
        $form = $this->createFormBuilder($hr)
                ->add('Project', 'text')
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
            $hr=$form->getData();
            $proj = $hr->getProject();
            $budget->setProjectID($proj);
            $expence->setProjectID($budget->getProjectID());
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery(
            //'SELECT h FROM SystemResourceBundle:HR h WHERE h.code = :tobesearched'
            'SELECT h FROM SystemResourceBundle:HR h WHERE h.project = :tobesearched'
            )->setParameter('tobesearched', $hr->getProject());
            $products = $query->getResult();
            $totalhrcost=0;
            $workedhours = array(0=>7,1=>8,2=>9);
            for ( $i=0;$i<sizeof($products);$i=$i+1){
                $totalhrcost = $totalhrcost + $products[$i]->getRateHour()*$workedhours[$i%3];
            }
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
            //echo(sizeof($budgetproducts));
            //$workedhours = array(0=>7,1=>8,2=>9);
            for ( $i=0;$i<sizeof($expenceproducts);$i=$i+1){
                $totalexpencehrcost = $totalexpencehrcost + $expenceproducts[$i]->gethrCost();
                $totalexpencemachinerycost = $totalexpencemachinerycost + $expenceproducts[$i]->getmachineryCost();
                $totalexpenceconsumablecost = $totalexpenceconsumablecost + $expenceproducts[$i]->getconsumableCost();
            }
            $totalhrcost = $totalhrcost*30*$budgetproducts[0]->getTimeEstimate();
            //$totalexpectedconsumablecost=$budgetproducts[0]->getconsumableCost();
            //$totalexpectedmachinerycost=$budgetproducts[0]->getmachineryCost();
            $totalexpectedhrcost=$budgetproducts[0]->gethrCost();
            $hr->setName($products[0]->getName());
            $response = array('message' => "New Human Resource added successfully.",);
            $data = $hr->getProject();
            $sentdata = array('form' => $form->createView(),
                    'totalhrcost'=>$totalhrcost,
                    'totalexpectedhrcost'=>$totalexpectedhrcost,
                    'totalexpencehrcost'=>$totalexpencehrcost,
                    'project'=>$products[0]->getProject(),
                    );
            return $this->render('SystemReportGenerationBundle:Pages:NewHRReport.html.twig', $sentdata);
            //return $this->redirect($this->generateUrl('add', $response));
        }
       
         return $this->render('SystemReportGenerationBundle:Pages:addNewHRReport.html.twig', array('form' => $form->createView(), 'name'=>$message));
    }

}
