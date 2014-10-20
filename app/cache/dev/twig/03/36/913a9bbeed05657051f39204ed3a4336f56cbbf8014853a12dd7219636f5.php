<?php

/* EieinstitutBundle:Pages:annuaire.html.twig */
class __TwigTemplate_0336913a9bbeed05657051f39204ed3a4336f56cbbf8014853a12dd7219636f5 extends Twig_Template
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
        echo "
<section class=\"grid_9\">
\t\t\t<div class=\"block-border\">
\t\t\t    <div class=\"block-content\">

\t\t\t      
\t\t\t\t\t<div class=\"block-controls\">
\t\t\t\t\t\t\t\t<h1>Annuaire </h1>  <br><br>
\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t\t<form class=\"form\" id=\"tab-stats\" method=\"post\" action=\"\">
\t\t\t\t\t\t\t<fieldset class=\"grey-bg\">
\t\t\t\t\t\t\t\t<!--<legend><a href=\"#\">Recherche avanc�e</legend>-->
\t\t\t\t\t\t\t\t\t\t<span class=\"label required\">
\t\t\t\t\t\t\t\t\t\t\tNom
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input id=\"complex-fr-subtitle\" class=\"full-width\" type=\"text\" value=\"\" name=\"complex-fr-subtitle\"> 
\t\t\t\t\t<div class=\"float-right\"><br>
\t\t\t\t\t\t\t\t<button type=\"button\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/tick-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Rechercher</button>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t
\t\t\t\t\t\t <div class=\"block-controls\">
             <div class=\"controls-buttons\">
                                            
                                            <!-- The class sub-hover removes the hover effect for the whole div -->
                                            <div class=\"sub-hover\">
                                                    <a href=\"#\" class=\"disabled\">Nom</a>
                                                    <a href=\"#\">Date</a>
                                                    <a href=\"#\">Statut</a>
                                            </div>
                                           
                                            
                                    </div>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"controls-buttons\">
\t\t\t\t\t\t<li>
                                                    <label for=\"show-empty\">Trier par</label>
                                                </li>
\t\t\t\t\t\t<li class=\"sep\"></li>
\t\t\t\t\t\t
\t\t\t\t\t\t
                                                    
                                               
\t\t\t\t\t</ul>
                                       
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t
\t\t\t\t\t\t<ul class=\"extended-list no-margin icon-user\">
\t\t\t\t\t\t
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<span class=\"icon\"></span>
\t\t\t\t\t\t\tJohn Doe<br>
\t\t\t\t\t\t\t<small>nico@gmail.com</small><br>
\t\t\t\t\t\t\t<small>Etudiant </small>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul style=\"opacity: 0;\" class=\"mini-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Voir profil\"><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/user.png"), "html", null, true);
        echo "\" height=\"16\" width=\"16\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Envoyer mail\"><img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/mail.png"), "html", null, true);
        echo "\" height=\"16\" width=\"16\"></a></li>
\t\t\t\t\t\t\t<!--<li><a href=\"#\" title=\"Delete\"><img src=\"images/icons/fugue/cross-circle.png\" height=\"16\" width=\"16\"> Delete</a></li>-->
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<span class=\"icon\"></span>
\t\t\t\t\t\t\tJohn Doe<br>
\t\t\t\t\t\t\t<small>nico@gmail.com</small><br>
\t\t\t\t\t\t\t<small>Etudiant </small>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul style=\"opacity: 0;\" class=\"mini-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Voir profil\"><img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/user.png"), "html", null, true);
        echo "\" height=\"16\" width=\"16\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Envoyer mail\"><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/mail.png"), "html", null, true);
        echo "\" height=\"16\" width=\"16\"></a></li>
