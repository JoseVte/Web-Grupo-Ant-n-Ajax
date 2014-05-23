<?php

/* DSSProyectoBundle:Contabilidad:pedido.html.twig */
class __TwigTemplate_616cab4acf83f8af8194c12511ff6ed0a06333d4c6cd868cde3e2856c9d48347 extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<a class=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : null), "class"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_contabilidad_crear");
        echo "\">Crear pedido</a>

<table class=\"listar\">
    <tr>
        <th>Num. pedido</th>
        <th>Proveedor</th>
        <th>Cliente</th>
        <th>Detalles</th>
    </tr>

    ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listado"]) ? $context["listado"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            // line 16
            echo "
    <tr>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : null), "id"), "html", null, true);
            echo "</td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : null), "proveedor"), "html", null, true);
            echo "</td>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : null), "cliente"), "html", null, true);
            echo "</td>
        <td><a class=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_div_flotante"]) ? $context["ajax_div_flotante"] : null), "class"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dss_proyecto_contabilidad_detalles", array("id" => $this->getAttribute((isset($context["pedido"]) ? $context["pedido"] : null), "id"))), "html", null, true);
            echo "\">Detalles</a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</table>


";
    }

    public function getTemplateName()
    {
        return "DSSProyectoBundle:Contabilidad:pedido.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  67 => 21,  63 => 20,  59 => 19,  55 => 18,  51 => 16,  47 => 15,  32 => 5,  29 => 4,  26 => 3,);
    }
}
