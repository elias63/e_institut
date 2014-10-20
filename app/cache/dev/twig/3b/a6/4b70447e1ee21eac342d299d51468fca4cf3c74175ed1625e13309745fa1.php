<?php

/* EiAdministrationBundle:admin:a_modifier_critere.html.twig */
class __TwigTemplate_3ba64b70447e1ee21eac342d299d51468fca4cf3c74175ed1625e13309745fa1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EiAdministrationBundle::Master-Base-Admin.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'javascripts_Bottom' => array($this, 'block_javascripts_Bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EiAdministrationBundle::Master-Base-Admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "     ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "   | Modifier critere
";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "
";
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        // line 10
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "  
<section class=\"grid_9\">\t

";
        // line 16
        if ((!(null === (isset($context["critere"]) ? $context["critere"] : $this->getContext($context, "critere"))))) {
            // line 17
            echo "        <div class=\"block-border\"> 
            <div class=\"block-content\"> <h1>Modifier la critere</h1>\t\t\t\t\t\t\t\t
                <div class=\"block-border\" id=\"status-bar\">\t\t\t\t
\t\t<a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("ei_administration_preconisation");
            echo "\" class=\"button\" title=\"\"> <strong>Toutes les criteres</strong></a>
\t\t\t
\t\t<span class=\"float-left\">Modifier critere</span>
                </div>
            </div>
                
\t<br><br>
        
        <div class=\"block-content\">
                               
\t\t\t<form class=\"block-content form\" id=\"simple_form\" method=\"post\" action=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ei_administration_modifier_preconisation", array("id" => $this->getAttribute((isset($context["critere"]) ? $context["critere"] : $this->getContext($context, "critere")), "id"))), "html", null, true);
            echo "\">
                                 ";
            // line 31
            $context["libelle"] = $this->getAttribute((isset($context["critere"]) ? $context["critere"] : $this->getContext($context, "critere")), "libelle");
            // line 32
            echo "
 

                                
\t\t\t\t<div class=\"columns\">
\t\t\t\t
\t\t\t\t\t\t<p class=\"colx2-left\">
\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"label required\">
\t\t\t\t\t\t\t\t\tModifier le critere
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"libelle\" id=\"complex-fr-subtitle\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
            echo "\" class=\"label\">
\t\t\t\t\t\t\t<br><br>
\t
\t\t\t\t\t\t\t</p> \t
                                                        
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t<div class=\"float-right\"><br>
                                                <a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("ei_administration_preconisation");
            echo "\"> <button type=\"button\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"> Annuler</button></a>
\t\t\t\t\t\t<button type=\"submit\" name=\"btn_save\"><img src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/tick-circle.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"> Enregistrer</button>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t</form>
\t\t\t</div>
\t\t\t\t
\t\t

                
\t\t\t\t\t\t</div>\t
";
        }
        // line 65
        echo "  

";
        // line 67
        if ((!(null === (isset($context["note"]) ? $context["note"] : $this->getContext($context, "note"))))) {
            // line 68
            echo "        <div class=\"block-border\"> 
            <div class=\"block-content\"> <h1>Modifier la critere</h1>\t\t\t\t\t\t\t\t
                <div class=\"block-border\" id=\"status-bar\">\t\t\t\t
\t\t<a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("ei_administration_preconisation");
            echo "\" class=\"button\" title=\"\"> <strong>Toutes les notes</strong></a>
\t\t\t
\t\t<span class=\"float-left\">Modifier note</span>
                </div>
            </div>
                
\t<br><br>
        
        <div class=\"block-content\">
                               
\t\t\t<form class=\"block-content form\" id=\"simple_form\" method=\"post\" action=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ei_administration_modifier_note", array("id" => $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "id"))), "html", null, true);
            echo "\">
                                 ";
            // line 82
            $context["libelle"] = $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "libelle");
            // line 83
            echo "                                 ";
            $context["annotation"] = $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "annotation");
            // line 84
            echo " 

                                
\t\t\t\t<div class=\"columns\">
\t\t\t\t
\t\t\t\t\t\t<p class=\"colx2-left\">
\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"label required\">
\t\t\t\t\t\t\t\t\tModifier le libelle
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"libelle\" id=\"complex-fr-subtitle\" value=\"";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
            echo "\" class=\"label\">
