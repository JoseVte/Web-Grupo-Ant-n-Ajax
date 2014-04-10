<?php

/* DSSProyectoBundle::header.html.twig */
class __TwigTemplate_db15abdcb79f8282813aa78c7576ea40068ee81499ed5eeb1da010c15e6001ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header>
    <div class=\"herramientas\">
        <a id=\"inicio\" href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_homepage");
        echo "\" title=\"Inicio\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/Imagenes/grupoanton-bocadillo.png"), "html", null, true);
        echo "\"></img></a>
        <ul class=\"herramientas\">
            <li class=\"contabilidad\"><a id=\"factura\" class=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_aplicacion"]) ? $context["ajax_aplicacion"] : null), "class"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_contabilidad", array("tabla" => "factura"));
        echo "\">Facturas</a></li>
            <li class=\"contabilidad\"><a id=\"albaran\" class=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_aplicacion"]) ? $context["ajax_aplicacion"] : null), "class"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_contabilidad", array("tabla" => "albaran"));
        echo "\">Albaranes</a></li>
            <li class=\"contabilidad\"><a id=\"presupuesto\" class=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_aplicacion"]) ? $context["ajax_aplicacion"] : null), "class"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_contabilidad", array("tabla" => "presupuesto"));
        echo "\">Presupuestos</a></li>
            <li class=\"panelControl\"><div id=\"Login\">Hola, ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "getToken", array(), "method"), "getUser", array(), "method"), "getUserName", array(), "method"), "html", null, true);
        echo "
                    <br/><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_logout");
        echo "\">Cerrar Sesion</a></div></li>
        </ul>
    </div>
    </header>";
    }

    public function getTemplateName()
    {
        return "DSSProyectoBundle::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  50 => 9,  44 => 8,  38 => 7,  32 => 6,  27 => 4,  23 => 3,  19 => 1,  29 => 6,  26 => 5,);
    }
}
