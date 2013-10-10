<?php

namespace System\NavigationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjectManagerController extends Controller
{
    public function indexAction($name)
    {   
        return $this->render('SystemNavigationBundle:Default:ProjectManagerHome.html.twig', array('name' => $name));
    }
}
