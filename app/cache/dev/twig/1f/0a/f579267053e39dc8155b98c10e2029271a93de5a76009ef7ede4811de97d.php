<?php

/* EieinstitutBundle:Ressources:faire_une_preconisation.html.twig */
class __TwigTemplate_1f0af579267053e39dc8155b98c10e2029271a93de5a76009ef7ede4811de97d extends Twig_Template
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
        echo "<section class=\"grid_3\">
    <div class=\"block-border\">
        <div class=\"block-content\">
            <h1>Préconisations</h1>

            <div class=\"task with-legend\">
                <div class=\"legend\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/flag.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Les dernières préconisations</div>

                <div class=\"task-description\">
                    <ul class=\"floating-tags\">
                        <li class=\"tag-time\">5 days ago</li>
                        <li class=\"tag-user\">You</li>
                    </ul>

                    <h3>Type fiche</h3>
                    Small task description Lorem ipsum

                </div>
                <!-- les 5 dernières préconisations-->
                <ul class=\"task-dialog\">
                    <li>
                        <strong>Marc:</strong> Don't forget to tell the client <em>- Yesterday</em>

                    </li>
                    <li>
                        <strong>John:</strong> I suggest you could ask Dan or Sandy for a little help <em>- 2 hours ago</em>

                    </li>


                </ul>
            </div>



        </div></div>

    <div class=\"block-border\">
        <div class=\"block-content\">
            <h1>Commentaires</h1>

            <div class=\"task with-legend\">
                <div class=\"legend\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/flag.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Les derniers commentaires</div>

                <div class=\"task-description\">
                    <ul class=\"floating-tags\">
                        <li class=\"tag-time\">5 days ago</li>
                        <li class=\"tag-user\">You</li>
                    </ul>

                    <h3>Type fiche</h3>
                    Small task description Lorem ipsum

                </div>
                <!-- les 5 derniers commentaires-->
                <ul class=\"task-dialog\">
                    <li>
                        <strong>Marc:</strong> Don't forget to tell the client <em>- Yesterday</em>
                        <ul class=\"mini-menu\" style=\"opacity: 0;\">
                            <li><a href=\"#\" title=\"Send mail\"><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/mail.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
                            <li><a href=\"#\" title=\"Delete comment\"><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Delete</a></li>
                        </ul>
                    </li>
                    <li>
                        <strong>John:</strong> I suggest you could ask Dan or Sandy for a little help <em>- 2 hours ago</em>
                    </li>
                    <li class=\"auto-hide\" style=\"\">
                        <form name=\"task-1-comment\" method=\"post\" action=\"\" class=\"form input-with-button\">
                            <input type=\"text\" name=\"comment\" id=\"task-1-comment\" value=\"\" title=\"Enter comment...\">
                            <button type=\"submit\">ok</button>
                        </form>
                    </li>


                </ul>
            </div>



        </div></div>


</section>

