<?php

/* DSSProyectoBundle:Login:login.html.twig */
class __TwigTemplate_230d823b2c1f09477efcd4fbf2ad749354e17a2690364a2a5aeaec65ee3ea3ef extends Twig_Template
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
        echo "
    <h1>Iniciar Sesion</h1>

    <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_login_check");
        echo "\" method=\"post\">
        <label for=\"username\">NIF:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
<br/>
        <label for=\"password\">Contraseña:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        <input type=\"hidden\" name=\"_target_path\" value=\"/\"/>
        ";
        // line 23
        echo "<br/>
        <button type=\"submit\">login</button>
    </form>

    ";
        // line 27
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 28
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "DSSProyectoBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 10,  81 => 15,  70 => 5,  23 => 1,  226 => 86,  211 => 73,  207 => 71,  194 => 86,  185 => 82,  160 => 67,  124 => 46,  90 => 30,  84 => 27,  76 => 6,  65 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 87,  220 => 70,  214 => 74,  177 => 65,  169 => 60,  140 => 53,  132 => 51,  128 => 47,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 81,  219 => 76,  217 => 75,  208 => 68,  204 => 70,  179 => 80,  159 => 61,  143 => 56,  135 => 51,  119 => 44,  102 => 32,  71 => 20,  67 => 15,  63 => 15,  59 => 15,  94 => 31,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 28,  87 => 25,  28 => 3,  201 => 69,  196 => 89,  183 => 81,  171 => 73,  166 => 69,  163 => 68,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 36,  91 => 27,  62 => 15,  49 => 15,  38 => 6,  26 => 6,  24 => 3,  31 => 5,  21 => 2,  25 => 3,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 14,  44 => 11,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 10,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 39,  108 => 36,  101 => 32,  98 => 32,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 16,  50 => 14,  43 => 5,  41 => 7,  35 => 7,  32 => 8,  29 => 7,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 84,  187 => 84,  182 => 66,  176 => 64,  173 => 76,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 59,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 16,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 27,  51 => 7,  48 => 23,  45 => 17,  42 => 12,  39 => 12,  36 => 10,  33 => 6,  30 => 3,);
    }
}
