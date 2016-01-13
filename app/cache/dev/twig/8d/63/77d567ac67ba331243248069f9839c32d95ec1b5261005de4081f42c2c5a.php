<?php

/* uniJuegosBundle:juegos:responderJuego.html.twig */
class __TwigTemplate_8d6377d567ac67ba331243248069f9839c32d95ec1b5261005de4081f42c2c5a extends Twig_Template
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
        // line 5
        echo "<h1>Listado de juegos con este titulo: ";
        echo twig_escape_filter($this->env, (isset($context["tit"]) ? $context["tit"] : $this->getContext($context, "tit")), "html", null, true);
        echo ":</h1>
 <tbody>
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabla"]) ? $context["tabla"] : $this->getContext($context, "tabla")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 8
            echo "            
            
        <h2><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("juegos_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tituloJue"), "html", null, true);
            echo "</a></h2>
              
        
                
               
       
                <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/unijuegos/imagenes/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iconoJue")) . "")), "html", null, true);
            echo "\" width=10% height=10%/>
                <br>
                <br>
                
                
                
                
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        
    ";
    }

    public function getTemplateName()
    {
        return "uniJuegosBundle:juegos:responderJuego.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 24,  56 => 16,  45 => 10,  41 => 8,  37 => 7,  31 => 5,  28 => 4,);
    }
}
