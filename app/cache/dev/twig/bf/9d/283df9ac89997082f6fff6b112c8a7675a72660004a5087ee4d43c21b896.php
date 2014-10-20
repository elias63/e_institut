<?php

/* EieinstitutBundle:Pages:espace_perso_user.html.twig */
class __TwigTemplate_bf9d283df9ac89997082f6fff6b112c8a7675a72660004a5087ee4d43c21b896 extends Twig_Template
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

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <!--section detail-->\t
    <section class=\"grid_3\">block gauche à inclure</section>
    <section class=\"grid_9\">\t
\t\t\t<div class=\"block-border\"><div class=\"block-content\">
\t\t\t\t<h1>Ressources</h1>
\t\t
\t\t\t<ul class=\"favorites no-margin with-tip\" title=\"Context menu available!\">\t
\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/web-app/48/Info.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\">
\t\t\t\t\t\t<a href=\"#\">Settings<br>
\t\t\t\t\t\t<small>Chaque exemple est décrit en UML et en Java sous la forme d´un petit programme complet et  <br />exécutable....       
\t\t\t\t\t\t</small></a>
\t\t\t\t\t\t<ul class=\"mini-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Move down\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/arrow-270.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Delete\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Delete</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Update\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/pencil.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Update</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/web-app/48/Line-Chart.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\">
\t\t\t\t\t\t<a href=\"#\">Bandwidth usage<br>
\t\t\t\t\t\t<small>Chaque exemple est décrit en UML et en Java sous la forme d´un petit programme complet et <br />exécutable....              
\t\t\t\t\t\t</small></a>
\t\t\t\t\t\t<ul class=\"mini-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Move up\"><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/arrow-090.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Move down\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/arrow-270.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Delete\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Delete</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Update\"><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/pencil.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Update</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/web-app/48/Modify.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\">
\t\t\t\t\t\t<a href=\"#\">New post<br>
\t\t\t\t\t\t<small>Chaque exemple est décrit en UML et en Java sous la forme d´un petit programme complet et <br />exécutable....              
\t\t\t\t\t\t</small></a>
\t\t\t\t\t\t<ul class=\"mini-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Move up\"><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/arrow-090.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Move down\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/arrow-270.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Delete\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Delete</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Update\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/pencil.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Update</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/web-app/48/Pie-Chart.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\">
\t\t\t\t\t\t<a href=\"#\">Browsers stats<br>
\t\t\t\t\t\t<small>Chaque exemple est décrit en UML et en Java sous la forme d´un petit programme complet et <br />exécutable....              
\t\t\t\t\t\t</small></a>
\t\t\t\t\t\t<ul class=\"mini-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Move up\"><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/arrow-090.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Move down\"><img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/arrow-270.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Delete\"><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Delete</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Update\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/pencil.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Update</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/web-app/48/Comment.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\">
\t\t\t\t\t\t<a href=\"#\">Manage comments<br>
\t\t\t\t\t\t<small>Chaque exemple est décrit en UML et en Java sous la forme d´un petit programme complet et <br />exécutable....             
\t\t\t\t\t\t </small></a>
\t\t\t\t\t\t<ul class=\"mini-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Move up\"><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/arrow-090.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Delete\"><img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Delete</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" title=\"Update\"><img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/pencil.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Update</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t</ul>\t
\t\t\t</div></div><br /> 

\t\t\t<div class=\"block-border\"><div class=\"block-content\">
\t\t\t\t<h1>Tutoriels en ligne</h1>\t

\t\t\t\t<ul class=\"tabs js-tabs same-height\">
\t\t\t\t\t<li class=\"current\"><a href=\"#tab-locales\" title=\"TBI\">TBI</a></li>
\t\t\t\t\t<li class=\"\"><a href=\"#tab-options\" title=\"Visio\">Visio</a></li>
\t\t\t\t
\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tabs-content\">\t\t
\t\t\t\t\t\t<div id=\"tab-locales\">
\t\t\t\t\t\t<table class=\"table\" cellspacing=\"0\" width=\"100%\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Chaque exemple est décrit en UML et en Java sous la forme d´un petit programme complet et exécutable....              </td>
\t\t\t\t\t\t\t\t<td><button type=\"button\">Participé</button></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Chaque exemple est décrit en UML et en Java sous la forme d´un petit programme complet et exécutable....              </td>
\t\t\t\t\t\t\t\t<td><button type=\"button\">Participé</button></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Chaque exemple est décrit en UML et en Java sous la forme d´un petit programme complet et exécutable....              </td>
\t\t\t\t\t\t\t\t<td><button type=\"button\">Participé</button></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Chaque exemple est décrit en UML et en Java sous la forme d´un petit programme complet et exécutable....              </td>
\t\t\t\t\t\t\t\t<td><button type=\"button\">Participé</button></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Chaque exemple est décrit en UML et en Java sous la forme d´un petit programme complet et exécutable....              </td>
\t\t\t\t\t\t\t\t<td><button type=\"button\">Participé</button></td>
\t\t\t\t\t\t\t</tr>\t\t
\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-options\">
\t\t\t\t\t\t\t<table class=\"table\" cellspacing=\"0\" width=\"100%\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Chaque exemple est décrit en UML et en Java sous la forme d´un petit programme complet et exécutable....              </td>
\t\t\t\t\t\t\t\t\t<td><button type=\"button\">Participé</button></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Chaque exemple est décrit en UML et en Java sous la forme d´un petit programme complet et exécutable....              </td>
\t\t\t\t\t\t\t\t\t<td><button type=\"button\">Participé</button></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t</div></div>
\t\t</section>


