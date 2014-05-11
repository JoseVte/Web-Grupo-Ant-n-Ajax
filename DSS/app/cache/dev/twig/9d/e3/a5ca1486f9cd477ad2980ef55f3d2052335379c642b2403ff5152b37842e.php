<?php

/* DSSProyectoBundle:Contabilidad:crear.html.twig */
class __TwigTemplate_9de3a5ca1486f9cd477ad2980ef55f3d2052335379c642b2403ff5152b37842e extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <form id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : $this->getContext($context, "ajax_div_flotante")), "form"), "html", null, true);
        echo "\" method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_contabilidad_crear");
        echo "\">
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 6
        if (((isset($context["ajax"]) ? $context["ajax"] : $this->getContext($context, "ajax")) == true)) {
            // line 7
            echo "             <a style=\"cursor:pointer\" class=\"closeVentanaDeslizante\">Salir</a>
             ";
        }
        // line 9
        echo "    <input type=\"submit\" />
    </form>
    ";
        // line 11
        if (array_key_exists("mensaje_error", $context)) {
            // line 12
            echo "    <span class=\"error\">";
            echo twig_escape_filter($this->env, (isset($context["mensaje_error"]) ? $context["mensaje_error"] : $this->getContext($context, "mensaje_error")), "html", null, true);
            echo "</span>
    ";
        }
    }

    public function getTemplateName()
    {
        return "DSSProyectoBundle:Contabilidad:crear.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  50 => 11,  46 => 9,  42 => 7,  40 => 6,  36 => 5,  29 => 4,  26 => 3,);
    }
}
