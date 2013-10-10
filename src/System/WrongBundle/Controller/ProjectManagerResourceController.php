<?php

namespace System\NavigationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjectManagerResourceController extends Controller
{
    public function indexAction()
    {   
        return $this->render('SystemNavigationBundle:Default:ProjectManagerResource.html.twig');
    }
}
