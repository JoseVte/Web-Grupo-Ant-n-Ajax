<?php

/* DSSProyectoBundle::Login/headerLogin.html.twig */
class __TwigTemplate_3a04d64bd4c7fed2060ac29644f2a1e4fd367d39d19eeb31fcda75a532bf7b13 extends Twig_Template
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
        echo "<header>
    <div class=\"herramientas\">
        <a id=\"inicio\" href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_login");
        echo "\" title=\"Inicio\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/images/grupoanton-bocadillo.png"), "html", null, true);
        echo "\"></img></a>
        <ul class=\"herramientas\">
            <li class=\"contabilidad\"><a id=\"login\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_login");
        echo "\">Iniciar Sesion</a></li>
            <li class=\"contabilidad\"><a id=\"registro\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_registro");
        echo "\">Registrar</a></li>
            <li class=\"contabilidad\"><a id=\"info\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_info");
        echo "\">Info</a></li>
            
        </ul>
    </div>
    </header>
";
    }

    public function getTemplateName()
    {
        return "DSSProyectoBundle::Login/headerLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  32 => 6,  27 => 4,  23 => 3,  19 => 1,  52 => 16,  49 => 15,  46 => 14,  42 => 12,  36 => 7,  30 => 3,  56 => 28,  54 => 27,  48 => 23,  39 => 11,  34 => 10,  29 => 7,  26 => 6,);
    }
}
