<?php

/* DSSProyectoBundle:Gestion:eliminar.html.twig */
class __TwigTemplate_4400a8d0dd381f14f0a50d93d269ee82b82ea9e12e658d3e96b001b3916faacc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "isXmlHttpRequest")) ? ("DSSProyectoBundle::layout_ajax.html.twig") : ("DSSProyectoBundle::plantilla.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    ¿Estas seguro de eliminar al ";
        echo twig_escape_filter($this->env, (isset($context["tabla"]) ? $context["tabla"] : $this->getContext($context, "tabla")), "html", null, true);
        echo " con Nif=";
        echo twig_escape_filter($this->env, (isset($context["nif"]) ? $context["nif"] : $this->getContext($context, "nif")), "html", null, true);
        echo " y todos sus datos?
    <a class=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : $this->getContext($context, "ajax_div_flotante")), "class"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dss_proyecto_gestion_eliminar", array("tabla" => (isset($context["tabla"]) ? $context["tabla"] : $this->getContext($context, "tabla")), "nif" => (isset($context["nif"]) ? $context["nif"] : $this->getContext($context, "nif")), "confirmacion" => "si")), "html", null, true);
        echo "\">
    Confirmar
    </a>
    
    ";
        // line 10
        if (((isset($context["ajax"]) ? $context["ajax"] : $this->getContext($context, "ajax")) == true)) {
            // line 11
            echo "             <a style=\"cursor:pointer\" class=\"closeVentanaDeslizante\">Salir</a>
             ";
        }
        // line 13
        echo "    ";
    }

    public function getTemplateName()
    {
        return "DSSProyectoBundle:Gestion:eliminar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  47 => 11,  45 => 10,  36 => 6,  29 => 5,  26 => 4,);
    }
}
