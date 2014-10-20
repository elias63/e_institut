<?php

/* EieinstitutBundle:Contact:supprimer_contact.html.twig */
class __TwigTemplate_f15e7083b5f74169c5adaa40fd33d8b25b66b3cd4ee8372e2511ff81dd8a6904 extends Twig_Template
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
        echo "   | Supprimer contacts
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

\t\t\t<div class=\"block-border\"><form class=\"block-content form\" name=\"table_form\" id=\"table_form\" method=\"post\" action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_contact", array("contact" => $this->getAttribute((isset($context["UserContact"]) ? $context["UserContact"] : $this->getContext($context, "UserContact")), "username"))), "html", null, true);
        echo "\">
\t\t\t\t<h1>
\t\t\t\t\tSupression de contact
\t\t\t\t</h1>
                                        
                         <form class=\"block-content form\" name=\"_FormContact\" id=\"FormContact_form\" method=\"post\" action=\"\">
                             
                          ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UserContact"]) ? $context["UserContact"] : $this->getContext($context, "UserContact")), "nom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UserContact"]) ? $context["UserContact"] : $this->getContext($context, "UserContact")), "prenom"), "html", null, true);
        echo " <br> 
                             
                           <button type=\"submit\" class=\"small\" name=\"submit_delete\">Valider</button>\t<button type=\"button\" class=\"small\">annuler</button>
\t\t\t  
                         </form>
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t

    </section>
";
    }

    // line 38
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 39
        echo "
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Contact:supprimer_contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 53,  114 => 46,  167 => 79,  146 => 71,  134 => 64,  263 => 130,  255 => 124,  213 => 95,  185 => 84,  153 => 67,  150 => 68,  124 => 56,  70 => 16,  683 => 508,  680 => 507,  675 => 97,  672 => 96,  667 => 88,  664 => 87,  659 => 85,  656 => 84,  651 => 11,  648 => 10,  642 => 510,  640 => 507,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 131,  237 => 127,  233 => 105,  216 => 113,  212 => 118,  206 => 115,  202 => 114,  198 => 113,  186 => 103,  184 => 102,  172 => 93,  170 => 92,  161 => 78,  181 => 84,  178 => 70,  129 => 48,  126 => 47,  113 => 41,  104 => 37,  100 => 36,  84 => 25,  20 => 1,  77 => 21,  65 => 22,  53 => 21,  58 => 13,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 123,  247 => 78,  241 => 77,  229 => 122,  220 => 97,  214 => 69,  177 => 96,  169 => 60,  140 => 60,  132 => 55,  128 => 49,  107 => 36,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 128,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 99,  221 => 77,  219 => 114,  217 => 75,  208 => 92,  204 => 72,  179 => 82,  159 => 61,  143 => 56,  135 => 53,  119 => 48,  102 => 38,  71 => 24,  67 => 15,  63 => 19,  59 => 12,  38 => 6,  94 => 28,  89 => 28,  85 => 25,  75 => 31,  68 => 21,  56 => 9,  87 => 28,  21 => 2,  26 => 6,  93 => 37,  88 => 40,  78 => 21,  46 => 6,  27 => 4,  44 => 8,  31 => 6,  28 => 5,  201 => 90,  196 => 97,  183 => 82,  171 => 61,  166 => 90,  163 => 87,  158 => 77,  156 => 76,  151 => 63,  142 => 59,  138 => 64,  136 => 56,  121 => 46,  117 => 46,  105 => 39,  91 => 35,  62 => 13,  49 => 20,  24 => 1,  25 => 4,  19 => 1,  79 => 25,  72 => 16,  69 => 25,  47 => 9,  40 => 11,  37 => 6,  22 => 2,  246 => 90,  157 => 71,  145 => 62,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 53,  111 => 47,  108 => 36,  101 => 39,  98 => 22,  96 => 31,  83 => 30,  74 => 18,  66 => 20,  55 => 13,  52 => 12,  50 => 10,  43 => 5,  41 => 15,  35 => 10,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 85,  189 => 71,  187 => 84,  182 => 66,  176 => 80,  173 => 79,  168 => 74,  164 => 72,  162 => 73,  154 => 80,  149 => 54,  147 => 67,  144 => 53,  141 => 48,  133 => 55,  130 => 60,  125 => 44,  122 => 55,  116 => 41,  112 => 42,  109 => 40,  106 => 41,  103 => 37,  99 => 40,  95 => 21,  92 => 21,  86 => 37,  82 => 22,  80 => 28,  73 => 19,  64 => 26,  60 => 18,  57 => 22,  54 => 10,  51 => 9,  48 => 15,  45 => 19,  42 => 6,  39 => 16,  36 => 3,  33 => 2,  30 => 10,);
    }
}
