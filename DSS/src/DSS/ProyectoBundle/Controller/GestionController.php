<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DSS\ProyectoBundle\Controller;

use \Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Symfony\Component\HttpFoundation\Response;

/**
 * Description of GestionController
 *
 * @author pablo
 */
class GestionController extends Controller {

    //put your code here
    public function indexAction($tabla) {
        $em = $this->getDoctrine()->getManager();

        $table = $em->getRepository('DSSProyectoBundle:' . ucwords($tabla))->findAll();
        $cabecera = $em->getClassMetadata('DSSProyectoBundle:' . ucwords($tabla))->getFieldNames();

        return $this->render('DSSProyectoBundle:Gestion:' . $tabla . '.html.twig', array('tabla' => $tabla, 'cabecera' => $cabecera, 'table' => $table));
    }

    public function crearAction($tabla) {
        $request = $this->getRequest();
        $tabla_object = '\DSS\ProyectoBundle\Entity\\' . ucwords($tabla);
        $form_object = '\DSS\ProyectoBundle\Form\\' . ucwords($tabla) . 'Type';
        $table = new $tabla_object();
        $form = $this->createForm(new $form_object, $table);
        if ($request->getMethod() == 'POST') {
            //-- Pasamos el request el método bindRequest() del objeto 
            //   formulario el cual obtiene los datos del formulario
            //   y los carga dentro del objeto Article que está contenido
            //   también dentro del objeto Type
            $form->submit($request);

            //-- Con esto nuestro formulario ya es capaz de decirnos si
            //   los dato son válidos o no y en caso de ser así
            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $tablaEN = $em->getRepository('DSSProyectoBundle:' . ucwords($tabla))->find($table->getNif());
                if ($tablaEN == null) {
                    if ($tabla == "usuario") {
                        $table->setPass(sha1($table->getPass()));
                    }
                    $em->persist($table);
                    $em->flush();
                    return $this->render('DSSProyectoBundle:Gestion:result.html.twig', array('mensaje' => 'Se ha creado correctamente'));
                } else {
                    return $this->render('DSSProyectoBundle:Gestion:crear.html.twig', array(
                                'form' => $form->createView(),
                                'tabla' => $tabla,
                                'mensaje_error' => "Ya estaba creado"
                    ));
                }
            }
        }

        return $this->render('DSSProyectoBundle:Gestion:crear.html.twig', array(
                    'form' => $form->createView(),
                    'tabla' => $tabla
        ));
    }

    public function modificarAction($tabla, $nif) {
        $request = $this->getRequest();

        $em = $this->getDoctrine()->getManager();

        $table = $em->getRepository('DSSProyectoBundle:' . ucwords($tabla))->find($nif);
        $form_object = '\DSS\ProyectoBundle\Form\\' . ucwords($tabla) . 'Type';

        $form = $this->createForm(new $form_object, $table);
        if ($request->getMethod() == 'POST') {
            $form->submit($request);

            if ($form->isValid()) {

                $em->persist($table);
                $em->flush();
                return $this->render('DSSProyectoBundle:Gestion:result.html.twig', array('mensaje' => 'Se ha modificado correctamente'));
            }
        }

        return $this->render('DSSProyectoBundle:Gestion:modificar.html.twig', array(
                    'form' => $form->createView(),
                    'tabla' => $tabla,
                    'nif' => $nif
        ));
    }

    public function eliminarAction($tabla, $nif) {

        $request = $this->getRequest();
        if ($request->query->has("confirmacion")) {
            $em = $this->getDoctrine()->getManager();

            $table = $em->getRepository('DSSProyectoBundle:' . ucwords($tabla))->find($nif);
            $em->remove($table);
            $em->flush();

            return $this->render('DSSProyectoBundle:Gestion:result.html.twig', array('mensaje' => 'Se ha eliminado correctamente'));
        } else {
            return $this->render('DSSProyectoBundle:Gestion:eliminar.html.twig', array('tabla' => $tabla, 'nif' => $nif));
        }
    }

    public function panelAction() {
        return $this->render('DSSProyectoBundle:Gestion:panel.html.twig');
    }

    public function modificarPassAction($tabla, $nif) {
        $request = $this->getRequest();

        $em = $this->getDoctrine()->getManager();

        $table = $em->getRepository('DSSProyectoBundle:' . ucwords($tabla))->find($nif);

        $form = $this->createFormBuilder()
                ->add('pass', 'password')
                ->add('passNuevo', 'password')
                ->add('passNuevo2', 'password')
                ->getForm();



        if ($request->getMethod() == 'POST') {
            $form->submit($request);
            
            if ($form->isValid()) {

                $passAnt = sha1($form->get('pass')->getData());
                
                $pass1 = $form->get('passNuevo')->getData();
                $pass2 = $form->get('passNuevo2')->getData();
                
                if (($pass1 == $pass2) && ($passAnt == $table->getPass())){
                    $table->setPass(sha1($pass1));

                    $em->persist($table);
                    $em->flush();
                    return $this->render('DSSProyectoBundle:Gestion:result.html.twig', array('mensaje' => 'Se ha modificado correctamente'));
                }
            }
            return $this->render('DSSProyectoBundle:Gestion:result.html.twig', array('mensaje' => 'Error'));
        }


        return $this->render('DSSProyectoBundle:Gestion:modificar_pass.html.twig', array(
                    'form' => $form->createView(),
                    'nif' => $nif
        ));
    }

    public function modificarEmailAction($tabla, $nif) {
        $request = $this->getRequest();

        $em = $this->getDoctrine()->getManager();

        $table = $em->getRepository('DSSProyectoBundle:' . ucwords($tabla))->find($nif);

        $form = $this->createFormBuilder()
                ->add('email', 'text')
                ->add('emailNuevo', 'text')
                ->add('emailNuevo2', 'text')
                ->getForm();



        if ($request->getMethod() == 'POST') {
            $form->submit($request);
            
            if ($form->isValid()) {

                $emailAnt = $form->get('email')->getData();
                
                $email1 = $form->get('emailNuevo')->getData();
                $email2 = $form->get('emailNuevo2')->getData();
                
                if (($email1 == $email2) && ($emailAnt == $table->getEmail())){
                    $table->setEmail($email1);

                    $em->persist($table);
                    $em->flush();
                    return $this->render('DSSProyectoBundle:Gestion:result.html.twig', array('mensaje' => 'Se ha modificado correctamente'));
                }
                
            }
            return $this->render('DSSProyectoBundle:Gestion:result.html.twig', array('mensaje' => 'Error'));
        }


        return $this->render('DSSProyectoBundle:Gestion:modificar_email.html.twig', array(
                    'form' => $form->createView(),
                    'nif' => $nif
        ));
    }
}
