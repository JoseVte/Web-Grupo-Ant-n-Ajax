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
        $context['_seq'] = twig_ensure_traversable((isset($context["proveedor"]) ? $context["proveedor"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 17
            echo "                    <p><span color=\"#AD1919\">CIF:</span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "nif"), "html", null, true);
            echo "</p>
                    <p><span color=\"#AD1919\">DIRECCION:</span> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "direccion"), "html", null, true);
            echo "</p>
                    <p><span color=\"#AD1919\">TLF:</span> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "telefono"), "html", null, true);
            echo "</p>
                    
                    <p><span color=\"#AD1919\">EMAIL:</span> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "email"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["cliente"]) ? $context["cliente"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 38
            echo "        <p><span color=\"#AD1919\">Nombre:</span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "nombre"), "html", null, true);
            echo "</p>
        <p><span color=\"#AD1919\">NIF:</span> ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "nif"), "html", null, true);
            echo "</p>
        <p><span color=\"#AD1919\">Direccion: </span> ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "direccion"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["servicios"]) ? $context["servicios"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["servicio"]) {
            // line 58
            echo "            <tr>
                
                <td>
                    ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["servicio"]) ? $context["servicio"] : null), "nombre"), "html", null, true);
            echo "
                </td>
                <td>
                   ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["servicio"]) ? $context["servicio"] : null), "descripcion"), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["servicio"]) ? $context["servicio"] : null), "precio"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
        echo "</strong>
                </td>
            </tr>
            <tr background.color=\"#901a32\">
                
                <td>
                    
                </td>
                <td>
                    <strong>IVA(";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["iva"]) ? $context["iva"] : null), "html", null, true);
        echo "%)</strong>
                </td>
                <td>
                    <strong>";
        // line 96
        echo twig_escape_filter($this->env, (((isset($context["total"]) ? $context["total"] : null) * (isset($context["iva"]) ? $context["iva"] : null)) / 100), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["total_iva"]) ? $context["total_iva"] : null), "html", null, true);
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
        return array (  199 => 109,  183 => 96,  177 => 93,  165 => 84,  153 => 74,  140 => 67,  134 => 64,  128 => 61,  123 => 58,  119 => 57,  102 => 42,  94 => 40,  90 => 39,  85 => 38,  81 => 37,  65 => 23,  57 => 21,  52 => 19,  48 => 18,  43 => 17,  39 => 16,  31 => 11,  19 => 1,);
    }
}
