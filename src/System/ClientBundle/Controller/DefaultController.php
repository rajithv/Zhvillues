<?php

namespace System\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SystemClientBundle:Default:index.html.twig', array('name' => $name));
    }
}
