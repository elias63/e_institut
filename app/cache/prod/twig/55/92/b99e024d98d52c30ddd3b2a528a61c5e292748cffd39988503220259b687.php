<?php

/* EieinstitutBundle::Sub-Master-Left.html.twig */
class __TwigTemplate_5592b99e024d98d52c30ddd3b2a528a61c5e292748cffd39988503220259b687 extends Twig_Template
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
            'Slide' => array($this, 'block_Slide'),
            'Sub_Content' => array($this, 'block_Sub_Content'),
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "     ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "
";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        // line 13
        echo "
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "\t<section class=\"grid_3\">
        ";
        // line 20
        $this->env->loadTemplate("EieinstitutBundle:Block:Block.html.twig")->display($context);
        // line 21
        echo "\t";
        $this->displayBlock('Slide', $context, $blocks);
        // line 24
        echo "\t</section>
\t<!--<section class=\"grid_9\">
\t\t<div class=\"block-border\">
\t\t\t<div class=\"block-content\">
\t\t\t\t<h1>Titre </h1>
\t\t\t\t<div class=\"block-controls\">
\t\t\t\t\t<div class=\"controls-buttons\">
\t\t\t\t\t\t<div class=\"sub-hover\">
\t\t\t\t\t\t\t<a href=\"#\">link></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>-->
\t
\t\t\t\t";
        // line 37
        $this->displayBlock('Sub_Content', $context, $blocks);
        // line 40
        echo "\t\t\t<!--</div>
\t\t</div>
    </section>-->
";
    }

    // line 21
    public function block_Slide($context, array $blocks = array())
    {
        // line 22
        echo "
\t";
    }

    // line 37
    public function block_Sub_Content($context, array $blocks = array())
    {
        // line 38
        echo "
\t\t\t\t";
    }

    // line 47
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 48
        echo "
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle::Sub-Master-Left.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 48,  106 => 38,  103 => 37,  95 => 21,  88 => 40,  86 => 37,  71 => 24,  68 => 21,  66 => 20,  63 => 19,  60 => 18,  55 => 13,  52 => 12,  47 => 9,  44 => 8,  37 => 6,  34 => 5,  172 => 73,  169 => 72,  156 => 62,  147 => 56,  136 => 48,  132 => 47,  127 => 45,  123 => 44,  111 => 47,  107 => 34,  102 => 32,  98 => 22,  93 => 29,  89 => 28,  84 => 26,  80 => 25,  70 => 17,  67 => 16,  62 => 14,  59 => 13,  54 => 11,  51 => 10,  46 => 7,  43 => 6,  36 => 4,  33 => 3,);
    }
}
