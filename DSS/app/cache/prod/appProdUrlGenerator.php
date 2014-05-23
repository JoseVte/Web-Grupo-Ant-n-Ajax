<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'dss_proyecto_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DSS\\ProyectoBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'dss_proyecto_info' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DSS\\ProyectoBundle\\Controller\\DefaultController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/info',    ),  ),  4 =>   array (  ),),
        'dss_proyecto_contabilidad_factura' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'DSS\\ProyectoBundle\\Controller\\ContabilidadController::facturaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/contabilidad/factura',    ),  ),  4 =>   array (  ),),
        'dss_proyecto_gestion_listar' => array (  0 =>   array (    0 => 'tabla',  ),  1 =>   array (    '_controller' => 'DSS\\ProyectoBundle\\Controller\\GestionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'tabla',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/listar',    ),  ),  4 =>   array (  ),),
        'dss_proyecto_gestion_crear' => array (  0 =>   array (    0 => 'tabla',  ),  1 =>   array (    '_controller' => 'DSS\\ProyectoBundle\\Controller\\GestionController::crearAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'tabla',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/crear',    ),  ),  4 =>   array (  ),),
        'dss_proyecto_gestion_modificar' => array (  0 =>   array (    0 => 'tabla',    1 => 'nif',  ),  1 =>   array (    '_controller' => 'DSS\\ProyectoBundle\\Controller\\GestionController::modificarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nif',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'tabla',    ),    2 =>     array (      0 => 'text',      1 => '/gestion/modificar',    ),  ),  4 =>   array (  ),),
        'dss_proyecto_gestion_eliminar' => array (  0 =>   array (    0 => 'tabla',    1 => 'nif',  ),  1 =>   array (    '_controller' => 'DSS\\ProyectoBundle\\Controller\\GestionController::eliminarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nif',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'tabla',    ),    2 =>     array (      0 => 'text',      1 => '/gestion/eliminar',    ),  ),  4 =>   array (  ),),
        'dss_proyecto_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DSS\\ProyectoBundle\\Controller\\LoginController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registro/login',    ),  ),  4 =>   array (  ),),
        'dss_proyecto_login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registro/login_check',    ),  ),  4 =>   array (  ),),
        'dss_proyecto_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registro/logout',    ),  ),  4 =>   array (  ),),
        'dss_proyecto_panel_control' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DSS\\ProyectoBundle\\Controller\\GestionController::panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestion/panelControl',    ),  ),  4 =>   array (  ),),
        'dss_proyecto_registro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DSS\\ProyectoBundle\\Controller\\LoginController::registroAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registro/registro',    ),  ),  4 =>   array (  ),),
        'dss_proyecto_denegado' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DSS\\ProyectoBundle\\Controller\\ErrorController::denegadoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/error403',    ),  ),  4 =>   array (  ),),
        'dss_proyecto_modificar_pass' => array (  0 =>   array (    0 => 'tabla',    1 => 'nif',  ),  1 =>   array (    '_controller' => 'DSS\\ProyectoBundle\\Controller\\GestionController::modificarPassAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nif',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'tabla',    ),    2 =>     array (      0 => 'text',      1 => '/gestion/modificar_pass',    ),  ),  4 =>   array (  ),),
        'dss_proyecto_modificar_email' => array (  0 =>   array (    0 => 'tabla',    1 => 'nif',  ),  1 =>   array (    '_controller' => 'DSS\\ProyectoBundle\\Controller\\GestionController::modificarEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nif',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'tabla',    ),    2 =>     array (      0 => 'text',      1 => '/gestion/modificar_email',    ),  ),  4 =>   array (  ),),
        'dss_proyecto_contabilidad_pedido' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DSS\\ProyectoBundle\\Controller\\ContabilidadController::pedidoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contabilidad/pedido',    ),  ),  4 =>   array (  ),),
        'dss_proyecto_contabilidad_detalles' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DSS\\ProyectoBundle\\Controller\\ContabilidadController::detallesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/contabilidad/detalles',    ),  ),  4 =>   array (  ),),
        'dss_proyecto_contabilidad_crear' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DSS\\ProyectoBundle\\Controller\\ContabilidadController::crearAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contabilidad/crear',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
