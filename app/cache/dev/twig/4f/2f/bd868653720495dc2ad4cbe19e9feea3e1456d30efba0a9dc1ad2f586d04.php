<?php

/* EieinstitutBundle:Tutoriel:Recherche_tuto.html.twig */
class __TwigTemplate_4f2fbd868653720495dc2ad4cbe19e9feea3e1456d30efba0a9dc1ad2f586d04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EieinstitutBundle::Master-Base.html.twig");

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
        return "EieinstitutBundle::Master-Base.html.twig";
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
\t\t\t<div class=\"block-border\">
\t\t\t    <div class=\"block-content\">

\t\t\t<form class=\"block-content form\" id=\"table_form\" method=\"post\" action=\"\">
\t\t\t\t<h1> Rechercher un tutoriel</h1>
\t\t\t\t
\t\t\t\t<div class=\"columns\">
\t\t\t\t\t\t<p class=\"colx2-left\">
\t\t\t\t\t\t\t<span class=\"label required\"> Domaine </span>
\t\t\t\t\t<select class=\"full-width\" name=\"Domaine\" id=\"stats-sites-0\">
\t\t\t\t\t\t<option value=\"0\">Informatique</option>
\t\t\t\t\t\t<option value=\"0\">Economie</option>
\t\t\t\t\t</select><br><br>\t
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"colx2-right\">
\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"label required\"> Théme</span>
\t\t\t\t\t<select class=\"full-width\" name=\"theme\" id=\"stats-sites-0\">
\t\t\t\t\t\t<option value=\"0\">Développemnt</option>
\t\t\t\t\t\t<option value=\"0\">Réseau</option>
\t\t\t\t\t</select><br><br>
\t\t\t\t\t\t</p>
                                                

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
\t\t\t\t\t\t\t\t<button type=\"button\">Recherche</button> <br><br>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
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

\t\t\t\t
\t\t\t\t<div class=\"block-controls\">
\t\t\t\t\t
\t\t\t\t\t<ul class=\"controls-buttons\">
\t\t\t\t\t\t<li><a href=\"#\" title=\"Previous\"><img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation-180.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Prec</a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 1\"><b>1</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 2\" class=\"current\"><b>2</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 3\"><b>3</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 4\"><b>4</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 5\"><b>5</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Next\">Suiv <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t\t<li class=\"sep\"></li>
\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/arrow-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</div>
                                <div class=\"no-margin\"><table class=\"table\" cellspacing=\"0\" width=\"100%\">
