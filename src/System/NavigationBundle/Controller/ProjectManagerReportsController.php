<?php

namespace System\NavigationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjectManagerReportsController extends Controller
{
    public function indexAction()
    {   
        return $this->render('SystemNavigationBundle:Default:ProjectManagerReportChoose.html.twig');
    }
}
