<?php

namespace OOSD\SoilTechBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller
{
  public function aboutUsAction(){
      
      return $this->render('OOSDSoilTechBundle:Page:aboutUs.html.twig');
  }
 
}
