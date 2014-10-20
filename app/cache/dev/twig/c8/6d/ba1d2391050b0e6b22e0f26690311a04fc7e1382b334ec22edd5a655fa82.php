<?php

/* EiAdministrationBundle:admin:a_modifier_tuto.html.twig */
class __TwigTemplate_c86dba1d2391050b0e6b22e0f26690311a04fc7e1382b334ec22edd5a655fa82 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "     ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "   | Tutoriels
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "
";
    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        // line 11
        echo "
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "   
 <section class=\"grid_9\">
\t\t\t<div class=\"fieldset with-legend grey-bg \">\t\t      
\t\t\t\t\t<div class=\"legend\">Modifier un tutoriel</div>
\t\t\t\t\t
                                        <div class=\"block-border\" id=\"status-bar\">
\t
\t\t<a href=\"javascript:void(0)\" class=\"button\" title=\"\"> <strong>Toutes les tutoriel</strong></a>
\t\t\t
\t\t\t<span class=\"float-left\">Modifier un tutoriel</span>
\t
\t</div>\t\t\t
\t\t\t\t\t\t<br><br>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<form class=\"block-content form\" id=\"tab-stats\" method=\"post\" action=\"\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h3>Informations : </h3><br><br>
\t\t\t\t\t\t\t\t<!--<legend><a href=\"#\">Recherche avancée</legend>-->
\t\t\t\t\t\t\t\t\t\t<span  class=\"label required\">
\t\t\t\t\t\t\t\t\t\t\tTitre 
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input id=\"complex-fr-subtitle\" class=\"full-width\" type=\"text\" value=\"\" name=\"nom\"><br><br>
\t\t\t\t\t\t\t\t\t\t<span  class=\"label required\">
\t\t\t\t\t\t\t\t\t\t\tDescription
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<textarea id=\"editable\" class=\"full-width\" rows=\"10\" cols=\"7\" name=\"description\">
At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</textarea><br><br>
\t\t\t\t\t\t\t
\t\t\t\t\t<div class=\"columns\">
\t\t\t\t\t\t\t<p class=\"colx2-left\">
\t\t\t\t\t\t\t\t\t<span class=\"label required\">
\t\t\t\t\t\t\t\t\t\t\tTags
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input id=\"complex-fr-subtitle\" class=\"full-width\" type=\"text\" value=\"\" name=\"tags\"> <br><br>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</p>
\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t<div class=\"columns\">
\t\t\t\t\t\t<p class=\"colx2-left\">
\t\t\t\t\t\t\t<span  class=\"label required\"> Domaine </span>
\t\t\t\t\t<select class=\"full-width\" name=\"Domaine\" id=\"stats-sites-0\" >
\t\t\t\t\t\t<option value=\"0\">Informatique</option>
\t\t\t\t\t\t<option value=\"0\">Economie</option>
\t\t\t\t\t</select><br><br>\t
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"colx2-right\">
\t\t\t\t\t\t
\t\t\t\t\t\t<span  class=\"label required\"> Théme</span>
\t\t\t\t\t<select class=\"full-width\" name=\"theme\" id=\"stats-sites-0\">
\t\t\t\t\t\t<option value=\"0\">Développemnt</option>
\t\t\t\t\t\t<option value=\"0\">Réseau</option>
\t\t\t\t\t</select><br><br>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<span  class=\"label required\"> Options</span>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-1\" value=\"1\">&nbsp;<label for=\"simple-checkbox-1\">Audio</label> 
\t\t\t\t\t\t<input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-2\" value=\"1\">&nbsp;<label for=\"simple-checkbox-2\">Video</label> 
\t\t\t\t\t\t<input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-3\" value=\"1\">&nbsp;<label for=\"simple-checkbox-3\">Tableau blanc</label> 
\t\t\t\t\t\t<br><br>\t
\t\t\t\t\t<span class=\"label required\">
\t\t\t\t\t\t\t\t\tDate
\t\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"input-type-text margin-right relative\"><input type=\"text\" name=\"simple-calendar\" id=\"simple-calendar\" value=\"\" class=\"datepicker\"><img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/images/icons/fugue/calendar-month.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></span>
\t\t\t\t\t
\t\t\t\t<span  class=\"label required\">Heure</span>
\t\t\t\t\t<select  name=\"theme\" id=\"stats-sites-0\">
\t\t\t\t\t\t<option value=\"0\">1</option>
\t\t\t\t\t\t<option value=\"0\">2</option>
\t\t\t\t\t</select>
\t\t\t\t\t<select  name=\"theme\" id=\"stats-sites-0\">
\t\t\t\t\t\t<option value=\"0\">10</option>
\t\t\t\t\t\t<option value=\"0\">15</option>
\t\t\t\t\t</select>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<br><br>\t\t\t\t\t
\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t<div class=\"float-right\"><br>
\t\t\t<button type=\"button\"><img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/images/icons/fugue/cross-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Annuler</button>
\t\t\t<button type=\"button\"><img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/images/icons/fugue/tick-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Enregistrer</button>
\t\t\t\t\t\t\t\t
\t\t\t</div>
\t\t\t\t
\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t</section>

          
";
    }

    // line 120
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 121
        echo "