\t\t<!--fin section lioste des publications -->\t
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Pages:espace_perso_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 188,  288 => 187,  261 => 166,  250 => 158,  137 => 78,  197 => 133,  286 => 151,  262 => 132,  259 => 131,  236 => 119,  195 => 87,  175 => 84,  188 => 107,  165 => 76,  287 => 187,  284 => 186,  256 => 161,  232 => 140,  191 => 108,  343 => 148,  338 => 146,  333 => 145,  328 => 143,  303 => 123,  281 => 112,  277 => 111,  270 => 172,  266 => 108,  231 => 93,  228 => 142,  226 => 91,  223 => 90,  194 => 67,  180 => 109,  155 => 97,  110 => 58,  81 => 34,  190 => 106,  174 => 103,  160 => 71,  152 => 93,  148 => 65,  90 => 34,  127 => 53,  114 => 46,  167 => 88,  146 => 71,  134 => 44,  263 => 130,  255 => 124,  213 => 95,  185 => 84,  153 => 76,  150 => 68,  124 => 56,  70 => 16,  683 => 508,  680 => 507,  675 => 97,  672 => 96,  667 => 88,  664 => 87,  659 => 85,  656 => 84,  651 => 11,  648 => 10,  642 => 510,  640 => 507,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 100,  237 => 95,  233 => 105,  216 => 128,  212 => 100,  206 => 126,  202 => 125,  198 => 113,  186 => 89,  184 => 110,  172 => 93,  170 => 82,  161 => 78,  181 => 84,  178 => 104,  129 => 48,  126 => 47,  113 => 48,  104 => 34,  100 => 36,  84 => 27,  20 => 1,  77 => 33,  65 => 27,  53 => 21,  58 => 13,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 116,  285 => 113,  283 => 88,  278 => 146,  268 => 85,  264 => 84,  258 => 81,  252 => 123,  247 => 78,  241 => 152,  229 => 108,  220 => 97,  214 => 69,  177 => 96,  169 => 87,  140 => 60,  132 => 58,  128 => 57,  107 => 35,  61 => 17,  273 => 110,  269 => 94,  254 => 103,  243 => 128,  240 => 96,  238 => 85,  235 => 94,  230 => 82,  227 => 81,  224 => 141,  221 => 103,  219 => 114,  217 => 102,  208 => 99,  204 => 72,  179 => 85,  159 => 61,  143 => 56,  135 => 70,  119 => 39,  102 => 53,  71 => 26,  67 => 15,  63 => 19,  59 => 12,  38 => 10,  94 => 48,  89 => 30,  85 => 35,  75 => 24,  68 => 21,  56 => 13,  87 => 28,  21 => 2,  26 => 6,  93 => 40,  88 => 35,  78 => 25,  46 => 15,  27 => 4,  44 => 11,  31 => 7,  28 => 6,  201 => 115,  196 => 97,  183 => 82,  171 => 79,  166 => 81,  163 => 87,  158 => 93,  156 => 70,  151 => 63,  142 => 72,  138 => 46,  136 => 59,  121 => 46,  117 => 46,  105 => 46,  91 => 35,  62 => 13,  49 => 20,  24 => 1,  25 => 4,  19 => 1,  79 => 47,  72 => 23,  69 => 22,  47 => 16,  40 => 12,  37 => 6,  22 => 2,  246 => 157,  157 => 71,  145 => 80,  139 => 71,  131 => 66,  123 => 79,  120 => 52,  115 => 53,  111 => 47,  108 => 36,  101 => 45,  98 => 36,  96 => 31,  83 => 32,  74 => 34,  66 => 20,  55 => 21,  52 => 12,  50 => 10,  43 => 5,  41 => 15,  35 => 10,  32 => 7,  29 => 3,  209 => 99,  203 => 78,  199 => 67,  193 => 94,  189 => 71,  187 => 110,  182 => 105,  176 => 115,  173 => 79,  168 => 74,  164 => 72,  162 => 94,  154 => 80,  149 => 81,  147 => 75,  144 => 91,  141 => 79,  133 => 78,  130 => 60,  125 => 41,  122 => 40,  116 => 38,  112 => 53,  109 => 47,  106 => 41,  103 => 37,  99 => 37,  95 => 31,  92 => 21,  86 => 43,  82 => 46,  80 => 24,  73 => 32,  64 => 35,  60 => 21,  57 => 22,  54 => 10,  51 => 9,  48 => 11,  45 => 14,  42 => 14,  39 => 11,  36 => 3,  33 => 2,  30 => 10,);
    }
}
