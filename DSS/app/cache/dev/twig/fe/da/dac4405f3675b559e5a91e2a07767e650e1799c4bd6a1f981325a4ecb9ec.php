<?php

/* DSSProyectoBundle:Login:panel.html.twig */
class __TwigTemplate_fedadac4405f3675b559e5a91e2a07767e650e1799c4bd6a1f981325a4ecb9ec extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <h1>Panel de control</h1>

    <br>Cambiar email
    <br>Cambiar pass
    <br><a class=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : $this->getContext($context, "ajax_div_flotante")), "class"), "html", null, true);
        echo "\" href =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dss_proyecto_gestion_eliminar", array("tabla" => "usuario", "nif" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "getToken", array(), "method"), "getUser", array(), "method"), "getNif", array(), "method"))), "html", null, true);
        echo "\">Borrar usuario</a>

    ";
        // line 12
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "getToken", array(), "method"), "getUser", array(), "method"), "getNvAcceso", array(), "method") == "ROLE_ADMIN")) {
            // line 13
            echo "        <br><a class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : $this->getContext($context, "ajax_div_flotante")), "class"), "html", null, true);
            echo "\" href =\"";
            echo $this->env->getExtension('routing')->getPath("dss_proyecto_gestion_crear", array("tabla" => "usuario"));
            echo "\" >Crear usuario</a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "DSSProyectoBundle:Login:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  43 => 12,  36 => 10,  29 => 5,  26 => 4,);
    }
}
