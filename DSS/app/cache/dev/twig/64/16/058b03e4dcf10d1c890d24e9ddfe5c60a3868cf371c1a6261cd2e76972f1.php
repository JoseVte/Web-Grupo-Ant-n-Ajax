<?php

/* DSSProyectoBundle::layout_ajax.html.twig */
class __TwigTemplate_6416058b03e4dcf10d1c890d24e9ddfe5c60a3868cf371c1a6261cd2e76972f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["ajax"] = true;
        // line 2
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    
    ";
    }

    public function getTemplateName()
    {
        return "DSSProyectoBundle::layout_ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 2,  20 => 1,  51 => 13,  47 => 11,  45 => 10,  36 => 6,  29 => 5,  26 => 4,);
    }
}
