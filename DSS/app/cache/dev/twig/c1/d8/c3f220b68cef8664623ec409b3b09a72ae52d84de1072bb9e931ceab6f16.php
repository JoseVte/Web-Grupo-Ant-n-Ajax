<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_c1d8c3f220b68cef8664623ec409b3b09a72ae52d84de1072bb9e931ceab6f16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . $this->getContext($context, "name")), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => $this->getContext($context, "name"))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  110 => 22,  84 => 29,  20 => 1,  76 => 17,  70 => 17,  23 => 3,  225 => 86,  222 => 85,  213 => 74,  210 => 73,  207 => 72,  200 => 69,  197 => 68,  192 => 88,  190 => 85,  185 => 83,  181 => 81,  175 => 79,  167 => 72,  124 => 46,  58 => 14,  34 => 10,  97 => 27,  90 => 32,  81 => 15,  77 => 21,  53 => 10,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 75,  140 => 55,  132 => 51,  128 => 49,  107 => 38,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 80,  208 => 68,  204 => 72,  179 => 80,  159 => 67,  143 => 56,  135 => 53,  119 => 42,  102 => 17,  71 => 17,  67 => 19,  63 => 15,  59 => 15,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 52,  121 => 46,  117 => 19,  105 => 18,  91 => 27,  62 => 15,  49 => 15,  87 => 25,  31 => 3,  21 => 2,  28 => 3,  94 => 34,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 11,  25 => 3,  38 => 7,  26 => 11,  24 => 5,  19 => 1,  93 => 28,  88 => 31,  78 => 26,  46 => 8,  44 => 11,  27 => 4,  79 => 18,  72 => 21,  69 => 20,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 58,  139 => 45,  131 => 50,  123 => 47,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 35,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 16,  55 => 15,  52 => 16,  50 => 12,  43 => 5,  41 => 5,  35 => 5,  32 => 6,  29 => 7,  209 => 82,  203 => 70,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 71,  162 => 68,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 16,  82 => 28,  80 => 26,  73 => 16,  64 => 13,  60 => 6,  57 => 11,  54 => 13,  51 => 13,  48 => 23,  45 => 10,  42 => 12,  39 => 12,  36 => 4,  33 => 3,  30 => 5,);
    }
}