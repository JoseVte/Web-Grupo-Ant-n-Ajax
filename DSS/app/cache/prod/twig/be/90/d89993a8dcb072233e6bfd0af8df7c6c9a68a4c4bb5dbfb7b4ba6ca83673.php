<?php

/* DSSProyectoBundle::Login/plantillaLogin.html.twig */
class __TwigTemplate_be90d89993a8dcb072233e6bfd0af8df7c6c9a68a4c4bb5dbfb7b4ba6ca83673 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DSSProyectoBundle::plantilla.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DSSProyectoBundle::plantilla.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        // line 11
        echo "     ";
        $this->env->loadTemplate("DSSProyectoBundle::Login/headerLogin.html.twig")->display($context);
        // line 12
        echo "     ";
    }

    // line 14
    public function block_nav($context, array $blocks = array())
    {
        // line 15
        echo "     ";
        $this->env->loadTemplate("DSSProyectoBundle::Login/navegacionLogin.html.twig")->display($context);
        // line 16
        echo "     ";
    }

    public function getTemplateName()
    {
        return "DSSProyectoBundle::Login/plantillaLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  49 => 15,  46 => 14,  42 => 12,  36 => 10,  30 => 3,  56 => 28,  54 => 27,  48 => 23,  39 => 11,  34 => 10,  29 => 7,  26 => 6,);
    }
}
