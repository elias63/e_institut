<?php

/* EiAdministrationBundle:Contributor:c_liste_actualite.html.twig */
class __TwigTemplate_7c73717fb194eb886a0067354e77a649715934dfa34a208fecda3d9b5155d712 extends Twig_Template
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
        echo "   | Lister actualite
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
<section class=\"grid_9\">
\t\t\t
\t\t\t\t
\t\t\t<div class=\"fieldset with-legend grey-bg \">
\t\t\t\t<div class=\"legend\">Actualités</div>
\t\t\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t<div class=\"block-border\" id=\"status-bar\">
\t
\t\t<a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("ajouter_actualite");
        echo "\" class=\"button\" title=\"Ajouter\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/plus-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> <strong>Ajouter</strong></a>
\t\t
\t\t\t
\t\t\t<span class=\"float-left\">Toutes les actualités </span>
\t
\t</div>
\t
\t
\t<br><br>
\t\t\t
\t\t\t<div class=\"\"><form class=\"block-content form\" id=\"table_form\" method=\"post\" action=\"#\">
\t\t\t\t
\t\t\t\t
\t\t\t\t<div class=\"block-controls\">
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t
\t\t\t\t<div class=\"no-margin\"><table class=\"table\" cellspacing=\"0\" width=\"100%\">
\t\t\t\t
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\" class=\"table-check-cell\"><input type=\"checkbox\" name=\"selected[]\" id=\"table-selected-1\" value=\"1\"></th>
\t\t\t\t\t\t\t<th scope=\"col\">Statut</th>
\t\t\t\t\t\t\t<th scope=\"col\">
\t\t\t\t\t\t\t\t<span class=\"column-sort\">
\t\t\t\t\t\t\t\t\t<a href=\"\" title=\"Sort up\" class=\"sort-up\"></a>
\t\t\t\t\t\t\t\t\t<a href=\"\" title=\"Sort down\" class=\"sort-down\"></a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\tTitre
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<th scope=\"col\">
\t\t\t\t\t\t\t<span class=\"column-sort\">
\t\t\t\t\t\t\t\t\t<a href=\"\" title=\"Sort up\" class=\"sort-up\"></a>
\t\t\t\t\t\t\t\t\t<a href=\"\" title=\"Sort down\" class=\"sort-down\"></a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\tAuteur
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th scope=\"col\">Date
\t\t\t\t\t\t\t\t<span class=\"column-sort\">
\t\t\t\t\t\t\t\t\t<a href=\"\" title=\"Sort up\" class=\"sort-up\"></a>
\t\t\t\t\t\t\t\t\t<a href=\"\" title=\"Sort down\" class=\"sort-down\"></a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"table-actions\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")));
        foreach ($context['_seq'] as $context["_key"] => $context["actualits"]) {
            // line 77
            echo "\t\t\t\t\t<tbody>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\" class=\"table-check-cell\"><input type=\"checkbox\" name=\"selected[]\" id=\"table-selected-1\" value=\"1\"></th>
\t\t\t\t\t\t\t<td>Publié</td>
\t\t\t\t\t\t\t<td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualits"]) ? $context["actualits"] : $this->getContext($context, "actualits")), "titre"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td> ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["actualits"]) ? $context["actualits"] : $this->getContext($context, "actualits")), "user"), "username"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 85
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["actualits"]) ? $context["actualits"] : $this->getContext($context, "actualits")), "dateActualite"), "d m Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td class=\"table-actions\">
                                                            <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_actualite", array("actualite" => $this->getAttribute((isset($context["actualits"]) ? $context["actualits"] : $this->getContext($context, "actualits")), "id"))), "html", null, true);
            echo "\" title=\"Modifier\" class=\"with-tip\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/pencil.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"></a>
                                                            <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail_actualite", array("actualite" => $this->getAttribute((isset($context["actualits"]) ? $context["actualits"] : $this->getContext($context, "actualits")), "id"))), "html", null, true);
            echo "\" title=\"Afficher\" class=\"with-tip\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/magnifier.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"></a>
                                                            <a  onclick=\"SupprimerActualite(";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualits"]) ? $context["actualits"] : $this->getContext($context, "actualits")), "id"), "html", null, true);
            echo ")\" title=\"Supprimer\" title=\"Metttre dans la corbeille\" class=\"with-tip\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t
