<?php

namespace OOSD\SoilTechBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OOSD\SoilTechBundle\Entity\Machinery;

class PageController extends Controller
{
    public function newMachineryAction($name)
    {
        $test = new Machinery();
        $test->setName($name);
        $test->setCapacity(20);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($test);
        $em->flush();
        
        return $this->render('OOSDSoilTechBundle:Page:newMachinery.html.twig', array('id' => $test->getId()));

    }

}
