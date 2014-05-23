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
        return $this->env->resolveTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest")) ? ("DSSProyectoBundle::layout_ajax.html.twig") : ("DSSProyectoBundle::plantilla.html.twig")));
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
<script type='text/javascript'>
    \$(document).ready(function(){
        \$('input[type=\"checkbox\"][name=\"imprimir\"]').change(function(){
            if(\$(this).attr(\"checked\"))
            {
                /*jQuery.ajax({
                    type: \"POST\",
                    url: \"\",
                    dataType: \"text\",
                    data: null
                    success: function(){
                        \$('#labelImprimir').text('asdf');
                    }
                });*/
            }
            else
            {
                //call the function to be fired
                //when your box changes from
                //checked to unchecked
            }
        });
    });
</script>

    <h1>Panel de control</h1>

    IVA actual: 21%
    
    <!--<br><input type=\"checkbox\" name=\"imprimir\" value=\"imprimir\" title=\"Impresion automatica\" />
    <label id=\"labelImprimir\">Impresion automatica</label>-->
    
    <br><a class=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : null), "class"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dss_proyecto_modificar_email", array("tabla" => "usuario", "nif" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "getToken", array(), "method"), "getUser", array(), "method"), "getNif", array(), "method"))), "html", null, true);
        echo "\">Cambiar Email</a>
    <br><a class=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : null), "class"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dss_proyecto_modificar_pass", array("tabla" => "usuario", "nif" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "getToken", array(), "method"), "getUser", array(), "method"), "getNif", array(), "method"))), "html", null, true);
        echo "\">Cambiar pass</a>
    <br><a class=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : null), "class"), "html", null, true);
        echo "\" href =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dss_proyecto_gestion_eliminar", array("tabla" => "usuario", "nif" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "getToken", array(), "method"), "getUser", array(), "method"), "getNif", array(), "method"))), "html", null, true);
        echo "\">Borrar usuario</a>

    ";
        // line 42
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "getToken", array(), "method"), "getUser", array(), "method"), "getNvAcceso", array(), "method") == "ROLE_ADMIN")) {
            // line 43
            echo "        <br><a class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : null), "class"), "html", null, true);
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
        return array (  85 => 43,  83 => 42,  76 => 40,  70 => 39,  64 => 38,  29 => 5,  26 => 4,);
    }
}
