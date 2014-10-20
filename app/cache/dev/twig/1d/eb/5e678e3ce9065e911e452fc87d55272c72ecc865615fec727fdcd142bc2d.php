<?php

/* EieinstitutBundle:Block:Block_Messagerie.html.twig */
class __TwigTemplate_1deb5e678e3ce9065e911e452fc87d55272c72ecc865615fec727fdcd142bc2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "


";
        // line 4
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<!--Block méssagerie-->

  
        <div class=\"block-border\">
            <div class=\"block-content\">
                <h1>Ma messagerie</h1>

                <ul class=\"simple-list\">
                    <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("Nouveau_message");
        echo "\">Nouveau message</a></li>
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("Recus");
        echo "\">Messages re&ccedil;us</a></li>
                    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("Envoyes");
        echo "\">Messages envoy&eacute;s</a></li>
                </ul>
            </div>
        </div>


";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Block:Block_Messagerie.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  77 => 24,  65 => 22,  53 => 20,  58 => 20,  34 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 23,  67 => 15,  63 => 15,  59 => 21,  38 => 6,  94 => 28,  89 => 26,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 14,  27 => 4,  44 => 12,  31 => 5,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 15,  24 => 3,  25 => 4,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 19,  40 => 11,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 17,  50 => 10,  43 => 8,  41 => 13,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 27,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 23,  60 => 21,  57 => 11,  54 => 18,  51 => 14,  48 => 15,  45 => 14,  42 => 12,  39 => 9,  36 => 9,  33 => 4,  30 => 10,);
    }
}
