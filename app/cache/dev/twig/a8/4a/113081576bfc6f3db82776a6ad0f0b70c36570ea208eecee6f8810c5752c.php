<?php

/* EiAdministrationBundle:admin:gerer_utilisateur.html.twig */
class __TwigTemplate_a84a113081576bfc6f3db82776a6ad0f0b70c36570ea208eecee6f8810c5752c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EiAdministrationBundle::Master-Base-admin.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EiAdministrationBundle::Master-Base-admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "      Gérer utilisateur | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "  
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

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
<section class=\"grid_8\">
    <div class=\"block-border\">
        <form class=\"form\" id=\"form1\" method=\"POST\" action='";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("new_utilisateur", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "'>
            <div class=\"block-content\">
                <div class=\"block-controls\">
                    <h1> <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/images/icons/web-app/48/Profile.png"), "html", null, true);
        echo "\" width=\"18\" height=\"18\"> Inscription </h1>  <br><br>
                </div>
                    ";
        // line 22
        $context["Nom"] = "";
        // line 23
        echo "                    ";
        $context["Prenom"] = "";
        // line 24
        echo "                    ";
        $context["Adresse"] = "";
        // line 25
        echo "                    ";
        $context["Pays"] = "";
        // line 26
        echo "                    ";
        $context["Ville"] = "";
        // line 27
        echo "                    ";
        $context["Telephone"] = "";
        // line 28
        echo "                    ";
        $context["Sexe"] = "";
        // line 29
        echo "                    ";
        // line 30
        echo "                    ";
        $context["Email"] = "";
        // line 31
        echo "                    ";
        $context["Login"] = "";
        // line 32
        echo "                    ";
        $context["Password"] = "";
        // line 33
        echo "                    
                    ";
        // line 34
        if ((!(null === (isset($context["User"]) ? $context["User"] : $this->getContext($context, "User"))))) {
            // line 35
            echo "                    
                        ";
            // line 36
            $context["Nom"] = $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "nom");
            // line 37
            echo "\t\t\t";
            $context["Prenom"] = $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "prenom");
            // line 38
            echo "                        ";
            $context["Adresse"] = $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "adresse");
            // line 39
            echo "                        ";
            $context["Pays"] = $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "pays");
            // line 40
            echo "\t\t\t";
            $context["Ville"] = $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "ville");
            // line 41
            echo "\t\t\t";
            $context["Telephone"] = $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "tel");
            // line 42
            echo "\t\t\t";
            $context["Sexe"] = $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "sexe");
            // line 43
            echo "\t\t\t";
            // line 44
            echo "                        ";
            $context["Email"] = $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "email");
            // line 45
            echo "\t\t\t";
            $context["Login"] = $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "username");
            // line 46
            echo "                        ";
            $context["Password"] = $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "password");
            // line 47
            echo "                         
                    ";
        }
        // line 48
        echo " 
                    
                <div class=\"columns form\">
                        <!-- Left column -->
                        <div class=\"colx3-left-double\">
                                <fieldset>
                            <legend>Informations personelles</legend>
                            <p class=\"colx2-left\">
                                <span class=\"label\">
                                    <b>Nom :</b>
                                </span>
                                <input id=\"complex-fr-subtitle\" class=\"full-width\" type=\"text\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["Nom"]) ? $context["Nom"] : $this->getContext($context, "Nom")), "html", null, true);
        echo "\" name=\"nom\"></input> <br><br>
                            </p>
                            <p class=\"colx2-right\">
                                <span class=\"label\">
                                    <b> Prénom :</b>
                                </span>
                                <input id=\"complex-fr-subtitle\" class=\"full-width\" type=\"text\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["Prenom"]) ? $context["Prenom"] : $this->getContext($context, "Prenom")), "html", null, true);
        echo "\" name=\"prenom\"></input> <br><br>
                            </p>
                            <p class=\"colx2\">
                                <span class=\"label\">
                                    <b>Adresse :</b>
                                </span>
                                <textarea name=\"adresse\"  id=\"field13\" class=\"full-width\">";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["Adresse"]) ? $context["Adresse"] : $this->getContext($context, "Adresse")), "html", null, true);
        echo "</textarea>
                            </p>
                            <p class=\"colx2-left\">
                                <span class=\"label\">
                                    <b>Pays :</b>
                                </span>
                                <input id=\"complex-fr-subtitle\" class=\"full-width\" type=\"text\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["Pays"]) ? $context["Pays"] : $this->getContext($context, "Pays")), "html", null, true);
        echo "\" name=\"pays\"></input> <br><br>
                            </p>
                            <p class=\"colx2-right\">
                                <span class=\"label\">
                                    <b>Ville :</b> 
                                </span>
                                <input id=\"complex-fr-subtitle\" class=\"full-width\" type=\"text\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["Ville"]) ? $context["Ville"] : $this->getContext($context, "Ville")), "html", null, true);
        echo "\" name=\"ville\"></input> <br><br>
                            </p>
                            <p class=\"colx2-left\">
                                <span class=\"label\">
                                    <b>Téléphone :</b>
                                </span>
                                <input id=\"complex-fr-subtitle\" class=\"full-width\" type=\"text\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["Telephone"]) ? $context["Telephone"] : $this->getContext($context, "Telephone")), "html", null, true);
        echo "\" name=\"telephone\"></input> <br><br>
                            </p>
                            
                            <div class=\"colx2-right\">
                                <span class=\"label \">Sexe</span>
                                <p class=\"input-height\">
                                    <input type=\"radio\" name=\"sexe\" id=\"field17-1\" value=\"Homme\" checked=\"checked\"> <label for=\"field17-1\">H</label>
                                    <input type=\"radio\" name=\"sexe\" id=\"field17-0\" value=\"Femme\"> <label for=\"field17-0\">F</label>
                                </p>
                            </div>
                            <div class=\"clear\"></div>
                            <p class=\"colx2-left\">
                                <span class=\"label\">
                                    <b>Rôle</b>
                                </span>
                                <select class=\"full-width\" name=\"role\" id=\"stats-sites-0\">
                                    <option value=\"ROLE_USAGER\">Usager</option>
                                    <option value=\"ROLE_ADMIN\">Admin</option>
                                    <option value=\"ROLE_CONTRIBUTEUR\">Contributeur</option>
                                </select> 
                            </p>
                            <p class=\"colx2-right\">

                                <span class=\"label\">
                                    <b>Activation</b> 
                                </span>
                                  <input type=\"checkbox\" name=\"enabled\" id=\"enabled\" value=\"1\" class=\"mini-switch with-tip\" title=\"Enable/disable switch\" checked=\"checked\"/>
                                
                        
                                </br></br>
                            </p>

                            
                        </fieldset>
                      </div>
                         
                        <!-- Right column -->
                          <div class=\"colx3-right\">
                        <fieldset>
                            <legend>Information du compte</legend>


                            <p class=\"colx2\">
                                <span class=\"label\">
                                    <b>Email :</b>
                                </span>
                                <input id=\"complex-fr-subtitle\" class=\"full-width\" type=\"text\" value=\"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["Email"]) ? $context["Email"] : $this->getContext($context, "Email")), "html", null, true);
        echo "\" name=\"email\"></input> 
                            </p>

                            <p class=\"colx2\">
                                <span class=\"label\">
                                    <b>Login :<b>
                                </span>
                                 <input id=\"complex-fr-subtitle\" class=\"full-width\" type=\"text\" value=\"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["Login"]) ? $context["Login"] : $this->getContext($context, "Login")), "html", null, true);
        echo "\" name=\"login\"></input> 
                           </p>
                           <p class=\"colx2\">
                                <span class=\"label\">
                                   <b>Mot de Passe :<b>
                                </span>
                                <input id=\"complex-fr-subtitle\" class=\"full-width\" type=\"password\" value=\"\" name=\"password\"></input> 
                            </p>
                            <p class=\"colx2\">
                                <span class=\"label\">
                                   <b>Saisir à nouveau :<b>
                                </span>
                                <input id=\"complex-fr-subtitle\" class=\"full-width\" type=\"password\" value=\"\" name=\"confpassword\"></input>
                             </p>
                            </fieldset>
                            
                                <div class=\"float-right\">
                                    
                                    <button type=\"submit\" class=\"small grey\" name=\"btn_preview\">
                                        <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/images/icons/fugue/arrow-curve-090.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Retour
                                    </button>
                                    
                                    ";
        // line 164
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) == "add")) {
            // line 165
            echo "                                    <button type=\"submit\" class=\"small grey\" name=\"btn_valider\">
                                        <img src=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/images/icons/fugue/tick-circle.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"> Valider
                                    </button>
                                    ";
        } else {
            // line 169
            echo "                                    <button type=\"submit\" class=\"small grey\" name=\"btn_delete\">
                                        <img src=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/images/icons/fugue/cross-circle.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"> Supprimer
                                    </button>
                                    <button type=\"submit\" class=\"small grey\" name=\"btn_save\">
                                        <img src=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/images/icons/fugue/tick-circle.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"> Enregistrer
                                    </button>
                                    ";
        }
        // line 176
        echo "                                </div> 
                        </div>
                </div>
                
            </div>
        </form>
        </div>
    </section>





