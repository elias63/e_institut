<?php

/* EieinstitutBundle:Pages:accueil_connecte.html.twig */
class __TwigTemplate_af23eabe0068c276eb420eee9886922589bf5439b3622f1421123f53a39e89b6 extends Twig_Template
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
        echo "<article class=\"container_12\">

\t<section class=\"grid_8\">
\t\t\t<div class=\"block-border\"><div class=\"block-content\">
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t<div class=\"gallery-preview no-margin\">
\t\t\t\t\t<a href=\"#\" class=\"prev\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation-180.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t<a href=\"#\" class=\"next\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/demo/files/file1-medium.jpg"), "html", null, true);
        echo "\" width=\"400\" height=\"281\"></a>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t</div></div>
<br><br><br>
\t\t\t<div class=\"block-border\"><form class=\"block-content form\" name=\"table_form\" id=\"table_form\" method=\"post\" action=\"\">
\t\t\t\t<h1>
\t\t\t\t\tContainer Title Goes Here
\t\t\t\t</h1>
\t\t\t\t
\t\t\t\t<div class=\"block-controls\">
\t\t\t\t\t
\t\t\t\t\t<ul class=\"controls-buttons\">
\t\t\t\t\t\t<li><a href=\"#\" title=\"Previous\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation-180.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Prev</a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 1\"><b>1</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 2\" class=\"current\"><b>2</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 3\"><b>3</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Next\">Next <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t\t<li class=\"sep\"></li>
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"with-head no-margin\">
\t\t\t\t\t<ul class=\"grid dark-grey-gradient\" align=\"center\">
\t\t\t\t\t\t\t<li>\t
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/demo/files/file1-mini.png"), "html", null, true);
        echo "\" width=\"64\" height=\"45\"></a>
\t\t\t\t\t\t\t\t\t\t<p class=\"grid-name\">Title</p>
\t\t\t\t\t\t\t\t\t\t<small>Subtitle</small>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>\t
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/demo/files/file1-mini.png"), "html", null, true);
        echo "\" width=\"64\" height=\"45\"></a>
\t\t\t\t\t\t\t\t\t\t<p class=\"grid-name\">Title</p>
\t\t\t\t\t\t\t\t\t\t<small>Subtitle</small>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>\t
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/demo/files/file1-mini.png"), "html", null, true);
        echo "\" width=\"64\" height=\"45\"></a>
\t\t\t\t\t\t\t\t\t\t<p class=\"grid-name\">Title</p>
\t\t\t\t\t\t\t\t\t\t<small>Subtitle</small>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>\t
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/demo/files/file1-mini.png"), "html", null, true);
        echo "\" width=\"64\" height=\"45\"></a>
