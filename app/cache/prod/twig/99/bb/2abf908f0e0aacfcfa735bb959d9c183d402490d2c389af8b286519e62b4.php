<?php

/* EieinstitutBundle:Community:Forum.html.twig */
class __TwigTemplate_99bb2abf908f0e0aacfcfa735bb959d9c183d402490d2c389af8b286519e62b4 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["Rubriques"]) ? $context["Rubriques"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["Rubrique"]) {
            // line 29
            echo "                            <li class=\"icon_down\"><a href=\"#step0\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Rubrique"]) ? $context["Rubrique"] : null), "libelle"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["Rubriques"]) ? $context["Rubriques"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["Rubrique"]) {
            // line 37
            echo "                <div class=\"block-content no-title\">

                    <h2 id=\"step0\">
                    ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Rubrique"]) ? $context["Rubrique"] : null), "libelle"), "html", null, true);
            echo " <br>
                            <small> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Rubrique"]) ? $context["Rubrique"] : null), "description"), "html", null, true);
            echo "</small>
                        </h2>

                        <ul class=\"small-files-list icon-html\">

                         ";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Forums"]) ? $context["Forums"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["Forum"]) {
                // line 47
                echo "                            ";
                if (($this->getAttribute($this->getAttribute((isset($context["Forum"]) ? $context["Forum"] : null), "forumrubrique"), "id") == $this->getAttribute((isset($context["Rubrique"]) ? $context["Rubrique"] : null), "id"))) {
                    // line 48
                    echo "                            <li> 
                                <strong>";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Forum"]) ? $context["Forum"] : null), "titre"), "html", null, true);
                    echo " </strong> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Forum"]) ? $context["Forum"] : null), "forumuser"), "username"), "html", null, true);
                    echo "<br>
                                <small> ";
                    // line 50
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Forum"]) ? $context["Forum"] : null), "dateCreation"), "d-m-Y"), "html", null, true);
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
        return array (  181 => 71,  178 => 70,  168 => 63,  158 => 58,  149 => 54,  144 => 53,  138 => 50,  132 => 49,  129 => 48,  126 => 47,  121 => 46,  113 => 41,  109 => 40,  104 => 37,  100 => 36,  93 => 31,  84 => 29,  80 => 28,  74 => 25,  61 => 14,  58 => 13,  53 => 11,  50 => 10,  45 => 7,  42 => 6,  35 => 4,  32 => 3,);
    }
}
