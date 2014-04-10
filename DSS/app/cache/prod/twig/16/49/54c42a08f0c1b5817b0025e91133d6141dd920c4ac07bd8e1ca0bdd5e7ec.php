<?php

/* ::base.html.twig */
class __TwigTemplate_164954c42a08f0c1b5817b0025e91133d6141dd920c4ac07bd8e1ca0bdd5e7ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/imagenes/favicon.ico"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/JS/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/JS/jquery-ui.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/JS/validation.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/JS/angular.js"), "html", null, true);
        echo "\"></script>

    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  76 => 6,  70 => 5,  64 => 17,  59 => 15,  44 => 9,  40 => 8,  35 => 7,  33 => 6,  23 => 1,  225 => 86,  222 => 85,  217 => 80,  213 => 74,  210 => 73,  207 => 72,  203 => 70,  200 => 69,  197 => 68,  192 => 88,  190 => 85,  185 => 83,  181 => 81,  179 => 80,  175 => 79,  169 => 75,  167 => 72,  164 => 71,  162 => 68,  159 => 67,  156 => 66,  145 => 58,  136 => 52,  131 => 50,  124 => 46,  120 => 45,  115 => 43,  107 => 38,  101 => 35,  94 => 31,  90 => 30,  86 => 16,  80 => 26,  72 => 21,  67 => 19,  61 => 16,  58 => 14,  43 => 5,  37 => 4,  32 => 2,  52 => 11,  49 => 15,  46 => 6,  42 => 12,  36 => 10,  30 => 3,  56 => 28,  54 => 27,  48 => 10,  39 => 11,  34 => 10,  29 => 5,  26 => 6,);
    }
}
