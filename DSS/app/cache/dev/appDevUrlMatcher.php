<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

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

        if (0 === strpos($pathinfo, '/contabilidad')) {
            // dss_proyecto_contabilidad_factura
            if (0 === strpos($pathinfo, '/contabilidad/factura') && preg_match('#^/contabilidad/factura/(?P<_format>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dss_proyecto_contabilidad_factura')), array (  '_controller' => 'DSS\\ProyectoBundle\\Controller\\ContabilidadController::facturaAction',));
            }

            // dss_proyecto_contabilidad
            if (preg_match('#^/contabilidad/(?P<tabla>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dss_proyecto_contabilidad')), array (  '_controller' => 'DSS\\ProyectoBundle\\Controller\\ContabilidadController::indexAction',));
            }

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

        // dss_proyecto_modificarPass
        if (0 === strpos($pathinfo, '/gestion/modificarPass') && preg_match('#^/gestion/modificarPass/(?P<nif>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dss_proyecto_modificarPass')), array (  '_controller' => 'DSS\\ProyectoBundle\\Controller\\GestionController::modificarPassAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
