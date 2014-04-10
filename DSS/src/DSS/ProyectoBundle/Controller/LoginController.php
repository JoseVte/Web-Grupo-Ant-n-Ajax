<?php

namespace DSS\ProyectoBundle\Controller;

use \Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\Security\Core\SecurityContext;

class LoginController extends Controller {

    /**
     * 
     * 
     */
    public function loginAction(Request $request) {
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                    SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render(
                        'DSSProyectoBundle:Login:login.html.twig', array(
                    // last username entered by the user
                    'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                    'error' => $error,
                        )
        );
    }

    /**
     * 
     *
     */
    public function registroAction() {
        $tabla='usuario';
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

                $em = $this->getDoctrine()->getEntityManager();
                $tablaEN = $em->getRepository('DSSProyectoBundle:' . ucwords($tabla))->find($table->getNif());
                if ($tablaEN == null) {
                    
                    $table->setPass(sha1($table->getPass()));
                    
                    $em->persist($table);
                    $em->flush();
                               return $this->render('DSSProyectoBundle:Gestion:result.html.twig', array('mensaje'=>'Se ha creado correctamente'));

                } else {
                    return $this->render('DSSProyectoBundle:Login:registro.html.twig', array(
                                'form' => $form->createView(),
                                'tabla' => $tabla,
                                'mensaje_error' => "Ya estaba creado"
                    ));
                }
            }
        }

        return $this->render('DSSProyectoBundle:Login:registro.html.twig', array(
                    'form' => $form->createView(),
                    'tabla' => $tabla
        ));
    }

}
