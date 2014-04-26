<?php

/* DSSProyectoBundle:Gestion:usuario.html.twig */
class __TwigTemplate_e0d1608504db8f95d8b8347551c101a6971039c9adfa4a774362aa10208c11bc extends Twig_Template
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div id=\"subtitulo\">Menu de gestion de ";
        echo twig_escape_filter($this->env, (isset($context["tabla"]) ? $context["tabla"] : $this->getContext($context, "tabla")), "html", null, true);
        echo "</div>
    <div id=\"enlaceCrear\">
        <a class=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : $this->getContext($context, "ajax_div_flotante")), "class"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dss_proyecto_gestion_crear", array("tabla" => (isset($context["tabla"]) ? $context["tabla"] : $this->getContext($context, "tabla")))), "html", null, true);
        echo "\">Añadir ";
        echo twig_escape_filter($this->env, (isset($context["tabla"]) ? $context["tabla"] : $this->getContext($context, "tabla")), "html", null, true);
        echo "</a>
    </div>
        <table class=\"listar\" id=\"tabla";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["tabla"]) ? $context["tabla"] : $this->getContext($context, "tabla")), "html", null, true);
        echo "\">
                <tr>
                    <th>NIF</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Nivel de Acceso </th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                   
                </tr>
                ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["table"]) ? $context["table"] : $this->getContext($context, "table")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 24
            echo "                    
                    <tr>
                        
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nif"), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre"), "html", null, true);
            echo "</td>
                         <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "apellidos"), "html", null, true);
            echo "</td>
                          <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nvacceso"), "html", null, true);
            echo "</td>
                           <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "direccion"), "html", null, true);
            echo "</td>
                           <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "telefono"), "html", null, true);
            echo "</td>
                           <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "email"), "html", null, true);
            echo "</td>
                        
                       
                        <td><a class=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : $this->getContext($context, "ajax_div_flotante")), "class"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dss_proyecto_gestion_modificar", array("tabla" => (isset($context["tabla"]) ? $context["tabla"] : $this->getContext($context, "tabla")), "nif" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nif"))), "html", null, true);
            echo "\">Modificar</a></td>
                        <td><a class=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : $this->getContext($context, "ajax_div_flotante")), "class"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dss_proyecto_gestion_eliminar", array("tabla" => (isset($context["tabla"]) ? $context["tabla"] : $this->getContext($context, "tabla")), "nif" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nif"))), "html", null, true);
            echo "\">Eliminar</a>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </table>
";
    }

    public function getTemplateName()
    {
        return "DSSProyectoBundle:Gestion:usuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 40,  105 => 37,  99 => 36,  93 => 33,  89 => 32,  85 => 31,  81 => 30,  77 => 29,  73 => 28,  69 => 27,  64 => 24,  60 => 23,  44 => 10,  35 => 8,  29 => 6,  26 => 5,);
    }
}
