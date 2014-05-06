<?php

/* DSSProyectoBundle::header.html.twig */
class __TwigTemplate_648546b52b5af1c80cbfc78f03e447590eeb4d58431457ecff6769ff1c690b43 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/images/grupoanton-bocadillo.png"), "html", null, true);
        echo "\"></img></a>
        <ul class=\"herramientas\">
            <li class=\"contabilidad\"><a id=\"factura\" class=\"\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_contabilidad_factura", array("_format" => "html"));
        echo "\">Facturas</a></li>
            <li class=\"contabilidad\"><a id=\"albaran\" class=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_aplicacion"]) ? $context["ajax_aplicacion"] : $this->getContext($context, "ajax_aplicacion")), "class"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_contabilidad", array("tabla" => "albaran"));
        echo "\">Albaranes</a></li>
            <li class=\"contabilidad\"><a id=\"presupuesto\" class=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_aplicacion"]) ? $context["ajax_aplicacion"] : $this->getContext($context, "ajax_aplicacion")), "class"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_contabilidad", array("tabla" => "presupuesto"));
        echo "\">Presupuestos</a></li>
            <li class=\"panelControl\">
                <div id=\"Login\">
                <ul class=\"login\">
                    <li>Hola, ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "getToken", array(), "method"), "getUser", array(), "method"), "getUserName", array(), "method"), "html", null, true);
        echo "</li>
                    <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_panel_control");
        echo "\">Panel de control</a></li>
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_logout");
        echo "\">Cerrar Sesion</a></li>
                </ul>
                </div></li>
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
        return array (  42 => 8,  36 => 7,  27 => 4,  19 => 1,  86 => 16,  81 => 15,  70 => 5,  64 => 17,  61 => 16,  59 => 14,  52 => 11,  48 => 10,  44 => 9,  35 => 7,  33 => 6,  23 => 3,  229 => 87,  226 => 86,  221 => 81,  217 => 75,  214 => 74,  211 => 73,  207 => 71,  204 => 70,  201 => 69,  196 => 89,  194 => 86,  189 => 84,  185 => 82,  183 => 81,  179 => 80,  173 => 76,  171 => 73,  168 => 72,  166 => 69,  163 => 68,  160 => 67,  149 => 59,  140 => 53,  135 => 51,  128 => 47,  124 => 46,  119 => 44,  111 => 39,  105 => 36,  98 => 32,  94 => 31,  90 => 30,  84 => 27,  76 => 6,  71 => 20,  65 => 16,  62 => 15,  51 => 12,  43 => 5,  37 => 4,  32 => 6,  55 => 13,  53 => 12,  46 => 6,  40 => 8,  34 => 8,  29 => 5,  26 => 4,);
    }
}
