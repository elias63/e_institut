<?php

/* EieinstitutBundle:Contact:liste_contact.html.twig */
class __TwigTemplate_18593ff7e88ee2c1ce4b629aab36e95e28adc4a05f47f424b57804d8a76b8a01 extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "     ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "   | Annuaire
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
    public function block_Slide($context, array $blocks = array())
    {
        // line 13
        echo "
";
    }

    // line 15
    public function block_Sub_Content($context, array $blocks = array())
    {
        // line 16
        echo "    <section class=\"grid_9\">

\t\t\t<div class=\"block-border\"><form class=\"block-content form\" name=\"table_form\" id=\"table_form\" method=\"post\" action=\"\">
\t\t\t\t<h1>
\t\t\t\t\tMes contacts
\t\t\t\t\t<a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("demande_contact");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/plus-circle-blue.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Ajouter contact</a>
\t\t\t\t</h1>
                                        
                                     
\t\t\t\t<div class=\"block-controls\">
\t\t\t\t\t
\t\t\t\t\t<ul class=\"controls-buttons\">
\t\t\t\t\t\t<li><a href=\"#\" title=\"Previous\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation-180.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Préc.</a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 1\" class=\"current\"><b>1</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 2\"><b>2</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 3\"><b>3</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 4\"><b>4</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 5\"><b>5</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Next\">Suiv. <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t\t<li class=\"sep\"></li>
\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/arrow-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"with-head no-margin\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"head\">
\t\t\t\t\t\t<div class=\"black-cell with-gap\"><span class=\"success\"></span></div>
\t\t\t\t\t\t<div class=\"black-cell\">Sort by</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"column-sort\">
\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Sort up\" class=\"sort-up active\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Sort down\" class=\"sort-down\"></a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\tNom
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"column-sort\">
\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Sort up\" class=\"sort-up\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Sort down\" class=\"sort-down\"></a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\tSexe
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"grid dark-grey-gradient\">
\t\t\t\t\t\t";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Contacts"]) ? $context["Contacts"] : $this->getContext($context, "Contacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["Contact"]) {
            echo "    
                                                
                                        
                                         
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"grid-picto user\">
\t\t\t\t\t\t\t\t<small>Administrator</small>
\t\t\t\t\t\t\t\t<p class=\"grid-name\">";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Contact"]) ? $context["Contact"] : $this->getContext($context, "Contact")), "contact_user2"), "nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Contact"]) ? $context["Contact"] : $this->getContext($context, "Contact")), "contact_user2"), "prenom"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<p class=\"grid-details\">Age: <b>28</b><br>
\t\t\t\t\t\t\t\tGender: <b>male</b><br>
\t\t\t\t\t\t\t\tCountry: <b>USA</b></p>
\t\t\t\t\t\t\t</div>
                                                         ";
            // line 76
            $context["contact"] = $this->getAttribute($this->getAttribute((isset($context["Contact"]) ? $context["Contact"] : $this->getContext($context, "Contact")), "contact_user2"), "username");
            // line 77
            echo "\t\t\t\t\t\t\t<ul class=\"grid-actions\">
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profile_contact", array("profile" => $this->getAttribute($this->getAttribute((isset($context["Contact"]) ? $context["Contact"] : $this->getContext($context, "Contact")), "contact_user2"), "id"))), "html", null, true);
            echo "\" name=\"profil\"  title=\"Voire profil\" class=\"with-tip\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/magnifier.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t\t\t\t<li><a onclick=\"SupprimerContact(";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Contact"]) ? $context["Contact"] : $this->getContext($context, "Contact")), "id"), "html", null, true);
            echo ")\" title=\"Supprimer\" class=\"with-tip\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t\t\t\t<li><input title=\"Blocké\" class=\"with-tip\" type=\"checkbox\" name=\"selected[]\" id=\"grid-selected-1\" value=\"1\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
                                               
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<ul class=\"message no-margin\">
\t\t\t\t\t<li>Results 1 - 10 out of 47</li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<div class=\"block-footer\">
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/"), "html", null, true);
        echo "images/icons/fugue/arrow-curve-000-left.png\" width=\"16\" height=\"16\" class=\"picto\"> 
\t\t\t\t\t<a href=\"#\" class=\"button\">Sélectionner tout</a> 
\t\t\t\t\t<a href=\"#\" class=\"button\">Désélectionner tout</a>
\t\t\t\t\t<span class=\"sep\"></span>
\t\t\t\t\t<select name=\"table-action\" id=\"table-action\" class=\"small\">
\t\t\t\t\t\t<option value=\"\">Action pour la sélection...</option>
\t\t\t\t\t\t<option value=\"validate\">Validate</option>
\t\t\t\t\t\t<option value=\"Supprimer\">Supprimer</option>
\t\t\t\t\t</select>
\t\t\t\t\t<button type=\"submit\" class=\"small\">Ok</button>
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t</form></div>

    </section>
";
    }

    // line 113
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 114
        echo "    <script>
    
    function SupprimerContact(id)
    {
        var confirmation=confirm(\"Voulez-vous supprimer:\"+id);
        if (confirmation){
            console.log(\"test supp\",id);
            \$.post(
                    \"";
        // line 122
        echo $this->env->getExtension('routing')->getPath("supprimer_contact");
        echo "\",
                    {idContact:id},
                        function(result){
                            console.log(\"bien\");
                            //location.reload();
                            \$('html').load('";
        // line 127
        echo $this->env->getExtension('routing')->getPath("list_contact");
        echo "');
                            });
          //action à faire pour la valeur true 
        }else{
          //action à faire pour la valeur false
        }
    }
    </script> 
    
    
    <script>
    
    
    </script>

    </script>
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Contact:liste_contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 79,  146 => 71,  134 => 64,  263 => 130,  255 => 124,  213 => 95,  185 => 84,  153 => 69,  150 => 68,  124 => 56,  70 => 16,  683 => 508,  680 => 507,  675 => 97,  672 => 96,  667 => 88,  664 => 87,  659 => 85,  656 => 84,  651 => 11,  648 => 10,  642 => 510,  640 => 507,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 131,  237 => 127,  233 => 105,  216 => 113,  212 => 118,  206 => 115,  202 => 114,  198 => 113,  186 => 103,  184 => 102,  172 => 93,  170 => 92,  161 => 78,  181 => 84,  178 => 70,  129 => 48,  126 => 47,  113 => 41,  104 => 37,  100 => 36,  84 => 29,  20 => 1,  77 => 21,  65 => 22,  53 => 21,  58 => 13,  34 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 123,  247 => 78,  241 => 77,  229 => 122,  220 => 97,  214 => 69,  177 => 96,  169 => 60,  140 => 55,  132 => 49,  128 => 49,  107 => 36,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 128,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 99,  221 => 77,  219 => 114,  217 => 75,  208 => 92,  204 => 72,  179 => 82,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 30,  67 => 15,  63 => 15,  59 => 12,  38 => 6,  94 => 28,  89 => 28,  85 => 25,  75 => 31,  68 => 14,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 37,  88 => 6,  78 => 21,  46 => 6,  27 => 4,  44 => 12,  31 => 6,  28 => 5,  201 => 90,  196 => 97,  183 => 82,  171 => 61,  166 => 90,  163 => 87,  158 => 77,  156 => 76,  151 => 63,  142 => 59,  138 => 64,  136 => 56,  121 => 46,  117 => 46,  105 => 40,  91 => 35,  62 => 13,  49 => 20,  24 => 1,  25 => 4,  19 => 1,  79 => 32,  72 => 16,  69 => 25,  47 => 19,  40 => 11,  37 => 13,  22 => 2,  246 => 90,  157 => 71,  145 => 66,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 53,  111 => 43,  108 => 36,  101 => 39,  98 => 34,  96 => 31,  83 => 30,  74 => 25,  66 => 24,  55 => 15,  52 => 17,  50 => 10,  43 => 5,  41 => 15,  35 => 10,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 85,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 74,  164 => 59,  162 => 73,  154 => 80,  149 => 54,  147 => 67,  144 => 53,  141 => 48,  133 => 55,  130 => 60,  125 => 44,  122 => 55,  116 => 41,  112 => 42,  109 => 40,  106 => 36,  103 => 36,  99 => 40,  95 => 36,  92 => 21,  86 => 28,  82 => 22,  80 => 28,  73 => 19,  64 => 26,  60 => 21,  57 => 22,  54 => 10,  51 => 9,  48 => 15,  45 => 19,  42 => 6,  39 => 16,  36 => 3,  33 => 2,  30 => 10,);
    }
}