\t\t\t\t\t\t\t<!--<li><a href=\"#\" title=\"Delete\"><img src=\"images/icons/fugue/cross-circle.png\" height=\"16\" width=\"16\"> Delete</a></li>-->
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<span class=\"icon\"></span>
\t\t\t\t\t\t\tJohn Doe<br>
\t\t\t\t\t\t\t<small>nico@gmail.com</small><br>
\t\t\t\t\t\t\t<small>Enseignant </small>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul style=\"opacity: 0;\" class=\"mini-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Voir profil\"><img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/user.png"), "html", null, true);
        echo "\" height=\"16\" width=\"16\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Envoyer mail\"><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/mail.png"), "html", null, true);
        echo "\" height=\"16\" width=\"16\"></a></li>
\t\t\t\t\t\t\t<!--<li><a href=\"#\" title=\"Delete\"><img src=\"images/icons/fugue/cross-circle.png\" height=\"16\" width=\"16\"> Delete</a></li>-->
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<span class=\"icon\"></span>
\t\t\t\t\t\t\tJohn Doe<br>
\t\t\t\t\t\t\t<small>nico@gmail.com</small><br>
\t\t\t\t\t\t\t<small>Enseignant </small>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul style=\"opacity: 0;\" class=\"mini-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Voir profil\"><img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/user.png"), "html", null, true);
        echo "\" height=\"16\" width=\"16\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Envoyer mail\"><img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/mail.png"), "html", null, true);
        echo "\" height=\"16\" width=\"16\"></a></li>
\t\t\t\t\t\t\t<!--<li><a href=\"#\" title=\"Delete\"><img src=\"images/icons/fugue/cross-circle.png\" height=\"16\" width=\"16\"> Delete</a></li>-->
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<span class=\"icon\"></span>
\t\t\t\t\t\t\tJohn Doe<br>
\t\t\t\t\t\t\t<small>nico@gmail.com</small><br>
\t\t\t\t\t\t\t<small>Enseignant </small>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul style=\"opacity: 0;\" class=\"mini-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Voir profil\"><img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/user.png"), "html", null, true);
        echo "\" height=\"16\" width=\"16\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Envoyer mail\"><img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/mail.png"), "html", null, true);
        echo "\" height=\"16\" width=\"16\"></a></li>
\t\t\t\t\t\t\t<!--<li><a href=\"#\" title=\"Delete\"><img src=\"images/icons/fugue/cross-circle.png\" height=\"16\" width=\"16\"> Delete</a></li>-->
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<span class=\"icon\"></span>
\t\t\t\t\t\t\tJohn Doe<br>
\t\t\t\t\t\t\t<small>nico@gmail.com</small><br>
\t\t\t\t\t\t\t<small>Enseignant </small>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul style=\"opacity: 0;\" class=\"mini-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Voir profil\"><img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/user.png"), "html", null, true);
        echo "\" height=\"16\" width=\"16\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Envoyer mail\"><img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/mail.png"), "html", null, true);
        echo "\" height=\"16\" width=\"16\"></a></li>
