<?php

/* uniJuegosBundle:noticias:index.html.twig */
class __TwigTemplate_be0b021dc17e21b2926f9b6ce78c3e468255c5ffde1c7c57416052774fa56c2b extends Twig_Template
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
        echo "<center><h2>Noticias</h2></center>

    
    
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
                echo "\" width=350px height=175px/>
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
                echo "\" width=350px height=175px/>
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
    <h4><center>Administración</center></h4>
        <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("noticias_new");
        echo "\">
                Añadir una nueva noticia
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
        return array (  70 => 24,  97 => 28,  76 => 7,  58 => 32,  53 => 29,  77 => 28,  65 => 9,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 16,  67 => 28,  63 => 13,  59 => 18,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 28,  105 => 20,  91 => 26,  62 => 23,  49 => 16,  38 => 10,  93 => 17,  88 => 6,  78 => 20,  26 => 6,  87 => 25,  46 => 13,  21 => 2,  94 => 28,  89 => 20,  85 => 23,  75 => 17,  68 => 10,  56 => 26,  27 => 4,  44 => 13,  31 => 5,  25 => 3,  28 => 4,  24 => 1,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 16,  40 => 9,  37 => 9,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 36,  115 => 43,  111 => 37,  108 => 36,  101 => 19,  98 => 31,  96 => 31,  83 => 23,  74 => 16,  66 => 23,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 11,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 33,  122 => 32,  116 => 41,  112 => 30,  109 => 21,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 14,  82 => 22,  80 => 41,  73 => 6,  64 => 14,  60 => 24,  57 => 11,  54 => 10,  51 => 28,  48 => 13,  45 => 12,  42 => 11,  39 => 9,  36 => 9,  33 => 4,  30 => 5,);
    }
}
