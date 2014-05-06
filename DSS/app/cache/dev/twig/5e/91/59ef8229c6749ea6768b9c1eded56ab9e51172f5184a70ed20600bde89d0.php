<?php

/* DSSProyectoBundle:Contabilidad:factura.pdf.twig */
class __TwigTemplate_5e9159ef8229c6749ea6768b9c1eded56ab9e51172f5184a70ed20600bde89d0 extends Twig_Template
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
        echo "
<pdf>

    <dynamic-page>



        <table>
            <tr>
                <td>
                    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('ps_pdf')->getImagePath("DSSProyectoBundle:grupoanton-bocadillo.png"), "html", null, true);
        echo "\" />
                </td>
                <td>
                    <p color=\"#AD1919\">MODELO DE PRESUPUESTO</p>
                    <p  color=\"#AD1919\">DATOS EMISOR</p>
                     ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 17
            echo "                    <p><span color=\"#AD1919\">CIF:</span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "nif"), "html", null, true);
            echo "</p>
                    <p><span color=\"#AD1919\">DIRECCION:</span> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "direccion"), "html", null, true);
            echo "</p>
                    <p><span color=\"#AD1919\">TLF:</span> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "telefono"), "html", null, true);
            echo "</p>
                    
                    <p><span color=\"#AD1919\">EMAIL:</span> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "email"), "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                </td>
            </tr>
            <tr>
                <td>
                    

                </td>
                <td>
                    <p><span color=\"#AD1919\"> Fecha:</span> fecha</p>
                </td>
            </tr>
        </table>
        <hr></hr>
        <p><span color=\"#AD1919\">DATOS CLIENTE:</span></p>
        ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 38
            echo "        <p><span color=\"#AD1919\">Nombre:</span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "nombre"), "html", null, true);
            echo "</p>
        <p><span color=\"#AD1919\">NIF:</span> ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "nif"), "html", null, true);
            echo "</p>
        <p><span color=\"#AD1919\">Direccion: </span> ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "direccion"), "html", null, true);
            echo " </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        <p><span color=\"#AD1919\">Gracias por su interés en nuestros servicios. Esta es la factura</span></p>
        
        <table>
             <tr>
                <td>
                    Nombre
                </td>
                <td>
                    Descripcion
                </td>
                <td>
                    Precio
                </td>
                
            </tr>
            ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servicios"]) ? $context["servicios"] : $this->getContext($context, "servicios")));
        foreach ($context['_seq'] as $context["_key"] => $context["servicio"]) {
            // line 58
            echo "            <tr>
                
                <td>
                    ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["servicio"]) ? $context["servicio"] : $this->getContext($context, "servicio")), "nombre"), "html", null, true);
            echo "
                </td>
                <td>
                   ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["servicio"]) ? $context["servicio"] : $this->getContext($context, "servicio")), "descripcion"), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["servicio"]) ? $context["servicio"] : $this->getContext($context, "servicio")), "precio"), "html", null, true);
            echo "
                </td>
                
                
                
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servicio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "            
            <tr background.color=\"#901a32\">
                <td>
                    
                </td>
                
                <td>
                    <strong>Total</strong>
                </td>
                <td>
                    <strong>";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "</strong>
                </td>
            </tr>
            <tr background.color=\"#901a32\">
                
                <td>
                    
                </td>
                <td>
                    <strong>IVA(";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["iva"]) ? $context["iva"] : $this->getContext($context, "iva")), "html", null, true);
        echo "%)</strong>
                </td>
                <td>
                    <strong>";
        // line 96
        echo twig_escape_filter($this->env, (((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) * (isset($context["iva"]) ? $context["iva"] : $this->getContext($context, "iva"))) / 100), "html", null, true);
        echo "€</strong>
                    
                </td>
            </tr>
            <tr background.color=\"#901a32\">
                
                <td>
                    
                </td>
                <td>
                    <strong>Total con IVA</strong>
                </td>
                <td>
                    <strong>";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["total_iva"]) ? $context["total_iva"] : $this->getContext($context, "total_iva")), "html", null, true);
        echo "€</strong>
                </td>
            </tr>
        </table>
        

        




    </dynamic-page>
</pdf>



";
    }

    public function getTemplateName()
    {
        return "DSSProyectoBundle:Contabilidad:factura.pdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 84,  153 => 74,  134 => 64,  77 => 29,  110 => 33,  104 => 32,  53 => 12,  20 => 1,  34 => 6,  81 => 37,  70 => 5,  23 => 3,  226 => 86,  211 => 73,  207 => 71,  194 => 86,  185 => 82,  160 => 67,  124 => 46,  90 => 39,  84 => 23,  76 => 6,  65 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 87,  220 => 70,  214 => 74,  177 => 93,  169 => 60,  140 => 67,  132 => 51,  128 => 61,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 81,  219 => 76,  217 => 75,  208 => 68,  204 => 70,  179 => 80,  159 => 61,  143 => 56,  135 => 51,  119 => 57,  102 => 42,  71 => 20,  67 => 15,  63 => 15,  59 => 13,  94 => 40,  89 => 32,  85 => 38,  75 => 17,  68 => 14,  56 => 14,  87 => 25,  28 => 3,  201 => 69,  196 => 89,  183 => 96,  171 => 73,  166 => 69,  163 => 68,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 36,  117 => 44,  105 => 37,  91 => 27,  62 => 15,  49 => 12,  38 => 6,  26 => 4,  24 => 5,  31 => 11,  21 => 2,  25 => 3,  19 => 1,  93 => 33,  88 => 6,  78 => 24,  46 => 10,  44 => 10,  27 => 4,  79 => 21,  72 => 16,  69 => 27,  47 => 11,  40 => 9,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 58,  120 => 40,  115 => 43,  111 => 39,  108 => 36,  101 => 32,  98 => 29,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 13,  52 => 19,  50 => 13,  43 => 17,  41 => 7,  35 => 8,  32 => 7,  29 => 5,  209 => 82,  203 => 78,  199 => 109,  193 => 73,  189 => 84,  187 => 84,  182 => 66,  176 => 64,  173 => 76,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 59,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 40,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 36,  95 => 28,  92 => 26,  86 => 24,  82 => 25,  80 => 19,  73 => 28,  64 => 24,  60 => 23,  57 => 21,  54 => 13,  51 => 11,  48 => 18,  45 => 8,  42 => 9,  39 => 16,  36 => 6,  33 => 6,  30 => 3,);
    }
}
