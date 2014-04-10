<?php

/* DSSProyectoBundle:Gestion:index.html.twig */
class __TwigTemplate_9a7a6d3b01b9c73a2592934a5d995dd1f3f6dc5e5db831ac50dc1964649c4238 extends Twig_Template
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div id=\"subtitulo\">Menu de gestion de ";
        echo twig_escape_filter($this->env, (isset($context["tabla"]) ? $context["tabla"] : null), "html", null, true);
        echo "</div>
    <div id=\"enlaceCrear\">
        <a class=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : null), "class"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dss_proyecto_gestion_crear", array("tabla" => (isset($context["tabla"]) ? $context["tabla"] : null))), "html", null, true);
        echo "\">Añadir ";
        echo twig_escape_filter($this->env, (isset($context["tabla"]) ? $context["tabla"] : null), "html", null, true);
        echo "</a>
    </div>
        <table class=\"listar\" id=\"tabla";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["tabla"]) ? $context["tabla"] : null), "html", null, true);
        echo "\">
                <tr>
                    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cabecera"]) ? $context["cabecera"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["elemento"]) {
            // line 13
            echo "                    <th>";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["elemento"]) ? $context["elemento"] : null)), "html", null, true);
            echo "</th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elemento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                    <th>Modificar</th>
                    <th>Eliminar</th>
                   
                </tr>
                
                ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 21
            echo "                    
                    <tr>
                        ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usuario"]) ? $context["usuario"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["elemento"]) {
                // line 24
                echo "                        <td>";
                echo twig_escape_filter($this->env, (isset($context["elemento"]) ? $context["elemento"] : null), "html", null, true);
                echo "</td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elemento'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                        <td><a class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : null), "class"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dss_proyecto_gestion_modificar", array("tabla" => (isset($context["tabla"]) ? $context["tabla"] : null), "nif" => twig_first($this->env, (isset($context["usuario"]) ? $context["usuario"] : null)))), "html", null, true);
            echo "\">Modificar</a></td>
                        <td><a class=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : null), "class"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dss_proyecto_gestion_eliminar", array("tabla" => (isset($context["tabla"]) ? $context["tabla"] : null), "nif" => twig_first($this->env, (isset($context["usuario"]) ? $context["usuario"] : null)))), "html", null, true);
            echo "\">Eliminar</a>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </table>
";
    }

    public function getTemplateName()
    {
        return "DSSProyectoBundle:Gestion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 30,  97 => 27,  90 => 26,  81 => 24,  77 => 23,  73 => 21,  69 => 20,  62 => 15,  53 => 13,  49 => 12,  44 => 10,  35 => 8,  29 => 6,  26 => 5,);
    }
}
