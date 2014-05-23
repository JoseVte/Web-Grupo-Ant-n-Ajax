<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // dss_proyecto_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dss_proyecto_homepage');
            }

            return array (  '_controller' => 'DSS\\ProyectoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'dss_proyecto_homepage',);
        }

        // dss_proyecto_info
        if ($pathinfo === '/info') {
            return array (  '_controller' => 'DSS\\ProyectoBundle\\Controller\\DefaultController::infoAction',  '_route' => 'dss_proyecto_info',);
        }

        // dss_proyecto_contabilidad_factura
        if (0 === strpos($pathinfo, '/contabilidad/factura') && preg_match('#^/contabilidad/factura/(?P<_format>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dss_proyecto_contabilidad_factura')), array (  '_controller' => 'DSS\\ProyectoBundle\\Controller\\ContabilidadController::facturaAction',));
        }

        if (0 === strpos($pathinfo, '/gestion')) {
            // dss_proyecto_gestion_listar
            if (0 === strpos($pathinfo, '/gestion/listar') && preg_match('#^/gestion/listar/(?P<tabla>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dss_proyecto_gestion_listar')), array (  '_controller' => 'DSS\\ProyectoBundle\\Controller\\GestionController::indexAction',));
            }

            // dss_proyecto_gestion_crear
            if (0 === strpos($pathinfo, '/gestion/crear') && preg_match('#^/gestion/crear/(?P<tabla>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dss_proyecto_gestion_crear')), array (  '_controller' => 'DSS\\ProyectoBundle\\Controller\\GestionController::crearAction',));
            }

            // dss_proyecto_gestion_modificar
            if (0 === strpos($pathinfo, '/gestion/modificar') && preg_match('#^/gestion/modificar/(?P<tabla>[^/]++)/(?P<nif>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dss_proyecto_gestion_modificar')), array (  '_controller' => 'DSS\\ProyectoBundle\\Controller\\GestionController::modificarAction',));
            }

            // dss_proyecto_gestion_eliminar
            if (0 === strpos($pathinfo, '/gestion/eliminar') && preg_match('#^/gestion/eliminar/(?P<tabla>[^/]++)/(?P<nif>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dss_proyecto_gestion_eliminar')), array (  '_controller' => 'DSS\\ProyectoBundle\\Controller\\GestionController::eliminarAction',));
            }

        }

        if (0 === strpos($pathinfo, '/registro/log')) {
            if (0 === strpos($pathinfo, '/registro/login')) {
                // dss_proyecto_login
                if ($pathinfo === '/registro/login') {
                    return array (  '_controller' => 'DSS\\ProyectoBundle\\Controller\\LoginController::loginAction',  '_route' => 'dss_proyecto_login',);
                }

                // dss_proyecto_login_check
                if ($pathinfo === '/registro/login_check') {
                    return array('_route' => 'dss_proyecto_login_check');
                }

            }

            // dss_proyecto_logout
            if ($pathinfo === '/registro/logout') {
                return array('_route' => 'dss_proyecto_logout');
            }

        }

        // dss_proyecto_panel_control
        if ($pathinfo === '/gestion/panelControl') {
            return array (  '_controller' => 'DSS\\ProyectoBundle\\Controller\\GestionController::panelAction',  '_route' => 'dss_proyecto_panel_control',);
        }

        // dss_proyecto_registro
        if ($pathinfo === '/registro/registro') {
            return array (  '_controller' => 'DSS\\ProyectoBundle\\Controller\\LoginController::registroAction',  '_route' => 'dss_proyecto_registro',);
        }

        // dss_proyecto_denegado
        if ($pathinfo === '/error403') {
            return array (  '_controller' => 'DSS\\ProyectoBundle\\Controller\\ErrorController::denegadoAction',  '_route' => 'dss_proyecto_denegado',);
        }

        if (0 === strpos($pathinfo, '/gestion/modificar_')) {
            // dss_proyecto_modificar_pass
            if (0 === strpos($pathinfo, '/gestion/modificar_pass') && preg_match('#^/gestion/modificar_pass/(?P<tabla>[^/]++)/(?P<nif>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dss_proyecto_modificar_pass')), array (  '_controller' => 'DSS\\ProyectoBundle\\Controller\\GestionController::modificarPassAction',));
            }

            // dss_proyecto_modificar_email
            if (0 === strpos($pathinfo, '/gestion/modificar_email') && preg_match('#^/gestion/modificar_email/(?P<tabla>[^/]++)/(?P<nif>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dss_proyecto_modificar_email')), array (  '_controller' => 'DSS\\ProyectoBundle\\Controller\\GestionController::modificarEmailAction',));
            }

        }

        if (0 === strpos($pathinfo, '/contabilidad')) {
            // dss_proyecto_contabilidad_pedido
            if ($pathinfo === '/contabilidad/pedido') {
                return array (  '_controller' => 'DSS\\ProyectoBundle\\Controller\\ContabilidadController::pedidoAction',  '_route' => 'dss_proyecto_contabilidad_pedido',);
            }

            // dss_proyecto_contabilidad_detalles
            if (0 === strpos($pathinfo, '/contabilidad/detalles') && preg_match('#^/contabilidad/detalles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dss_proyecto_contabilidad_detalles')), array (  '_controller' => 'DSS\\ProyectoBundle\\Controller\\ContabilidadController::detallesAction',));
            }

            // dss_proyecto_contabilidad_crear
            if ($pathinfo === '/contabilidad/crear') {
                return array (  '_controller' => 'DSS\\ProyectoBundle\\Controller\\ContabilidadController::crearAction',  '_route' => 'dss_proyecto_contabilidad_crear',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
