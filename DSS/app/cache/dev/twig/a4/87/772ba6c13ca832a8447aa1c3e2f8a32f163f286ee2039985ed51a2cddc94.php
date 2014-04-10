<?php

/* AcmeDemoBundle:Secured:layout.html.twig */
class __TwigTemplate_a487772ba6c13ca832a8447aa1c3e2f8a32f163f286ee2039985ed51a2cddc94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content_header_more' => array($this, 'block_content_header_more'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("content_header_more", $context, $blocks);
        echo "
    <li>logged in as <strong>";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "app"), "user")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")) : ("Anonymous")), "html", null, true);
        echo "</strong> - <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_logout");
        echo "\">Logout</a></li>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  76 => 6,  70 => 17,  23 => 3,  225 => 86,  222 => 85,  213 => 74,  210 => 73,  207 => 72,  200 => 69,  197 => 68,  192 => 88,  190 => 85,  185 => 83,  181 => 81,  175 => 79,  167 => 72,  124 => 46,  58 => 14,  34 => 10,  97 => 27,  90 => 30,  81 => 15,  77 => 21,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 75,  140 => 55,  132 => 51,  128 => 49,  107 => 38,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 80,  208 => 68,  204 => 72,  179 => 80,  159 => 67,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 19,  63 => 15,  59 => 15,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 52,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 15,  49 => 15,  87 => 25,  31 => 4,  21 => 2,  28 => 3,  94 => 31,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 28,  25 => 3,  38 => 7,  26 => 6,  24 => 5,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 11,  44 => 11,  27 => 4,  79 => 18,  72 => 21,  69 => 20,  47 => 11,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 58,  139 => 45,  131 => 50,  123 => 47,  120 => 45,  115 => 43,  111 => 37,  108 => 30,  101 => 35,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 16,  55 => 15,  52 => 16,  50 => 12,  43 => 5,  41 => 9,  35 => 5,  32 => 6,  29 => 7,  209 => 82,  203 => 70,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 71,  162 => 68,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 16,  82 => 22,  80 => 26,  73 => 21,  64 => 17,  60 => 6,  57 => 11,  54 => 13,  51 => 13,  48 => 23,  45 => 10,  42 => 12,  39 => 12,  36 => 5,  33 => 6,  30 => 5,);
    }
}
