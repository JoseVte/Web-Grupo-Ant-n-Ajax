<?php

/* PsPdfBundle:Example:index.html.twig */
class __TwigTemplate_ae17bcdbad7fbd0176e27a2b1c4d5d9541b14d2a283df514061a0610dc3791da extends Twig_Template
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
        echo "<h1>PdfBundle examples</h1>

<ul>
\t<li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("_pdf_examples");
        echo "\">Standard examples of PHPPdf library</a></li>
\t<li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("_pdf_using_facade_directly");
        echo "\">Manually created pdf</a></li>
\t<li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("_pdf_using_automatic_format_detection", array("name" => "Guest"));
        echo "\">Hello action in html format</a></li>
\t<li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_pdf_using_automatic_format_detection", array("name" => "Guest", "_format" => "pdf")), "html", null, true);
        echo "\">Hello action in pdf format</a></li>
\t<li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("_pdf_markdown");
        echo "\">Pdf from markdown document</a></li>
\t
</ul>";
    }

    public function getTemplateName()
    {
        return "PsPdfBundle:Example:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 84,  153 => 74,  134 => 64,  77 => 23,  110 => 33,  104 => 32,  53 => 14,  20 => 1,  34 => 6,  81 => 24,  70 => 5,  23 => 3,  226 => 86,  211 => 73,  207 => 71,  194 => 86,  185 => 82,  160 => 67,  124 => 46,  90 => 39,  84 => 23,  76 => 6,  65 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 87,  220 => 70,  214 => 74,  177 => 93,  169 => 60,  140 => 67,  132 => 51,  128 => 61,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 81,  219 => 76,  217 => 75,  208 => 68,  204 => 70,  179 => 80,  159 => 61,  143 => 56,  135 => 51,  119 => 57,  102 => 42,  71 => 20,  67 => 15,  63 => 14,  59 => 13,  94 => 40,  89 => 32,  85 => 25,  75 => 17,  68 => 14,  56 => 14,  87 => 25,  28 => 5,  201 => 69,  196 => 89,  183 => 96,  171 => 73,  166 => 69,  163 => 68,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 36,  117 => 44,  105 => 37,  91 => 27,  62 => 15,  49 => 12,  38 => 8,  26 => 4,  24 => 4,  31 => 11,  21 => 2,  25 => 5,  19 => 1,  93 => 33,  88 => 6,  78 => 24,  46 => 10,  44 => 8,  27 => 4,  79 => 21,  72 => 16,  69 => 18,  47 => 11,  40 => 8,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 58,  120 => 40,  115 => 43,  111 => 39,  108 => 36,  101 => 32,  98 => 29,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 13,  52 => 19,  50 => 9,  43 => 17,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 78,  199 => 109,  193 => 73,  189 => 84,  187 => 84,  182 => 66,  176 => 64,  173 => 76,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 59,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 40,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 36,  95 => 28,  92 => 26,  86 => 24,  82 => 25,  80 => 19,  73 => 28,  64 => 24,  60 => 23,  57 => 15,  54 => 13,  51 => 11,  48 => 18,  45 => 8,  42 => 9,  39 => 16,  36 => 7,  33 => 6,  30 => 5,);
    }
}
