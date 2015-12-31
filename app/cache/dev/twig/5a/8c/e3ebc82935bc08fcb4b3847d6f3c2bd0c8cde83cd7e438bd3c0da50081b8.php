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
        // line 8
        echo "<center><h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tituloJue"), "html", null, true);
        echo "</h1></center>
                         
            
                <div id=\"texto\">
                ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descJue"), "html", null, true);
        echo "
                </div>
                <br>
            
                    <center><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/unijuegos/imagenes/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fotoJue")) . "")), "html", null, true);
        echo "\" width=700px height=400px/>
                
            <div id=\"notas\">
                    Desarrolladora ->
                     
                     <i>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "compJue"), "html", null, true);
        echo "</i>
                     
                     <br>
            
                    Categoria -> 
            
                
                    ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "juecat"), "nombreCat"), "html", null, true);
        echo "                      
                     
                    <br>
                        
                    
                    Plataformas -> 
                    ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jueplat"));
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 35
            echo "                
                        -";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plat"]) ? $context["plat"] : $this->getContext($context, "plat")), "nombrePlat"), "html", null, true);
            echo "<br>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                     
                    
            
            </div>
            
            
                    <div id=\"noti\"><h4><u>Noicias relacionadas </u></h4>
                    
                 ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "juenots"));
        foreach ($context['_seq'] as $context["_key"] => $context["noti"]) {
            // line 47
            echo "            
                 <a href=\"";
            // line 48
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
        // line 50
        echo "  
                    </div>
                 <br>
   
                 
<div id=\"edit\">
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("juegos");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("juegos_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
    </div>
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
        return array (  141 => 67,  134 => 63,  126 => 58,  116 => 50,  105 => 48,  102 => 47,  98 => 46,  88 => 38,  80 => 36,  77 => 35,  73 => 34,  64 => 28,  54 => 21,  46 => 16,  39 => 12,  31 => 8,  28 => 4,);
    }
}
