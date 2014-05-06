<?php

/* DSSProyectoBundle:Gestion:modificar_pass.html.twig */
class __TwigTemplate_2f7e548b115373be352530482c5340e25ba6a6aacde444749dbb9c4d111a0cdf extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <form id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : null), "form"), "html", null, true);
        echo "\" method=\"POST\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dss_proyecto_modificar_pass", array("tabla" => "usuario", "nif" => (isset($context["nif"]) ? $context["nif"] : null))), "html", null, true);
        echo "\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        <input type=\"submit\" />
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
        
    ";
        // line 10
        if (array_key_exists("mensaje_error", $context)) {
            // line 11
            echo "    <span class=\"error\">";
            echo twig_escape_filter($this->env, (isset($context["mensaje_error"]) ? $context["mensaje_error"] : null), "html", null, true);
            echo "</span>
    ";
        }
        // line 13
        echo "    <a style=\"cursor:pointer\" class=\"closeVentanaDeslizante\">Salir</a>
";
    }

    public function getTemplateName()
    {
        return "DSSProyectoBundle:Gestion:modificar_pass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  52 => 11,  50 => 10,  45 => 8,  40 => 6,  36 => 5,  29 => 4,  26 => 3,);
    }
}
