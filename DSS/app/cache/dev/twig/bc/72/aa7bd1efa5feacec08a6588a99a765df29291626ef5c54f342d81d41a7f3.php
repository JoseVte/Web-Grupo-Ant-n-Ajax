<?php

/* DSSProyectoBundle::plantilla.html.twig */
class __TwigTemplate_bc72aa7bd1efa5feacec08a6588a99a765df29291626ef5c54f342d81d41a7f3 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/css/reset.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/css/estilo.css"), "html", null, true);
        echo "\"/>
    <style type=\"text/css\">
        #div_flotante{
            display: none;
        }
    </style>
";
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        // line 16
        echo "    <script type=\"text/javascript\">

       

        \$(document).on(\"submit\", \"#";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : $this->getContext($context, "ajax_div_flotante")), "form"), "html", null, true);
        echo "\", function(event) {
            event.preventDefault();
            var url = \$(\"#";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : $this->getContext($context, "ajax_div_flotante")), "form"), "html", null, true);
        echo "\").attr(\"action\");
            
            \$.ajax({
                type: \"POST\",
                url: url,
                data: \$(\"#";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : $this->getContext($context, "ajax_div_flotante")), "form"), "html", null, true);
        echo "\").serialize(), // serializes the form's elements.
                success: function(data)
                {
                    \$(\"#";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : $this->getContext($context, "ajax_div_flotante")), "div"), "html", null, true);
        echo "\").html(data);
                    \$(\"#";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : $this->getContext($context, "ajax_div_flotante")), "div"), "html", null, true);
        echo "\").show(\"slow\");
                    \$(\"#";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_aplicacion"]) ? $context["ajax_aplicacion"] : $this->getContext($context, "ajax_aplicacion")), "div"), "html", null, true);
        echo "\").load(location.href);
                }
            });
        });
        \$(document).on(\"click\", \"a.";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_aplicacion"]) ? $context["ajax_aplicacion"] : $this->getContext($context, "ajax_aplicacion")), "class"), "html", null, true);
        echo "\", function(event) {
            event.preventDefault();
            var enlace = \$(this).attr(\"href\");
            \$(\"#";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_aplicacion"]) ? $context["ajax_aplicacion"] : $this->getContext($context, "ajax_aplicacion")), "div"), "html", null, true);
        echo "\").load(\$(this).attr(\"href\"), function() {

                history.pushState({enlace: enlace}, null, enlace);
            });
        });
        \$(document).on(\"click\", \"a.";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : $this->getContext($context, "ajax_div_flotante")), "class"), "html", null, true);
        echo "\", function(event) {
            event.preventDefault();
            \$(\"#";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : $this->getContext($context, "ajax_div_flotante")), "div"), "html", null, true);
        echo "\").load(\$(this).attr(\"href\"), function() {
                \$(\"#";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : $this->getContext($context, "ajax_div_flotante")), "div"), "html", null, true);
        echo "\").show(\"slow\");
            });
        });
        \$(document).on(\"click\", \"a.closeVentanaDeslizante\", function(event) {
            \$(\"#";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : $this->getContext($context, "ajax_div_flotante")), "div"), "html", null, true);
        echo "\").hide(\"slow\", function() {
                \$(this).html(\"\");
                \$(\"#";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_aplicacion"]) ? $context["ajax_aplicacion"] : $this->getContext($context, "ajax_aplicacion")), "div"), "html", null, true);
        echo "\").load(location.href);
            });
        });
        window.onpopstate = function(event) {
            if (event.state) {
                var state = event.state;
                \$(\"#";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_aplicacion"]) ? $context["ajax_aplicacion"] : $this->getContext($context, "ajax_aplicacion")), "div"), "html", null, true);
        echo "\").load(state.enlace);
            }

        };

    </script>
";
    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
        // line 68
        echo "
    ";
        // line 69
        $this->displayBlock('header', $context, $blocks);
        // line 72
        echo "
    ";
        // line 73
        $this->displayBlock('nav', $context, $blocks);
        // line 76
        echo "


    <article>
        <section id=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_aplicacion"]) ? $context["ajax_aplicacion"] : $this->getContext($context, "ajax_aplicacion")), "div"), "html", null, true);
        echo "\">
        ";
        // line 81
        $this->displayBlock('content', $context, $blocks);
        // line 82
        echo "    </section>
</article>
<div id=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : $this->getContext($context, "ajax_div_flotante")), "div"), "html", null, true);
        echo "\"></div>
<footer>
    ";
        // line 86
        $this->displayBlock('footer', $context, $blocks);
        // line 89
        echo "</footer>
";
    }

    // line 69
    public function block_header($context, array $blocks = array())
    {
        // line 70
        echo "        ";
        $this->env->loadTemplate("DSSProyectoBundle::header.html.twig")->display($context);
        // line 71
        echo "    ";
    }

    // line 73
    public function block_nav($context, array $blocks = array())
    {
        // line 74
        echo "        ";
        $this->env->loadTemplate("DSSProyectoBundle::navegacion.html.twig")->display($context);
        // line 75
        echo "    ";
    }

    // line 81
    public function block_content($context, array $blocks = array())
    {
    }

    // line 86
    public function block_footer($context, array $blocks = array())
    {
        // line 87
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
        return array (  229 => 87,  226 => 86,  221 => 81,  217 => 75,  214 => 74,  211 => 73,  207 => 71,  204 => 70,  201 => 69,  196 => 89,  194 => 86,  189 => 84,  185 => 82,  183 => 81,  179 => 80,  173 => 76,  171 => 73,  168 => 72,  166 => 69,  163 => 68,  160 => 67,  149 => 59,  140 => 53,  135 => 51,  128 => 47,  124 => 46,  119 => 44,  111 => 39,  105 => 36,  98 => 32,  94 => 31,  90 => 30,  84 => 27,  76 => 22,  71 => 20,  65 => 16,  62 => 15,  51 => 7,  43 => 5,  37 => 4,  32 => 2,  55 => 13,  53 => 12,  46 => 6,  40 => 9,  34 => 8,  29 => 5,  26 => 4,);
    }
}
