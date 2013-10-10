<?php

namespace System\NavigationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SystemNavigationBundle:Default:index.html.twig', array('name' => $name));
    }
}
