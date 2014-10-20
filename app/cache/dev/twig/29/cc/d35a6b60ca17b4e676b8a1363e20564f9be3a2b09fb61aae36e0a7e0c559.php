<?php

/* EieinstitutBundle:Ressources:detail_ressource_connecte.html.twig */
class __TwigTemplate_29ccd35a6b60ca17b4e676b8a1363e20564f9be3a2b09fb61aae36e0a7e0c559 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EieinstitutBundle::Master-Base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<section class=\"grid_9\">
\t\t\t<div class=\"block-border\">
\t\t\t    <div class=\"block-content\">

\t\t\t\t\t<div class=\"block-controls\">
\t\t\t\t\t\t<h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiches"]) ? $context["Fiches"] : $this->getContext($context, "Fiches")), "titre"), "html", null, true);
        echo "</h1>  <br><br>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"fieldset  grey-bg clearfix\">
\t\t\t\t
\t\t\t\t\t
\t\t\t\t<div class=\"box float-right\">
\t\t\t\t\t
\t\t\t\t\t<ul class=\"simple-list with-icon\">
\t\t\t\t\t
\t\t\t\t\t\t<li ><span>Mise en ligne : ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('time_ago_extension')->timeAgoInWordsFilter($this->getAttribute((isset($context["Fiches"]) ? $context["Fiches"] : $this->getContext($context, "Fiches")), "datecreation")), "html", null, true);
        echo "</span></li>
\t\t\t\t\t\t<li ><span>Domaine : ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiches"]) ? $context["Fiches"] : $this->getContext($context, "Fiches")), "domaine"), "html", null, true);
        echo "</span></li>
\t\t\t\t\t\t<li ><span>Thème : ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiches"]) ? $context["Fiches"] : $this->getContext($context, "Fiches")), "theme"), "html", null, true);
        echo "</span></li>
\t\t\t\t\t\t<li ><span>Type : ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiches"]) ? $context["Fiches"] : $this->getContext($context, "Fiches")), "type"), "html", null, true);
        echo "</span></li>
                        <br>
\t\t\t\t\t<li style=\"width: 100px;text-align: center; margin: auto;\"><div>\t
\t\t\t\t\t\t\t";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 29
            echo "\t\t\t\t\t\t\t\t";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < (isset($context["sumNote"]) ? $context["sumNote"] : $this->getContext($context, "sumNote")))) {
                // line 30
                echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/star.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/>
\t\t\t\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t\t\t\t\t";
        if ((((isset($context["sumNote"]) ? $context["sumNote"] : $this->getContext($context, "sumNote")) % 2) == 1)) {
            // line 34
            echo "\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/star-half.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\">
\t\t\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 37
            echo "\t\t\t\t\t\t\t\t ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) > ((isset($context["sumNote"]) ? $context["sumNote"] : $this->getContext($context, "sumNote")) + 1))) {
                // line 38
                echo "\t\t\t\t\t\t\t\t\t <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/star-empty.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\">
\t\t\t\t\t\t\t\t ";
            }
            // line 40
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t\t\t\t</div></li>
\t\t\t\t\t\t</br></br>
\t\t\t\t\t\t<a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("preconiser_ressource", array("fiche" => $this->getAttribute((isset($context["Fiches"]) ? $context["Fiches"] : $this->getContext($context, "Fiches")), "id"))), "html", null, true);
        echo "\"><button class=\"float-right\" name=\"preconiser\" type=\"submit\">Faire une Préconisation</button></a>
\t\t\t\t\t</ul>
                                    
                                    
                                    
\t\t\t\t</div>
\t\t\t\t\t<p>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiches"]) ? $context["Fiches"] : $this->getContext($context, "Fiches")), "resume"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<p> Adresse <a href=\"http://";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiches"]) ? $context["Fiches"] : $this->getContext($context, "Fiches")), "url"), "html", null, true);
        echo "\" target=\"_blank\" >";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiches"]) ? $context["Fiches"] : $this->getContext($context, "Fiches")), "url"), "html", null, true);
        echo "</a></p>
\t\t\t\t\t<p><ul class=\"keywords\">
\t\t\t\t\t\tTags
\t\t\t\t\t\t\t ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Fiches"]) ? $context["Fiches"] : $this->getContext($context, "Fiches")), "fiche_tags"));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            echo "  <li><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/tag-small.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "libelle"), "html", null, true);
            echo " </li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul></p>
\t\t\t\t\t<hr class=\"no-margin\">
\t\t\t\t\t<div class=\"task with-legend\">

