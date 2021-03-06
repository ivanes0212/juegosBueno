<?php

/* ::base.html.twig */
class __TwigTemplate_e0cefca620ab765c3e497ad6e1ed11a374f66495d227188a6cbe18a7e5b2cb55 extends Twig_Template
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
        // line 26
        echo "        </div>
       
         <div id=\"cuerpo\">
            ";
        // line 29
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 30
        echo "        </div>
        
         <div id=\"pie\">
            ";
        // line 33
        $this->displayBlock('pie', $context, $blocks);
        // line 42
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
        echo "                <h1><font color=\"#CBCBFD\" size=\"30\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unijuegos/imagenes/mando.png"), "html", null, true);
        echo "\"width=40px height=40px>Games</font></h1>
                <h3>
                    <ul id=\"nav\">
        <li id=\"nav-1\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("juegos");
        echo "\">Juegos</a></li>
\t<li id=\"nav-2\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("categorias");
        echo "\">Categorias</a></li>
\t<li id=\"nav-3\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("plataforma");
        echo "\">Plataformas</a></li>
        <li id=\"nav-4\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("noticias");
        echo "\">Noticias</a></li>
        <li id=\"nav-5\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("juegos_buscar_juego");
        echo "\">Buscar Juego</a></li>
        <li id=\"nav-5\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("categorias_buscar_categoria");
        echo "\">Buscar Categoria</a></li>
                    </ul>
                </h3>
            ";
    }

    // line 29
    public function block_cuerpo($context, array $blocks = array())
    {
    }

    // line 33
    public function block_pie($context, array $blocks = array())
    {
        // line 34
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
        return array (  129 => 34,  126 => 33,  121 => 29,  113 => 22,  109 => 21,  105 => 20,  101 => 19,  97 => 18,  93 => 17,  86 => 14,  83 => 13,  76 => 7,  73 => 6,  67 => 5,  60 => 42,  58 => 33,  53 => 30,  51 => 29,  46 => 26,  44 => 13,  36 => 9,  34 => 6,  30 => 5,  24 => 1,);
    }
}
