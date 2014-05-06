<?php

/* DSSProyectoBundle:Login:login.html.twig */
class __TwigTemplate_230d823b2c1f09477efcd4fbf2ad749354e17a2690364a2a5aeaec65ee3ea3ef extends Twig_Template
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
        return $this->env->resolveTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest")) ? ("DSSProyectoBundle::layout_ajax.html.twig") : ("DSSProyectoBundle::Login/plantillaLogin.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <h1>Iniciar Sesion</h1>

    <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("dss_proyecto_login_check");
        echo "\" method=\"post\">
        <label for=\"username\">NIF:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" />
<br/>
        <label for=\"password\">Contraseña:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        <input type=\"hidden\" name=\"_target_path\" value=\"/\"/>
        ";
        // line 23
        echo "<br/>
        <button type=\"submit\">login</button>
    </form>

    ";
        // line 27
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 28
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message"), "html", null, true);
            echo "</div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "DSSProyectoBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 28,  54 => 27,  48 => 23,  39 => 12,  34 => 10,  29 => 7,  26 => 6,);
    }
}
