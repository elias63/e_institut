<?php

/* EieinstitutBundle:Portefolio:espace_personnel.html.twig */
class __TwigTemplate_ba86f9741c726f836c0b7c9ede82ea1f51713971741bb04747c7dc3d76ae4588 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "     ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "   | Espace personnel
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
    public function block_Slide($context, array $blocks = array())
    {
        // line 14
        echo "
";
    }

    // line 16
    public function block_Sub_Content($context, array $blocks = array())
    {
        // line 17
        echo "<!-- les icons sont à changer-->
\t\t<section class=\"grid_9\">
\t\t\t<div class=\"block-border\"><div class=\"block-content\" >
\t\t\t\t<h1>Tableau de bord</h1>
\t\t\t\t
\t\t\t\t<h3>Compte</h3>
\t\t\t\t<ul class=\"shortcuts-list\">
\t\t\t\t\t
\t\t\t\t\t<li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("profil");
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/web-app/48/Profile.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\"> Mon compte
\t\t\t\t\t</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("_agenda");
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/web-app/48/calendar.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\"> Agenda
\t\t\t\t\t</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("list_contact");
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/web-app/48/Comment.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\"> Mes contacts
\t\t\t\t\t</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("Recus");
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/web-app/48/Email.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\"> Mail
\t\t\t\t\t</a></li>\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<h3>Ressources</h3>
\t\t\t\t<ul class=\"shortcuts-list\">
\t\t\t\t
\t\t\t\t\t<li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("Ressources");
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/web-app/48/Search.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\"> Rechercher
\t\t\t\t\t</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("Ressources_Ajouter");
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/web-app/48/Add.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\"> Ajouter une ressource
\t\t\t\t\t</a></li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<h3>Tutoriel</h3>
\t\t\t\t<ul class=\"shortcuts-list\">
\t\t\t\t\t
\t\t\t\t\t<li><a href=\"\">
\t\t\t\t\t\t<img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/web-app/48/Loading.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\"> liste des Tuto
\t\t\t\t\t</a></li>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<li><a href=\"\">
\t\t\t\t\t\t<img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/web-app/48/Add.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\"> Resever
\t\t\t\t\t</a></li>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t</div></div>
\t\t</section>
";
    }

    // line 72
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 73
        echo "
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Portefolio:espace_personnel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 190,  352 => 158,  311 => 135,  304 => 132,  299 => 129,  248 => 111,  234 => 106,  118 => 49,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 335,  701 => 334,  696 => 333,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 304,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 299,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 294,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 289,  560 => 262,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 242,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 223,  456 => 221,  450 => 219,  442 => 216,  434 => 210,  403 => 196,  397 => 193,  383 => 185,  380 => 184,  373 => 181,  367 => 179,  361 => 177,  349 => 157,  331 => 167,  325 => 140,  319 => 163,  313 => 161,  307 => 133,  293 => 128,  282 => 142,  242 => 123,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 326,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 124,  276 => 123,  272 => 138,  267 => 121,  245 => 151,  225 => 136,  318 => 139,  306 => 167,  297 => 152,  292 => 168,  76 => 22,  291 => 188,  288 => 187,  261 => 166,  250 => 158,  137 => 44,  197 => 80,  286 => 165,  262 => 119,  259 => 118,  236 => 119,  195 => 111,  175 => 84,  188 => 107,  165 => 65,  287 => 187,  284 => 186,  256 => 117,  232 => 119,  191 => 108,  343 => 171,  338 => 146,  333 => 143,  328 => 143,  303 => 166,  281 => 112,  277 => 111,  270 => 172,  266 => 135,  231 => 93,  228 => 142,  226 => 117,  223 => 131,  194 => 67,  180 => 109,  155 => 97,  110 => 47,  81 => 24,  190 => 76,  174 => 94,  160 => 82,  152 => 89,  148 => 78,  90 => 37,  127 => 45,  114 => 46,  167 => 88,  146 => 47,  134 => 44,  263 => 157,  255 => 155,  213 => 95,  185 => 84,  153 => 61,  150 => 60,  124 => 67,  70 => 17,  683 => 544,  680 => 507,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 152,  237 => 95,  233 => 105,  216 => 128,  212 => 100,  206 => 126,  202 => 109,  198 => 113,  186 => 103,  184 => 72,  172 => 73,  170 => 67,  161 => 78,  181 => 71,  178 => 101,  129 => 53,  126 => 52,  113 => 48,  104 => 45,  100 => 36,  84 => 26,  20 => 1,  77 => 33,  65 => 17,  53 => 10,  58 => 13,  34 => 3,  480 => 229,  474 => 227,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 217,  440 => 148,  437 => 147,  435 => 146,  430 => 209,  427 => 143,  423 => 204,  413 => 200,  409 => 132,  407 => 197,  402 => 130,  398 => 129,  393 => 194,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 175,  341 => 105,  337 => 169,  322 => 101,  314 => 99,  312 => 170,  309 => 97,  305 => 158,  298 => 91,  294 => 162,  285 => 126,  283 => 125,  278 => 146,  268 => 85,  264 => 139,  258 => 81,  252 => 130,  247 => 78,  241 => 108,  229 => 108,  220 => 100,  214 => 113,  177 => 95,  169 => 72,  140 => 45,  132 => 47,  128 => 57,  107 => 34,  61 => 14,  273 => 110,  269 => 94,  254 => 132,  243 => 109,  240 => 96,  238 => 107,  235 => 94,  230 => 105,  227 => 81,  224 => 101,  221 => 103,  219 => 114,  217 => 128,  208 => 111,  204 => 118,  179 => 70,  159 => 63,  143 => 46,  135 => 55,  119 => 39,  102 => 32,  71 => 30,  67 => 16,  63 => 19,  59 => 13,  38 => 10,  94 => 48,  89 => 28,  85 => 35,  75 => 31,  68 => 21,  56 => 18,  87 => 34,  21 => 2,  26 => 6,  93 => 29,  88 => 35,  78 => 23,  46 => 7,  27 => 4,  44 => 15,  31 => 6,  28 => 5,  201 => 115,  196 => 107,  183 => 82,  171 => 79,  166 => 97,  163 => 86,  158 => 93,  156 => 62,  151 => 63,  142 => 77,  138 => 56,  136 => 48,  121 => 46,  117 => 46,  105 => 40,  91 => 35,  62 => 14,  49 => 20,  24 => 1,  25 => 4,  19 => 1,  79 => 32,  72 => 23,  69 => 20,  47 => 16,  40 => 14,  37 => 13,  22 => 2,  246 => 110,  157 => 71,  145 => 80,  139 => 71,  131 => 66,  123 => 44,  120 => 50,  115 => 36,  111 => 35,  108 => 36,  101 => 44,  98 => 31,  96 => 29,  83 => 33,  74 => 34,  66 => 20,  55 => 21,  52 => 17,  50 => 9,  43 => 6,  41 => 13,  35 => 3,  32 => 2,  29 => 3,  209 => 99,  203 => 116,  199 => 83,  193 => 94,  189 => 71,  187 => 110,  182 => 71,  176 => 69,  173 => 68,  168 => 66,  164 => 96,  162 => 64,  154 => 80,  149 => 81,  147 => 56,  144 => 58,  141 => 57,  133 => 78,  130 => 71,  125 => 41,  122 => 40,  116 => 38,  112 => 35,  109 => 47,  106 => 41,  103 => 37,  99 => 43,  95 => 36,  92 => 21,  86 => 49,  82 => 46,  80 => 25,  73 => 32,  64 => 26,  60 => 26,  57 => 22,  54 => 11,  51 => 10,  48 => 16,  45 => 6,  42 => 5,  39 => 11,  36 => 4,  33 => 3,  30 => 3,);
    }
}
