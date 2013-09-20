<?php

namespace System\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AddClientController extends Controller
{
    public function addAction()
    {
       return $this->render('SystemClientBundle:Pages:addClient.html.twig');
       

    }

}
