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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : null), "form"), "html", null, true);
        echo "\", function(event) {
            event.preventDefault();
            var url = \$(\"#";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : null), "form"), "html", null, true);
        echo "\").attr(\"action\");
            
            \$.ajax({
                type: \"POST\",
                url: url,
                data: \$(\"#";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : null), "form"), "html", null, true);
        echo "\").serialize(), // serializes the form's elements.
                success: function(data)
                {
                    \$(\"#";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : null), "div"), "html", null, true);
        echo "\").html(data);
                    \$(\"#";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : null), "div"), "html", null, true);
        echo "\").show(\"slow\");
                    \$(\"#";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_aplicacion"]) ? $context["ajax_aplicacion"] : null), "div"), "html", null, true);
        echo "\").load(location.href);
                }
            });
        });
        \$(document).on(\"click\", \"a.";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_aplicacion"]) ? $context["ajax_aplicacion"] : null), "class"), "html", null, true);
        echo "\", function(event) {
            event.preventDefault();
            var enlace = \$(this).attr(\"href\");
            \$(\"#";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_aplicacion"]) ? $context["ajax_aplicacion"] : null), "div"), "html", null, true);
        echo "\").load(\$(this).attr(\"href\"), function() {

                history.pushState({enlace: enlace}, null, enlace);
            });
        });
        \$(document).on(\"click\", \"a.";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : null), "class"), "html", null, true);
        echo "\", function(event) {
            event.preventDefault();
            \$(\"#";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : null), "div"), "html", null, true);
        echo "\").load(\$(this).attr(\"href\"), function() {
                \$(\"#";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : null), "div"), "html", null, true);
        echo "\").show(\"slow\");
            });
        });
        \$(document).on(\"click\", \"a.closeVentanaDeslizante\", function(event) {
            \$(\"#";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : null), "div"), "html", null, true);
        echo "\").hide(\"slow\", function() {
                \$(this).html(\"\");
                \$(\"#";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_aplicacion"]) ? $context["ajax_aplicacion"] : null), "div"), "html", null, true);
        echo "\").load(location.href);
            });
        });
        window.onpopstate = function(event) {
            if (event.state) {
                var state = event.state;
                \$(\"#";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_aplicacion"]) ? $context["ajax_aplicacion"] : null), "div"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_aplicacion"]) ? $context["ajax_aplicacion"] : null), "div"), "html", null, true);
        echo "\">
        ";
        // line 80
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "    </section>
</article>
<div id=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : null), "div"), "html", null, true);
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
        return array (  225 => 86,  222 => 85,  217 => 80,  213 => 74,  210 => 73,  207 => 72,  203 => 70,  200 => 69,  197 => 68,  192 => 88,  190 => 85,  185 => 83,  181 => 81,  179 => 80,  175 => 79,  169 => 75,  167 => 72,  164 => 71,  162 => 68,  159 => 67,  156 => 66,  145 => 58,  136 => 52,  131 => 50,  124 => 46,  120 => 45,  115 => 43,  107 => 38,  101 => 35,  94 => 31,  90 => 30,  86 => 29,  80 => 26,  72 => 21,  67 => 19,  61 => 15,  58 => 14,  43 => 5,  37 => 4,  32 => 2,  52 => 16,  49 => 15,  46 => 6,  42 => 12,  36 => 10,  30 => 3,  56 => 28,  54 => 27,  48 => 23,  39 => 11,  34 => 10,  29 => 7,  26 => 6,);
    }
}
