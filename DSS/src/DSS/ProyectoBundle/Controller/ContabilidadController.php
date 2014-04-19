<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DSS\ProyectoBundle\Controller;
use \Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DSS\ProyectoBundle\Entity\Usuario;
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
        $pedido_id = $this->get('request')->get('pedido');
        
        $usuario=$this->get('security.context')->getToken()->getUser();
        
        $em = $this->getDoctrine()->getManager();

        $query_facturas = $em->createQuery(
            'SELECT f
            FROM DSSProyectoBundle:Factura f
            JOIN DSSProyectoBundle:Pedido p
            WHERE p.id=f.id
            '
);//->setParameter('nif', $usuario->getNif());

$facturas = $query_facturas->getResult();

        $query_proveedor = $em->createQuery(
            'SELECT p
            FROM DSSProyectoBundle:Proveedor p
            JOIN DSSProyectoBundle:Pedido pedido
            WHERE pedido.proveedorNIF=p.NIF AND
            pedido.id= :id
            '
        )->setParameter('id',$pedido_id);
        
     $proveedor=$query_proveedor->getResult();
     
      $query_servicios = $em->createQuery(
            'SELECT s
            FROM DSSProyectoBundle:Servicio s
            JOIN DSSProyectoBundle:LineaServicio ls
            WHERE s.id=ls.servicioIdServicio AND
            ls.pedidoIdentificador = :id
            '
        )->setParameter('id',$pedido_id);
        
     $servicios=$query_servicios->getResult();

       
         return $this->render(sprintf('DSSProyectoBundle:Contabilidad:factura.%s.twig',$format),array(
                    // last username entered by the user
                    'usuario' => $usuario,
             'facturas'=>$facturas,
                    'proveedor'=> $proveedor,
                 'servicios'=>$servicios
                        ));
    
    }
}
