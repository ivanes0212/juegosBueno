<?php

/* uniJuegosBundle:noticias:index.html.twig */
class __TwigTemplate_ae33f38439999d8bc91494d4a3ae9245363b310cb70e302bb7e04c758f376493 extends Twig_Template
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
        echo "<center><h1>Noticias</h1></center>

    
    <div id=\"web\">
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 10
            echo "            
            <h3>
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticias_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tituloNot"), "html", null, true);
            echo "</a>
            </h3>    
                
                <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/unijuegos/imagenes/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fotoNot")) . "")), "html", null, true);
            echo "\" width=350px height=200px/>
                
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        
    </div>

        <ul>
        <li>
            <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("noticias_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "uniJuegosBundle:noticias:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 23,  62 => 18,  53 => 15,  45 => 12,  41 => 10,  37 => 9,  31 => 5,  28 => 4,);
    }
}
