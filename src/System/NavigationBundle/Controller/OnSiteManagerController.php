<?php

namespace System\NavigationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OnSiteManagerController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SystemNavigationBundle:Default:OnSiteManagerHome.html.twig', array('name' => $name));
    }
}
