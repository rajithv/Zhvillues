<?php

namespace System\ResourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SystemResourceBundle:Default:index.html.twig', array('name' => $name));
    }
}
