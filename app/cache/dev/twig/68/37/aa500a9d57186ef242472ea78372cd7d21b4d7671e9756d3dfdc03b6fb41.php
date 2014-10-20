<?php

/* EieinstitutBundle:Messaging:brouillon.html.twig */
class __TwigTemplate_6837aa500a9d57186ef242472ea78372cd7d21b4d7671e9756d3dfdc03b6fb41 extends Twig_Template
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
        echo "   | Ajouter une ressource
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
\t\t<div class=\"block-border\">
\t\t\t
\t\t\t\t\t\t<!--<div class=\"task with-legend\">-->
\t\t\t\t\t<!--<section class=\"grid_12\">-->
\t\t\t<form class=\"block-content form\" id=\"table_form\" method=\"post\" action=\"\">
\t\t\t\t<h1>Brouillon</h1>
\t\t\t\t
\t\t\t\t<div class=\"block-controls\">
\t\t\t\t\t
\t\t\t\t\t<ul class=\"controls-buttons\">
\t\t\t\t\t\t<li><a href=\"#\" title=\"Previous\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation-180.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Prec</a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 1\"><b>1</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 2\" class=\"current\"><b>2</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 3\"><b>3</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 4\"><b>4</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 5\"><b>5</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Next\">Suiv <img src=\"";
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
\t\t\t
\t\t\t\t<div class=\"no-margin\"><table class=\"table\" cellspacing=\"0\" width=\"100%\">
\t\t\t\t
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"black-cell\"><span class=\"loading\"></span></th>
\t\t\t\t\t\t\t<th scope=\"col\">
\t\t\t\t\t\t\t\t<span class=\"column-sort\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Sort up\" class=\"sort-up active\"></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Sort down\" class=\"sort-down\"></a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th scope=\"col\"  width=\"500\">Objet</th>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<th scope=\"col\">
\t\t\t\t\t\t\t\t<span class=\"column-sort\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Sort up\" class=\"sort-up\"></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Sort down\" class=\"sort-down\"></a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\tDate
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<th scope=\"col\" class=\"table-actions\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t
\t\t\t\t\t<tbody>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\" class=\"table-check-cell\"><input type=\"checkbox\" name=\"selected[]\" id=\"table-selected-1\" value=\"1\"></th>
\t\t\t\t\t\t\t<td>Brouillon</td>
\t\t\t\t\t\t\t<td><ul class=\"keywords\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Infos</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul></td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>02-05-2010</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td class=\"table-actions\">
\t\t\t\t\t\t\t\t<a href=\"#\" title=\"D&eacutetails\" class=\"with-tip\"><img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/pencil.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Supprimer\" class=\"with-tip\"><img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\" class=\"table-check-cell\"><input type=\"checkbox\" name=\"selected[]\" id=\"table-selected-2\" value=\"2\"></th>
\t\t\t\t\t\t\t<td>Brouillon</td>
\t\t\t\t\t\t\t<td><ul class=\"keywords\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Infos</a></li>
\t\t\t\t\t\t\t</ul></td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>10-10-2010</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td class=\"table-actions\">
\t\t\t\t\t\t\t\t<a href=\"#\" title=\"D&eacutetails\" class=\"with-tip\"><img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/pencil.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Supprimer\" class=\"with-tip\"><img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\" class=\"table-check-cell\"><input type=\"checkbox\" name=\"selected[]\" id=\"table-selected-3\" value=\"3\"></th>
\t\t\t\t\t\t\t<td>Brouillon</td>
\t\t\t\t\t\t\t<td><ul class=\"keywords\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Infos</a></li>
\t\t\t\t\t\t\t</ul></td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>24-03-2010</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td class=\"table-actions\">
\t\t\t\t\t\t\t\t<a href=\"#\" title=\"D&eacutetails\" class=\"with-tip\"><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/pencil.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Supprimer\" class=\"with-tip\"><img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\" class=\"table-check-cell\"><input type=\"checkbox\" name=\"selected[]\" id=\"table-selected-4\" value=\"4\"></th>
\t\t\t\t\t\t\t<td>Brouillon</td>
\t\t\t\t\t\t\t<td><ul class=\"keywords\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Infos</a></li>
\t\t\t\t\t\t\t</ul></td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>02-10-2010</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td class=\"table-actions\">
\t\t\t\t\t\t\t\t<a href=\"#\" title=\"D&eacutetails\" class=\"with-tip\"><img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/pencil.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Supprimer\" class=\"with-tip\"><img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\" class=\"table-check-cell\"><input type=\"checkbox\" name=\"selected[]\" id=\"table-selected-5\" value=\"5\"></th>
\t\t\t\t\t\t\t<td>Brouillon</td>
\t\t\t\t\t\t\t<td><ul class=\"keywords\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Infos</a></li>
\t\t\t\t\t\t\t</ul></td>
\t\t\t\t\t\t\t<td>21-07-2010</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td class=\"table-actions\">
\t\t\t\t\t\t\t\t<a href=\"#\" title=\"D&eacutetails\" class=\"with-tip\"><img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/pencil.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Supprimer\" class=\"with-tip\"><img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t
\t\t\t\t</table></div>
\t\t\t\t
\t\t\t\t<ul class=\"message no-margin\">
\t\t\t\t\t<li>Results 1 - 5 out of 23</li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<div class=\"block-footer\">
\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t<label for=\"table-display\" style=\"display:inline\">Display mode</label>
\t\t\t\t\t\t<select name=\"table-display\" id=\"table-display\" class=\"small\">
\t\t\t\t\t\t\t<option value=\"table\">Table</option>
\t\t\t\t\t\t\t<option value=\"grid\">Grid</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/arrow-curve-000-left.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\" class=\"picto\"> 
\t\t\t\t\t<a href=\"#\" class=\"button\">Selectionner tout</a> 
\t\t\t\t\t<a href=\"#\" class=\"button\">deselectionner tout</a>
\t\t\t\t\t<span class=\"sep\"></span>
\t\t\t\t\t<select name=\"table-action\" id=\"table-action\" class=\"small\">
\t\t\t\t\t\t<option value=\"\">Action</option>
\t\t\t\t\t\t<option value=\"validate\">Valider</option>
\t\t\t\t\t\t<option value=\"delete\">Supprimer</option>
\t\t\t\t\t</select>
\t\t\t\t\t
\t\t\t\t\t<button type=\"submit\" class=\"small\">Ok</button>
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</form>
\t\t</div>
\t</section>
\t\t




