<?php

/* EieinstitutBundle:Pages:gerer_utilisateur.html.twig */
class __TwigTemplate_af02843073d296ddeed9bfd81bedd89ee5ac185b8e38fdda9376cf6ecde7f211 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/web-app/48/Profile.png"), "html", null, true);
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
                                </select> 
                            </p>
                            <p class=\"colx2-right\">

                                <span class=\"label\">
                                    <b>Activation</b>
                                </span>
                                <input id=\"keep-logged\" class=\"switch\" type=\"checkbox\" checked=\"checked\" value=\"1\" name=validation\" style=\"display: none;\"></input></br></br>

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
        // line 132
        echo twig_escape_filter($this->env, (isset($context["Email"]) ? $context["Email"] : $this->getContext($context, "Email")), "html", null, true);
        echo "\" name=\"email\"></input> 
                            </p>

                            <p class=\"colx2\">
                                <span class=\"label\">
                                    <b>Login :<b>
                                </span>
                                 <input id=\"complex-fr-subtitle\" class=\"full-width\" type=\"text\" value=\"";
        // line 139
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
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/arrow-curve-090.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Retour
                                    </button>
                                    
                                    ";
        // line 161
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) == "add")) {
            // line 162
            echo "                                    <button type=\"submit\" class=\"small grey\" name=\"btn_valider\">
                                        <img src=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/tick-circle.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"> Valider
                                    </button>
                                    ";
        } else {
            // line 166
            echo "                                    <button type=\"submit\" class=\"small grey\" name=\"btn_delete\">
                                        <img src=\"";
            // line 167
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"> Supprimer
                                    </button>
                                    <button type=\"submit\" class=\"small grey\" name=\"btn_save\">
                                        <img src=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/tick-circle.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"> Enregistrer
                                    </button>
                                    ";
        }
        // line 173
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
        return "EieinstitutBundle:Pages:gerer_utilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 173,  306 => 167,  297 => 163,  292 => 161,  76 => 22,  291 => 188,  288 => 187,  261 => 166,  250 => 158,  137 => 44,  197 => 133,  286 => 158,  262 => 132,  259 => 131,  236 => 119,  195 => 87,  175 => 84,  188 => 107,  165 => 76,  287 => 187,  284 => 186,  256 => 161,  232 => 140,  191 => 108,  343 => 148,  338 => 146,  333 => 145,  328 => 143,  303 => 166,  281 => 112,  277 => 111,  270 => 172,  266 => 108,  231 => 93,  228 => 142,  226 => 91,  223 => 90,  194 => 67,  180 => 109,  155 => 97,  110 => 34,  81 => 24,  190 => 77,  174 => 103,  160 => 71,  152 => 93,  148 => 65,  90 => 27,  127 => 53,  114 => 46,  167 => 88,  146 => 47,  134 => 44,  263 => 130,  255 => 124,  213 => 95,  185 => 84,  153 => 76,  150 => 48,  124 => 56,  70 => 16,  683 => 508,  680 => 507,  675 => 97,  672 => 96,  667 => 88,  664 => 87,  659 => 85,  656 => 84,  651 => 11,  648 => 10,  642 => 510,  640 => 507,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 100,  237 => 95,  233 => 105,  216 => 128,  212 => 100,  206 => 126,  202 => 125,  198 => 113,  186 => 89,  184 => 110,  172 => 65,  170 => 82,  161 => 78,  181 => 71,  178 => 104,  129 => 41,  126 => 40,  113 => 48,  104 => 32,  100 => 36,  84 => 25,  20 => 1,  77 => 33,  65 => 17,  53 => 21,  58 => 13,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 170,  309 => 97,  305 => 95,  298 => 91,  294 => 162,  285 => 113,  283 => 88,  278 => 146,  268 => 85,  264 => 139,  258 => 81,  252 => 123,  247 => 78,  241 => 152,  229 => 108,  220 => 97,  214 => 69,  177 => 96,  169 => 87,  140 => 45,  132 => 42,  128 => 57,  107 => 33,  61 => 17,  273 => 110,  269 => 94,  254 => 132,  243 => 128,  240 => 96,  238 => 85,  235 => 94,  230 => 82,  227 => 81,  224 => 141,  221 => 103,  219 => 114,  217 => 102,  208 => 89,  204 => 72,  179 => 85,  159 => 61,  143 => 46,  135 => 43,  119 => 39,  102 => 53,  71 => 20,  67 => 15,  63 => 19,  59 => 12,  38 => 10,  94 => 48,  89 => 30,  85 => 35,  75 => 24,  68 => 21,  56 => 13,  87 => 26,  21 => 2,  26 => 6,  93 => 28,  88 => 35,  78 => 23,  46 => 15,  27 => 4,  44 => 6,  31 => 2,  28 => 6,  201 => 115,  196 => 97,  183 => 82,  171 => 79,  166 => 81,  163 => 59,  158 => 93,  156 => 70,  151 => 63,  142 => 72,  138 => 46,  136 => 59,  121 => 46,  117 => 37,  105 => 46,  91 => 35,  62 => 13,  49 => 9,  24 => 1,  25 => 4,  19 => 1,  79 => 47,  72 => 23,  69 => 22,  47 => 16,  40 => 12,  37 => 6,  22 => 2,  246 => 157,  157 => 71,  145 => 80,  139 => 71,  131 => 66,  123 => 39,  120 => 38,  115 => 36,  111 => 47,  108 => 36,  101 => 31,  98 => 30,  96 => 29,  83 => 32,  74 => 34,  66 => 20,  55 => 21,  52 => 10,  50 => 10,  43 => 5,  41 => 5,  35 => 10,  32 => 7,  29 => 3,  209 => 99,  203 => 78,  199 => 83,  193 => 94,  189 => 71,  187 => 110,  182 => 105,  176 => 115,  173 => 79,  168 => 74,  164 => 72,  162 => 94,  154 => 80,  149 => 81,  147 => 75,  144 => 91,  141 => 79,  133 => 78,  130 => 60,  125 => 41,  122 => 40,  116 => 38,  112 => 35,  109 => 47,  106 => 41,  103 => 37,  99 => 37,  95 => 31,  92 => 21,  86 => 43,  82 => 46,  80 => 24,  73 => 32,  64 => 35,  60 => 14,  57 => 13,  54 => 10,  51 => 9,  48 => 11,  45 => 14,  42 => 14,  39 => 11,  36 => 3,  33 => 2,  30 => 10,);
    }
}
