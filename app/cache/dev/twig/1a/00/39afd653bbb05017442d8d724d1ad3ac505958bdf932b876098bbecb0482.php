<?php

/* EiAdministrationBundle:Contributor:c_ajouter_actualite.html.twig */
class __TwigTemplate_1a0039afd653bbb05017442d8d724d1ad3ac505958bdf932b876098bbecb0482 extends Twig_Template
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
        echo "   | Ajouter Actualité
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
\t\t\t
\t\t\t\t
\t\t\t<div class=\"fieldset with-legend grey-bg \">
\t\t\t\t<div class=\"legend\">Actualités</div>
\t\t\t\t\t
\t\t\t
\t\t\t
\t\t\t<div class=\"block-border\" id=\"status-bar\">
\t
\t\t<a href=\"javascript:void(0)\" class=\"button\" title=\"\"> <strong>Toutes les actualités</strong></a>
\t\t\t
\t\t\t<span class=\"float-left\">Nouvelle actualité</span>
\t
\t</div>
\t\t\t
\t
\t<br><br>
\t\t\t\t\t
\t\t\t\t\t<form class=\"block-content form\" id=\"simple_form\" method=\"post\" action=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("ajouter_actualite");
        echo "\">
\t\t\t\t
\t\t\t\t<div class=\"columns\">
\t\t\t\t\t\t\t<p class=\"colx2-left\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"label required\">
\t\t\t\t\t\t\t\t\tTitre
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"txt_titre\" id=\"complex-fr-subtitle\" value=\"\" class=\"full-width\">
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"label required\">
\t\t\t\t\t\t\tContenu
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<textarea id=\"editable\" name=\"contenu\"></textarea>
\t\t\t\t\t\t<br><br>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<!--<p>
\t\t\t\t\t\t<span class=\"label required\">
\t\t\t\t\t\t\t\t\tDate de publication
\t\t\t\t\t\t</span>
\t\t\t\t\t\tDu :<span class=\"input-type-text margin-right relative\"><input type=\"text\" name=\"date_debut\" id=\"simple-calendar\" value=\"\" class=\"datepicker hasDatepick\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/calendar-month.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\" id=\"datepicker\"></span>
\t\t\t\t\t\tAu :<span class=\"input-type-text margin-right relative\"><input type=\"text\" name=\"date_fin\" id=\"simple-calendar\" value=\"\" class=\"datepicker hasDatepick\"><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/calendar-month.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></span>
\t\t\t\t\t\t
\t\t\t\t\t</p>-->
                                        
                                        <p>
                                            <span class=\"label required\">