<div class=\"clear\"></div>
<!-- End content -->
";
    }

    // line 186
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 187
        echo "
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Messaging:brouillon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 187,  284 => 186,  256 => 161,  232 => 140,  191 => 111,  343 => 148,  338 => 146,  333 => 145,  328 => 143,  303 => 123,  281 => 112,  277 => 111,  270 => 109,  266 => 108,  231 => 93,  228 => 139,  226 => 91,  223 => 90,  194 => 67,  180 => 64,  155 => 50,  110 => 36,  81 => 26,  190 => 107,  174 => 103,  160 => 95,  152 => 93,  148 => 92,  90 => 29,  127 => 53,  114 => 46,  167 => 56,  146 => 71,  134 => 44,  263 => 130,  255 => 124,  213 => 95,  185 => 84,  153 => 67,  150 => 68,  124 => 56,  70 => 16,  683 => 508,  680 => 507,  675 => 97,  672 => 96,  667 => 88,  664 => 87,  659 => 85,  656 => 84,  651 => 11,  648 => 10,  642 => 510,  640 => 507,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 100,  237 => 95,  233 => 105,  216 => 113,  212 => 126,  206 => 115,  202 => 114,  198 => 113,  186 => 106,  184 => 102,  172 => 93,  170 => 96,  161 => 78,  181 => 84,  178 => 104,  129 => 48,  126 => 47,  113 => 37,  104 => 34,  100 => 36,  84 => 28,  20 => 1,  77 => 21,  65 => 22,  53 => 21,  58 => 13,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 116,  285 => 113,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 123,  247 => 78,  241 => 152,  229 => 122,  220 => 97,  214 => 69,  177 => 96,  169 => 57,  140 => 60,  132 => 82,  128 => 42,  107 => 35,  61 => 14,  273 => 110,  269 => 94,  254 => 103,  243 => 128,  240 => 96,  238 => 85,  235 => 94,  230 => 82,  227 => 81,  224 => 99,  221 => 89,  219 => 114,  217 => 75,  208 => 125,  204 => 72,  179 => 82,  159 => 61,  143 => 56,  135 => 53,  119 => 39,  102 => 38,  71 => 24,  67 => 15,  63 => 19,  59 => 12,  38 => 6,  94 => 28,  89 => 28,  85 => 25,  75 => 24,  68 => 21,  56 => 13,  87 => 28,  21 => 2,  26 => 6,  93 => 34,  88 => 53,  78 => 25,  46 => 6,  27 => 4,  44 => 10,  31 => 6,  28 => 5,  201 => 115,  196 => 97,  183 => 82,  171 => 61,  166 => 95,  163 => 87,  158 => 77,  156 => 94,  151 => 63,  142 => 59,  138 => 46,  136 => 56,  121 => 46,  117 => 46,  105 => 67,  91 => 35,  62 => 13,  49 => 20,  24 => 1,  25 => 4,  19 => 1,  79 => 47,  72 => 23,  69 => 22,  47 => 9,  40 => 9,  37 => 6,  22 => 2,  246 => 90,  157 => 71,  145 => 80,  139 => 45,  131 => 43,  123 => 79,  120 => 40,  115 => 53,  111 => 47,  108 => 36,  101 => 33,  98 => 36,  96 => 31,  83 => 30,  74 => 18,  66 => 20,  55 => 29,  52 => 12,  50 => 10,  43 => 5,  41 => 15,  35 => 10,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 85,  189 => 71,  187 => 110,  182 => 105,  176 => 80,  173 => 79,  168 => 74,  164 => 72,  162 => 73,  154 => 80,  149 => 81,  147 => 48,  144 => 91,  141 => 48,  133 => 55,  130 => 60,  125 => 41,  122 => 40,  116 => 38,  112 => 42,  109 => 68,  106 => 41,  103 => 37,  99 => 40,  95 => 31,  92 => 21,  86 => 56,  82 => 22,  80 => 28,  73 => 19,  64 => 35,  60 => 18,  57 => 22,  54 => 10,  51 => 9,  48 => 11,  45 => 19,  42 => 6,  39 => 16,  36 => 3,  33 => 2,  30 => 10,);
    }
}
