<?php

/* DSSProyectoBundle::header.html.twig */
class __TwigTemplate_db15abdcb79f8282813aa78c7576ea40068ee81499ed5eeb1da010c15e6001ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header>
    <div class=\"herramientas\">
        <a id=\"inicio\" href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_homepage");
        echo "\" title=\"Inicio\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/Imagenes/grupoanton-bocadillo.png"), "html", null, true);
        echo "\"></img></a>
        <ul class=\"herramientas\">
            <li class=\"contabilidad\"><a id=\"factura\" class=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ajax_aplicacion"), "class"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_contabilidad", array("tabla" => "factura"));
        echo "\">Facturas</a></li>
            <li class=\"contabilidad\"><a id=\"albaran\" class=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ajax_aplicacion"), "class"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_contabilidad", array("tabla" => "albaran"));
        echo "\">Albaranes</a></li>
            <li class=\"contabilidad\"><a id=\"presupuesto\" class=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ajax_aplicacion"), "class"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_contabilidad", array("tabla" => "presupuesto"));
        echo "\">Presupuestos</a></li>
            <li class=\"panelControl\"><div id=\"Login\">Hola, ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security"), "getToken", array(), "method"), "getUser", array(), "method"), "getUserName", array(), "method"), "html", null, true);
        echo "
                    <br/><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_logout");
        echo "\">Cerrar Sesion</a></div></li>
        </ul>
    </div>
    </header>";
    }

    public function getTemplateName()
    {
        return "DSSProyectoBundle::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  76 => 6,  70 => 5,  23 => 3,  225 => 86,  222 => 85,  213 => 74,  210 => 73,  207 => 72,  200 => 69,  197 => 68,  192 => 88,  190 => 85,  185 => 83,  181 => 81,  175 => 79,  167 => 72,  124 => 46,  58 => 14,  34 => 6,  97 => 27,  90 => 30,  81 => 15,  77 => 23,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 75,  140 => 55,  132 => 51,  128 => 49,  107 => 38,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 80,  208 => 68,  204 => 72,  179 => 80,  159 => 67,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 19,  63 => 15,  59 => 15,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 52,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 16,  49 => 12,  87 => 25,  31 => 4,  21 => 2,  28 => 3,  94 => 31,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 14,  25 => 3,  38 => 7,  26 => 5,  24 => 3,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 6,  44 => 8,  27 => 4,  79 => 18,  72 => 21,  69 => 20,  47 => 11,  40 => 8,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 58,  139 => 45,  131 => 50,  123 => 47,  120 => 45,  115 => 43,  111 => 37,  108 => 30,  101 => 35,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 11,  50 => 9,  43 => 5,  41 => 9,  35 => 5,  32 => 6,  29 => 6,  209 => 82,  203 => 70,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 71,  162 => 68,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 16,  82 => 22,  80 => 26,  73 => 21,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 13,  48 => 10,  45 => 10,  42 => 9,  39 => 9,  36 => 6,  33 => 6,  30 => 7,);
    }
}
