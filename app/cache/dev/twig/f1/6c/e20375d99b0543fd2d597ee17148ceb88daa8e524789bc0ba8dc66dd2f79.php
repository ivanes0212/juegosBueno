<?php

/* ::base.html.twig */
class __TwigTemplate_f16ce20375d99b0543fd2d597ee17148ceb88daa8e524789bc0ba8dc66dd2f79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'pie' => array($this, 'block_pie'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"cabecera\">
            ";
        // line 13
        $this->displayBlock('cabecera', $context, $blocks);
        // line 16
        echo "        </div>
       
         <div id=\"cuerpo\">
            ";
        // line 19
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 20
        echo "        </div>
        
         <div id=\"pie\">
            ";
        // line 23
        $this->displayBlock('pie', $context, $blocks);
        // line 26
        echo "        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unijuegos/css/fuente.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 13
    public function block_cabecera($context, array $blocks = array())
    {
        // line 14
        echo "                <h1><font color=\"#CBCBFD\">VideoJuegos</font></h1>
            ";
    }

    // line 19
    public function block_cuerpo($context, array $blocks = array())
    {
    }

    // line 23
    public function block_pie($context, array $blocks = array())
    {
        // line 24
        echo "                <font color=\"#CBCBFD\">By IVAN</font>
            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  96 => 23,  91 => 19,  86 => 14,  83 => 13,  76 => 7,  73 => 6,  58 => 23,  53 => 20,  51 => 19,  46 => 16,  44 => 13,  36 => 9,  30 => 5,  24 => 1,  85 => 23,  82 => 22,  77 => 17,  74 => 16,  68 => 10,  65 => 9,  56 => 26,  54 => 22,  49 => 19,  40 => 9,  34 => 6,  67 => 5,  60 => 26,  47 => 16,  42 => 13,  38 => 10,  31 => 4,  28 => 4,);
    }
}
