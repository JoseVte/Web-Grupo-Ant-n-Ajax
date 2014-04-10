<?php

/* DSSProyectoBundle::navegacion.html.twig */
class __TwigTemplate_4a91815dcba9cce653215ab0879eb5b82853a36ab6172d68e5b00413e0e1aa95 extends Twig_Template
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
        echo "<nav>
    <ul class='navegacion'>
        <li><a id=\"cliente\" class=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_aplicacion"]) ? $context["ajax_aplicacion"] : null), "class"), "html", null, true);
        echo "\"  href=\"";
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_gestion_listar", array("tabla" => "cliente"));
        echo "\">Clientes</a>
        <label hidden=\"true\" id=\"clienteFlecha\" name=\"flechaIz_cliente\"><a class=\"flechaIz\"></a></label></li>
        <li><a id=\"proveedor\" class=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_aplicacion"]) ? $context["ajax_aplicacion"] : null), "class"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_gestion_listar", array("tabla" => "proveedor"));
        echo "\">Proveedores</a>
        <label hidden=\"true\" id=\"proveedorFlecha\" name=\"flechaIz_proveedor\"><a class=\"flechaIz\"></a></label></li>
        <li><a id=\"usuario\" class=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_aplicacion"]) ? $context["ajax_aplicacion"] : null), "class"), "html", null, true);
        echo "\"  href=\"";
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_gestion_listar", array("tabla" => "usuario"));
        echo "\">Usuarios</a>
        <label hidden=\"true\" id=\"usuarioFlecha\" name=\"flechaIz_usuario\"><a class=\"flechaIz\"></a></label></li>
    </ul>
        <ul class='social'>
        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/Imagenes/instagram.png"), "html", null, true);
        echo "\">
        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/Imagenes/pinterest.png"), "html", null, true);
        echo "\">
        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/Imagenes/linkedin.png"), "html", null, true);
        echo "\">
        <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/Imagenes/twitter.png"), "html", null, true);
        echo "\">
        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/Imagenes/facebook.png"), "html", null, true);
        echo "\">
        <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/Imagenes/miembrosde1.png"), "html", null, true);
        echo "\">
        <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/Imagenes/miembrosde2.png"), "html", null, true);
        echo "\">
        
    </ul>
    <ul class='miembrosde'>
        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/Imagenes/miembrosde3.png"), "html", null, true);
        echo "\">
    </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "DSSProyectoBundle::navegacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  46 => 11,  37 => 7,  30 => 5,  54 => 13,  50 => 12,  44 => 8,  38 => 7,  32 => 6,  27 => 4,  23 => 3,  19 => 1,  29 => 6,  26 => 5,);
    }
}
