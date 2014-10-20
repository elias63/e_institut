<?php

/* EieinstitutBundle:Portefolio:espace_personnel.html.twig */
class __TwigTemplate_15f375d2ea804bb0d06d26310a7fbc4eb1536fe6861bcd4870da431b0336ab8b extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "     ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "   | Espace personnel
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
    public function block_Slide($context, array $blocks = array())
    {
        // line 14
        echo "
";
    }

    // line 16
    public function block_Sub_Content($context, array $blocks = array())
    {
        // line 17
        echo "<!-- les icons sont à changer-->
\t\t<section class=\"grid_9\">
\t\t\t<div class=\"block-border\"><div class=\"block-content\" >
\t\t\t\t<h1>Tableau de bord</h1>
\t\t\t\t
\t\t\t\t<h3>Compte</h3>
\t\t\t\t<ul class=\"shortcuts-list\">
\t\t\t\t\t
\t\t\t\t\t<li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("profil");
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/web-app/48/Profile.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\"> Mon compte
\t\t\t\t\t</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("_agenda");
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/web-app/48/calendar.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\"> Agenda
\t\t\t\t\t</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("list_contact");
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/web-app/48/Comment.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\"> Mes contacts
\t\t\t\t\t</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("Recus");
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/web-app/48/Email.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\"> Mail
\t\t\t\t\t</a></li>\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<h3>Ressources</h3>
\t\t\t\t<ul class=\"shortcuts-list\">
\t\t\t\t
\t\t\t\t\t<li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("Ressources");
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/web-app/48/Search.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\"> Rechercher
\t\t\t\t\t</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("Ressources_Ajouter");
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/web-app/48/Add.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\"> Ajouter une ressource
\t\t\t\t\t</a></li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<h3>Tutoriel</h3>
\t\t\t\t<ul class=\"shortcuts-list\">
\t\t\t\t\t
\t\t\t\t\t<li><a href=\"\">
\t\t\t\t\t\t<img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/web-app/48/Loading.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\"> liste des Tuto
\t\t\t\t\t</a></li>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<li><a href=\"\">
\t\t\t\t\t\t<img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/web-app/48/Add.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\"> Resever
\t\t\t\t\t</a></li>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t</div></div>
\t\t</section>
";
    }

    // line 72
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 73
        echo "
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Portefolio:espace_personnel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 73,  169 => 72,  156 => 62,  147 => 56,  136 => 48,  132 => 47,  127 => 45,  123 => 44,  111 => 35,  107 => 34,  102 => 32,  98 => 31,  93 => 29,  89 => 28,  84 => 26,  80 => 25,  70 => 17,  67 => 16,  62 => 14,  59 => 13,  54 => 11,  51 => 10,  46 => 7,  43 => 6,  36 => 4,  33 => 3,);
    }
}
