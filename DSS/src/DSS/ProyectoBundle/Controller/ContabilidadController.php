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
    public function indexAction($tabla) {
        return $this->render('DSSProyectoBundle:Contabilidad:index.html.twig');
    }

    /**
     * @Pdf()
     */
    public function facturaAction() {
        $format = $this->get('request')->get('_format');
        $pedido_id = $this->get('request')->get('pedido');



        $em = $this->getDoctrine()->getManager();

        $query_facturas = $em->createQuery(
                'SELECT f
            FROM DSSProyectoBundle:Factura f
            JOIN DSSProyectoBundle:Pedido p
            WHERE p.id=f.id
            '
        ); //->setParameter('nif', $usuario->getNif());

        $facturas = $query_facturas->getResult();

        $query_proveedor = $em->createQuery(
                        'SELECT p
            FROM DSSProyectoBundle:Proveedor p
            JOIN DSSProyectoBundle:Pedido pedido
            WHERE pedido.proveedorNIF=p.NIF AND
            pedido.id= :id
            '
                )->setParameter('id', $pedido_id);

        $proveedor = $query_proveedor->getResult();

        $query_cliente = $em->createQuery(
                        'SELECT c
            FROM DSSProyectoBundle:Cliente c
            JOIN DSSProyectoBundle:Pedido pedido
            WHERE pedido.clienteNIF=c.NIF AND
            pedido.id= :id
            '
                )->setParameter('id', $pedido_id);

        $cliente = $query_cliente->getResult();

        $query_servicios = $em->createQuery(
                        'SELECT s
            FROM DSSProyectoBundle:Servicio s
            JOIN DSSProyectoBundle:LineaServicio ls
            WHERE s.id=ls.servicioIdServicio AND
            ls.pedidoIdentificador = :id
            '
                )->setParameter('id', $pedido_id);

        $servicios = $query_servicios->getResult();

        $total = 0;
        foreach ($servicios as $servicio) {
            $total += $servicio->getPrecio();
        }



        $iva = 21;

        $total_iva = $total + $total * $iva / 100;



        return $this->render(sprintf('DSSProyectoBundle:Contabilidad:factura.%s.twig', $format), array(
                    // last username entered by the user
                    'cliente' => $cliente,
                    'facturas' => $facturas,
                    'proveedor' => $proveedor,
                    'servicios' => $servicios,
                    'total' => $total,
                    'iva' => $iva,
                    'total_iva' => $total_iva
        ));
    }

    public function pedidoAction() {
        $request = $this->getRequest();

        $em = $this->getDoctrine()->getManager();

        $pedidos = $em->createQuery('SELECT pe.id,p.nombre proveedor,c.nombre cliente
            FROM DSSProyectoBundle:Pedido pe,
            DSSProyectoBundle:Cliente c,
            DSSProyectoBundle:Proveedor p
            WHERE pe.proveedorNIF = p.NIF
            AND pe.clienteNIF = c.NIF
            ')->getResult();


        return $this->render('DSSProyectoBundle:Contabilidad:pedido.html.twig', array(
                    'listado' => $pedidos
        ));
    }

    function detallesAction($id) {
        $em = $this->getDoctrine()->getManager();

        $servicios = $em->createQuery('SELECT s.nombre,s.descripcion,((s.precio*i.valor/100)+s.precio) precioIva
            FROM DSSProyectoBundle:LineaServicio ls,
            DSSProyectoBundle:Servicio s,
            DSSProyectoBundle:IVA i
            WHERE s.id=ls.servicioIdServicio AND
            ls.pedidoIdentificador = :id AND i.id=s.iva
            ')->setParameter('id', $id)->getResult();

        return $this->render('DSSProyectoBundle:Contabilidad:listar.html.twig', array('servicios' => $servicios));
    }

    function crearAction() {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();

        $servicios = $em->createQuery('SELECT s,i.valor FROM DSSProyectoBundle:Servicio s 
                JOIN DSSProyectoBundle:IVA i
                WHERE i.id=s.iva')->getResult();

        $clientes = $em->getRepository('DSSProyectoBundle:Cliente')->findAll();
        $clienteArray = array('empty_value' => 'Elige el cliente');

        foreach ($clientes as $cliente) {
            $clienteArray[$cliente->getNIF()] = $cliente->getNombre();
        }

        $proveedores = $em->getRepository('DSSProyectoBundle:Proveedor')->findAll();
        $proveedorArray = array('empty_value' => 'Elige el proveedor');

        foreach ($proveedores as $proveedor) {
            $proveedorArray[$proveedor->getNIF()] = $proveedor->getNombre();
        }

        $form = $this->createFormBuilder();

        foreach ($servicios as $servicio) {
            $total = $servicio[0]->getPrecio() + ($servicio["valor"] * $servicio[0]->getPrecio() / 100 );

            $form->add($servicio[0]->getId(), 'checkbox', array(
                'label' => $servicio[0] . ': ' . $total . '€',
                'value' => $servicio[0]->getId(),
                'required' => false
            ));
        }

        $form->add('cliente', 'choice', array(
            'choices' => $clienteArray,
            'required' => true,
            'label_attr' => array('class' => 'elegir')
        ));

        $form->add('proveedor', 'choice', array(
            'choices' => $proveedorArray,
            'required' => true,
            'label_attr' => array('class' => 'elegir')
        ));
        
        $form_f = $form->getForm();

        if ($request->getMethod() == 'POST') {
            $form_f->submit($request);
            
            //Guardar pedido
            //Calcular numero del pedido
            $conn= $this->getDoctrine()->getConnection();
            $stm=$conn->prepare('INSERT INTO Pedido (Proveedor_NIF,Cliente_NIF) values (:p,:c)');
            $stm->bindValue('p',$form_f->getData()['proveedor']);
            $stm->bindValue('c',$form_f->getData()['cliente']);
            $stm->execute();
            
            $num_ped = $conn->lastInsertId();
            
            foreach (array_keys($form_f->getData()) as $key) {
                if(is_int($key)){
                    if($form_f->getData()[$key]){
                        $stm_t=$conn->prepare('INSERT INTO LineaServicio (Servicio_idServicio,Pedido_Identificador) values (:s,:p)');
                        $stm_t->bindValue('s',$key);
                        $stm_t->bindValue('p',$num_ped);
                        
                        $stm_t->execute();
                    }
                }
            }
            
            $stm_p = $conn->prepare('INSERT INTO Factura (Pedido_Identificador) values (:p)');
            $stm_p->bindValue('p',$num_ped);
            $stm_p->execute();

            return $this->render('DSSProyectoBundle:Gestion:result.html.twig', array('mensaje' => 'Se ha creado correctamente'));
        }

        return $this->render('DSSProyectoBundle:Contabilidad:crear.html.twig', array('form' => $form_f->createView()));
    }

}
