<?php

/* DSSProyectoBundle::plantilla.html.twig */
class __TwigTemplate_fe81836db22861c0e458e7175c03fc7c1797c96259c11022dd6a0385bd169641 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["ajax"] = false;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "DSS!";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/css/estilo.css"), "html", null, true);
        echo "\"/>
    <style type=\"text/css\">
        #div_flotante{
            display: none;
        }
    </style>
";
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "    <script type=\"text/javascript\">

       

        \$(document).on(\"submit\", \"#";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ajax_div_flotante"), "form"), "html", null, true);
        echo "\", function(event) {
            event.preventDefault();
            var url = \$(\"#";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ajax_div_flotante"), "form"), "html", null, true);
        echo "\").attr(\"action\");
            
            \$.ajax({
                type: \"POST\",
                url: url,
                data: \$(\"#";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ajax_div_flotante"), "form"), "html", null, true);
        echo "\").serialize(), // serializes the form's elements.
                success: function(data)
                {
                    \$(\"#";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ajax_div_flotante"), "div"), "html", null, true);
        echo "\").html(data);
                    \$(\"#";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ajax_div_flotante"), "div"), "html", null, true);
        echo "\").show(\"slow\");
                    \$(\"#";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ajax_aplicacion"), "div"), "html", null, true);
        echo "\").load(location.href);
                }
            });
        });
        \$(document).on(\"click\", \"a.";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ajax_aplicacion"), "class"), "html", null, true);
        echo "\", function(event) {
            event.preventDefault();
            var enlace = \$(this).attr(\"href\");
            \$(\"#";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ajax_aplicacion"), "div"), "html", null, true);
        echo "\").load(\$(this).attr(\"href\"), function() {

                history.pushState({enlace: enlace}, null, enlace);
            });
        });
        \$(document).on(\"click\", \"a.";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ajax_div_flotante"), "class"), "html", null, true);
        echo "\", function(event) {
            event.preventDefault();
            \$(\"#";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ajax_div_flotante"), "div"), "html", null, true);
        echo "\").load(\$(this).attr(\"href\"), function() {
                \$(\"#";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ajax_div_flotante"), "div"), "html", null, true);
        echo "\").show(\"slow\");
            });
        });
        \$(document).on(\"click\", \"a.closeVentanaDeslizante\", function(event) {
            \$(\"#";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ajax_div_flotante"), "div"), "html", null, true);
        echo "\").hide(\"slow\", function() {
                \$(this).html(\"\");
                \$(\"#";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ajax_aplicacion"), "div"), "html", null, true);
        echo "\").load(location.href);
            });
        });
        window.onpopstate = function(event) {
            if (event.state) {
                var state = event.state;
                \$(\"#";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ajax_aplicacion"), "div"), "html", null, true);
        echo "\").load(state.enlace);
            }

        };

    </script>
";
    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        // line 67
        echo "
    ";
        // line 68
        $this->displayBlock('header', $context, $blocks);
        // line 71
        echo "
    ";
        // line 72
        $this->displayBlock('nav', $context, $blocks);
        // line 75
        echo "


    <article>
        <section id=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ajax_aplicacion"), "div"), "html", null, true);
        echo "\">
        ";
        // line 80
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "    </section>
</article>
<div id=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ajax_div_flotante"), "div"), "html", null, true);
        echo "\"></div>
<footer>
    ";
        // line 85
        $this->displayBlock('footer', $context, $blocks);
        // line 88
        echo "</footer>
";
    }

    // line 68
    public function block_header($context, array $blocks = array())
    {
        // line 69
        echo "        ";
        $this->env->loadTemplate("DSSProyectoBundle::header.html.twig")->display($context);
        // line 70
        echo "    ";
    }

    // line 72
    public function block_nav($context, array $blocks = array())
    {
        // line 73
        echo "        ";
        $this->env->loadTemplate("DSSProyectoBundle::navegacion.html.twig")->display($context);
        // line 74
        echo "    ";
    }

    // line 80
    public function block_content($context, array $blocks = array())
    {
    }

    // line 85
    public function block_footer($context, array $blocks = array())
    {
        // line 86
        echo "        Aplicacion desarrollada por el grupo P2G05
    ";
    }

    public function getTemplateName()
    {
        return "DSSProyectoBundle::plantilla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 86,  222 => 85,  213 => 74,  210 => 73,  207 => 72,  200 => 69,  197 => 68,  192 => 88,  190 => 85,  185 => 83,  181 => 81,  175 => 79,  167 => 72,  124 => 46,  58 => 14,  34 => 6,  97 => 27,  90 => 30,  81 => 24,  77 => 23,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 75,  140 => 55,  132 => 51,  128 => 49,  107 => 38,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 80,  208 => 68,  204 => 72,  179 => 80,  159 => 67,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 19,  63 => 15,  59 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 52,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 16,  49 => 12,  87 => 25,  31 => 4,  21 => 2,  28 => 3,  94 => 31,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 14,  25 => 3,  38 => 6,  26 => 4,  24 => 3,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 6,  44 => 8,  27 => 4,  79 => 18,  72 => 21,  69 => 20,  47 => 11,  40 => 9,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 58,  139 => 45,  131 => 50,  123 => 47,  120 => 45,  115 => 43,  111 => 37,  108 => 30,  101 => 35,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 14,  50 => 11,  43 => 5,  41 => 9,  35 => 8,  32 => 2,  29 => 5,  209 => 82,  203 => 70,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 71,  162 => 68,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 29,  82 => 22,  80 => 26,  73 => 21,  64 => 14,  60 => 6,  57 => 11,  54 => 13,  51 => 13,  48 => 8,  45 => 10,  42 => 9,  39 => 9,  36 => 6,  33 => 4,  30 => 7,);
    }
}
