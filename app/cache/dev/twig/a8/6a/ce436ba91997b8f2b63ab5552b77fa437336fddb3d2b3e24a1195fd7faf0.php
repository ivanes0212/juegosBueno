<?php

/* uniJuegosBundle:juegos:buscarJuego.html.twig */
class __TwigTemplate_a86ace436ba91997b8f2b63ab5552b77fa437336fddb3d2b3e24a1195fd7faf0 extends Twig_Template
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
        echo "<br>Buscar titulo:
<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("juegos_responder_juego");
        echo "\" method=\"POST\">
    <input type=\"text\" name=\"titulo\" value=\"Buscar juego\">
    <input type=\"submit\" value=\"OK\">
</form>
      
    
";
    }

    public function getTemplateName()
    {
        return "uniJuegosBundle:juegos:buscarJuego.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  31 => 5,  28 => 4,);
    }
}
