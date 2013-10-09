<?php

namespace System\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function HomeAction()
    {
        return $this->render('SystemTestBundle:Home:Home.html.twig', array('name' => 'Test Page'));
    }

}
