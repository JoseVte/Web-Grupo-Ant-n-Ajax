<?php

namespace DSS\ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DSSProyectoBundle:Default:index.html.twig');
    }
    
    public function infoAction(){
        return $this->render('DSSProyectoBundle:Default:info.html.twig');
    }
}
