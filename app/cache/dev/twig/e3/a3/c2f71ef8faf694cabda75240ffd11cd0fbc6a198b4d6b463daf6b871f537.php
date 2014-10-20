<?php

/* EieinstitutBundle:Contact:demande_contact.html.twig */
class __TwigTemplate_e3a3c2f71ef8faf694cabda75240ffd11cd0fbc6a198b4d6b463daf6b871f537 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EieinstitutBundle::Master-Base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'Slide' => array($this, 'block_Slide'),
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
        echo "   | Ajout contact
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

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "

    <section class=\"grid_9\">
        <div class=\"block-border\">
            <div class=\"block-content\">


                <div class=\"block-controls\">
                    <h1>Rechercher</h1>  <br><br>

                </div>
                <form class=\"form\" id=\"tab-stats\" method=\"post\" action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("demande_contact");
        echo "\">
                    <fieldset class=\"grey-bg\">

                        <span class=\"label required\">
                            Mots Clés

                        </span>
                        <input id=\"complex-fr-subtitle\" class=\"full-width\" type=\"text\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["mots"]) ? $context["mots"] : $this->getContext($context, "mots")), "html", null, true);
        echo "\" name=\"txt_nom\"></input> <br><br>

                        <div class=\"float-right\"><br>
                            <button type=\"submit\" name=\"search\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/tick-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Rechercher</button>
                        </div>
                    </fieldset>
                </form>

                <!-------------------------------
                debut resultat recherche
                
                ----------------------------------->



                <ul class=\"extended-list no-margin icon-user\">
                ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Users"]) ? $context["Users"] : $this->getContext($context, "Users")));
        foreach ($context['_seq'] as $context["_key"] => $context["User"]) {
            echo " 
                
                    ";
            // line 55
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id") != $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "id"))) {
                // line 56
                echo "                        
                        <li>
                            <a href=\"#\">
                                <span class=\"icon\"></span>   </a>
                        ";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "prenom"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "nom"), "html", null, true);
                echo "<br>
                        <small>email</small><br>
                        <small>Etudiant </small>
                        
                      ";
                // line 64
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["Contacts"]) ? $context["Contacts"] : $this->getContext($context, "Contacts")));
                foreach ($context['_seq'] as $context["_key"] => $context["Contact"]) {
                    echo " 
                        
                            ";
                    // line 66
                    $context["id1"] = $this->getAttribute($this->getAttribute((isset($context["Contact"]) ? $context["Contact"] : $this->getContext($context, "Contact")), "contact_user2"), "id");
                    // line 67
                    echo "                            ";
                    $context["id3"] = $this->getAttribute($this->getAttribute((isset($context["Contact"]) ? $context["Contact"] : $this->getContext($context, "Contact")), "contact_user1"), "id");
                    // line 68
                    echo "                            ";
                    $context["id2"] = $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "id");
                    // line 69
                    echo "                           

                            ";
                    // line 71
                    if (((isset($context["id2"]) ? $context["id2"] : $this->getContext($context, "id2")) == (isset($context["id1"]) ? $context["id1"] : $this->getContext($context, "id1")))) {
                        echo "  
                                <ul style=\"opacity: 0;\" class=\"mini-menu\">
                                        <li><a href=\"#\" title=\"Déjà ami(e) avec ";
                        // line 73
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "nom"), "html", null, true);
                        echo "\" name=\"ajout\"> <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/tick-circle.png"), "html", null, true);
                        echo "\" height=\"16\" width=\"16\"></a></li>
                                        <li><a href=\"#\" title=\"Envoyer mail\"><img src=\"";
                        // line 74
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/mail.png"), "html", null, true);
                        echo "\" height=\"16\" width=\"16\"></a></li>

                               </ul>

                            
                                

                             ";
                    } elseif (((isset($context["id2"]) ? $context["id2"] : $this->getContext($context, "id2")) != (isset($context["id1"]) ? $context["id1"] : $this->getContext($context, "id1")))) {
                        // line 82
                        echo "                                <ul style=\"opacity: 0;\" class=\"mini-menu\" id=\"Action_";
                        echo twig_escape_filter($this->env, (isset($context["id2"]) ? $context["id2"] : $this->getContext($context, "id2")), "html", null, true);
                        echo "\">

                                     <li><a  onclick=\"DemanderContact(";
                        // line 84
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "id"), "html", null, true);
                        echo ")\" title=\"Ajouter d'id ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "nom"), "html", null, true);
                        echo "\" name=\"_ajout\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/plus-circle.png"), "html", null, true);
                        echo "\" height=\"16\" width=\"16\"></a></li>
                                     <li><a href=\"#\" title=\"Envoyer mail\"><img src=\"";
                        // line 85
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/mail.png"), "html", null, true);
                        echo "\" height=\"16\" width=\"16\"></a></li>

                                    </ul>
                                
                           ";
                    }
                    // line 90
                    echo "                            
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Contact'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "                            
                    </li>
                ";
            }
            // line 95
            echo "
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['User'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                </ul>
                <ul class=\"controls-buttons\">
                    <li><a href=\"#\" title=\"Précédent\"><img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation-180.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Precedent</a></li>
                    <li><a href=\"#\" title=\"Page 1\"><b>1</b></a></li>
                    <li><a href=\"#\" title=\"Page 2\" class=\"current\"><b>2</b></a></li>
                    <li><a href=\"#\" title=\"Page 3\"><b>3</b></a></li>
                    <li><a href=\"#\" title=\"Page 4\"><b>4</b></a></li>
                    <li><a href=\"#\" title=\"Page 5\"><b>5</b></a></li>
                    <li><a href=\"#\" title=\"suivant\">Suivant <img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>

                </ul>
                <div class=\"clear\"></div>
                <!--------------------

fin resultat recherche

---------------------->

            </div>
        </div>\t\t\t
    </section>

";
    }

    // line 123
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 124
        echo "    <script>
    
    function DemanderContact(id)
    {
        console.log(\"Test\",id );
        \$.post(
               \"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("ajouter_contact");
        echo "\",
                {id:id},
                    function(result){
                        
                        console.log(\"Nice\")
                      
                        \$(\"#Action_\"+id).remove();
                    });
    }
  
    
    </script>
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Contact:demande_contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 130,  255 => 124,  213 => 95,  185 => 84,  153 => 69,  150 => 68,  124 => 56,  70 => 19,  683 => 508,  680 => 507,  675 => 97,  672 => 96,  667 => 88,  664 => 87,  659 => 85,  656 => 84,  651 => 11,  648 => 10,  642 => 510,  640 => 507,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 131,  237 => 125,  233 => 105,  216 => 119,  212 => 118,  206 => 115,  202 => 114,  198 => 113,  186 => 103,  184 => 102,  172 => 93,  170 => 92,  161 => 84,  181 => 71,  178 => 70,  129 => 48,  126 => 47,  113 => 41,  104 => 37,  100 => 36,  84 => 29,  20 => 1,  77 => 24,  65 => 22,  53 => 21,  58 => 13,  34 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 123,  247 => 78,  241 => 77,  229 => 123,  220 => 97,  214 => 69,  177 => 96,  169 => 60,  140 => 55,  132 => 49,  128 => 49,  107 => 36,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 128,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 99,  221 => 77,  219 => 76,  217 => 75,  208 => 92,  204 => 72,  179 => 82,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 30,  67 => 18,  63 => 15,  59 => 13,  38 => 6,  94 => 28,  89 => 26,  85 => 25,  75 => 31,  68 => 14,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 37,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 6,  28 => 5,  201 => 90,  196 => 90,  183 => 82,  171 => 61,  166 => 90,  163 => 87,  158 => 58,  156 => 66,  151 => 63,  142 => 59,  138 => 64,  136 => 56,  121 => 46,  117 => 46,  105 => 40,  91 => 35,  62 => 14,  49 => 20,  24 => 1,  25 => 4,  19 => 1,  79 => 32,  72 => 16,  69 => 25,  47 => 19,  40 => 11,  37 => 13,  22 => 2,  246 => 90,  157 => 71,  145 => 66,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 53,  111 => 43,  108 => 36,  101 => 39,  98 => 31,  96 => 31,  83 => 30,  74 => 25,  66 => 24,  55 => 15,  52 => 17,  50 => 10,  43 => 6,  41 => 15,  35 => 10,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 85,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 74,  164 => 59,  162 => 73,  154 => 80,  149 => 54,  147 => 67,  144 => 53,  141 => 48,  133 => 55,  130 => 60,  125 => 44,  122 => 55,  116 => 41,  112 => 42,  109 => 40,  106 => 36,  103 => 32,  99 => 40,  95 => 36,  92 => 21,  86 => 28,  82 => 22,  80 => 28,  73 => 19,  64 => 26,  60 => 21,  57 => 22,  54 => 11,  51 => 10,  48 => 15,  45 => 19,  42 => 6,  39 => 16,  36 => 4,  33 => 3,  30 => 10,);
    }
}
