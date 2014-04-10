<?php

/* DSSProyectoBundle:Gestion:eliminar.html.twig */
class __TwigTemplate_2c1aa0471866c6f910d4b7dc7a15e904cde875799cd529060107e167db16fc77 extends Twig_Template
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
        return $this->env->resolveTemplate((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest")) ? ("DSSProyectoBundle::layout_ajax.html.twig") : ("DSSProyectoBundle::plantilla.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    ¿Estas seguro de eliminar al ";
        echo twig_escape_filter($this->env, $this->getContext($context, "tabla"), "html", null, true);
        echo " con Nif=";
        echo twig_escape_filter($this->env, $this->getContext($context, "nif"), "html", null, true);
        echo " y todos sus datos?
    <a class=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ajax_div_flotante"), "class"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dss_proyecto_gestion_eliminar", array("tabla" => $this->getContext($context, "tabla"), "nif" => $this->getContext($context, "nif"), "confirmacion" => "si")), "html", null, true);
        echo "\">
    Confirmar
    </a>
    
    ";
        // line 10
        if (($this->getContext($context, "ajax") == true)) {
            // line 11
            echo "             <a style=\"cursor:pointer\" class=\"closeVentanaDeslizante\">Salir</a>
             ";
        }
        // line 13
        echo "    ";
    }

    public function getTemplateName()
    {
        return "DSSProyectoBundle:Gestion:eliminar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  97 => 27,  90 => 26,  81 => 24,  77 => 23,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 15,  63 => 15,  59 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 16,  49 => 12,  87 => 25,  31 => 4,  21 => 2,  28 => 3,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 14,  25 => 3,  38 => 6,  26 => 4,  24 => 3,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 9,  44 => 8,  27 => 4,  79 => 18,  72 => 16,  69 => 20,  47 => 11,  40 => 9,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 30,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 14,  50 => 11,  43 => 8,  41 => 9,  35 => 8,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 21,  64 => 14,  60 => 6,  57 => 11,  54 => 13,  51 => 13,  48 => 8,  45 => 10,  42 => 9,  39 => 9,  36 => 6,  33 => 4,  30 => 7,);
    }
}
