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
     
     $query_cliente = $em->createQuery(
            'SELECT c
            FROM DSSProyectoBundle:Cliente c
            JOIN DSSProyectoBundle:Pedido pedido
            WHERE pedido.clienteNIF=c.NIF AND
            pedido.id= :id
            '
        )->setParameter('id',$pedido_id);
        
     $cliente=$query_cliente->getResult();
     
      $query_servicios = $em->createQuery(
            'SELECT s
            FROM DSSProyectoBundle:Servicio s
            JOIN DSSProyectoBundle:LineaServicio ls
            WHERE s.id=ls.servicioIdServicio AND
            ls.pedidoIdentificador = :id
            '
        )->setParameter('id',$pedido_id);
        
     $servicios=$query_servicios->getResult();
     
     $total = 0;
        foreach ($servicios as $servicio) {
            $total += $servicio->getPrecio();
        }
        
    
    
    $iva= 5;
    
    $total_iva=$total+$total*$iva/100;
     

       
         return $this->render(sprintf('DSSProyectoBundle:Contabilidad:factura.%s.twig',$format),array(
                    // last username entered by the user
                    'cliente' => $cliente,
             'facturas'=>$facturas,
                    'proveedor'=> $proveedor,
                 'servicios'=>$servicios,
             'total'=>$total,
             'iva'=>$iva,
             'total_iva'=>$total_iva
                        ));
    
    }
}
