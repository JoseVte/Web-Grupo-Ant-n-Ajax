<?php

/* DSSProyectoBundle:Contabilidad:factura.html.twig */
class __TwigTemplate_3959be6c20f9e06b0b679de1136c4b8cd663e2797bd4d8d5b0a05866b6eb7ce5 extends Twig_Template
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
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["facturas"]) ? $context["facturas"] : $this->getContext($context, "facturas")));
        foreach ($context['_seq'] as $context["_key"] => $context["factura"]) {
            // line 6
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dss_proyecto_contabilidad_factura", array("_format" => "pdf", "pedido" => $this->getAttribute((isset($context["factura"]) ? $context["factura"] : $this->getContext($context, "factura")), "pedidoIdentificador"))), "html", null, true);
            echo "\" target=\"_blank\">Factura del pedido ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["factura"]) ? $context["factura"] : $this->getContext($context, "factura")), "pedidoIdentificador"), "html", null, true);
            echo "</a> <br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['factura'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "DSSProyectoBundle:Contabilidad:factura.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  29 => 5,  26 => 4,);
    }
}
