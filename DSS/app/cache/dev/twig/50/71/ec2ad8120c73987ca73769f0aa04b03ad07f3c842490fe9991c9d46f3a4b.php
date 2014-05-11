<?php

/* DSSProyectoBundle:Contabilidad:listar.html.twig */
class __TwigTemplate_5071ec2ad8120c73987ca73769f0aa04b03ad07f3c842490fe9991c9d46f3a4b extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
<table>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servicios"]) ? $context["servicios"] : $this->getContext($context, "servicios")));
        foreach ($context['_seq'] as $context["_key"] => $context["serv"]) {
            // line 8
            echo "    <tr>
        <td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serv"]) ? $context["serv"] : $this->getContext($context, "serv")), "nombre"), "html", null, true);
            echo "</td>
        <td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serv"]) ? $context["serv"] : $this->getContext($context, "serv")), "descripcion"), "html", null, true);
            echo "</td>
        <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serv"]) ? $context["serv"] : $this->getContext($context, "serv")), "precioIva"), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</table>

    

    ";
        // line 18
        if (((isset($context["ajax"]) ? $context["ajax"] : $this->getContext($context, "ajax")) == true)) {
            // line 19
            echo "             <a style=\"cursor:pointer\" class=\"closeVentanaDeslizante\">Salir</a>
             ";
        }
        // line 21
        echo "    ";
    }

    public function getTemplateName()
    {
        return "DSSProyectoBundle:Contabilidad:listar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  65 => 19,  63 => 18,  57 => 14,  48 => 11,  44 => 10,  40 => 9,  37 => 8,  33 => 7,  29 => 5,  26 => 4,);
    }
}
