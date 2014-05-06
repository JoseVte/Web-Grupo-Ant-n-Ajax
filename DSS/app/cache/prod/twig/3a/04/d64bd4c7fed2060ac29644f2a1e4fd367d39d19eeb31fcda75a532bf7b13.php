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
        return array (  27 => 4,  19 => 1,  86 => 16,  81 => 15,  70 => 5,  64 => 17,  61 => 16,  59 => 15,  44 => 9,  40 => 8,  35 => 7,  33 => 6,  23 => 3,  229 => 87,  226 => 86,  221 => 81,  217 => 75,  214 => 74,  211 => 73,  207 => 71,  204 => 70,  201 => 69,  196 => 89,  194 => 86,  189 => 84,  185 => 82,  183 => 81,  179 => 80,  173 => 76,  171 => 73,  168 => 72,  166 => 69,  163 => 68,  160 => 67,  149 => 59,  140 => 53,  135 => 51,  128 => 47,  124 => 46,  119 => 44,  111 => 39,  105 => 36,  98 => 32,  94 => 31,  90 => 30,  84 => 27,  76 => 6,  71 => 20,  65 => 16,  62 => 15,  51 => 7,  43 => 5,  37 => 4,  32 => 6,  52 => 11,  49 => 15,  46 => 6,  42 => 12,  36 => 7,  30 => 3,  56 => 28,  54 => 27,  48 => 10,  39 => 11,  34 => 10,  29 => 5,  26 => 6,);
    }
}
