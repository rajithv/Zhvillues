<?php

namespace System\ResourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewHRController extends Controller
{
    public function addAction()
    {
         return $this->render('SystemResourceBundle:Pages:addNewHR.html.twig');
    }

}