\t\t\t\t\t\t\t\t\t\t<p class=\"grid-name\">Title</p>
\t\t\t\t\t\t\t\t\t\t<small>Subtitle</small>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<ul class=\"message no-margin\">
\t\t\t\t\t<li>Results 1 - 4 out of 20</li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t
\t\t\t</form></div>
<br><br><br>
\t\t\t\t\t<div class=\"block-border\"><div class=\"block-content\">
\t\t\t\t<h1>Actualités</h1>
\t\t\t\t
\t\t\t\t<ul class=\"extended-list no-margin icon-user\" align=\"left\">
\t\t\t\t\t<li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/demo/files/file1-mini.png"), "html", null, true);
        echo "\" width=\"80\" height=\"80\"></a>
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t<section class=\"grid_6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"extended-options\">
\t\t\t\t\t\t\t\t\t<h3>Task name</h3>
\t\t\t\t\t\t\t\t\tSmall task description Lorem ipsum<br><br><br><br>
\t\t\t\t\t\t\t\t\t<a href=\"\" align=\"right\">Détails</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</section>
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t</li>
\t
\t\t\t\t\t<li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/demo/files/file1-mini.png"), "html", null, true);
        echo "\" width=\"80\" height=\"80\" align=\"left\"></a>
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t<section class=\"grid_6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"extended-options\">
\t\t\t\t\t\t\t\t\t<h3>Task name</h3>
\t\t\t\t\t\t\t\t\tSmall task description Lorem ipsum<br><br><br><br>
\t\t\t\t\t\t\t\t\t<a href=\"\" align=\"right\">Détails</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</section>
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/demo/files/file1-mini.png"), "html", null, true);
        echo "\" width=\"80\" height=\"80\" align=\"left\"></a>
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t<section class=\"grid_6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"extended-options\">
\t\t\t\t\t\t\t\t\t<h3>Task name</h3>
\t\t\t\t\t\t\t\t\tSmall task description Lorem ipsum<br><br><br><br>
\t\t\t\t\t\t\t\t\t<a href=\"\" align=\"right\">Détails</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</section>
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/demo/files/file1-mini.png"), "html", null, true);
        echo "\" width=\"80\" height=\"80\" align=\"left\"></a>
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t<section class=\"grid_6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"extended-options\">
\t\t\t\t\t\t\t\t\t<h3>Task name</h3>
\t\t\t\t\t\t\t\t\tSmall task description Lorem ipsum<br><br><br><br>
\t\t\t\t\t\t\t\t\t<a href=\"\" align=\"right\">Détails</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</section>
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<ul class=\"message no-margin\" align=\"center\">
\t\t\t\t\t<a href=\"#\">Toutes les actualités</a>
\t\t\t\t</ul>
\t\t\t</div></div>
\t</section>
    
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Pages:accueil_connecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 134,  286 => 151,  262 => 132,  259 => 131,  236 => 119,  195 => 87,  175 => 84,  188 => 107,  165 => 76,  287 => 187,  284 => 186,  256 => 161,  232 => 140,  191 => 108,  343 => 148,  338 => 146,  333 => 145,  328 => 143,  303 => 123,  281 => 112,  277 => 111,  270 => 109,  266 => 108,  231 => 93,  228 => 114,  226 => 91,  223 => 90,  194 => 67,  180 => 82,  155 => 98,  110 => 59,  81 => 26,  190 => 106,  174 => 103,  160 => 78,  152 => 93,  148 => 92,  90 => 29,  127 => 53,  114 => 46,  167 => 88,  146 => 71,  134 => 44,  263 => 130,  255 => 124,  213 => 95,  185 => 84,  153 => 76,  150 => 68,  124 => 56,  70 => 16,  683 => 508,  680 => 507,  675 => 97,  672 => 96,  667 => 88,  664 => 87,  659 => 85,  656 => 84,  651 => 11,  648 => 10,  642 => 510,  640 => 507,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 100,  237 => 95,  233 => 105,  216 => 128,  212 => 100,  206 => 115,  202 => 96,  198 => 113,  186 => 89,  184 => 83,  172 => 93,  170 => 82,  161 => 78,  181 => 84,  178 => 104,  129 => 48,  126 => 47,  113 => 37,  104 => 34,  100 => 36,  84 => 28,  20 => 1,  77 => 21,  65 => 22,  53 => 21,  58 => 13,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 116,  285 => 113,  283 => 88,  278 => 146,  268 => 85,  264 => 84,  258 => 81,  252 => 123,  247 => 78,  241 => 152,  229 => 108,  220 => 97,  214 => 69,  177 => 96,  169 => 87,  140 => 70,  132 => 59,  128 => 42,  107 => 35,  61 => 14,  273 => 110,  269 => 94,  254 => 103,  243 => 128,  240 => 96,  238 => 85,  235 => 94,  230 => 82,  227 => 81,  224 => 99,  221 => 103,  219 => 114,  217 => 102,  208 => 99,  204 => 72,  179 => 85,  159 => 61,  143 => 56,  135 => 70,  119 => 39,  102 => 54,  71 => 24,  67 => 31,  63 => 19,  59 => 12,  38 => 6,  94 => 49,  89 => 30,  85 => 29,  75 => 24,  68 => 21,  56 => 13,  87 => 28,  21 => 2,  26 => 6,  93 => 37,  88 => 35,  78 => 25,  46 => 6,  27 => 4,  44 => 11,  31 => 6,  28 => 5,  201 => 115,  196 => 97,  183 => 82,  171 => 79,  166 => 81,  163 => 87,  158 => 77,  156 => 72,  151 => 63,  142 => 72,  138 => 46,  136 => 56,  121 => 46,  117 => 46,  105 => 67,  91 => 35,  62 => 13,  49 => 16,  24 => 1,  25 => 4,  19 => 1,  79 => 47,  72 => 23,  69 => 22,  47 => 9,  40 => 9,  37 => 6,  22 => 2,  246 => 90,  157 => 71,  145 => 80,  139 => 71,  131 => 66,  123 => 79,  120 => 40,  115 => 53,  111 => 47,  108 => 36,  101 => 33,  98 => 36,  96 => 31,  83 => 30,  74 => 35,  66 => 20,  55 => 29,  52 => 12,  50 => 10,  43 => 5,  41 => 14,  35 => 10,  32 => 7,  29 => 3,  209 => 99,  203 => 78,  199 => 67,  193 => 94,  189 => 71,  187 => 110,  182 => 105,  176 => 116,  173 => 79,  168 => 74,  164 => 72,  162 => 73,  154 => 80,  149 => 81,  147 => 75,  144 => 91,  141 => 65,  133 => 79,  130 => 60,  125 => 41,  122 => 40,  116 => 38,  112 => 53,  109 => 68,  106 => 41,  103 => 37,  99 => 37,  95 => 31,  92 => 21,  86 => 44,  82 => 46,  80 => 24,  73 => 19,  64 => 35,  60 => 18,  57 => 22,  54 => 10,  51 => 9,  48 => 11,  45 => 15,  42 => 6,  39 => 16,  36 => 8,  33 => 2,  30 => 10,);
    }
}
