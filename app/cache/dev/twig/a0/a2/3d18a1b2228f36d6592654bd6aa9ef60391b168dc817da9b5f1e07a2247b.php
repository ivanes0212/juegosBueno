<?php

/* uniJuegosBundle:juegos:index.html.twig */
class __TwigTemplate_a0a23d18a1b2228f36d6592654bd6aa9ef60391b168dc817da9b5f1e07a2247b extends Twig_Template
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
        echo "<center><h1>Juegos</h1></center>

    <table class=\"records_list\">
        <thead>
           
        </thead>
        <tbody>
        ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 13
            echo "        <text align=\"center\">
        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("juegos_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/unijuegos/imagenes/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iconoJue")) . "")), "html", null, true);
            echo "\" width=250px height=250px/></a>
        </text>
             
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </tbody>
    </table>
<div id=\"edit\">
        <ul>
        <li>
            <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("juegos_new");
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
        return "uniJuegosBundle:juegos:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 24,  60 => 19,  47 => 14,  44 => 13,  40 => 12,  31 => 5,  28 => 4,);
    }
}
