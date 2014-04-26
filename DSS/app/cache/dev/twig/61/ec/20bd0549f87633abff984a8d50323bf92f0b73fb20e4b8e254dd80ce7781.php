<?php

/* DSSProyectoBundle:Login:registro.html.twig */
class __TwigTemplate_61ec20bd0549f87633abff984a8d50323bf92f0b73fb20e4b8e254dd80ce7781 extends Twig_Template
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
        return $this->env->resolveTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "isXmlHttpRequest")) ? ("DSSProyectoBundle::layout_ajax.html.twig") : ("DSSProyectoBundle::Login/plantillaLogin.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<h1>Registro</h1>
<form method=\"POST\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_registro");
        echo "\">
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "NIF"), 'row');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pass"), 'row', array("type" => "password"));
        echo "
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <input type=\"submit\" />
    </form>
    ";
        // line 14
        if (array_key_exists("mensaje_error", $context)) {
            // line 15
            echo "    <span class=\"error\">";
            echo twig_escape_filter($this->env, (isset($context["mensaje_error"]) ? $context["mensaje_error"] : $this->getContext($context, "mensaje_error")), "html", null, true);
            echo "</span>
    ";
        }
    }

    public function getTemplateName()
    {
        return "DSSProyectoBundle:Login:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  50 => 14,  44 => 11,  40 => 10,  36 => 9,  32 => 8,  29 => 7,  26 => 6,);
    }
}
