<?php

/* EiAdministrationBundle:admin:a_ajouter_newsletter.html.twig */
class __TwigTemplate_669e2beb5db59791924bed431fded24c7c93c7fe0fedad94faf6b58959b3ca68 extends Twig_Template
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
        echo "   | Visio
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
        echo "\t     
<section class=\"grid_9\">\t\t\t   \t

        <div class=\"block-border\"> 
            <div class=\"block-content\"> <h1>Newsletter</h1>\t\t\t\t\t\t\t\t
                <div class=\"block-border\" id=\"status-bar\">\t\t\t\t\t
\t\t<a href=\"javascript:void(0)\" class=\"button\" title=\"\"> <strong>Tous les newsletter</strong></a>
\t\t<a href=\"javascript:void(0)\" class=\"button\" title=\"\"> <strong>Liste des abonnés</strong></a>\t
                <span class=\"float-left\">Nouveau newsletter</span>
                </div>
            </div>
                
\t<br><br>
        \t
\t\t<form class=\"block-content form\" id=\"simple_form\" method=\"post\" action=\"#\">
\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"label required\">
\t\t\t\t\t\t\t\t\tA
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"complex-fr-subtitle\" id=\"complex-fr-subtitle\" value=\"\" class=\"full-width\">
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"label required\">
\t\t\t\t\t\t\t\t\tObjet
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"complex-fr-subtitle\" id=\"complex-fr-subtitle\" value=\"\" class=\"full-width\">
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"label required\">
\t\t\t\t\t\t\tContenu
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<textarea></textarea>
\t\t\t\t\t\t<br><br>
\t\t\t\t\t
\t\t\t\t\t<div class=\"float-right\"><br>
\t\t\t\t\t\t<button type=\"button\"><img src=\"images/icons/fugue/newspaper.png\" width=\"16\" height=\"16\"> Prévisualiser</button>
\t\t\t\t\t\t<button type=\"button\"><img src=\"images/icons/fugue/cross-circle.png\" width=\"16\" height=\"16\"> Annuler</button>
\t\t\t\t\t\t<button type=\"button\"><img src=\"images/icons/fugue/tick-circle.png\" width=\"16\" height=\"16\"> Envoyer</button>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t</form>\t\t\t
\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t<div class=\"clear\"></div>\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t
</section>\t\t               
";
    }

    // line 64
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 65
        echo "
