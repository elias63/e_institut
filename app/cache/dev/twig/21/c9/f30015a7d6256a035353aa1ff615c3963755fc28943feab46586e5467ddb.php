<?php

/* EieinstitutBundle:Community:forum_connecte.html.twig */
class __TwigTemplate_21c9f30015a7d6256a035353aa1ff615c3963755fc28943feab46586e5467ddb extends Twig_Template
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
        echo "
<section class=\"grid_12\">
\t\t\t<div class=\"block-border\"><form class=\"block-content form\" id=\"table_form\" method=\"post\" action=\"\">
\t\t\t\t<h1>Informatique</h1>
\t\t\t\t
\t\t\t\t<div class=\"block-controls\">
\t\t\t\t\t
\t\t\t\t\t<ul class=\"controls-buttons\">
\t\t\t\t\t\t<li><a href=\"#\" title=\"Previous\"><img src=\"images/icons/fugue/navigation-180.png\" width=\"16\" height=\"16\"> Prev</a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 1\"><b>1</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 2\" class=\"current\"><b>2</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 3\"><b>3</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 4\"><b>4</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 5\"><b>5</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Next\">Next <img src=\"images/icons/fugue/navigation.png\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t
\t\t\t\t<div class=\"no-margin\"><table class=\"table\" cellspacing=\"0\" width=\"100%\">
\t\t\t\t
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<th scope=\"col\">Sujet</th>
\t\t\t\t\t\t\t<th scope=\"col\">Message(s)</th>
\t\t\t\t\t\t\t<th scope=\"col\">Dernier message(s)</th>
\t\t\t\t\t\t\t<th scope=\"col\">
\t\t\t\t\t\t\t\t<span class=\"column-sort\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Sort up\" class=\"sort-up\"></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Sort down\" class=\"sort-down\"></a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\tDate
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t</thead>
\t\t\t\t\t
\t\t\t\t\t<tbody>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>Informatique</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>02-05-2010</td>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>Informatique</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>02-05-2010</td>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>Informatique</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>02-05-2010</td>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>Informatique</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>02-05-2010</td>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>Informatique</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>02-05-2010</td>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t
\t\t\t\t</table></div>
\t\t\t\t
\t\t\t\t
\t\t\t</form></div>
\t\t</section>



<section class=\"grid_12\">
\t\t\t<div class=\"block-border\"><form class=\"block-content form\" id=\"table_form\" method=\"post\" action=\"\">
\t\t\t\t<h1>Informatique</h1>
\t\t\t\t
\t\t\t\t<div class=\"block-controls\">
\t\t\t\t\t
\t\t\t\t\t<ul class=\"controls-buttons\">
\t\t\t\t\t\t<li><a href=\"#\" title=\"Previous\"><img src=\"images/icons/fugue/navigation-180.png\" width=\"16\" height=\"16\"> Prev</a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 1\"><b>1</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 2\" class=\"current\"><b>2</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 3\"><b>3</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 4\"><b>4</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Page 5\"><b>5</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Next\">Next <img src=\"images/icons/fugue/navigation.png\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t
\t\t\t\t<div class=\"no-margin\"><table class=\"table\" cellspacing=\"0\" width=\"100%\">
\t\t\t\t
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<th scope=\"col\">Sujet</th>
\t\t\t\t\t\t\t<th scope=\"col\">Message(s)</th>
\t\t\t\t\t\t\t<th scope=\"col\">Dernier message(s)</th>
\t\t\t\t\t\t\t<th scope=\"col\">
\t\t\t\t\t\t\t\t<span class=\"column-sort\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Sort up\" class=\"sort-up\"></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" title=\"Sort down\" class=\"sort-down\"></a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\tDate
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t</thead>
\t\t\t\t\t
\t\t\t\t\t<tbody>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>Informatique</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>02-05-2010</td>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>Informatique</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>02-05-2010</td>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>Informatique</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>02-05-2010</td>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>Informatique</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>02-05-2010</td>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>Informatique</td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>02-05-2010</td>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t
\t\t\t\t</table></div>
\t\t\t\t
\t\t\t\t
\t\t\t</form></div>
\t\t</section>
    
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Community:forum_connecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  683 => 508,  680 => 507,  675 => 97,  672 => 96,  667 => 88,  664 => 87,  659 => 85,  656 => 84,  651 => 11,  648 => 10,  642 => 510,  640 => 507,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 131,  237 => 125,  233 => 124,  216 => 119,  212 => 118,  206 => 115,  202 => 114,  198 => 113,  186 => 103,  184 => 102,  172 => 93,  170 => 92,  161 => 84,  181 => 71,  178 => 70,  129 => 48,  126 => 47,  113 => 41,  104 => 37,  100 => 36,  84 => 29,  20 => 1,  77 => 24,  65 => 22,  53 => 21,  58 => 13,  34 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 123,  220 => 120,  214 => 69,  177 => 96,  169 => 60,  140 => 55,  132 => 49,  128 => 49,  107 => 36,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 128,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 121,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 99,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 30,  67 => 15,  63 => 15,  59 => 21,  38 => 6,  94 => 28,  89 => 26,  85 => 25,  75 => 31,  68 => 14,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 31,  88 => 6,  78 => 21,  46 => 14,  27 => 4,  44 => 12,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 90,  163 => 87,  158 => 58,  156 => 66,  151 => 63,  142 => 59,  138 => 50,  136 => 56,  121 => 46,  117 => 46,  105 => 40,  91 => 35,  62 => 23,  49 => 20,  24 => 1,  25 => 4,  19 => 1,  79 => 32,  72 => 16,  69 => 25,  47 => 19,  40 => 11,  37 => 13,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 43,  108 => 36,  101 => 39,  98 => 31,  96 => 31,  83 => 33,  74 => 25,  66 => 24,  55 => 15,  52 => 17,  50 => 10,  43 => 12,  41 => 15,  35 => 10,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 63,  164 => 59,  162 => 57,  154 => 80,  149 => 54,  147 => 58,  144 => 53,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 40,  106 => 36,  103 => 32,  99 => 31,  95 => 36,  92 => 21,  86 => 28,  82 => 22,  80 => 28,  73 => 19,  64 => 26,  60 => 21,  57 => 22,  54 => 18,  51 => 14,  48 => 15,  45 => 19,  42 => 6,  39 => 16,  36 => 9,  33 => 13,  30 => 10,);
    }
}