\t\t\t\t\t\t\t<!--<li><a href=\"#\" title=\"Delete\"><img src=\"images/icons/fugue/cross-circle.png\" height=\"16\" width=\"16\"> Delete</a></li>-->
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"controls-buttons\">
\t\t\t\t\t\t<li><a href=\"#\" title=\"Pr�c�dent\"><img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation-180.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Precedent</a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 1\"><b>1</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 2\" class=\"current\"><b>2</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 3\"><b>3</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 4\"><b>4</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 5\"><b>5</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"suivant\">Suivant <img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t<!--------------------
\t\t\t\t
\t\t\t\tfin resultat recherche
\t\t\t\t
\t\t\t\t---------------------->
\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t\t\t
\t\t</section>
";
    }

    // line 187
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 188
        echo "
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Pages:annuaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 188,  288 => 187,  261 => 166,  250 => 158,  137 => 78,  197 => 133,  286 => 151,  262 => 132,  259 => 131,  236 => 119,  195 => 87,  175 => 84,  188 => 107,  165 => 76,  287 => 187,  284 => 186,  256 => 161,  232 => 140,  191 => 108,  343 => 148,  338 => 146,  333 => 145,  328 => 143,  303 => 123,  281 => 112,  277 => 111,  270 => 172,  266 => 108,  231 => 93,  228 => 142,  226 => 91,  223 => 90,  194 => 67,  180 => 109,  155 => 97,  110 => 58,  81 => 26,  190 => 106,  174 => 103,  160 => 78,  152 => 93,  148 => 92,  90 => 34,  127 => 53,  114 => 46,  167 => 88,  146 => 71,  134 => 44,  263 => 130,  255 => 124,  213 => 95,  185 => 84,  153 => 76,  150 => 68,  124 => 56,  70 => 16,  683 => 508,  680 => 507,  675 => 97,  672 => 96,  667 => 88,  664 => 87,  659 => 85,  656 => 84,  651 => 11,  648 => 10,  642 => 510,  640 => 507,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 100,  237 => 95,  233 => 105,  216 => 128,  212 => 100,  206 => 126,  202 => 125,  198 => 113,  186 => 89,  184 => 110,  172 => 93,  170 => 82,  161 => 78,  181 => 84,  178 => 104,  129 => 48,  126 => 47,  113 => 37,  104 => 34,  100 => 36,  84 => 27,  20 => 1,  77 => 21,  65 => 22,  53 => 21,  58 => 13,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 116,  285 => 113,  283 => 88,  278 => 146,  268 => 85,  264 => 84,  258 => 81,  252 => 123,  247 => 78,  241 => 152,  229 => 108,  220 => 97,  214 => 69,  177 => 96,  169 => 87,  140 => 70,  132 => 59,  128 => 42,  107 => 35,  61 => 17,  273 => 110,  269 => 94,  254 => 103,  243 => 128,  240 => 96,  238 => 85,  235 => 94,  230 => 82,  227 => 81,  224 => 141,  221 => 103,  219 => 114,  217 => 102,  208 => 99,  204 => 72,  179 => 85,  159 => 61,  143 => 56,  135 => 70,  119 => 39,  102 => 53,  71 => 24,  67 => 15,  63 => 19,  59 => 12,  38 => 10,  94 => 48,  89 => 30,  85 => 29,  75 => 24,  68 => 21,  56 => 13,  87 => 28,  21 => 2,  26 => 6,  93 => 37,  88 => 35,  78 => 25,  46 => 6,  27 => 4,  44 => 11,  31 => 5,  28 => 4,  201 => 115,  196 => 97,  183 => 82,  171 => 79,  166 => 81,  163 => 87,  158 => 93,  156 => 72,  151 => 63,  142 => 72,  138 => 46,  136 => 56,  121 => 46,  117 => 46,  105 => 67,  91 => 35,  62 => 13,  49 => 15,  24 => 1,  25 => 4,  19 => 1,  79 => 47,  72 => 23,  69 => 22,  47 => 13,  40 => 9,  37 => 6,  22 => 2,  246 => 157,  157 => 71,  145 => 80,  139 => 71,  131 => 66,  123 => 79,  120 => 40,  115 => 53,  111 => 47,  108 => 36,  101 => 33,  98 => 36,  96 => 31,  83 => 30,  74 => 34,  66 => 20,  55 => 21,  52 => 12,  50 => 10,  43 => 5,  41 => 13,  35 => 10,  32 => 7,  29 => 3,  209 => 99,  203 => 78,  199 => 67,  193 => 94,  189 => 71,  187 => 110,  182 => 105,  176 => 115,  173 => 79,  168 => 74,  164 => 72,  162 => 94,  154 => 80,  149 => 81,  147 => 75,  144 => 91,  141 => 79,  133 => 78,  130 => 60,  125 => 41,  122 => 40,  116 => 38,  112 => 53,  109 => 68,  106 => 41,  103 => 37,  99 => 37,  95 => 31,  92 => 21,  86 => 43,  82 => 46,  80 => 24,  73 => 19,  64 => 35,  60 => 18,  57 => 22,  54 => 10,  51 => 9,  48 => 11,  45 => 14,  42 => 11,  39 => 11,  36 => 3,  33 => 2,  30 => 10,);
    }
}
