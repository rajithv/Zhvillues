<?php

namespace System\ResourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewMachineryController extends Controller
{
    public function addAction()
    {
         return $this->render('SystemResourceBundle:Pages:addNewMachinery.html.twig');
    }

}