";
    }

    public function getTemplateName()
    {
        return "EiAdministrationBundle:admin:a_modifier_tuto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 110,  378 => 232,  353 => 216,  326 => 193,  295 => 177,  279 => 120,  257 => 164,  97 => 39,  23 => 3,  271 => 204,  222 => 161,  244 => 173,  661 => 307,  658 => 306,  632 => 290,  627 => 288,  613 => 285,  596 => 281,  593 => 280,  590 => 279,  580 => 277,  576 => 276,  572 => 275,  568 => 273,  553 => 268,  546 => 263,  533 => 262,  526 => 258,  513 => 254,  500 => 250,  481 => 239,  463 => 233,  445 => 227,  439 => 225,  433 => 223,  421 => 219,  415 => 217,  399 => 210,  390 => 203,  388 => 202,  372 => 189,  358 => 179,  351 => 176,  347 => 174,  336 => 169,  330 => 166,  218 => 121,  215 => 79,  210 => 95,  275 => 139,  207 => 106,  200 => 142,  289 => 125,  265 => 113,  205 => 109,  192 => 99,  586 => 278,  562 => 272,  555 => 342,  548 => 341,  542 => 340,  532 => 338,  525 => 336,  522 => 257,  519 => 334,  515 => 333,  509 => 253,  505 => 252,  501 => 330,  497 => 328,  491 => 327,  482 => 323,  475 => 237,  455 => 313,  451 => 229,  446 => 310,  438 => 308,  429 => 305,  417 => 297,  410 => 294,  404 => 211,  392 => 288,  356 => 217,  350 => 274,  344 => 272,  342 => 271,  329 => 265,  310 => 237,  301 => 178,  357 => 225,  348 => 218,  340 => 159,  332 => 209,  260 => 165,  386 => 286,  352 => 167,  311 => 135,  304 => 132,  299 => 129,  248 => 86,  234 => 133,  118 => 39,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 335,  701 => 334,  696 => 333,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 291,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 286,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 283,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 361,  560 => 344,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 255,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 317,  456 => 221,  450 => 219,  442 => 309,  434 => 307,  403 => 196,  397 => 193,  383 => 185,  380 => 284,  373 => 181,  367 => 179,  361 => 177,  349 => 157,  331 => 167,  325 => 140,  319 => 163,  313 => 182,  307 => 236,  293 => 128,  282 => 142,  242 => 112,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 547,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 162,  276 => 161,  272 => 160,  267 => 158,  245 => 142,  225 => 120,  318 => 141,  306 => 167,  297 => 152,  292 => 168,  76 => 24,  291 => 188,  288 => 187,  261 => 166,  250 => 114,  137 => 63,  197 => 80,  286 => 175,  262 => 117,  259 => 156,  236 => 132,  195 => 108,  175 => 116,  188 => 104,  165 => 89,  287 => 187,  284 => 186,  256 => 146,  232 => 160,  191 => 108,  343 => 160,  338 => 146,  333 => 266,  328 => 143,  303 => 166,  281 => 120,  277 => 111,  270 => 172,  266 => 135,  231 => 134,  228 => 167,  226 => 108,  223 => 131,  194 => 100,  180 => 91,  155 => 103,  110 => 36,  81 => 24,  190 => 85,  174 => 74,  160 => 91,  152 => 71,  148 => 70,  90 => 34,  127 => 42,  114 => 44,  167 => 88,  146 => 101,  134 => 81,  263 => 157,  255 => 155,  213 => 115,  185 => 91,  153 => 61,  150 => 71,  124 => 41,  70 => 16,  683 => 544,  680 => 507,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 242,  484 => 360,  253 => 132,  249 => 139,  237 => 134,  233 => 122,  216 => 96,  212 => 120,  206 => 94,  202 => 99,  198 => 113,  186 => 98,  184 => 77,  172 => 84,  170 => 94,  161 => 93,  181 => 92,  178 => 96,  129 => 53,  126 => 67,  113 => 48,  104 => 48,  100 => 27,  84 => 26,  20 => 1,  77 => 27,  65 => 15,  53 => 11,  58 => 13,  34 => 5,  480 => 229,  474 => 227,  469 => 235,  461 => 155,  457 => 231,  453 => 151,  444 => 217,  440 => 148,  437 => 147,  435 => 146,  430 => 209,  427 => 221,  423 => 204,  413 => 216,  409 => 132,  407 => 212,  402 => 130,  398 => 290,  393 => 194,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 282,  368 => 280,  365 => 224,  362 => 181,  360 => 226,  355 => 175,  341 => 105,  337 => 169,  322 => 101,  314 => 99,  312 => 170,  309 => 97,  305 => 158,  298 => 123,  294 => 162,  285 => 121,  283 => 125,  278 => 146,  268 => 152,  264 => 139,  258 => 115,  252 => 130,  247 => 183,  241 => 150,  229 => 108,  220 => 100,  214 => 113,  177 => 106,  169 => 74,  140 => 69,  132 => 65,  128 => 56,  107 => 46,  61 => 14,  273 => 119,  269 => 114,  254 => 132,  243 => 94,  240 => 132,  238 => 112,  235 => 111,  230 => 121,  227 => 138,  224 => 126,  221 => 147,  219 => 114,  217 => 128,  208 => 101,  204 => 118,  179 => 120,  159 => 107,  143 => 67,  135 => 86,  119 => 54,  102 => 34,  71 => 21,  67 => 16,  63 => 34,  59 => 12,  38 => 6,  94 => 32,  89 => 30,  85 => 29,  75 => 31,  68 => 17,  56 => 23,  87 => 34,  21 => 2,  26 => 2,  93 => 38,  88 => 33,  78 => 29,  46 => 14,  27 => 4,  44 => 6,  31 => 10,  28 => 9,  201 => 121,  196 => 87,  183 => 124,  171 => 79,  166 => 111,  163 => 108,  158 => 77,  156 => 70,  151 => 68,  142 => 100,  138 => 76,  136 => 87,  121 => 40,  117 => 57,  105 => 39,  91 => 35,  62 => 19,  49 => 20,  24 => 1,  25 => 3,  19 => 1,  79 => 32,  72 => 22,  69 => 19,  47 => 7,  40 => 11,  37 => 13,  22 => 1,  246 => 139,  157 => 88,  145 => 56,  139 => 65,  131 => 49,  123 => 50,  120 => 65,  115 => 38,  111 => 43,  108 => 53,  101 => 39,  98 => 37,  96 => 30,  83 => 33,  74 => 29,  66 => 16,  55 => 11,  52 => 10,  50 => 10,  43 => 5,  41 => 10,  35 => 4,  32 => 3,  29 => 8,  209 => 107,  203 => 108,  199 => 83,  193 => 101,  189 => 92,  187 => 84,  182 => 121,  176 => 98,  173 => 75,  168 => 81,  164 => 107,  162 => 71,  154 => 87,  149 => 59,  147 => 66,  144 => 82,  141 => 77,  133 => 57,  130 => 64,  125 => 55,  122 => 51,  116 => 58,  112 => 37,  109 => 50,  106 => 35,  103 => 38,  99 => 43,  95 => 36,  92 => 35,  86 => 33,  82 => 32,  80 => 32,  73 => 20,  64 => 26,  60 => 15,  57 => 22,  54 => 16,  51 => 25,  48 => 11,  45 => 7,  42 => 6,  39 => 15,  36 => 5,  33 => 6,  30 => 1,);
    }
}