";
    }

    public function getTemplateName()
    {
        return "EiAdministrationBundle:admin:a_ajouter_newsletter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  271 => 204,  222 => 161,  244 => 173,  661 => 307,  658 => 306,  632 => 290,  627 => 288,  613 => 285,  596 => 281,  593 => 280,  590 => 279,  580 => 277,  576 => 276,  572 => 275,  568 => 273,  553 => 268,  546 => 263,  533 => 262,  526 => 258,  513 => 254,  500 => 250,  481 => 239,  463 => 233,  445 => 227,  439 => 225,  433 => 223,  421 => 219,  415 => 217,  399 => 210,  390 => 203,  388 => 202,  372 => 189,  358 => 179,  351 => 176,  347 => 174,  336 => 169,  330 => 166,  218 => 80,  215 => 79,  210 => 77,  275 => 139,  207 => 106,  200 => 142,  289 => 125,  265 => 113,  205 => 72,  192 => 67,  586 => 278,  562 => 272,  555 => 342,  548 => 341,  542 => 340,  532 => 338,  525 => 336,  522 => 257,  519 => 334,  515 => 333,  509 => 253,  505 => 252,  501 => 330,  497 => 328,  491 => 327,  482 => 323,  475 => 237,  455 => 313,  451 => 229,  446 => 310,  438 => 308,  429 => 305,  417 => 297,  410 => 294,  404 => 211,  392 => 288,  356 => 276,  350 => 274,  344 => 272,  342 => 271,  329 => 265,  310 => 237,  301 => 243,  357 => 225,  348 => 218,  340 => 171,  332 => 209,  260 => 147,  386 => 286,  352 => 158,  311 => 135,  304 => 132,  299 => 129,  248 => 86,  234 => 130,  118 => 65,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 335,  701 => 334,  696 => 333,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 291,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 286,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 283,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 361,  560 => 344,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 255,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 317,  456 => 221,  450 => 219,  442 => 309,  434 => 307,  403 => 196,  397 => 193,  383 => 185,  380 => 284,  373 => 181,  367 => 179,  361 => 177,  349 => 157,  331 => 167,  325 => 140,  319 => 163,  313 => 161,  307 => 236,  293 => 128,  282 => 142,  242 => 123,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 547,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 162,  276 => 161,  272 => 160,  267 => 158,  245 => 151,  225 => 136,  318 => 139,  306 => 167,  297 => 152,  292 => 168,  76 => 24,  291 => 188,  288 => 187,  261 => 166,  250 => 158,  137 => 44,  197 => 80,  286 => 165,  262 => 119,  259 => 156,  236 => 132,  195 => 99,  175 => 116,  188 => 121,  165 => 89,  287 => 187,  284 => 186,  256 => 146,  232 => 160,  191 => 108,  343 => 171,  338 => 146,  333 => 266,  328 => 143,  303 => 166,  281 => 120,  277 => 111,  270 => 172,  266 => 135,  231 => 83,  228 => 167,  226 => 125,  223 => 131,  194 => 118,  180 => 93,  155 => 103,  110 => 47,  81 => 24,  190 => 76,  174 => 67,  160 => 106,  152 => 71,  148 => 70,  90 => 38,  127 => 45,  114 => 46,  167 => 63,  146 => 101,  134 => 81,  263 => 157,  255 => 155,  213 => 115,  185 => 93,  153 => 61,  150 => 102,  124 => 66,  70 => 16,  683 => 544,  680 => 507,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 242,  484 => 360,  253 => 132,  249 => 152,  237 => 95,  233 => 105,  216 => 128,  212 => 78,  206 => 126,  202 => 109,  198 => 113,  186 => 103,  184 => 95,  172 => 66,  170 => 67,  161 => 109,  181 => 71,  178 => 117,  129 => 53,  126 => 67,  113 => 48,  104 => 55,  100 => 27,  84 => 26,  20 => 1,  77 => 30,  65 => 15,  53 => 10,  58 => 12,  34 => 5,  480 => 229,  474 => 227,  469 => 235,  461 => 155,  457 => 231,  453 => 151,  444 => 217,  440 => 148,  437 => 147,  435 => 146,  430 => 209,  427 => 221,  423 => 204,  413 => 216,  409 => 132,  407 => 212,  402 => 130,  398 => 290,  393 => 194,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 282,  368 => 280,  365 => 111,  362 => 181,  360 => 226,  355 => 175,  341 => 105,  337 => 169,  322 => 101,  314 => 99,  312 => 170,  309 => 97,  305 => 158,  298 => 131,  294 => 162,  285 => 126,  283 => 125,  278 => 146,  268 => 152,  264 => 139,  258 => 135,  252 => 130,  247 => 183,  241 => 150,  229 => 108,  220 => 100,  214 => 113,  177 => 113,  169 => 107,  140 => 61,  132 => 83,  128 => 56,  107 => 34,  61 => 13,  273 => 115,  269 => 114,  254 => 132,  243 => 94,  240 => 96,  238 => 131,  235 => 94,  230 => 105,  227 => 81,  224 => 126,  221 => 81,  219 => 114,  217 => 128,  208 => 111,  204 => 118,  179 => 92,  159 => 104,  143 => 53,  135 => 60,  119 => 39,  102 => 66,  71 => 30,  67 => 16,  63 => 34,  59 => 12,  38 => 6,  94 => 48,  89 => 30,  85 => 29,  75 => 31,  68 => 21,  56 => 23,  87 => 34,  21 => 2,  26 => 2,  93 => 29,  88 => 39,  78 => 29,  46 => 14,  27 => 4,  44 => 6,  31 => 10,  28 => 9,  201 => 134,  196 => 107,  183 => 82,  171 => 79,  166 => 111,  163 => 86,  158 => 93,  156 => 82,  151 => 63,  142 => 100,  138 => 76,  136 => 96,  121 => 46,  117 => 46,  105 => 40,  91 => 35,  62 => 19,  49 => 20,  24 => 1,  25 => 3,  19 => 1,  79 => 32,  72 => 19,  69 => 36,  47 => 7,  40 => 11,  37 => 13,  22 => 1,  246 => 139,  157 => 71,  145 => 86,  139 => 57,  131 => 49,  123 => 50,  120 => 65,  115 => 64,  111 => 43,  108 => 36,  101 => 39,  98 => 65,  96 => 30,  83 => 33,  74 => 29,  66 => 20,  55 => 11,  52 => 10,  50 => 9,  43 => 5,  41 => 10,  35 => 3,  32 => 2,  29 => 8,  209 => 153,  203 => 108,  199 => 83,  193 => 101,  189 => 71,  187 => 74,  182 => 71,  176 => 98,  173 => 66,  168 => 92,  164 => 107,  162 => 119,  154 => 103,  149 => 59,  147 => 83,  144 => 82,  141 => 77,  133 => 55,  130 => 57,  125 => 55,  122 => 51,  116 => 64,  112 => 43,  109 => 47,  106 => 38,  103 => 28,  99 => 43,  95 => 36,  92 => 34,  86 => 36,  82 => 48,  80 => 32,  73 => 37,  64 => 26,  60 => 15,  57 => 22,  54 => 16,  51 => 25,  48 => 11,  45 => 6,  42 => 5,  39 => 15,  36 => 5,  33 => 6,  30 => 1,);
    }
}
