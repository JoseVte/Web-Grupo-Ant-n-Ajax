<?php

/* DSSProyectoBundle:Gestion:modificar.html.twig */
class __TwigTemplate_312aff5a662859781963c4f8ffb41d0d0fe2a861b797c2be5f6e55081583bec0 extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "     <form id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : null), "form"), "html", null, true);
        echo "\" method=\"POST\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dss_proyecto_gestion_modificar", array("tabla" => (isset($context["tabla"]) ? $context["tabla"] : null), "nif" => (isset($context["nif"]) ? $context["nif"] : null))), "html", null, true);
        echo "\">
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "NIF"), 'row', array("attr" => array("readonly" => true)));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
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
        // line 16
        echo "    
    
    ";
    }

    public function getTemplateName()
    {
        return "DSSProyectoBundle:Gestion:modificar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  56 => 14,  54 => 13,  50 => 11,  46 => 9,  44 => 8,  40 => 7,  36 => 6,  29 => 5,  26 => 4,);
    }
}
