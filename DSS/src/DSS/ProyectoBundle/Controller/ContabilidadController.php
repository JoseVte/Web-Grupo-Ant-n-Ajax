<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DSS\ProyectoBundle\Controller;
use \Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ps\PdfBundle\Annotation\Pdf;


/**
 * Description of ContabilidadController
 *
 * @author pablo
 */
class ContabilidadController extends Controller {
    //put your code here
    public function indexAction($tabla){
        return $this->render('DSSProyectoBundle:Contabilidad:index.html.twig');
    }
    
    /**
     * @Pdf()
     */
    public function facturaAction(){
        $format = $this->get('request')->get('_format');

         return $this->render(sprintf('DSSProyectoBundle:Contabilidad:factura.%s.twig',$format));
    
    }
}