\t\t\t\t\t\t<!-- The legend -->
\t\t\t\t\t\t<div class=\"legend\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/finefiles/32/rtf.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Notes</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"task-description\">
\t\t\t\t\t\t\tCette ressource a été estimée par le reseau pour : <br>
\t\t\t\t\t\t\t<dl><br>
\t\t\t\t\t\t\t<div class=\"grid_6\">
\t\t\t\t\t";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["NotePreconisation"]) ? $context["NotePreconisation"] : $this->getContext($context, "NotePreconisation")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["N"]) {
            echo "  
                                            <dt class=\"\"><span class=\"number\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["N"]) ? $context["N"] : $this->getContext($context, "N")), "NomCritere"), "html", null, true);
            echo " </dt>
                                            <dd><br>
                                            <ul class=\"extended-options\">
                                                    <li>
                                                            Annotation: <strong>";
            // line 71
            echo twig_escape_filter($this->env, twig_round($this->getAttribute((isset($context["N"]) ? $context["N"] : $this->getContext($context, "N")), "note"), 1, "floor"), "html", null, true);
            echo "/5</strong><br>
                                                            <span class=\"progress-bar\"><span style=\"width:";
            // line 72
            echo twig_escape_filter($this->env, twig_round(($this->getAttribute((isset($context["N"]) ? $context["N"] : $this->getContext($context, "N")), "note") * 20), 1, "floor"), "html", null, true);
            echo "%\"></span></span>
                                                    </li>
                                            </ul>
                                            </dd><br>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['N'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                                                    
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</dl>
\t\t\t
\t\t\t\t\t
\t\t\t    </div>
\t\t\t\t
            </div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!--
\t\t\t\t<div class=\"fieldset   clearfix\">
\t\t\t\t\t\t<div class=\"task with-legend\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"legend\"><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-pdf.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Type de fiche</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"task-description\">
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"columns\">
\t\t\t\t\t\t\t\t<ul class=\"floating-tags\">
\t\t\t\t\t\t\t\t\t<li class=\"tag-time\">5 days ago</li>
\t\t\t\t\t\t\t\t\t<li class=\"tag-user\">You</li>
\t\t\t\t\t\t\t\t\t<li>Domaine</li>
\t\t\t\t\t\t\t\t\t<li>Théme</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<h3><a href=\"#\">Fiche 1</a></h3>
\t\t\t\t\t\t\t\tSmall task description ...
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"columns\">
\t\t\t\t\t\t\t\t<ul class=\"keywords\">
\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/tag-small.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Sea</li>
\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/tag-small.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Fish</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/tag-small.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Bubble</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"mini-menu\" style=\"opacity: 0;\">
\t\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Delete\"> + Détails<img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation-000-white.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t<ul class=\"controls-buttons\">
\t\t\t\t\t\t<li><a href=\"#\" title=\"Précédent\"><img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation-180.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Précédent</a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 1\"><b>1</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 2\" class=\"current\"><b>2</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 3\"><b>3</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 4\"><b>4</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 5\"><b>5</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"suivant\">Suivant <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t</div>
\t\t\t\t-->
\t\t\t\t
\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t    </div>
\t\t\t\t
\t\t\t</div>
 
\t\t</section>
    
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Ressources:detail_ressource_connecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 125,  265 => 113,  205 => 72,  192 => 67,  586 => 360,  562 => 345,  555 => 342,  548 => 341,  542 => 340,  532 => 338,  525 => 336,  522 => 335,  519 => 334,  515 => 333,  509 => 332,  505 => 331,  501 => 330,  497 => 328,  491 => 327,  482 => 323,  475 => 318,  455 => 313,  451 => 312,  446 => 310,  438 => 308,  429 => 305,  417 => 297,  410 => 294,  404 => 292,  392 => 288,  356 => 276,  350 => 274,  344 => 272,  342 => 271,  329 => 265,  310 => 249,  301 => 243,  357 => 225,  348 => 218,  340 => 214,  332 => 209,  260 => 147,  386 => 286,  352 => 158,  311 => 135,  304 => 132,  299 => 129,  248 => 111,  234 => 106,  118 => 41,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 335,  701 => 334,  696 => 333,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 304,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 299,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 294,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 361,  560 => 344,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 242,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 317,  456 => 221,  450 => 219,  442 => 309,  434 => 307,  403 => 196,  397 => 193,  383 => 185,  380 => 284,  373 => 181,  367 => 179,  361 => 177,  349 => 157,  331 => 167,  325 => 140,  319 => 163,  313 => 161,  307 => 133,  293 => 128,  282 => 142,  242 => 123,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 326,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 124,  276 => 157,  272 => 138,  267 => 121,  245 => 151,  225 => 136,  318 => 139,  306 => 167,  297 => 152,  292 => 168,  76 => 24,  291 => 188,  288 => 187,  261 => 166,  250 => 158,  137 => 44,  197 => 80,  286 => 165,  262 => 119,  259 => 118,  236 => 132,  195 => 111,  175 => 90,  188 => 121,  165 => 106,  287 => 187,  284 => 186,  256 => 146,  232 => 160,  191 => 108,  343 => 171,  338 => 146,  333 => 266,  328 => 143,  303 => 166,  281 => 120,  277 => 111,  270 => 172,  266 => 135,  231 => 93,  228 => 142,  226 => 125,  223 => 154,  194 => 67,  180 => 93,  155 => 97,  110 => 47,  81 => 42,  190 => 76,  174 => 94,  160 => 96,  152 => 76,  148 => 87,  90 => 37,  127 => 45,  114 => 46,  167 => 88,  146 => 47,  134 => 81,  263 => 157,  255 => 155,  213 => 115,  185 => 110,  153 => 61,  150 => 60,  124 => 67,  70 => 28,  683 => 544,  680 => 507,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 152,  237 => 95,  233 => 105,  216 => 128,  212 => 100,  206 => 126,  202 => 109,  198 => 113,  186 => 103,  184 => 95,  172 => 73,  170 => 67,  161 => 105,  181 => 71,  178 => 101,  129 => 53,  126 => 67,  113 => 48,  104 => 45,  100 => 36,  84 => 26,  20 => 1,  77 => 30,  65 => 35,  53 => 11,  58 => 13,  34 => 3,  480 => 229,  474 => 227,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 217,  440 => 148,  437 => 147,  435 => 146,  430 => 209,  427 => 143,  423 => 204,  413 => 200,  409 => 132,  407 => 197,  402 => 130,  398 => 290,  393 => 194,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 282,  368 => 280,  365 => 111,  362 => 278,  360 => 226,  355 => 175,  341 => 105,  337 => 169,  322 => 101,  314 => 99,  312 => 170,  309 => 97,  305 => 158,  298 => 131,  294 => 162,  285 => 126,  283 => 125,  278 => 146,  268 => 152,  264 => 139,  258 => 81,  252 => 130,  247 => 78,  241 => 108,  229 => 108,  220 => 100,  214 => 113,  177 => 95,  169 => 107,  140 => 61,  132 => 47,  128 => 61,  107 => 34,  61 => 14,  273 => 115,  269 => 114,  254 => 132,  243 => 94,  240 => 96,  238 => 107,  235 => 94,  230 => 105,  227 => 81,  224 => 77,  221 => 103,  219 => 114,  217 => 128,  208 => 111,  204 => 118,  179 => 70,  159 => 63,  143 => 53,  135 => 50,  119 => 39,  102 => 32,  71 => 22,  67 => 15,  63 => 19,  59 => 12,  38 => 10,  94 => 48,  89 => 33,  85 => 30,  75 => 31,  68 => 21,  56 => 23,  87 => 35,  21 => 2,  26 => 6,  93 => 29,  88 => 35,  78 => 23,  46 => 6,  27 => 4,  44 => 17,  31 => 6,  28 => 5,  201 => 71,  196 => 107,  183 => 82,  171 => 79,  166 => 97,  163 => 86,  158 => 93,  156 => 54,  151 => 63,  142 => 77,  138 => 76,  136 => 48,  121 => 46,  117 => 47,  105 => 38,  91 => 35,  62 => 13,  49 => 20,  24 => 1,  25 => 4,  19 => 1,  79 => 32,  72 => 23,  69 => 36,  47 => 16,  40 => 14,  37 => 13,  22 => 2,  246 => 139,  157 => 71,  145 => 86,  139 => 71,  131 => 49,  123 => 50,  120 => 50,  115 => 36,  111 => 35,  108 => 36,  101 => 44,  98 => 36,  96 => 41,  83 => 32,  74 => 29,  66 => 20,  55 => 21,  52 => 22,  50 => 10,  43 => 5,  41 => 13,  35 => 4,  32 => 3,  29 => 3,  209 => 99,  203 => 108,  199 => 83,  193 => 101,  189 => 71,  187 => 110,  182 => 71,  176 => 69,  173 => 66,  168 => 86,  164 => 60,  162 => 77,  154 => 80,  149 => 67,  147 => 56,  144 => 58,  141 => 77,  133 => 78,  130 => 71,  125 => 41,  122 => 43,  116 => 38,  112 => 40,  109 => 67,  106 => 38,  103 => 37,  99 => 43,  95 => 37,  92 => 34,  86 => 28,  82 => 26,  80 => 25,  73 => 37,  64 => 25,  60 => 24,  57 => 22,  54 => 10,  51 => 9,  48 => 16,  45 => 7,  42 => 6,  39 => 12,  36 => 3,  33 => 2,  30 => 3,);
    }
}