\t\t\t\t\t\t
\t\t\t\t\t</tbody>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "\t\t\t\t
\t\t\t\t</table></div>
\t\t\t\t
\t\t\t\t<ul class=\"message no-margin\">
\t\t\t\t\t<li>Results 1 - 5 out of 23</li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<div class=\"block-footer\">
\t\t\t\t\t<img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/arrow-curve-000-left.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\" class=\"picto\">
\t\t\t\t\t<span class=\"sep\"></span>
\t\t\t\t\t<select name=\"table-action\" id=\"table-action\" class=\"small\">
\t\t\t\t\t\t<option value=\"\">Tout</option>
\t\t\t\t\t\t<option value=\"publie\">Publiées</option>
\t\t\t\t\t\t<option value=\"corbeille\">Corbeille</option>
\t\t\t\t\t\t<option value=\"desactive\">Désactivées</option>
\t\t\t\t\t</select>
\t\t\t\t\t<button type=\"submit\" class=\"small\">Ok</button>
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t</form></div>
\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t
\t\t\t</div>
\t\t\t\t
\t\t
\t\t</section>
     
";
    }

    // line 131
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 132
        echo "     
     <script>
    
    //Delete Modal
            function SupprimerActualite(id)
            {
                    \$.modal({
                            content: 'Voulez-vous supprimer cet actualité ?'
                                              ,
                            title: 'Confirmation',
                            maxWidth: 300,
                            buttons: {
                                    'Confirmer': function(win) 
                                    { 
                                       console.log(\"Entrer \");
                                    // Action 
                                    \$.post(
                                        \"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("supprimer_actualite");
        echo "\",
                                        {idActualite:id},
                                            function(result){
                                                console.log(\"bien jouer\");
                                                location.reload();
                                                //\$('html').load('";
        // line 154
        echo $this->env->getExtension('routing')->getPath("liste_actualite");
        echo "');
                                                });
                                    
                                    
                                     },
                                    'Annuler': function(win) { win.closeModal(); }
                            }
                    });
            }
    
    
   
    </script> 
    

";
    }

    public function getTemplateName()
    {
        return "EiAdministrationBundle:Contributor:c_liste_actualite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 224,  717 => 544,  714 => 543,  707 => 131,  699 => 91,  691 => 88,  688 => 87,  673 => 546,  671 => 543,  524 => 399,  274 => 164,  251 => 156,  375 => 169,  345 => 152,  339 => 151,  327 => 149,  321 => 176,  315 => 139,  300 => 134,  211 => 130,  378 => 232,  353 => 216,  326 => 193,  295 => 209,  279 => 120,  257 => 135,  97 => 39,  23 => 3,  271 => 204,  222 => 103,  244 => 173,  661 => 307,  658 => 306,  632 => 290,  627 => 288,  613 => 285,  596 => 281,  593 => 280,  590 => 279,  580 => 277,  576 => 276,  572 => 275,  568 => 273,  553 => 268,  546 => 263,  533 => 262,  526 => 258,  513 => 254,  500 => 250,  481 => 239,  463 => 233,  445 => 227,  439 => 225,  433 => 223,  421 => 219,  415 => 217,  399 => 210,  390 => 203,  388 => 202,  372 => 168,  358 => 179,  351 => 153,  347 => 174,  336 => 169,  330 => 166,  218 => 121,  215 => 79,  210 => 99,  275 => 139,  207 => 106,  200 => 131,  289 => 161,  265 => 113,  205 => 127,  192 => 93,  586 => 278,  562 => 272,  555 => 342,  548 => 341,  542 => 340,  532 => 338,  525 => 336,  522 => 257,  519 => 397,  515 => 396,  509 => 253,  505 => 252,  501 => 330,  497 => 328,  491 => 327,  482 => 323,  475 => 237,  455 => 313,  451 => 229,  446 => 310,  438 => 308,  429 => 305,  417 => 297,  410 => 294,  404 => 211,  392 => 288,  356 => 217,  350 => 274,  344 => 272,  342 => 271,  329 => 265,  310 => 237,  301 => 178,  357 => 225,  348 => 218,  340 => 159,  332 => 209,  260 => 159,  386 => 286,  352 => 167,  311 => 135,  304 => 132,  299 => 129,  248 => 86,  234 => 133,  118 => 39,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 130,  701 => 334,  696 => 90,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 291,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 286,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 283,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 361,  560 => 344,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 255,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 317,  456 => 221,  450 => 219,  442 => 309,  434 => 307,  403 => 196,  397 => 193,  383 => 185,  380 => 284,  373 => 181,  367 => 179,  361 => 177,  349 => 157,  331 => 167,  325 => 140,  319 => 163,  313 => 182,  307 => 236,  293 => 129,  282 => 142,  242 => 112,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 547,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 167,  276 => 161,  272 => 160,  267 => 142,  245 => 142,  225 => 120,  318 => 141,  306 => 169,  297 => 165,  292 => 168,  76 => 26,  291 => 208,  288 => 187,  261 => 166,  250 => 114,  137 => 80,  197 => 126,  286 => 175,  262 => 117,  259 => 156,  236 => 132,  195 => 108,  175 => 116,  188 => 104,  165 => 100,  287 => 187,  284 => 168,  256 => 119,  232 => 158,  191 => 108,  343 => 160,  338 => 146,  333 => 238,  328 => 143,  303 => 166,  281 => 120,  277 => 111,  270 => 172,  266 => 135,  231 => 134,  228 => 105,  226 => 108,  223 => 131,  194 => 105,  180 => 89,  155 => 95,  110 => 34,  81 => 24,  190 => 77,  174 => 87,  160 => 82,  152 => 87,  148 => 70,  90 => 37,  127 => 65,  114 => 46,  167 => 88,  146 => 47,  134 => 76,  263 => 157,  255 => 157,  213 => 135,  185 => 91,  153 => 100,  150 => 48,  124 => 64,  70 => 16,  683 => 11,  680 => 10,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 242,  484 => 360,  253 => 132,  249 => 139,  237 => 151,  233 => 150,  216 => 101,  212 => 120,  206 => 94,  202 => 99,  198 => 95,  186 => 121,  184 => 97,  172 => 113,  170 => 94,  161 => 93,  181 => 113,  178 => 96,  129 => 41,  126 => 40,  113 => 57,  104 => 42,  100 => 27,  84 => 25,  20 => 1,  77 => 36,  65 => 17,  53 => 10,  58 => 12,  34 => 3,  480 => 229,  474 => 227,  469 => 235,  461 => 155,  457 => 231,  453 => 151,  444 => 217,  440 => 148,  437 => 147,  435 => 146,  430 => 209,  427 => 221,  423 => 204,  413 => 216,  409 => 132,  407 => 212,  402 => 130,  398 => 290,  393 => 194,  387 => 283,  384 => 282,  381 => 120,  379 => 119,  374 => 282,  368 => 280,  365 => 224,  362 => 181,  360 => 226,  355 => 175,  341 => 105,  337 => 239,  322 => 101,  314 => 99,  312 => 223,  309 => 138,  305 => 158,  298 => 123,  294 => 162,  285 => 121,  283 => 125,  278 => 146,  268 => 161,  264 => 160,  258 => 115,  252 => 118,  247 => 155,  241 => 164,  229 => 149,  220 => 100,  214 => 113,  177 => 106,  169 => 90,  140 => 81,  132 => 42,  128 => 56,  107 => 33,  61 => 13,  273 => 124,  269 => 123,  254 => 154,  243 => 154,  240 => 132,  238 => 112,  235 => 108,  230 => 121,  227 => 132,  224 => 131,  221 => 147,  219 => 114,  217 => 128,  208 => 89,  204 => 97,  179 => 120,  159 => 107,  143 => 46,  135 => 77,  119 => 66,  102 => 34,  71 => 20,  67 => 29,  63 => 34,  59 => 27,  38 => 6,  94 => 38,  89 => 30,  85 => 29,  75 => 25,  68 => 17,  56 => 24,  87 => 26,  21 => 2,  26 => 2,  93 => 28,  88 => 33,  78 => 34,  46 => 14,  27 => 4,  44 => 6,  31 => 2,  28 => 9,  201 => 121,  196 => 87,  183 => 124,  171 => 79,  166 => 90,  163 => 89,  158 => 96,  156 => 70,  151 => 85,  142 => 82,  138 => 77,  136 => 87,  121 => 69,  117 => 37,  105 => 52,  91 => 35,  62 => 19,  49 => 9,  24 => 1,  25 => 5,  19 => 1,  79 => 32,  72 => 22,  69 => 34,  47 => 18,  40 => 11,  37 => 13,  22 => 1,  246 => 149,  157 => 88,  145 => 56,  139 => 80,  131 => 76,  123 => 39,  120 => 64,  115 => 65,  111 => 58,  108 => 43,  101 => 51,  98 => 39,  96 => 29,  83 => 34,  74 => 33,  66 => 16,  55 => 11,  52 => 23,  50 => 9,  43 => 17,  41 => 5,  35 => 3,  32 => 2,  29 => 6,  209 => 107,  203 => 132,  199 => 83,  193 => 101,  189 => 92,  187 => 84,  182 => 120,  176 => 98,  173 => 75,  168 => 85,  164 => 87,  162 => 83,  154 => 78,  149 => 99,  147 => 84,  144 => 82,  141 => 77,  133 => 57,  130 => 64,  125 => 70,  122 => 63,  116 => 61,  112 => 60,  109 => 53,  106 => 35,  103 => 38,  99 => 43,  95 => 36,  92 => 35,  86 => 36,  82 => 35,  80 => 27,  73 => 35,  64 => 26,  60 => 25,  57 => 13,  54 => 16,  51 => 25,  48 => 22,  45 => 6,  42 => 5,  39 => 15,  36 => 5,  33 => 6,  30 => 1,);
    }
}
