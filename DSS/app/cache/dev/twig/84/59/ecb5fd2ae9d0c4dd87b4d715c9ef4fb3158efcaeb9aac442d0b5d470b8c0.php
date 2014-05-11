<?php

/* DSSProyectoBundle:Gestion:panel.html.twig */
class __TwigTemplate_8459ecb5fd2ae9d0c4dd87b4d715c9ef4fb3158efcaeb9aac442d0b5d470b8c0 extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <h1>Panel de control</h1>

    <br><a class=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : $this->getContext($context, "ajax_div_flotante")), "class"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dss_proyecto_modificar_email", array("tabla" => "usuario", "nif" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "getToken", array(), "method"), "getUser", array(), "method"), "getNif", array(), "method"))), "html", null, true);
        echo "\">Cambiar Email</a>
    <br><a class=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : $this->getContext($context, "ajax_div_flotante")), "class"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dss_proyecto_modificar_pass", array("tabla" => "usuario", "nif" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "getToken", array(), "method"), "getUser", array(), "method"), "getNif", array(), "method"))), "html", null, true);
        echo "\">Cambiar pass</a>
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
        return "DSSProyectoBundle:Gestion:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 33,  104 => 32,  53 => 12,  20 => 1,  34 => 8,  81 => 15,  70 => 5,  23 => 3,  226 => 86,  211 => 73,  207 => 71,  194 => 86,  185 => 82,  160 => 67,  124 => 46,  90 => 27,  84 => 23,  76 => 6,  65 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 87,  220 => 70,  214 => 74,  177 => 65,  169 => 60,  140 => 53,  132 => 51,  128 => 47,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 81,  219 => 76,  217 => 75,  208 => 68,  204 => 70,  179 => 80,  159 => 61,  143 => 56,  135 => 51,  119 => 44,  102 => 32,  71 => 20,  67 => 15,  63 => 15,  59 => 13,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 14,  87 => 25,  28 => 3,  201 => 69,  196 => 89,  183 => 81,  171 => 73,  166 => 69,  163 => 68,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 36,  117 => 44,  105 => 36,  91 => 27,  62 => 15,  49 => 12,  38 => 6,  26 => 4,  24 => 5,  31 => 5,  21 => 2,  25 => 3,  19 => 2,  93 => 28,  88 => 6,  78 => 24,  46 => 10,  44 => 10,  27 => 4,  79 => 21,  72 => 16,  69 => 17,  47 => 11,  40 => 9,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 39,  108 => 36,  101 => 32,  98 => 29,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 13,  52 => 14,  50 => 13,  43 => 5,  41 => 7,  35 => 8,  32 => 7,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 84,  187 => 84,  182 => 66,  176 => 64,  173 => 76,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 59,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 26,  86 => 24,  82 => 25,  80 => 19,  73 => 18,  64 => 17,  60 => 6,  57 => 11,  54 => 13,  51 => 11,  48 => 14,  45 => 8,  42 => 9,  39 => 12,  36 => 6,  33 => 6,  30 => 3,);
    }
}
