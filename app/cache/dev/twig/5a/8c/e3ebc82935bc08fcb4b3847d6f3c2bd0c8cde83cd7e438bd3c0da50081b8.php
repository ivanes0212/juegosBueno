<?php

/* uniJuegosBundle:juegos:show.html.twig */
class __TwigTemplate_5a8ce3ebc82935bc08fcb4b3847d6f3c2bd0c8cde83cd7e438bd3c0da50081b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("uniJuegosBundle::layout.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "uniJuegosBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 6
        echo "<table class=\"record_properties\">
        <tbody>
           
            <tr>
               
                <td><center><h1>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tituloJue"), "html", null, true);
        echo "</h1></center></td>
            </tr>
             
            <tr>
                
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descJue"), "html", null, true);
        echo "</td>
            </tr>
              
            <tr>
                <td>
                    <center><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/unijuegos/imagenes/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fotoJue")) . "")), "html", null, true);
        echo "\" width=700px height=400px/>
                </td>   
            </tr>
            <tr>
                <td><div align=\"right\">Desarrolladora -><i>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "compJue"), "html", null, true);
        echo "</i></div></td>
            </tr>
            <tr>
                    <td><div align=\"right\">Categoria -> 
            
                
                    ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "juecat"), "nombreCat"), "html", null, true);
        echo "                      
                     
                    </td>
                        </div>
            </tr>
            </tbody>
    </table>
            
                    <div align=\"left\"><h4><u>Noicias relacionadas </u> </h4>
                    
                 ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "juenots"));
        foreach ($context['_seq'] as $context["_key"] => $context["noti"]) {
            // line 42
            echo "            
                 <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticias_show", array("id" => $this->getAttribute((isset($context["noti"]) ? $context["noti"] : $this->getContext($context, "noti")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noti"]) ? $context["noti"] : $this->getContext($context, "noti")), "tituloNot"), "html", null, true);
            echo "</a>
                     <br>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noti'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "  
                 </div>
                 <br><br>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("juegos");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("juegos_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 60
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "uniJuegosBundle:juegos:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 60,  117 => 56,  109 => 51,  101 => 45,  90 => 43,  87 => 42,  83 => 41,  70 => 31,  61 => 25,  54 => 21,  46 => 16,  38 => 11,  31 => 6,  28 => 4,);
    }
}
