<?php

/* DSSProyectoBundle::Login/headerLogin.html.twig */
class __TwigTemplate_cc555f314c0dbec2c408b74c5c2bb2334166ff82efcf883f5da9bfd8bea4e6fd extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dssproyecto/Imagenes/grupoanton-bocadillo.png"), "html", null, true);
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
        return array (  27 => 4,  19 => 1,  81 => 15,  76 => 6,  70 => 5,  64 => 17,  59 => 15,  44 => 9,  40 => 8,  35 => 7,  33 => 6,  23 => 3,  225 => 86,  222 => 85,  217 => 80,  213 => 74,  210 => 73,  207 => 72,  203 => 70,  200 => 69,  197 => 68,  192 => 88,  190 => 85,  185 => 83,  181 => 81,  179 => 80,  175 => 79,  169 => 75,  167 => 72,  164 => 71,  162 => 68,  159 => 67,  156 => 66,  145 => 58,  136 => 52,  131 => 50,  124 => 46,  120 => 45,  115 => 43,  107 => 38,  101 => 35,  94 => 31,  90 => 30,  86 => 16,  80 => 26,  72 => 21,  67 => 19,  61 => 16,  58 => 14,  43 => 5,  37 => 4,  32 => 6,  52 => 11,  49 => 15,  46 => 6,  42 => 12,  36 => 7,  30 => 3,  56 => 28,  54 => 27,  48 => 10,  39 => 11,  34 => 10,  29 => 5,  26 => 6,);
    }
}
