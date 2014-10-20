<?php

/* EieinstitutBundle:Portefolio:inscription.html.twig */
class __TwigTemplate_deb1527c45bac21d78b84984c6098e622377abf5809436cd05d279dc8c4f6087 extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "     inscription | ";
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
        echo "<section class=\"grid_3\"></section>    
<section class=\"grid_6\">
    <div class=\"block-border\">
        <div class=\"block-content\">
            <div class=\"block-controls\">
                <h1>Inscription </h1><br><br>
            </div>

                ";
        // line 22
        if (((isset($context["inscript"]) ? $context["inscript"] : $this->getContext($context, "inscript")) == (-1))) {
            // line 23
            echo "                <div style=\"text-align: center; color:#ff0000 ; font-size: 15px; font-weight: bold\">L'identifiant ou l'email existe</div>
                <form class=\"form\" id=\"form1\" method=\"post\" action=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("inscription");
            echo "\">
                    <fieldset class=\"grey-bg\">
                    <legend>Vos informations</legend>
                    <div class=\"colx4-left-double required\">
                        <label for=\"complex-fr-title\">Nom</label>
                        <span class=\"relative\">
                            <input type=\"text\" name=\"nom\" id=\"complex-fr-title\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
            echo "\" class=\"full-width\">
                           
                        </span>
                    </div><br>
                    <div class=\"colx4-right-double required\">
                        <label for=\"complex-fr-title\">Prénom</label>
                        <span class=\"relative\">
                            <input type=\"text\" name=\"prenom\" id=\"complex-fr-title\" value=\"";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
            echo "\" class=\"full-width\">
                            
                        </span>
                    </div><br>
                    <div class=\" required\">
                        <label for=\"complex-fr-title\">Adresse mail</label>
                        <span class=\"relative\">
                            <input type=\"text\" name=\"email\" id=\"complex-fr-title\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
            echo "\" class=\"full-width\">
                            
                        </span>
                    </div>
                </fieldset>
                <fieldset class=\"grey-bg\">
                    <legend>Votre compte</legend>
                    <div class=\" required\">
                        <label for=\"complex-fr-title\">Identifiant</label>
                        <span class=\"relative\">
                            <input type=\"text\" name=\"username\" id=\"complex-fr-title\" value=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
            echo "\" class=\"full-width\">
                            
                        </span>
                    </div><br>
                    <div class=\" required\">
                        <label for=\"complex-fr-title\">Mot de passe</label>
                        <span class=\"relative\">
                            <input type=\"password\" name=\"password\" id=\"complex-fr-title\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : $this->getContext($context, "password")), "html", null, true);
            echo "\" class=\"full-width\">
                            
                        </span>
                    </div><br>
                    <div class=\" required\">
                        <label for=\"complex-fr-title\">Confirmer le mot de passe</label>
                        <span class=\"relative\">
                            <input type=\"password\" name=\"confirmer_password\" id=\"complex-fr-title\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["confirmer"]) ? $context["confirmer"] : $this->getContext($context, "confirmer")), "html", null, true);
            echo "\" class=\"full-width\">
                            
                        </span>
                    </div>
                

<br><br><br>
                    <input type=\"checkbox\" name=\"cgenerale\" id=\"simple-checkbox-1\" value=\"";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["cogenerale"]) ? $context["cogenerale"] : $this->getContext($context, "cogenerale")), "html", null, true);
            echo "\">
                    &nbsp;  <label for=\"simple-checkbox-1\">J'ai lu et j'accepte les <a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("Legal_Condition");
            echo "\" > Conditions d'utilisations </a></label> <br><br><br>
                    
                    
                    <div class=\"float-right\"><br>

                        <button type=\"submit\" name=\"btn_valider\"><img src=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/tick-circle.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"> S'inscrire</button>
                    </div>
                </fieldset>
                </form>
                ";
        }
        // line 86
        echo "                
                
                
          ";
        // line 89
        if (((isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")) == 1)) {
            // line 90
            echo "                <div style=\"text-align: center; background-color:#55ea55 ; font-size: 15px; font-weight: bold\">Votre inscription s'est terminée avec succès <br />
                     Connectez-vous pour accéder aux différentes fonctionnalités de la plate forme</div>
              ";
        } elseif (((isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")) == (-1))) {
            // line 93
            echo "                
                <div style=\"text-align: center; color:#ff0000 ; font-size: 15px; font-weight: bold\"><h2>Tous les champs sont obligatoires</h2></div>
                <form class=\"form\" id=\"form1\" method=\"post\" action=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("inscription");
            echo "\">
                    <fieldset class=\"grey-bg\">
                    <legend>Vos informations</legend>
                    <div class=\"colx4-left-double required\">
                        <label for=\"complex-fr-title\">Nom</label>
                        <span class=\"relative\">
                            <input type=\"text\" name=\"nom\" id=\"complex-fr-title\" value=\"";
            // line 101
            echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
            echo "\" class=\"full-width\">
                           
                        </span>
                    </div><br>
                    <div class=\"colx4-right-double required\">
                        <label for=\"complex-fr-title\">Prénom</label>
                        <span class=\"relative\">
                            <input type=\"text\" name=\"prenom\" id=\"complex-fr-title\" value=\"";
            // line 108
            echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
            echo "\" class=\"full-width\">
                            
                        </span>
                    </div><br>
                    <div class=\" required\">
                        <label for=\"complex-fr-title\">Adresse mail</label>
                        <span class=\"relative\">
                            <input type=\"text\" name=\"email\" id=\"complex-fr-title\" value=\"";
            // line 115
            echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
            echo "\" class=\"full-width\">
                            
                        </span>
                    </div>
                </fieldset>
                <fieldset class=\"grey-bg\">
                    <legend>Votre compte</legend>
                    <div class=\" required\">
                        <label for=\"complex-fr-title\">Identifiant</label>
                        <span class=\"relative\">
                            <input type=\"text\" name=\"username\" id=\"complex-fr-title\" value=\"";
            // line 125
            echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
            echo "\" class=\"full-width\">
                            
                        </span>
                    </div><br>
                    <div class=\" required\">
                        <label for=\"complex-fr-title\">Mot de passe</label>
                        <span class=\"relative\">
                            <input type=\"password\" name=\"password\" id=\"complex-fr-title\" value=\"";
            // line 132
            echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : $this->getContext($context, "password")), "html", null, true);
            echo "\" class=\"full-width\">
                            
                        </span>
                    </div><br>
                    <div class=\" required\">
                        <label for=\"complex-fr-title\">Confirmer le mot de passe</label>
                        <span class=\"relative\">
                            <input type=\"password\" name=\"confirmer_password\" id=\"complex-fr-title\" value=\"";
            // line 139
            echo twig_escape_filter($this->env, (isset($context["confirmer"]) ? $context["confirmer"] : $this->getContext($context, "confirmer")), "html", null, true);
            echo "\" class=\"full-width\">
                            
                        </span>
                    </div>
                

<br><br><br>
                    <input type=\"checkbox\" name=\"cgenerale\" id=\"simple-checkbox-1\" value=\"";
            // line 146
            echo twig_escape_filter($this->env, (isset($context["cogenerale"]) ? $context["cogenerale"] : $this->getContext($context, "cogenerale")), "html", null, true);
            echo "\">
                    &nbsp;  <label for=\"simple-checkbox-1\">J'ai lu et j'accepte les <a href=\"";
            // line 147
            echo $this->env->getExtension('routing')->getPath("Legal_Condition");
            echo "\" > Conditions d'utilisations </a></label> <br><br><br>
                    
                    
                    <div class=\"float-right\"><br>

                        <button type=\"submit\" name=\"btn_valider\"><img src=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/tick-circle.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"> S'inscrire</button>
                    </div>
                </fieldset>
                </form>
                ";
        } elseif (((isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")) == 0)) {
            // line 157
            echo "                <form class=\"form\" id=\"form1\" method=\"post\" action=\"";
            echo $this->env->getExtension('routing')->getPath("inscription");
            echo "\">
                    <fieldset class=\"grey-bg\">
                    <legend>Vos informations</legend>
                    <div class=\"colx4-left-double required\">
                        <label for=\"complex-fr-title\">Nom</label>
                        <span class=\"relative\">
                            <input type=\"text\" name=\"nom\" id=\"complex-fr-title\" value=\"\" class=\"full-width\">
                           
                        </span>
                    </div><br>
                    <div class=\"colx4-right-double required\">
                        <label for=\"complex-fr-title\">Prénom</label>
                        <span class=\"relative\">
                            <input type=\"text\" name=\"prenom\" id=\"complex-fr-title\" value=\"\" class=\"full-width\">
                            
                        </span>
                    </div><br>
                    <div class=\" required\">
                        <label for=\"complex-fr-title\">Adresse mail</label>
                        <span class=\"relative\">
                            <input type=\"text\" name=\"email\" id=\"complex-fr-title\" value=\"\" class=\"full-width\">
                            
                        </span>
                    </div>
                </fieldset>
                <fieldset class=\"grey-bg\">
                    <legend>Votre compte</legend>
                    <div class=\" required\">
                        <label for=\"complex-fr-title\">Identifiant</label>
                        <span class=\"relative\">
                            <input type=\"text\" name=\"username\" id=\"complex-fr-title\" value=\"\" class=\"full-width\">
                            
                        </span>
                    </div><br>
                    <div class=\" required\">
                        <label for=\"complex-fr-title\">Mot de passe</label>
                        <span class=\"relative\">
                            <input type=\"password\" name=\"password\" id=\"complex-fr-title\" value=\"\" class=\"full-width\">
                            
                        </span>
                    </div><br>
                    <div class=\" required\">
                        <label for=\"complex-fr-title\">Confirmer le mot de passe</label>
                        <span class=\"relative\">
                            <input type=\"password\" name=\"confirmer_password\" id=\"complex-fr-title\" value=\"\" class=\"full-width\">
                            
                        </span>
                    </div>
                

<br><br><br>
                    <input type=\"checkbox\" name=\"cgenerale\" id=\"simple-checkbox-1\" value=\"1\">
                    &nbsp;  <label for=\"simple-checkbox-1\">J'ai lu et j'accepte les <a href=\"";
            // line 209
            echo $this->env->getExtension('routing')->getPath("Legal_Condition");
            echo "\" > Conditions d'utilisations </a></label> <br><br><br>
                    
                    
                    <div class=\"float-right\"><br>

                        <button type=\"submit\" name=\"btn_valider\"><img src=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/tick-circle.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"> S'inscrire</button>
                    </div>
                </fieldset>
                </form>
            ";
        }
        // line 218
        echo "    
        </div>\t
    </div>\t\t\t\t
</section>
<section class=\"grid_3\"></section>    
";
    }

    // line 225
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 226
        echo "
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Portefolio:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 225,  348 => 218,  340 => 214,  332 => 209,  260 => 147,  386 => 190,  352 => 158,  311 => 135,  304 => 132,  299 => 129,  248 => 111,  234 => 106,  118 => 54,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 335,  701 => 334,  696 => 333,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 304,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 299,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 294,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 289,  560 => 262,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 242,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 223,  456 => 221,  450 => 219,  442 => 216,  434 => 210,  403 => 196,  397 => 193,  383 => 185,  380 => 184,  373 => 181,  367 => 179,  361 => 177,  349 => 157,  331 => 167,  325 => 140,  319 => 163,  313 => 161,  307 => 133,  293 => 128,  282 => 142,  242 => 123,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 326,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 124,  276 => 157,  272 => 138,  267 => 121,  245 => 151,  225 => 136,  318 => 139,  306 => 167,  297 => 152,  292 => 168,  76 => 24,  291 => 188,  288 => 187,  261 => 166,  250 => 158,  137 => 44,  197 => 80,  286 => 165,  262 => 119,  259 => 118,  236 => 132,  195 => 111,  175 => 90,  188 => 107,  165 => 65,  287 => 187,  284 => 186,  256 => 146,  232 => 119,  191 => 108,  343 => 171,  338 => 146,  333 => 143,  328 => 143,  303 => 166,  281 => 112,  277 => 111,  270 => 172,  266 => 135,  231 => 93,  228 => 142,  226 => 125,  223 => 131,  194 => 67,  180 => 93,  155 => 97,  110 => 47,  81 => 24,  190 => 76,  174 => 94,  160 => 81,  152 => 76,  148 => 75,  90 => 37,  127 => 45,  114 => 46,  167 => 88,  146 => 47,  134 => 44,  263 => 157,  255 => 155,  213 => 115,  185 => 84,  153 => 61,  150 => 60,  124 => 67,  70 => 17,  683 => 544,  680 => 507,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 152,  237 => 95,  233 => 105,  216 => 128,  212 => 100,  206 => 126,  202 => 109,  198 => 113,  186 => 103,  184 => 95,  172 => 73,  170 => 67,  161 => 78,  181 => 71,  178 => 101,  129 => 53,  126 => 52,  113 => 48,  104 => 45,  100 => 36,  84 => 26,  20 => 1,  77 => 33,  65 => 17,  53 => 10,  58 => 13,  34 => 3,  480 => 229,  474 => 227,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 217,  440 => 148,  437 => 147,  435 => 146,  430 => 209,  427 => 143,  423 => 204,  413 => 200,  409 => 132,  407 => 197,  402 => 130,  398 => 129,  393 => 194,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 226,  355 => 175,  341 => 105,  337 => 169,  322 => 101,  314 => 99,  312 => 170,  309 => 97,  305 => 158,  298 => 91,  294 => 162,  285 => 126,  283 => 125,  278 => 146,  268 => 152,  264 => 139,  258 => 81,  252 => 130,  247 => 78,  241 => 108,  229 => 108,  220 => 100,  214 => 113,  177 => 95,  169 => 72,  140 => 45,  132 => 47,  128 => 61,  107 => 34,  61 => 14,  273 => 110,  269 => 94,  254 => 132,  243 => 109,  240 => 96,  238 => 107,  235 => 94,  230 => 105,  227 => 81,  224 => 101,  221 => 103,  219 => 114,  217 => 128,  208 => 111,  204 => 118,  179 => 70,  159 => 63,  143 => 46,  135 => 55,  119 => 39,  102 => 32,  71 => 22,  67 => 16,  63 => 19,  59 => 13,  38 => 10,  94 => 48,  89 => 28,  85 => 30,  75 => 31,  68 => 21,  56 => 18,  87 => 34,  21 => 2,  26 => 6,  93 => 29,  88 => 35,  78 => 23,  46 => 7,  27 => 4,  44 => 15,  31 => 6,  28 => 5,  201 => 115,  196 => 107,  183 => 82,  171 => 79,  166 => 97,  163 => 86,  158 => 93,  156 => 62,  151 => 63,  142 => 77,  138 => 68,  136 => 48,  121 => 46,  117 => 46,  105 => 44,  91 => 35,  62 => 14,  49 => 20,  24 => 1,  25 => 4,  19 => 1,  79 => 32,  72 => 23,  69 => 20,  47 => 16,  40 => 14,  37 => 13,  22 => 2,  246 => 139,  157 => 71,  145 => 80,  139 => 71,  131 => 66,  123 => 44,  120 => 50,  115 => 36,  111 => 35,  108 => 36,  101 => 44,  98 => 31,  96 => 29,  83 => 33,  74 => 34,  66 => 20,  55 => 21,  52 => 17,  50 => 9,  43 => 6,  41 => 13,  35 => 3,  32 => 2,  29 => 3,  209 => 99,  203 => 108,  199 => 83,  193 => 101,  189 => 71,  187 => 110,  182 => 71,  176 => 69,  173 => 89,  168 => 86,  164 => 96,  162 => 64,  154 => 80,  149 => 81,  147 => 56,  144 => 58,  141 => 57,  133 => 78,  130 => 71,  125 => 41,  122 => 40,  116 => 38,  112 => 35,  109 => 47,  106 => 41,  103 => 37,  99 => 43,  95 => 37,  92 => 21,  86 => 49,  82 => 46,  80 => 25,  73 => 23,  64 => 26,  60 => 26,  57 => 22,  54 => 11,  51 => 10,  48 => 16,  45 => 6,  42 => 5,  39 => 11,  36 => 4,  33 => 3,  30 => 3,);
    }
}
