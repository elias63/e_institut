<?php

/* EieinstitutBundle:Ressources:recherche_ressource.html.twig */
class __TwigTemplate_335f57810f2d633ac9fca58e21f2be11d4a4b97b938c0ca5296d8c885e2870b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EieinstitutBundle::Sub-Master-Left.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'Slide' => array($this, 'block_Slide'),
            'Sub_Content' => array($this, 'block_Sub_Content'),
            'javascripts_Bottom' => array($this, 'block_javascripts_Bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EieinstitutBundle::Sub-Master-Left.html.twig";
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
        echo "   | Ajouter une ressource
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
    public function block_Slide($context, array $blocks = array())
    {
        // line 13
        echo "
";
    }

    // line 15
    public function block_Sub_Content($context, array $blocks = array())
    {
        // line 16
        echo "
    <section class=\"grid_9\">
\t\t\t\t<small>Espace personnel</small>
\t\t\t</section>
\t\t\t
\t\t
\t\t<section class=\"grid_9\">
\t\t\t<div class=\"block-border\">
\t\t\t    <div class=\"block-content\">

\t\t\t      
\t\t\t\t\t<div class=\"block-controls\">
\t\t\t\t\t\t\t\t<h1>Recherche avancée de ressources </h1>  <br><br>
\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t\t<form class=\"form\" id=\"tab-stats\" method=\"post\" action=\"\">
\t\t\t\t\t\t\t<fieldset class=\"grey-bg\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!--<legend><a href=\"#\">Recherche avancée</legend>-->
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span class=\"label required\"> Domaine </span>
\t\t\t\t\t\t<select class=\"full-width\" name=\"Domaine\" id=\"stats-sites-0\">
\t\t\t\t\t\t\t<option value=\"0\">Informatique</option>
\t\t\t\t\t\t\t<option value=\"0\">Economie</option>
\t\t\t\t\t\t</select><br><br>\t\t
\t\t\t\t\t
\t\t\t\t\t<span class=\"label required\"> Théme</span>
\t\t\t\t\t\t<select class=\"full-width\" name=\"theme\" id=\"stats-sites-0\">
\t\t\t\t\t\t\t<option value=\"0\">Développemnt</option>
\t\t\t\t\t\t\t<option value=\"0\">Réseau</option>
\t\t\t\t\t\t</select><br><br>\t
\t\t\t\t\t\t\t
\t\t\t\t\t<span class=\"label required\">Type</span>
\t\t\t\t\t\t<select class=\"full-width\" name=\"type\" id=\"stats-sites-0\">
\t\t\t\t\t\t\t<option value=\"0\">Vidéo</option>
\t\t\t\t\t\t\t<option value=\"0\">Document PDF</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"columns\">
\t\t\t\t\t\t\t<p class=\"colx2-left\">
\t\t\t\t\t\t\t\t\t<span class=\"label required\">
\t\t\t\t\t\t\t\t\t\t\tTags
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input id=\"complex-fr-subtitle\" class=\"full-width\" type=\"text\" value=\"\" name=\"tags\"> <br><br>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"colx2-right\">
\t\t\t\t\t\t\t<span class=\"label \">
\t\t\t\t\t\t\t\t\t\t&nbsp;\t
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<button type=\"button\">Ajouter</button> <br><br>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t<div class=\"block-border\">
\t\t\t    <div class=\"block-content no-title\">
\t\t\t    \t<h3>Tags</h3>
\t\t\t    
\t\t\t\t\t<ul class=\"tags\">
\t\t\t\t\t    <li>Sea</li>
\t\t\t\t\t    <li>Fish</li>
\t\t\t\t\t    <li>Bubble</li>
\t\t\t\t\t    <li>Sea</li>
\t\t\t\t\t    <li>Fish</li>
\t\t\t\t\t    <li>Bubble</li>
\t\t\t\t\t    <li>Sea</li>
\t\t\t\t\t    <li>Fish</li>
\t\t\t\t\t    <li>Bubble</li>
\t\t\t\t\t    <li>Sea</li>
\t\t\t\t\t    <li>Fish</li>
\t\t\t\t\t    <li>Bubble</li>
\t\t\t\t\t    <li>Fish</li>
\t\t\t\t\t    <li>Bubble</li>
\t\t\t\t\t    <li>Sea</li>
\t\t\t\t\t    <li>Fish</li>
\t\t\t\t\t    <li>Bubble</li>
\t\t\t\t\t    <li>Sea</li>
\t\t\t\t\t    <li>Fish</li>
\t\t\t\t\t    <li>Bubble</li>
\t\t\t\t\t    <li>Fish</li>
\t\t\t\t\t    <li>Bubble</li>
\t\t\t\t\t    <li>Sea</li>
\t\t\t\t\t    <li>Fish</li>
\t\t\t\t\t    <li>Bubble</li>
\t\t\t\t\t    <li>Sea</li>
\t\t\t\t\t    <li>Fish</li>
\t\t\t\t\t    <li>Bubble</li>
\t\t\t\t\t    <li>Fish</li>
\t\t\t\t\t    <li>Bubble</li>
\t\t\t\t\t    <li>Sea</li>
\t\t\t\t\t    <li>Fish</li>
\t\t\t\t\t    <li>Bubble</li>
\t\t\t\t\t    <li>Sea</li>
\t\t\t\t\t    <li>Fish</li>
\t\t\t\t\t    <li>Bubble</li>
\t\t\t\t\t</ul>

\t\t\t\t</div>
\t\t\t</div><br>
\t\t\t
\t\t\t<ul class=\"checkable-list\">
\t\t\t\t<li><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-1\" value=\"1\">&nbsp;<label for=\"simple-radio-1\"><b>pour préparer..</b></label>
\t\t\t\t\t<ul class=\"checkable-list\">
\t\t\t\t\t\t<li><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-1\" value=\"1\">&nbsp;<label for=\"simple-radio-1\"> <b>mes cours</b></label></li>
\t\t\t\t\t\t<li><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-1\" value=\"1\">&nbsp;<label for=\"simple-radio-1\"><b> mes travaux dirigés</b></label></li>
\t\t\t\t\t\t<li><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-1\" value=\"1\">&nbsp;<label for=\"simple-radio-1\"> <b>mes expériences</b></label></li>
\t\t\t\t\t\t<li><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-1\" value=\"1\">&nbsp;<label for=\"simple-radio-1\"> <b> mes exposés scientifiques</b></label></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-2\" value=\"2\">&nbsp;<label for=\"simple-radio-2\"><b>pour donner des compléments documentaires à..</b></label>
\t\t\t\t\t<ul class=\"checkable-list\">
\t\t\t\t\t\t<li><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-1\" value=\"1\">&nbsp;<label for=\"simple-radio-1\"> <b>mes cours</b></label></li>
\t\t\t\t\t\t<li><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-1\" value=\"1\">&nbsp;<label for=\"simple-radio-1\"><b> mes travaux dirigés</b></label></li>
\t\t\t\t\t\t<li><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-1\" value=\"1\">&nbsp;<label for=\"simple-radio-1\"> <b>mes expériences</b></label></li>
\t\t\t\t\t\t<li><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-1\" value=\"1\">&nbsp;<label for=\"simple-radio-1\"> <b> mes exposés scientifiques</b></label></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-1\" value=\"1\">&nbsp;<label for=\"simple-radio-1\"><b>pour comprendre les bases d'un sujet</b></label></li>
\t\t\t\t<li><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-1\" value=\"1\">&nbsp;<label for=\"simple-radio-1\"><b>pour approfondir mes connaissances sur un sujet</b></label></li>
\t\t\t\t<li><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-1\" value=\"1\">&nbsp;<label for=\"simple-radio-1\"><b>pour résoudre les problèmes du domaine</b></label></li>
\t\t\t\t<li><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-1\" value=\"1\">&nbsp;<label for=\"simple-radio-1\"><b>pour s'exercer</b></label></li>
\t\t\t</ul>
\t\t
\t\t\t\t\t\t<span class=\"label\">Trier les résultats par...</span>
\t\t\t\t\t\t<hr align=\"left\" width=\"50%\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-1\" value=\"1\">&nbsp;<label for=\"simple-checkbox-1\">Les plus conseillées par le réseau</label> <br><br>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-2\" value=\"2\">&nbsp;<label for=\"simple-checkbox-2\">Les ressources officielles (IUT en ligne)</label><br><br>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-1\" value=\"1\">&nbsp;<label for=\"simple-checkbox-1\">Les dernières mises en ligne</label> <br>
\t\t\t\t\t\t
\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t
\t\t\t<div class=\"float-right\"><br>
\t\t\t
\t\t\t<button type=\"button\"><img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/tick-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Rechercher</button>
\t\t\t\t\t\t\t\t
\t\t\t</div>
\t\t\t\t</fieldset></form></div>
\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t</section>

";
    }

    // line 166
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 167
        echo "
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Ressources:recherche_ressource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  661 => 307,  658 => 306,  632 => 290,  627 => 288,  613 => 285,  596 => 281,  593 => 280,  590 => 279,  580 => 277,  576 => 276,  572 => 275,  568 => 273,  553 => 268,  546 => 263,  533 => 262,  526 => 258,  513 => 254,  500 => 250,  481 => 239,  463 => 233,  445 => 227,  439 => 225,  433 => 223,  421 => 219,  415 => 217,  399 => 210,  390 => 203,  388 => 202,  372 => 189,  358 => 179,  351 => 176,  347 => 174,  336 => 169,  330 => 166,  218 => 80,  215 => 79,  210 => 77,  275 => 139,  207 => 76,  200 => 121,  289 => 125,  265 => 113,  205 => 72,  192 => 67,  586 => 278,  562 => 272,  555 => 342,  548 => 341,  542 => 340,  532 => 338,  525 => 336,  522 => 257,  519 => 334,  515 => 333,  509 => 253,  505 => 252,  501 => 330,  497 => 328,  491 => 327,  482 => 323,  475 => 237,  455 => 313,  451 => 229,  446 => 310,  438 => 308,  429 => 305,  417 => 297,  410 => 294,  404 => 211,  392 => 288,  356 => 276,  350 => 274,  344 => 272,  342 => 271,  329 => 265,  310 => 249,  301 => 243,  357 => 225,  348 => 218,  340 => 171,  332 => 209,  260 => 147,  386 => 286,  352 => 158,  311 => 135,  304 => 132,  299 => 129,  248 => 86,  234 => 130,  118 => 41,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 335,  701 => 334,  696 => 333,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 291,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 286,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 283,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 361,  560 => 344,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 255,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 317,  456 => 221,  450 => 219,  442 => 309,  434 => 307,  403 => 196,  397 => 193,  383 => 185,  380 => 284,  373 => 181,  367 => 179,  361 => 177,  349 => 157,  331 => 167,  325 => 140,  319 => 163,  313 => 161,  307 => 133,  293 => 128,  282 => 142,  242 => 123,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 326,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 124,  276 => 157,  272 => 138,  267 => 121,  245 => 151,  225 => 166,  318 => 139,  306 => 167,  297 => 152,  292 => 168,  76 => 24,  291 => 188,  288 => 187,  261 => 166,  250 => 158,  137 => 44,  197 => 80,  286 => 165,  262 => 119,  259 => 118,  236 => 132,  195 => 111,  175 => 90,  188 => 121,  165 => 106,  287 => 187,  284 => 186,  256 => 146,  232 => 160,  191 => 108,  343 => 171,  338 => 146,  333 => 266,  328 => 143,  303 => 166,  281 => 120,  277 => 111,  270 => 172,  266 => 135,  231 => 83,  228 => 167,  226 => 125,  223 => 154,  194 => 118,  180 => 93,  155 => 97,  110 => 47,  81 => 42,  190 => 76,  174 => 67,  160 => 106,  152 => 76,  148 => 87,  90 => 37,  127 => 45,  114 => 46,  167 => 63,  146 => 101,  134 => 81,  263 => 157,  255 => 155,  213 => 115,  185 => 110,  153 => 61,  150 => 102,  124 => 67,  70 => 16,  683 => 544,  680 => 507,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 242,  484 => 360,  253 => 132,  249 => 152,  237 => 95,  233 => 105,  216 => 128,  212 => 78,  206 => 126,  202 => 109,  198 => 113,  186 => 103,  184 => 95,  172 => 66,  170 => 67,  161 => 105,  181 => 71,  178 => 69,  129 => 53,  126 => 67,  113 => 48,  104 => 45,  100 => 36,  84 => 26,  20 => 1,  77 => 30,  65 => 35,  53 => 11,  58 => 13,  34 => 3,  480 => 229,  474 => 227,  469 => 235,  461 => 155,  457 => 231,  453 => 151,  444 => 217,  440 => 148,  437 => 147,  435 => 146,  430 => 209,  427 => 221,  423 => 204,  413 => 216,  409 => 132,  407 => 212,  402 => 130,  398 => 290,  393 => 194,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 282,  368 => 280,  365 => 111,  362 => 181,  360 => 226,  355 => 175,  341 => 105,  337 => 169,  322 => 101,  314 => 99,  312 => 170,  309 => 97,  305 => 158,  298 => 131,  294 => 162,  285 => 126,  283 => 125,  278 => 146,  268 => 152,  264 => 139,  258 => 135,  252 => 130,  247 => 78,  241 => 132,  229 => 108,  220 => 100,  214 => 113,  177 => 95,  169 => 107,  140 => 61,  132 => 47,  128 => 53,  107 => 34,  61 => 14,  273 => 115,  269 => 114,  254 => 132,  243 => 94,  240 => 96,  238 => 131,  235 => 94,  230 => 105,  227 => 81,  224 => 126,  221 => 81,  219 => 114,  217 => 128,  208 => 111,  204 => 75,  179 => 70,  159 => 63,  143 => 53,  135 => 50,  119 => 39,  102 => 66,  71 => 22,  67 => 15,  63 => 19,  59 => 12,  38 => 10,  94 => 48,  89 => 37,  85 => 36,  75 => 31,  68 => 21,  56 => 23,  87 => 35,  21 => 2,  26 => 6,  93 => 29,  88 => 35,  78 => 48,  46 => 6,  27 => 4,  44 => 17,  31 => 6,  28 => 5,  201 => 71,  196 => 107,  183 => 82,  171 => 79,  166 => 97,  163 => 86,  158 => 93,  156 => 54,  151 => 63,  142 => 100,  138 => 76,  136 => 56,  121 => 46,  117 => 47,  105 => 50,  91 => 35,  62 => 13,  49 => 20,  24 => 1,  25 => 4,  19 => 1,  79 => 32,  72 => 23,  69 => 36,  47 => 16,  40 => 14,  37 => 13,  22 => 2,  246 => 139,  157 => 71,  145 => 86,  139 => 57,  131 => 49,  123 => 50,  120 => 50,  115 => 36,  111 => 35,  108 => 36,  101 => 44,  98 => 65,  96 => 41,  83 => 32,  74 => 29,  66 => 20,  55 => 21,  52 => 22,  50 => 10,  43 => 5,  41 => 13,  35 => 4,  32 => 3,  29 => 3,  209 => 153,  203 => 108,  199 => 83,  193 => 101,  189 => 71,  187 => 74,  182 => 71,  176 => 111,  173 => 66,  168 => 86,  164 => 107,  162 => 77,  154 => 103,  149 => 59,  147 => 56,  144 => 58,  141 => 77,  133 => 55,  130 => 54,  125 => 52,  122 => 51,  116 => 38,  112 => 40,  109 => 67,  106 => 38,  103 => 37,  99 => 43,  95 => 37,  92 => 34,  86 => 28,  82 => 26,  80 => 25,  73 => 37,  64 => 25,  60 => 24,  57 => 22,  54 => 10,  51 => 9,  48 => 16,  45 => 7,  42 => 6,  39 => 12,  36 => 3,  33 => 2,  30 => 3,);
    }
}