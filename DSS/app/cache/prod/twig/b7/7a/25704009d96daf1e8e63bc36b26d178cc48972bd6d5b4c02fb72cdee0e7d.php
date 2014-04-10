<?php

/* DSSProyectoBundle::layout_ajax.html.twig */
class __TwigTemplate_b77a25704009d96daf1e8e63bc36b26d178cc48972bd6d5b4c02fb72cdee0e7d extends Twig_Template
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
        return array (  28 => 3,  22 => 2,  20 => 1,  29 => 6,  26 => 5,);
    }
}
