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
        // line 23
        echo "        </div>
       
         <div id=\"cuerpo\">
            ";
        // line 26
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 27
        echo "        </div>
        
         <div id=\"pie\">
            ";
        // line 30
        $this->displayBlock('pie', $context, $blocks);
        // line 39
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
        echo "                <h1><font color=\"#CBCBFD\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unijuegos/imagenes/mando.png"), "html", null, true);
        echo "\"width=40px height=40px>Games</font></h1>
                <ul id=\"nav\">
        <li id=\"nav-1\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("juegos");
        echo "\">Juegos</a></li>
\t<li id=\"nav-2\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("categorias");
        echo "\">Categorias</a></li>
\t<li id=\"nav-3\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("plataforma");
        echo "\">Plataformas</a></li>
        <li id=\"nav-4\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("noticias");
        echo "\">Noticias</a></li>
        <li id=\"nav-5\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("juegos_buscar_juego");
        echo "\">Buscar Juego</a></li>
                </ul>
            ";
    }

    // line 26
    public function block_cuerpo($context, array $blocks = array())
    {
    }

    // line 30
    public function block_pie($context, array $blocks = array())
    {
        // line 31
        echo "                <h6><font color=\"#CBCBFD\">
                    CONTACTO -> ivanesfc@hotmail.com
                    <br>
                    SITIO WEB -> juegos.com
                    <br>
                    CENTRO -> uni Eibar-Ermua
                    </font></h6>
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
        return array (  123 => 31,  120 => 30,  115 => 26,  108 => 20,  104 => 19,  100 => 18,  96 => 17,  92 => 16,  86 => 14,  83 => 13,  76 => 7,  73 => 6,  67 => 5,  60 => 39,  58 => 30,  53 => 27,  51 => 26,  46 => 23,  44 => 13,  30 => 5,  24 => 1,  85 => 23,  82 => 22,  77 => 17,  74 => 16,  68 => 10,  65 => 9,  54 => 22,  49 => 19,  47 => 16,  42 => 13,  34 => 6,  62 => 19,  56 => 26,  43 => 10,  40 => 9,  36 => 9,  31 => 4,  28 => 4,);
    }
}
