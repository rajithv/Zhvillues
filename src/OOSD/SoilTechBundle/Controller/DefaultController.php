<?php

namespace OOSD\SoilTechBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OOSDSoilTechBundle:Default:index.html.twig', array('name' => $name));
    }
    
    /*public function newMachineryAction($name)
    {
        
        return $this->render($view);
    }*/

}
