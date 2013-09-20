<?php

namespace System\ResourceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewConsumableController extends Controller
{
    public function addAction()
    {
        return $this->render('SystemResourceBundle:Pages:addNewConsumable.html.twig');
    }
}