<section class=\"grid_9\">
    <div class=\"block-border\">
        <div class=\"block-content\">
            <div class=\"block-controls\">
                <h1 class=\"bigger\">";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "titre"), "html", null, true);
        echo "</h1>
            </div>
            <div class=\"fieldset  grey-bg clearfix\">
                <div class=\"box float-right\">

                        <ul class=\"simple-list with-icon\">
                            <li ><span>Mise en ligne : ";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('time_ago_extension')->timeAgoInWordsFilter($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "datecreation")), "html", null, true);
        echo "</span></li>
                            <li ><span>Domaine : ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "domaine"), "html", null, true);
        echo "</span></li>
                            <li ><span>Thème : ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "theme"), "html", null, true);
        echo "</span></li>
                            <li ><span>Type : ";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type"), "html", null, true);
        echo "</span></li>
                        </ul>
                </div>
                <p>";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "resume"), "html", null, true);
        echo "</p>
                <p> Adresse <a href=\"http://";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "url"), "html", null, true);
        echo "\" target=\"_blank\" >";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "url"), "html", null, true);
        echo "</a></p>
                <p><ul class=\"keywords\">
                    Tags 
                    ";
        // line 110
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "fiche_tags"));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 111
            echo "                        <li><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/tag-small.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "libelle"), "html", null, true);
            echo " </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                </ul></p>
                <hr class=\"no-margin\">
            </div>
            <div class=\"task with-legend\">
                <!-- The legend -->
                <div class=\"legend\"><img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/finefiles/32/rtf.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Notes</div>

                <div class=\"task-description\">
                    <form class=\"block-content form\" id=\"table_form\" method=\"post\" action=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("preconiser_ressource", array("fiche" => $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "id"))), "html", null, true);
        echo "\">
                        Vous estimez que cette ressource est bien pour : </br>
                        <dl></br>
                            <div class=\"grid_6\">
                                ";
        // line 125
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Criteres"]) ? $context["Criteres"] : $this->getContext($context, "Criteres")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Critere"]) {
            // line 126
            echo "                                <dt class=\"\"><span class=\"number\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Critere"]) ? $context["Critere"] : $this->getContext($context, "Critere")), "libelle"), "html", null, true);
            echo "</dt>
                                <dd></br>
                                    <ul class=\"checkable-list\">

                                        ";
            // line 130
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Notes"]) ? $context["Notes"] : $this->getContext($context, "Notes")));
            foreach ($context['_seq'] as $context["_key"] => $context["Note"]) {
                // line 131
                echo "                                             <li>
                                                 <input type=\"radio\" name=\"radio";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Critere"]) ? $context["Critere"] : $this->getContext($context, "Critere")), "id"), "html", null, true);
                echo "\" id=\"radio-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Note"]) ? $context["Note"] : $this->getContext($context, "Note")), "id"), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Note"]) ? $context["Note"] : $this->getContext($context, "Note")), "id"), "html", null, true);
                echo "\">&nbsp;<label for=\"radio-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Note"]) ? $context["Note"] : $this->getContext($context, "Note")), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Note"]) ? $context["Note"] : $this->getContext($context, "Note")), "libelle"), "html", null, true);
                echo "</label>
                                             </li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Note'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "                                    </ul>
                                </dd>
                                </br>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Critere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "
                                <!--<dt class=\"opened\"><span class=\"number\">2</span> préparer ses travaux dirigés</dt>
                                <dd ></br>
                                    <ul class=\"checkable-list\">
                                        <li><input type=\"radio\" name=\"radio2\" id=\"simple-radio-1\" value=\"1\">&nbsp;<label for=\"simple-radio-1\">Avis réservé</label></li>
                                        <li><input type=\"radio\" name=\"radio2\" id=\"simple-radio-2\" value=\"2\">&nbsp;<label for=\"simple-radio-2\">Suggéré</label></li>
                                        <li><input type=\"radio\" name=\"radio2\" id=\"simple-radio-2\" value=\"2\">&nbsp;<label for=\"simple-radio-2\">Très fortement conseillée</label></li>
                                    </ul>
                                </dd></br>-->
                            </div>
                        </dl>
                        <div class=\"clear\"></div>
                        <button class=\"float-right\" name=\"preconiser\" type=\"submit\">Préconiser</button>
                    </form>
                </div>\t
            </div>
        </div>
    </div>
