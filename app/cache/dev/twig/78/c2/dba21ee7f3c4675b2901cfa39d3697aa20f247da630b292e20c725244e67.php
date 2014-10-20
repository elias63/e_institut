<?php

/* EieinstitutBundle:Community:Forum.html.twig */
class __TwigTemplate_78c2dba21ee7f3c4675b2901cfa39d3697aa20f247da630b292e20c725244e67 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "     ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "   | Forum
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
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "


<section class=\"grid_9\">
    <div id=\"content\" class=\"block-border\">
        <div class=\"block-content upper-index\">
            <div class=\"h1 with-menu\">
                <h1>Content blocks</h1>
                <div class=\"menu\">


                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/menu-open-arrow.png"), "html", null, true);
        echo "\" height=\"16\" width=\"16\">

                    <ul>
                        ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Rubriques"]) ? $context["Rubriques"] : $this->getContext($context, "Rubriques")));
        foreach ($context['_seq'] as $context["_key"] => $context["Rubrique"]) {
            // line 29
            echo "                            <li class=\"icon_down\"><a href=\"#step0\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Rubrique"]) ? $context["Rubrique"] : $this->getContext($context, "Rubrique")), "libelle"), "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Rubrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
                            </ul>
                        </div>
                    </div>
                </div>
";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Rubriques"]) ? $context["Rubriques"] : $this->getContext($context, "Rubriques")));
        foreach ($context['_seq'] as $context["_key"] => $context["Rubrique"]) {
            // line 37
            echo "                <div class=\"block-content no-title\">

                    <h2 id=\"step0\">
                    ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Rubrique"]) ? $context["Rubrique"] : $this->getContext($context, "Rubrique")), "libelle"), "html", null, true);
            echo " <br>
                            <small> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Rubrique"]) ? $context["Rubrique"] : $this->getContext($context, "Rubrique")), "description"), "html", null, true);
            echo "</small>
                        </h2>

                        <ul class=\"small-files-list icon-html\">

                         ";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Forums"]) ? $context["Forums"] : $this->getContext($context, "Forums")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["Forum"]) {
                // line 47
                echo "                            ";
                if (($this->getAttribute($this->getAttribute((isset($context["Forum"]) ? $context["Forum"] : $this->getContext($context, "Forum")), "forumrubrique"), "id") == $this->getAttribute((isset($context["Rubrique"]) ? $context["Rubrique"] : $this->getContext($context, "Rubrique")), "id"))) {
                    // line 48
                    echo "                            <li> 
                                <strong>";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Forum"]) ? $context["Forum"] : $this->getContext($context, "Forum")), "titre"), "html", null, true);
                    echo " </strong> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Forum"]) ? $context["Forum"] : $this->getContext($context, "Forum")), "forumuser"), "username"), "html", null, true);
                    echo "<br>
                                <small> ";
                    // line 50
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Forum"]) ? $context["Forum"] : $this->getContext($context, "Forum")), "dateCreation"), "d-m-Y"), "html", null, true);
                    echo "</small>
                            </li> 
                            ";
                }
                // line 53
                echo "                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 54
                echo "                            <li> 
                                Aucune discution
                            </li> 
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Forum'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "
                        </ul>

                    </div>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Rubrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
                </div>
            </section>



";
    }

    // line 70
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 71
        echo "
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Community:Forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 71,  178 => 70,  129 => 48,  126 => 47,  113 => 41,  104 => 37,  100 => 36,  84 => 29,  20 => 1,  77 => 24,  65 => 22,  53 => 11,  58 => 13,  34 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 49,  128 => 49,  107 => 36,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 23,  67 => 15,  63 => 15,  59 => 21,  38 => 6,  94 => 28,  89 => 26,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 31,  88 => 6,  78 => 21,  46 => 14,  27 => 4,  44 => 12,  31 => 5,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 58,  156 => 66,  151 => 63,  142 => 59,  138 => 50,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 15,  24 => 3,  25 => 4,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 19,  40 => 11,  37 => 14,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 25,  66 => 24,  55 => 15,  52 => 17,  50 => 10,  43 => 12,  41 => 15,  35 => 4,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 63,  164 => 59,  162 => 57,  154 => 58,  149 => 54,  147 => 58,  144 => 53,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 40,  106 => 36,  103 => 32,  99 => 31,  95 => 27,  92 => 21,  86 => 28,  82 => 22,  80 => 28,  73 => 19,  64 => 23,  60 => 21,  57 => 11,  54 => 18,  51 => 14,  48 => 15,  45 => 7,  42 => 6,  39 => 16,  36 => 9,  33 => 13,  30 => 10,);
    }
}
