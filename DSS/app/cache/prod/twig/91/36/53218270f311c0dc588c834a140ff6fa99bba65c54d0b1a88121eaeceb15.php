<?php

/* DSSProyectoBundle:Gestion:crear.html.twig */
class __TwigTemplate_913653218270f311c0dc588c834a140ff6fa99bba65c54d0b1a88121eaeceb15 extends Twig_Template
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
        return $this->env->resolveTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest")) ? ("DSSProyectoBundle::layout_ajax.html.twig") : ("DSSProyectoBundle::plantilla.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : null), "form"), "html", null, true);
        echo "\" method=\"POST\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dss_proyecto_gestion_crear", array("tabla" => (isset($context["tabla"]) ? $context["tabla"] : null))), "html", null, true);
        echo "\">
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    ";
        // line 8
        if (((isset($context["ajax"]) ? $context["ajax"] : null) == true)) {
            // line 9
            echo "             <a style=\"cursor:pointer\" class=\"closeVentanaDeslizante\">Salir</a>
             ";
        }
        // line 11
        echo "    <input type=\"submit\" />
    </form>
    ";
        // line 13
        if (array_key_exists("mensaje_error", $context)) {
            // line 14
            echo "    <span class=\"error\">";
            echo twig_escape_filter($this->env, (isset($context["mensaje_error"]) ? $context["mensaje_error"] : null), "html", null, true);
            echo "</span>
    ";
        }
    }

    public function getTemplateName()
    {
        return "DSSProyectoBundle:Gestion:crear.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  50 => 13,  46 => 11,  42 => 9,  40 => 8,  36 => 7,  29 => 6,  26 => 5,);
    }
}
