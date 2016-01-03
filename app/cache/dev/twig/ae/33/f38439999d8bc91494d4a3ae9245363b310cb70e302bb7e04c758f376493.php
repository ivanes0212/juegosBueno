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

    
    
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 10
            echo "            ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") <= "4")) {
                // line 11
                echo "            <div class=\"";
                echo twig_escape_filter($this->env, ("col" . $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index")), "html", null, true);
                echo "\">
            <h3>
                <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticias_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tituloNot"), "html", null, true);
                echo "</a>
            </h3>    
                
                <img src=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/unijuegos/imagenes/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fotoNot")) . "")), "html", null, true);
                echo "\" width=300px height=125px/>
            </div>     
            
            ";
            } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") > "4")) {
                // line 20
                echo "                <div class=\"col5\">
                    <br>
                    <h3>
                <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticias_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tituloNot"), "html", null, true);
                echo "</a>
            </h3>    
                
                <img src=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/unijuegos/imagenes/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fotoNot")) . "")), "html", null, true);
                echo "\" width=300px height=125px/>
                </div> 
            ";
            }
            // line 28
            echo "    
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        
    
<div id=\"edit\">
        <ul>
        <li>
            <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("noticias_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
</div>
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
        return array (  119 => 35,  112 => 30,  97 => 28,  91 => 26,  83 => 23,  78 => 20,  71 => 16,  63 => 13,  57 => 11,  54 => 10,  37 => 9,  31 => 5,  28 => 4,);
    }
}