\t\t\t\t
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<th scope=\"col\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tTuteur
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th scope=\"col\"  width=\"500\">Sujet</th>
\t\t\t\t\t\t\t<th scope=\"col\"  style=\"width: 279px;\">Tags</th>
\t\t\t\t\t\t\t<th scope=\"col\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tDate et heure
\t\t\t\t\t\t\t</th>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t
\t\t\t\t\t<tbody>
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>E-institut</th>
\t\t\t\t\t\t\t<td><strong>Settings</strong><br>
\t\t\t\t\t\t<small>System &gt; Settings</small>
\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"#\" title=\"Suivre\" class=\"with-tip\"><img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/control.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td><ul class=\"keywords\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Java</a></li>
\t\t\t\t\t\t\t\t<li class=\"orange-keyword\"><a href=\"#\">J2EE</a></li>
\t\t\t\t\t\t</ul></td>\t
\t\t\t\t\t\t<td>24-03-2010 <br>
\t\t\t\t\t\t\t10h00
\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>E-institut</th>
\t\t\t\t\t\t\t<td><strong>Settings</strong><br>
\t\t\t\t\t\t<small>System &gt; Settings</small>
\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"#\" title=\"Suivre\" class=\"with-tip\"><img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/control.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td><ul class=\"keywords\">
\t\t\t\t\t\t\t\t<li class=\"purple-keyword\">lol</li>
\t\t\t\t\t\t\t\t<li>dada</li>
\t\t\t\t\t\t\t\t<li>toto</li>
\t\t\t\t\t\t</ul></td>\t
\t\t\t\t\t\t<td>24-03-2010 <br>
\t\t\t\t\t\t\t10h00
\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>E-institut</th>
\t\t\t\t\t\t\t<td><strong>Settings</strong><br>
\t\t\t\t\t\t<small>System &gt; Settings</small>
\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"#\" title=\"Suivre\" class=\"with-tip\"><img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/control.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td><ul class=\"keywords\">
\t\t\t\t\t\t\t\t<li>Sea</li>
\t\t\t\t\t\t\t\t<li>Fish</li>
\t\t\t\t\t\t\t\t<li>Bubble</li>
\t\t\t\t\t\t\t</ul></td>\t
\t\t\t\t\t\t<td>24-03-2010 <br>
\t\t\t\t\t\t\t10h00
\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>E-institut</th>
\t\t\t\t\t\t\t<td><strong>Settings</strong><br>
\t\t\t\t\t\t<small>System &gt; Settings</small>
\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"#\" title=\"Suivre\" class=\"with-tip\"><img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/control.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td><ul class=\"keywords\">
\t\t\t\t\t\t\t\t<li>Sea</li>
\t\t\t\t\t\t\t\t<li>Fish</li>
\t\t\t\t\t\t\t\t<li>Bubble</li>
\t\t\t\t\t\t\t</ul></td>\t
\t\t\t\t\t\t<td>24-03-2010 <br>
\t\t\t\t\t\t\t10h00
\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t
\t\t\t\t</table></div>
\t\t\t\t
\t\t\t\t<ul class=\"message no-margin\">
\t\t\t\t\t<li>Results 1 - 5 out of 23</li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t
\t\t\t</form></div></div>
</section>

          
";
    }

    // line 236
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 237
        echo "
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Tutoriel:Recherche_tuto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 204,  222 => 161,  244 => 173,  661 => 307,  658 => 306,  632 => 290,  627 => 288,  613 => 285,  596 => 281,  593 => 280,  590 => 279,  580 => 277,  576 => 276,  572 => 275,  568 => 273,  553 => 268,  546 => 263,  533 => 262,  526 => 258,  513 => 254,  500 => 250,  481 => 239,  463 => 233,  445 => 227,  439 => 225,  433 => 223,  421 => 219,  415 => 217,  399 => 210,  390 => 203,  388 => 202,  372 => 189,  358 => 179,  351 => 176,  347 => 174,  336 => 169,  330 => 166,  218 => 80,  215 => 79,  210 => 77,  275 => 139,  207 => 76,  200 => 142,  289 => 125,  265 => 113,  205 => 72,  192 => 67,  586 => 278,  562 => 272,  555 => 342,  548 => 341,  542 => 340,  532 => 338,  525 => 336,  522 => 257,  519 => 334,  515 => 333,  509 => 253,  505 => 252,  501 => 330,  497 => 328,  491 => 327,  482 => 323,  475 => 237,  455 => 313,  451 => 229,  446 => 310,  438 => 308,  429 => 305,  417 => 297,  410 => 294,  404 => 211,  392 => 288,  356 => 276,  350 => 274,  344 => 272,  342 => 271,  329 => 265,  310 => 237,  301 => 243,  357 => 225,  348 => 218,  340 => 171,  332 => 209,  260 => 147,  386 => 286,  352 => 158,  311 => 135,  304 => 132,  299 => 129,  248 => 86,  234 => 130,  118 => 41,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 335,  701 => 334,  696 => 333,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 291,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 286,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 283,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 361,  560 => 344,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 255,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 317,  456 => 221,  450 => 219,  442 => 309,  434 => 307,  403 => 196,  397 => 193,  383 => 185,  380 => 284,  373 => 181,  367 => 179,  361 => 177,  349 => 157,  331 => 167,  325 => 140,  319 => 163,  313 => 161,  307 => 236,  293 => 128,  282 => 142,  242 => 123,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 326,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 124,  276 => 157,  272 => 138,  267 => 121,  245 => 151,  225 => 166,  318 => 139,  306 => 167,  297 => 152,  292 => 168,  76 => 24,  291 => 188,  288 => 187,  261 => 166,  250 => 158,  137 => 44,  197 => 80,  286 => 165,  262 => 119,  259 => 118,  236 => 132,  195 => 111,  175 => 116,  188 => 121,  165 => 106,  287 => 187,  284 => 186,  256 => 146,  232 => 160,  191 => 108,  343 => 171,  338 => 146,  333 => 266,  328 => 143,  303 => 166,  281 => 120,  277 => 111,  270 => 172,  266 => 135,  231 => 83,  228 => 167,  226 => 125,  223 => 154,  194 => 118,  180 => 93,  155 => 103,  110 => 47,  81 => 32,  190 => 76,  174 => 67,  160 => 106,  152 => 103,  148 => 87,  90 => 38,  127 => 45,  114 => 46,  167 => 63,  146 => 101,  134 => 81,  263 => 157,  255 => 155,  213 => 115,  185 => 110,  153 => 61,  150 => 102,  124 => 67,  70 => 16,  683 => 544,  680 => 507,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 242,  484 => 360,  253 => 132,  249 => 152,  237 => 95,  233 => 105,  216 => 128,  212 => 78,  206 => 126,  202 => 109,  198 => 113,  186 => 103,  184 => 95,  172 => 66,  170 => 67,  161 => 109,  181 => 71,  178 => 117,  129 => 53,  126 => 67,  113 => 48,  104 => 37,  100 => 36,  84 => 26,  20 => 1,  77 => 30,  65 => 35,  53 => 11,  58 => 13,  34 => 3,  480 => 229,  474 => 227,  469 => 235,  461 => 155,  457 => 231,  453 => 151,  444 => 217,  440 => 148,  437 => 147,  435 => 146,  430 => 209,  427 => 221,  423 => 204,  413 => 216,  409 => 132,  407 => 212,  402 => 130,  398 => 290,  393 => 194,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 282,  368 => 280,  365 => 111,  362 => 181,  360 => 226,  355 => 175,  341 => 105,  337 => 169,  322 => 101,  314 => 99,  312 => 170,  309 => 97,  305 => 158,  298 => 131,  294 => 162,  285 => 126,  283 => 125,  278 => 146,  268 => 152,  264 => 139,  258 => 135,  252 => 130,  247 => 183,  241 => 132,  229 => 108,  220 => 100,  214 => 113,  177 => 113,  169 => 107,  140 => 61,  132 => 83,  128 => 53,  107 => 34,  61 => 14,  273 => 115,  269 => 114,  254 => 132,  243 => 94,  240 => 96,  238 => 131,  235 => 94,  230 => 105,  227 => 81,  224 => 126,  221 => 81,  219 => 114,  217 => 128,  208 => 111,  204 => 75,  179 => 70,  159 => 104,  143 => 53,  135 => 50,  119 => 39,  102 => 66,  71 => 22,  67 => 15,  63 => 16,  59 => 12,  38 => 10,  94 => 48,  89 => 37,  85 => 36,  75 => 31,  68 => 21,  56 => 23,  87 => 35,  21 => 2,  26 => 6,  93 => 29,  88 => 39,  78 => 29,  46 => 6,  27 => 4,  44 => 6,  31 => 6,  28 => 5,  201 => 134,  196 => 107,  183 => 82,  171 => 79,  166 => 111,  163 => 86,  158 => 93,  156 => 54,  151 => 63,  142 => 100,  138 => 76,  136 => 56,  121 => 46,  117 => 47,  105 => 50,  91 => 35,  62 => 13,  49 => 20,  24 => 1,  25 => 4,  19 => 1,  79 => 32,  72 => 23,  69 => 36,  47 => 7,  40 => 14,  37 => 4,  22 => 2,  246 => 139,  157 => 71,  145 => 86,  139 => 57,  131 => 49,  123 => 50,  120 => 50,  115 => 36,  111 => 35,  108 => 36,  101 => 36,  98 => 65,  96 => 30,  83 => 32,  74 => 29,  66 => 20,  55 => 11,  52 => 10,  50 => 10,  43 => 5,  41 => 13,  35 => 4,  32 => 3,  29 => 3,  209 => 153,  203 => 108,  199 => 83,  193 => 101,  189 => 71,  187 => 74,  182 => 71,  176 => 111,  173 => 66,  168 => 86,  164 => 107,  162 => 77,  154 => 103,  149 => 59,  147 => 56,  144 => 58,  141 => 77,  133 => 55,  130 => 72,  125 => 52,  122 => 51,  116 => 38,  112 => 43,  109 => 42,  106 => 38,  103 => 37,  99 => 43,  95 => 40,  92 => 34,  86 => 36,  82 => 26,  80 => 32,  73 => 37,  64 => 25,  60 => 15,  57 => 22,  54 => 10,  51 => 9,  48 => 16,  45 => 7,  42 => 6,  39 => 12,  36 => 3,  33 => 2,  30 => 3,);
    }
}
