<?php

/* DSSProyectoBundle::navegacion.html.twig */
class __TwigTemplate_63e33d343928631140d9ecbd720a6d38a1e5fb381b076147b380ec69b401b4a0 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_aplicacion"]) ? $context["ajax_aplicacion"] : $this->getContext($context, "ajax_aplicacion")), "class"), "html", null, true);
        echo "\"  href=\"";
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_gestion_listar", array("tabla" => "cliente"));
        echo "\">Clientes</a>
        <label hidden=\"true\" id=\"clienteFlecha\" name=\"flechaIz_cliente\"><a class=\"flechaIz\"></a></label></li>
        <li><a id=\"proveedor\" class=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_aplicacion"]) ? $context["ajax_aplicacion"] : $this->getContext($context, "ajax_aplicacion")), "class"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_gestion_listar", array("tabla" => "proveedor"));
        echo "\">Proveedores</a>
        <label hidden=\"true\" id=\"proveedorFlecha\" name=\"flechaIz_proveedor\"><a class=\"flechaIz\"></a></label></li>
        
        ";
        // line 8
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "getToken", array(), "method"), "getUser", array(), "method"), "getNvAcceso", array(), "method") == "ROLE_ADMIN")) {
            // line 9
            echo "            <li><a id=\"usuario\" class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ajax_aplicacion"]) ? $context["ajax_aplicacion"] : $this->getContext($context, "ajax_aplicacion")), "class"), "html", null, true);
            echo "\"  href=\"";
            echo $this->env->getExtension('routing')->getPath("dss_proyecto_gestion_listar", array("tabla" => "usuario"));
            echo "\">Usuarios</a>
            <label hidden=\"true\" id=\"usuarioFlecha\" name=\"flechaIz_usuario\"><a class=\"flechaIz\"></a></label></li>
        ";
        }
        // line 12
        echo "    </ul>
        <ul class='social'>
        <li><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/images/instagram.png"), "html", null, true);
        echo "\"></li>
        <li><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/images/pinterest.png"), "html", null, true);
        echo "\"></li>
        <li><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/images/linkedin.png"), "html", null, true);
        echo "\"></li>
        <li><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/images/twitter.png"), "html", null, true);
        echo "\"></li>
        <li><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/images/facebook.png"), "html", null, true);
        echo "\"></li>
        
        
    </ul>
    <ul class='miembrosde'>
        <li><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/images/miembrosde1.png"), "html", null, true);
        echo "\"></li>
        <li><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/images/miembrosde2.png"), "html", null, true);
        echo "\"></li>
        <li><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/images/miembrosde3.png"), "html", null, true);
        echo "\"></li>
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
        return array (  85 => 25,  81 => 24,  77 => 23,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  49 => 12,  40 => 9,  38 => 8,  30 => 5,  56 => 11,  52 => 10,  48 => 9,  42 => 8,  36 => 7,  32 => 6,  27 => 4,  23 => 3,  19 => 1,  29 => 6,  26 => 5,);
    }
}