\t\t\t\t\t\tURL d'image :
\t\t\t\t\t     </span>
\t\t\t\t\t\t
\t\t\t\t\t<input type=\"text\" name=\"txt_url\" id=\"complex-fr-subtitle\" value=\"\" class=\"full-width\">
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"float-right\"><br>
\t\t\t\t\t\t<a type=\"button\" ><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Retour</a>
\t\t\t\t\t\t<button type=\"submit\" name=\"btn_Add\"><img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/tick-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Enregistrer</button>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t</form>
\t\t\t</div>
\t\t\t\t
\t\t
\t\t</section>     
";
    }

    // line 87
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 88
        echo "     
     <script src=\"//code.jquery.com/jquery-1.9.1.js\"></script>
  <script src=\"//code.jquery.com/ui/1.10.4/jquery-ui.js\"></script>

     <script>
  \$(function() {
    \$( \"#datepicker\" ).datepicker();
  });
  </script>
  
";
    }

    public function getTemplateName()
    {
        return "EiAdministrationBundle:Contributor:c_ajouter_actualite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  717 => 544,  714 => 543,  707 => 131,  699 => 91,  691 => 88,  688 => 87,  673 => 546,  671 => 543,  524 => 399,  274 => 164,  251 => 156,  375 => 169,  345 => 152,  339 => 151,  327 => 149,  321 => 176,  315 => 139,  300 => 134,  211 => 130,  378 => 232,  353 => 216,  326 => 193,  295 => 164,  279 => 120,  257 => 135,  97 => 39,  23 => 3,  271 => 204,  222 => 103,  244 => 173,  661 => 307,  658 => 306,  632 => 290,  627 => 288,  613 => 285,  596 => 281,  593 => 280,  590 => 279,  580 => 277,  576 => 276,  572 => 275,  568 => 273,  553 => 268,  546 => 263,  533 => 262,  526 => 258,  513 => 254,  500 => 250,  481 => 239,  463 => 233,  445 => 227,  439 => 225,  433 => 223,  421 => 219,  415 => 217,  399 => 210,  390 => 203,  388 => 202,  372 => 168,  358 => 179,  351 => 153,  347 => 174,  336 => 169,  330 => 166,  218 => 121,  215 => 79,  210 => 99,  275 => 139,  207 => 106,  200 => 142,  289 => 161,  265 => 113,  205 => 127,  192 => 93,  586 => 278,  562 => 272,  555 => 342,  548 => 341,  542 => 340,  532 => 338,  525 => 336,  522 => 257,  519 => 397,  515 => 396,  509 => 253,  505 => 252,  501 => 330,  497 => 328,  491 => 327,  482 => 323,  475 => 237,  455 => 313,  451 => 229,  446 => 310,  438 => 308,  429 => 305,  417 => 297,  410 => 294,  404 => 211,  392 => 288,  356 => 217,  350 => 274,  344 => 272,  342 => 271,  329 => 265,  310 => 237,  301 => 178,  357 => 225,  348 => 218,  340 => 159,  332 => 209,  260 => 159,  386 => 286,  352 => 167,  311 => 135,  304 => 132,  299 => 129,  248 => 86,  234 => 133,  118 => 39,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 130,  701 => 334,  696 => 90,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 291,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 286,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 283,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 361,  560 => 344,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 255,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 317,  456 => 221,  450 => 219,  442 => 309,  434 => 307,  403 => 196,  397 => 193,  383 => 185,  380 => 284,  373 => 181,  367 => 179,  361 => 177,  349 => 157,  331 => 167,  325 => 140,  319 => 163,  313 => 182,  307 => 236,  293 => 129,  282 => 142,  242 => 112,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 547,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 167,  276 => 161,  272 => 160,  267 => 142,  245 => 142,  225 => 120,  318 => 141,  306 => 169,  297 => 165,  292 => 168,  76 => 22,  291 => 188,  288 => 187,  261 => 166,  250 => 114,  137 => 80,  197 => 80,  286 => 175,  262 => 117,  259 => 156,  236 => 132,  195 => 108,  175 => 116,  188 => 104,  165 => 89,  287 => 187,  284 => 168,  256 => 119,  232 => 160,  191 => 108,  343 => 160,  338 => 146,  333 => 150,  328 => 143,  303 => 166,  281 => 120,  277 => 111,  270 => 172,  266 => 135,  231 => 134,  228 => 105,  226 => 108,  223 => 131,  194 => 100,  180 => 89,  155 => 88,  110 => 34,  81 => 24,  190 => 77,  174 => 87,  160 => 82,  152 => 87,  148 => 70,  90 => 37,  127 => 42,  114 => 46,  167 => 88,  146 => 47,  134 => 76,  263 => 157,  255 => 157,  213 => 135,  185 => 91,  153 => 61,  150 => 48,  124 => 64,  70 => 16,  683 => 11,  680 => 10,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 242,  484 => 360,  253 => 132,  249 => 139,  237 => 151,  233 => 150,  216 => 101,  212 => 120,  206 => 94,  202 => 99,  198 => 95,  186 => 91,  184 => 77,  172 => 65,  170 => 94,  161 => 93,  181 => 71,  178 => 96,  129 => 41,  126 => 40,  113 => 48,  104 => 42,  100 => 27,  84 => 25,  20 => 1,  77 => 36,  65 => 17,  53 => 11,  58 => 13,  34 => 3,  480 => 229,  474 => 227,  469 => 235,  461 => 155,  457 => 231,  453 => 151,  444 => 217,  440 => 148,  437 => 147,  435 => 146,  430 => 209,  427 => 221,  423 => 204,  413 => 216,  409 => 132,  407 => 212,  402 => 130,  398 => 290,  393 => 194,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 282,  368 => 280,  365 => 224,  362 => 181,  360 => 226,  355 => 175,  341 => 105,  337 => 169,  322 => 101,  314 => 99,  312 => 170,  309 => 138,  305 => 158,  298 => 123,  294 => 162,  285 => 121,  283 => 125,  278 => 146,  268 => 161,  264 => 160,  258 => 115,  252 => 118,  247 => 155,  241 => 150,  229 => 149,  220 => 100,  214 => 113,  177 => 106,  169 => 93,  140 => 81,  132 => 42,  128 => 56,  107 => 33,  61 => 14,  273 => 124,  269 => 123,  254 => 132,  243 => 154,  240 => 132,  238 => 112,  235 => 108,  230 => 121,  227 => 138,  224 => 126,  221 => 147,  219 => 114,  217 => 128,  208 => 89,  204 => 97,  179 => 120,  159 => 107,  143 => 46,  135 => 43,  119 => 66,  102 => 34,  71 => 20,  67 => 29,  63 => 34,  59 => 27,  38 => 6,  94 => 38,  89 => 30,  85 => 29,  75 => 31,  68 => 17,  56 => 24,  87 => 26,  21 => 2,  26 => 2,  93 => 28,  88 => 33,  78 => 34,  46 => 14,  27 => 4,  44 => 6,  31 => 2,  28 => 9,  201 => 121,  196 => 87,  183 => 124,  171 => 79,  166 => 90,  163 => 59,  158 => 77,  156 => 70,  151 => 77,  142 => 100,  138 => 77,  136 => 87,  121 => 40,  117 => 37,  105 => 39,  91 => 35,  62 => 19,  49 => 9,  24 => 1,  25 => 5,  19 => 1,  79 => 32,  72 => 22,  69 => 34,  47 => 18,  40 => 11,  37 => 13,  22 => 1,  246 => 139,  157 => 83,  145 => 56,  139 => 65,  131 => 49,  123 => 39,  120 => 49,  115 => 65,  111 => 43,  108 => 43,  101 => 31,  98 => 39,  96 => 29,  83 => 34,  74 => 33,  66 => 16,  55 => 11,  52 => 23,  50 => 10,  43 => 17,  41 => 5,  35 => 4,  32 => 3,  29 => 6,  209 => 107,  203 => 108,  199 => 83,  193 => 101,  189 => 92,  187 => 84,  182 => 121,  176 => 98,  173 => 75,  168 => 85,  164 => 87,  162 => 83,  154 => 78,  149 => 59,  147 => 76,  144 => 82,  141 => 77,  133 => 57,  130 => 64,  125 => 55,  122 => 51,  116 => 61,  112 => 60,  109 => 50,  106 => 35,  103 => 38,  99 => 43,  95 => 36,  92 => 35,  86 => 36,  82 => 35,  80 => 32,  73 => 35,  64 => 26,  60 => 25,  57 => 13,  54 => 16,  51 => 25,  48 => 22,  45 => 7,  42 => 6,  39 => 15,  36 => 5,  33 => 6,  30 => 1,);
    }
}
