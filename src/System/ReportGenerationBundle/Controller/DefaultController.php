<?php

namespace System\ReportGenerationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SystemReportGenerationBundle:Default:index.html.twig', array('name' => $name));
    }
}
