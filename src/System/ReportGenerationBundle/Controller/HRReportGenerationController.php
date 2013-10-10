<?php
/*
 * Author Sachith
 * This will generate a new HR Report.
 */
namespace System\ReportGenerationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use System\ResourceBundle\Entity\HR;
use Symfony\Component\HttpFoundation\Request;

class HRReportGenerationController extends Controller
{
    public function addAction(Request $request)
    {
        $message = $request->get('message', null);
        
        $hr = new HR();
        
        $form = $this->createFormBuilder($hr)
                ->add('code', 'text')
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
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery(
            'SELECT h FROM SystemResourceBundle:HR h WHERE h.code = :tobesearched'
            )->setParameter('tobesearched', $hr->getCode());
            $products = $query->getResult();
            //$em->persist($hr);
            //$em->flush();
            //{$products->$code}
            //search for 3rfas
            //echo get_class($products[0]);
            //$hr = $products[0];
            $hr->setName($products[0]->getName());
            $response = array('message' => "New Human Resource added successfully.",);
            $data = $hr->getProject();
            return $this->render('SystemReportGenerationBundle:Pages:NewHRReport.html.twig', 
                    array('form' => $form->createView(),
                    'code'=>$products[0]->getCode(),
                    'name'=>$products[0]->getName(),
                    'project'=>$products[0]->getProject(),
                    'department'=>$products[0]->getDepartment()));
            //return $this->redirect($this->generateUrl('add', $response));
        }
       
         return $this->render('SystemReportGenerationBundle:Pages:addNewHRReport.html.twig', array('form' => $form->createView(), 'name'=>$message));
    }

}
