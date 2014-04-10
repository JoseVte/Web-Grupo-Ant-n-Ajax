<?php

namespace DSS\ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ErrorController extends Controller
{
    /**
     * 
     * 
     */
    public function denegadoAction()
    {
        return $this->render("DSSProyectoBundle:Error:denegado.html.twig");
    }

}