";
    }

    public function getTemplateName()
    {
        return "EiAdministrationBundle:admin:gerer_utilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 176,  315 => 173,  300 => 166,  211 => 110,  378 => 232,  353 => 216,  326 => 193,  295 => 164,  279 => 120,  257 => 135,  97 => 39,  23 => 3,  271 => 204,  222 => 161,  244 => 173,  661 => 307,  658 => 306,  632 => 290,  627 => 288,  613 => 285,  596 => 281,  593 => 280,  590 => 279,  580 => 277,  576 => 276,  572 => 275,  568 => 273,  553 => 268,  546 => 263,  533 => 262,  526 => 258,  513 => 254,  500 => 250,  481 => 239,  463 => 233,  445 => 227,  439 => 225,  433 => 223,  421 => 219,  415 => 217,  399 => 210,  390 => 203,  388 => 202,  372 => 189,  358 => 179,  351 => 176,  347 => 174,  336 => 169,  330 => 166,  218 => 121,  215 => 79,  210 => 95,  275 => 139,  207 => 106,  200 => 142,  289 => 161,  265 => 113,  205 => 109,  192 => 99,  586 => 278,  562 => 272,  555 => 342,  548 => 341,  542 => 340,  532 => 338,  525 => 336,  522 => 257,  519 => 334,  515 => 333,  509 => 253,  505 => 252,  501 => 330,  497 => 328,  491 => 327,  482 => 323,  475 => 237,  455 => 313,  451 => 229,  446 => 310,  438 => 308,  429 => 305,  417 => 297,  410 => 294,  404 => 211,  392 => 288,  356 => 217,  350 => 274,  344 => 272,  342 => 271,  329 => 265,  310 => 237,  301 => 178,  357 => 225,  348 => 218,  340 => 159,  332 => 209,  260 => 165,  386 => 286,  352 => 167,  311 => 135,  304 => 132,  299 => 129,  248 => 86,  234 => 133,  118 => 39,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 335,  701 => 334,  696 => 333,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 291,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 286,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 283,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 361,  560 => 344,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 255,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 317,  456 => 221,  450 => 219,  442 => 309,  434 => 307,  403 => 196,  397 => 193,  383 => 185,  380 => 284,  373 => 181,  367 => 179,  361 => 177,  349 => 157,  331 => 167,  325 => 140,  319 => 163,  313 => 182,  307 => 236,  293 => 128,  282 => 142,  242 => 112,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 547,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 162,  276 => 161,  272 => 160,  267 => 142,  245 => 142,  225 => 120,  318 => 141,  306 => 169,  297 => 165,  292 => 168,  76 => 22,  291 => 188,  288 => 187,  261 => 166,  250 => 114,  137 => 44,  197 => 80,  286 => 175,  262 => 117,  259 => 156,  236 => 132,  195 => 108,  175 => 116,  188 => 104,  165 => 89,  287 => 187,  284 => 186,  256 => 146,  232 => 160,  191 => 108,  343 => 160,  338 => 146,  333 => 266,  328 => 143,  303 => 166,  281 => 120,  277 => 111,  270 => 172,  266 => 135,  231 => 134,  228 => 167,  226 => 108,  223 => 131,  194 => 100,  180 => 91,  155 => 103,  110 => 34,  81 => 24,  190 => 77,  174 => 74,  160 => 91,  152 => 71,  148 => 70,  90 => 27,  127 => 42,  114 => 44,  167 => 88,  146 => 47,  134 => 81,  263 => 157,  255 => 155,  213 => 115,  185 => 91,  153 => 61,  150 => 48,  124 => 41,  70 => 16,  683 => 544,  680 => 507,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 242,  484 => 360,  253 => 132,  249 => 139,  237 => 134,  233 => 122,  216 => 96,  212 => 120,  206 => 94,  202 => 99,  198 => 113,  186 => 98,  184 => 77,  172 => 65,  170 => 94,  161 => 93,  181 => 71,  178 => 96,  129 => 41,  126 => 40,  113 => 48,  104 => 32,  100 => 27,  84 => 25,  20 => 1,  77 => 36,  65 => 17,  53 => 11,  58 => 13,  34 => 3,  480 => 229,  474 => 227,  469 => 235,  461 => 155,  457 => 231,  453 => 151,  444 => 217,  440 => 148,  437 => 147,  435 => 146,  430 => 209,  427 => 221,  423 => 204,  413 => 216,  409 => 132,  407 => 212,  402 => 130,  398 => 290,  393 => 194,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 282,  368 => 280,  365 => 224,  362 => 181,  360 => 226,  355 => 175,  341 => 105,  337 => 169,  322 => 101,  314 => 99,  312 => 170,  309 => 170,  305 => 158,  298 => 123,  294 => 162,  285 => 121,  283 => 125,  278 => 146,  268 => 152,  264 => 139,  258 => 115,  252 => 130,  247 => 183,  241 => 150,  229 => 108,  220 => 100,  214 => 113,  177 => 106,  169 => 74,  140 => 45,  132 => 42,  128 => 56,  107 => 33,  61 => 14,  273 => 119,  269 => 114,  254 => 132,  243 => 94,  240 => 132,  238 => 112,  235 => 111,  230 => 121,  227 => 138,  224 => 126,  221 => 147,  219 => 114,  217 => 128,  208 => 89,  204 => 118,  179 => 120,  159 => 107,  143 => 46,  135 => 43,  119 => 54,  102 => 34,  71 => 20,  67 => 16,  63 => 34,  59 => 27,  38 => 6,  94 => 47,  89 => 30,  85 => 29,  75 => 31,  68 => 17,  56 => 23,  87 => 26,  21 => 2,  26 => 2,  93 => 28,  88 => 33,  78 => 23,  46 => 14,  27 => 4,  44 => 6,  31 => 2,  28 => 9,  201 => 121,  196 => 87,  183 => 124,  171 => 79,  166 => 111,  163 => 59,  158 => 77,  156 => 70,  151 => 68,  142 => 100,  138 => 76,  136 => 87,  121 => 40,  117 => 37,  105 => 39,  91 => 35,  62 => 19,  49 => 9,  24 => 1,  25 => 5,  19 => 1,  79 => 32,  72 => 22,  69 => 34,  47 => 18,  40 => 11,  37 => 13,  22 => 1,  246 => 139,  157 => 88,  145 => 56,  139 => 65,  131 => 49,  123 => 39,  120 => 38,  115 => 36,  111 => 43,  108 => 53,  101 => 31,  98 => 30,  96 => 29,  83 => 33,  74 => 29,  66 => 16,  55 => 11,  52 => 10,  50 => 10,  43 => 17,  41 => 5,  35 => 4,  32 => 3,  29 => 6,  209 => 107,  203 => 108,  199 => 83,  193 => 101,  189 => 92,  187 => 84,  182 => 121,  176 => 98,  173 => 75,  168 => 81,  164 => 107,  162 => 71,  154 => 87,  149 => 59,  147 => 66,  144 => 82,  141 => 77,  133 => 57,  130 => 64,  125 => 55,  122 => 51,  116 => 58,  112 => 35,  109 => 50,  106 => 35,  103 => 38,  99 => 43,  95 => 36,  92 => 35,  86 => 33,  82 => 32,  80 => 32,  73 => 35,  64 => 26,  60 => 14,  57 => 13,  54 => 16,  51 => 25,  48 => 11,  45 => 7,  42 => 6,  39 => 15,  36 => 5,  33 => 6,  30 => 1,);
    }
}
