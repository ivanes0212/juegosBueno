<?php

/* uniJuegosBundle:plataforma:show.html.twig */
class __TwigTemplate_217480fba6455e11c9c96230f427f1273c2395eb843de03faed59de2ca808c65 extends Twig_Template
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
        echo "<center><h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombrePlat"), "html", null, true);
        echo "</h2></center>

    <table class=\"record_properties\">
        
                  <div id=\"plat\"><h2><u>Juegos en estas plataformas</u> </h2>
                    
                 ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "platjue"));
        foreach ($context['_seq'] as $context["_key"] => $context["plats"]) {
            // line 12
            echo "            
                 <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("juegos_show", array("id" => $this->getAttribute((isset($context["plats"]) ? $context["plats"] : $this->getContext($context, "plats")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plats"]) ? $context["plats"] : $this->getContext($context, "plats")), "tituloJue"), "html", null, true);
            echo "</a>
                 <br><br>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plats'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "  
                 </div>
       
    </table>
<div id=\"edit\">
        <ul class=\"record_actions\">
            <h4>Administración</h4>
    
    <li>
        <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plataforma_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Editar plataforma
        </a>
    </li>
    <li>";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "uniJuegosBundle:plataforma:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 28,  70 => 24,  59 => 15,  48 => 13,  45 => 12,  41 => 11,  31 => 5,  28 => 4,);
    }
}