\t\t\t\t\t\t\t<br><br>
                                                                <span class=\"label required\">
\t\t\t\t\t\t\t\t\tModifier le annotation
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"annotation\" id=\"complex-fr-subtitle\" value=\"";
            // line 99
            echo twig_escape_filter($this->env, (isset($context["annotation"]) ? $context["annotation"] : $this->getContext($context, "annotation")), "html", null, true);
            echo "\" class=\"label\">
\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t</p> \t
                                                        
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t<div class=\"float-right\"><br>
                                                <a href=\"";
            // line 109
            echo $this->env->getExtension('routing')->getPath("ei_administration_preconisation");
            echo "\"> <button type=\"button\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"> Annuler</button></a>
\t\t\t\t\t\t<button type=\"submit\" name=\"btn_save\"><img src=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/tick-circle.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"> Enregistrer</button>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t</form>
\t\t\t</div>
\t\t\t\t
\t\t

                
\t\t\t\t\t\t</div>\t
";
        }
        // line 120
        echo "         
\t\t<div class=\"clear\"></div>\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t
</section>\t\t               
";
    }

    // line 126
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 127
        echo "
";
    }

    public function getTemplateName()
    {
        return "EiAdministrationBundle:admin:a_modifier_critere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 110,  378 => 232,  353 => 216,  326 => 193,  295 => 177,  279 => 120,  257 => 164,  97 => 39,  23 => 3,  271 => 204,  222 => 161,  244 => 173,  661 => 307,  658 => 306,  632 => 290,  627 => 288,  613 => 285,  596 => 281,  593 => 280,  590 => 279,  580 => 277,  576 => 276,  572 => 275,  568 => 273,  553 => 268,  546 => 263,  533 => 262,  526 => 258,  513 => 254,  500 => 250,  481 => 239,  463 => 233,  445 => 227,  439 => 225,  433 => 223,  421 => 219,  415 => 217,  399 => 210,  390 => 203,  388 => 202,  372 => 189,  358 => 179,  351 => 176,  347 => 174,  336 => 169,  330 => 166,  218 => 106,  215 => 79,  210 => 105,  275 => 139,  207 => 106,  200 => 142,  289 => 125,  265 => 113,  205 => 109,  192 => 99,  586 => 278,  562 => 272,  555 => 342,  548 => 341,  542 => 340,  532 => 338,  525 => 336,  522 => 257,  519 => 334,  515 => 333,  509 => 253,  505 => 252,  501 => 330,  497 => 328,  491 => 327,  482 => 323,  475 => 237,  455 => 313,  451 => 229,  446 => 310,  438 => 308,  429 => 305,  417 => 297,  410 => 294,  404 => 211,  392 => 288,  356 => 217,  350 => 274,  344 => 272,  342 => 271,  329 => 265,  310 => 237,  301 => 178,  357 => 225,  348 => 218,  340 => 159,  332 => 209,  260 => 165,  386 => 286,  352 => 167,  311 => 135,  304 => 132,  299 => 129,  248 => 86,  234 => 126,  118 => 65,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 335,  701 => 334,  696 => 333,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 291,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 286,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 283,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 361,  560 => 344,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 255,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 317,  456 => 221,  450 => 219,  442 => 309,  434 => 307,  403 => 196,  397 => 193,  383 => 185,  380 => 284,  373 => 181,  367 => 179,  361 => 177,  349 => 157,  331 => 167,  325 => 140,  319 => 163,  313 => 182,  307 => 236,  293 => 128,  282 => 142,  242 => 112,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 547,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 162,  276 => 161,  272 => 160,  267 => 158,  245 => 142,  225 => 120,  318 => 141,  306 => 167,  297 => 152,  292 => 168,  76 => 24,  291 => 188,  288 => 187,  261 => 166,  250 => 114,  137 => 63,  197 => 80,  286 => 175,  262 => 117,  259 => 156,  236 => 132,  195 => 99,  175 => 116,  188 => 121,  165 => 89,  287 => 187,  284 => 186,  256 => 146,  232 => 160,  191 => 108,  343 => 160,  338 => 146,  333 => 266,  328 => 143,  303 => 166,  281 => 120,  277 => 111,  270 => 172,  266 => 135,  231 => 134,  228 => 167,  226 => 108,  223 => 131,  194 => 100,  180 => 91,  155 => 103,  110 => 47,  81 => 24,  190 => 85,  174 => 74,  160 => 91,  152 => 71,  148 => 70,  90 => 31,  127 => 45,  114 => 46,  167 => 82,  146 => 101,  134 => 81,  263 => 157,  255 => 155,  213 => 115,  185 => 91,  153 => 91,  150 => 71,  124 => 66,  70 => 16,  683 => 544,  680 => 507,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 242,  484 => 360,  253 => 132,  249 => 139,  237 => 127,  233 => 122,  216 => 106,  212 => 150,  206 => 126,  202 => 99,  198 => 113,  186 => 98,  184 => 94,  172 => 84,  170 => 94,  161 => 93,  181 => 92,  178 => 96,  129 => 53,  126 => 67,  113 => 48,  104 => 48,  100 => 27,  84 => 26,  20 => 1,  77 => 27,  65 => 15,  53 => 10,  58 => 12,  34 => 5,  480 => 229,  474 => 227,  469 => 235,  461 => 155,  457 => 231,  453 => 151,  444 => 217,  440 => 148,  437 => 147,  435 => 146,  430 => 209,  427 => 221,  423 => 204,  413 => 216,  409 => 132,  407 => 212,  402 => 130,  398 => 290,  393 => 194,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 282,  368 => 280,  365 => 224,  362 => 181,  360 => 226,  355 => 175,  341 => 105,  337 => 169,  322 => 101,  314 => 99,  312 => 170,  309 => 97,  305 => 158,  298 => 123,  294 => 162,  285 => 121,  283 => 125,  278 => 146,  268 => 152,  264 => 139,  258 => 115,  252 => 130,  247 => 183,  241 => 150,  229 => 108,  220 => 100,  214 => 113,  177 => 106,  169 => 83,  140 => 69,  132 => 65,  128 => 56,  107 => 46,  61 => 13,  273 => 119,  269 => 114,  254 => 132,  243 => 94,  240 => 132,  238 => 131,  235 => 94,  230 => 121,  227 => 138,  224 => 126,  221 => 147,  219 => 114,  217 => 128,  208 => 101,  204 => 118,  179 => 92,  159 => 104,  143 => 67,  135 => 86,  119 => 54,  102 => 41,  71 => 21,  67 => 16,  63 => 34,  59 => 12,  38 => 6,  94 => 32,  89 => 30,  85 => 29,  75 => 31,  68 => 17,  56 => 23,  87 => 34,  21 => 2,  26 => 2,  93 => 38,  88 => 33,  78 => 29,  46 => 14,  27 => 4,  44 => 6,  31 => 10,  28 => 9,  201 => 121,  196 => 96,  183 => 124,  171 => 79,  166 => 111,  163 => 81,  158 => 77,  156 => 70,  151 => 68,  142 => 100,  138 => 76,  136 => 67,  121 => 58,  117 => 57,  105 => 43,  91 => 35,  62 => 19,  49 => 20,  24 => 1,  25 => 3,  19 => 1,  79 => 32,  72 => 22,  69 => 19,  47 => 7,  40 => 11,  37 => 13,  22 => 1,  246 => 139,  157 => 88,  145 => 68,  139 => 65,  131 => 49,  123 => 50,  120 => 65,  115 => 64,  111 => 43,  108 => 53,  101 => 39,  98 => 33,  96 => 30,  83 => 33,  74 => 29,  66 => 16,  55 => 11,  52 => 10,  50 => 9,  43 => 5,  41 => 10,  35 => 3,  32 => 2,  29 => 8,  209 => 107,  203 => 108,  199 => 83,  193 => 101,  189 => 92,  187 => 84,  182 => 71,  176 => 98,  173 => 66,  168 => 81,  164 => 107,  162 => 71,  154 => 87,  149 => 59,  147 => 66,  144 => 82,  141 => 77,  133 => 62,  130 => 64,  125 => 55,  122 => 51,  116 => 58,  112 => 43,  109 => 50,  106 => 35,  103 => 28,  99 => 43,  95 => 42,  92 => 32,  86 => 30,  82 => 29,  80 => 32,  73 => 20,  64 => 26,  60 => 15,  57 => 22,  54 => 16,  51 => 25,  48 => 11,  45 => 6,  42 => 5,  39 => 15,  36 => 5,  33 => 6,  30 => 1,);
    }
}