</section>

  ";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Ressources:faire_une_preconisation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 139,  207 => 125,  200 => 121,  289 => 125,  265 => 113,  205 => 72,  192 => 67,  586 => 360,  562 => 345,  555 => 342,  548 => 341,  542 => 340,  532 => 338,  525 => 336,  522 => 335,  519 => 334,  515 => 333,  509 => 332,  505 => 331,  501 => 330,  497 => 328,  491 => 327,  482 => 323,  475 => 318,  455 => 313,  451 => 312,  446 => 310,  438 => 308,  429 => 305,  417 => 297,  410 => 294,  404 => 292,  392 => 288,  356 => 276,  350 => 274,  344 => 272,  342 => 271,  329 => 265,  310 => 249,  301 => 243,  357 => 225,  348 => 218,  340 => 214,  332 => 209,  260 => 147,  386 => 286,  352 => 158,  311 => 135,  304 => 132,  299 => 129,  248 => 111,  234 => 130,  118 => 41,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 335,  701 => 334,  696 => 333,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 304,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 299,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 294,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 361,  560 => 344,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 242,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 317,  456 => 221,  450 => 219,  442 => 309,  434 => 307,  403 => 196,  397 => 193,  383 => 185,  380 => 284,  373 => 181,  367 => 179,  361 => 177,  349 => 157,  331 => 167,  325 => 140,  319 => 163,  313 => 161,  307 => 133,  293 => 128,  282 => 142,  242 => 123,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 326,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 124,  276 => 157,  272 => 138,  267 => 121,  245 => 151,  225 => 136,  318 => 139,  306 => 167,  297 => 152,  292 => 168,  76 => 24,  291 => 188,  288 => 187,  261 => 166,  250 => 158,  137 => 44,  197 => 80,  286 => 165,  262 => 119,  259 => 118,  236 => 132,  195 => 111,  175 => 90,  188 => 121,  165 => 106,  287 => 187,  284 => 186,  256 => 146,  232 => 160,  191 => 108,  343 => 171,  338 => 146,  333 => 266,  328 => 143,  303 => 166,  281 => 120,  277 => 111,  270 => 172,  266 => 135,  231 => 93,  228 => 142,  226 => 125,  223 => 154,  194 => 118,  180 => 93,  155 => 97,  110 => 47,  81 => 42,  190 => 76,  174 => 94,  160 => 106,  152 => 76,  148 => 87,  90 => 37,  127 => 45,  114 => 46,  167 => 88,  146 => 101,  134 => 81,  263 => 157,  255 => 155,  213 => 115,  185 => 110,  153 => 61,  150 => 102,  124 => 67,  70 => 28,  683 => 544,  680 => 507,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 152,  237 => 95,  233 => 105,  216 => 128,  212 => 100,  206 => 126,  202 => 109,  198 => 113,  186 => 103,  184 => 95,  172 => 110,  170 => 67,  161 => 105,  181 => 71,  178 => 101,  129 => 53,  126 => 67,  113 => 48,  104 => 45,  100 => 36,  84 => 26,  20 => 1,  77 => 30,  65 => 35,  53 => 11,  58 => 13,  34 => 3,  480 => 229,  474 => 227,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 217,  440 => 148,  437 => 147,  435 => 146,  430 => 209,  427 => 143,  423 => 204,  413 => 200,  409 => 132,  407 => 197,  402 => 130,  398 => 290,  393 => 194,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 282,  368 => 280,  365 => 111,  362 => 278,  360 => 226,  355 => 175,  341 => 105,  337 => 169,  322 => 101,  314 => 99,  312 => 170,  309 => 97,  305 => 158,  298 => 131,  294 => 162,  285 => 126,  283 => 125,  278 => 146,  268 => 152,  264 => 139,  258 => 135,  252 => 130,  247 => 78,  241 => 132,  229 => 108,  220 => 100,  214 => 113,  177 => 95,  169 => 107,  140 => 61,  132 => 47,  128 => 61,  107 => 34,  61 => 14,  273 => 115,  269 => 114,  254 => 132,  243 => 94,  240 => 96,  238 => 131,  235 => 94,  230 => 105,  227 => 81,  224 => 126,  221 => 103,  219 => 114,  217 => 128,  208 => 111,  204 => 118,  179 => 70,  159 => 63,  143 => 53,  135 => 50,  119 => 39,  102 => 66,  71 => 22,  67 => 15,  63 => 19,  59 => 12,  38 => 10,  94 => 48,  89 => 33,  85 => 30,  75 => 31,  68 => 21,  56 => 23,  87 => 35,  21 => 2,  26 => 6,  93 => 29,  88 => 35,  78 => 48,  46 => 6,  27 => 4,  44 => 17,  31 => 6,  28 => 5,  201 => 71,  196 => 107,  183 => 82,  171 => 79,  166 => 97,  163 => 86,  158 => 93,  156 => 54,  151 => 63,  142 => 100,  138 => 76,  136 => 48,  121 => 46,  117 => 47,  105 => 38,  91 => 35,  62 => 13,  49 => 20,  24 => 1,  25 => 4,  19 => 1,  79 => 32,  72 => 23,  69 => 36,  47 => 16,  40 => 14,  37 => 13,  22 => 2,  246 => 139,  157 => 71,  145 => 86,  139 => 71,  131 => 49,  123 => 50,  120 => 50,  115 => 36,  111 => 35,  108 => 36,  101 => 44,  98 => 65,  96 => 41,  83 => 32,  74 => 29,  66 => 20,  55 => 21,  52 => 22,  50 => 10,  43 => 5,  41 => 13,  35 => 4,  32 => 3,  29 => 3,  209 => 99,  203 => 108,  199 => 83,  193 => 101,  189 => 71,  187 => 113,  182 => 71,  176 => 111,  173 => 66,  168 => 86,  164 => 107,  162 => 77,  154 => 103,  149 => 67,  147 => 56,  144 => 58,  141 => 77,  133 => 94,  130 => 71,  125 => 41,  122 => 43,  116 => 38,  112 => 40,  109 => 67,  106 => 38,  103 => 37,  99 => 43,  95 => 37,  92 => 34,  86 => 28,  82 => 26,  80 => 25,  73 => 37,  64 => 25,  60 => 24,  57 => 22,  54 => 10,  51 => 9,  48 => 16,  45 => 7,  42 => 6,  39 => 12,  36 => 3,  33 => 2,  30 => 3,);
    }
}
