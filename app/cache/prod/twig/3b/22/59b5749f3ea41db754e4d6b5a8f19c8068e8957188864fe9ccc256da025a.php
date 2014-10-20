<?php

/* EieinstitutBundle:Portefolio:profil.html.twig */
class __TwigTemplate_3b2259b5749f3ea41db754e4d6b5a8f19c8068e8957188864fe9ccc256da025a extends Twig_Template
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
<section class=\"grid_6\">
\t\t<div class=\"task with-legend\">

\t\t\t\t\t\t<!-- The legend -->
\t\t\t\t\t\t
\t\t\t\t\t\t 
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<span align=\"center\"><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/profil.png"), "html", null, true);
        echo "\" width=\"100\" height=\"100\"></span>
\t\t\t\t\t\t\tnom prenom
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t\t\t\t<button type=\"button\" class=\"grey\" align=\"left\">modifier</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t <div class=\"task with-legend\">

\t\t\t\t\t\t<!-- The legend -->
\t\t\t\t\t\t
\t\t\t\t\t\t 
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<span align=\"center\">Tel:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adresse:</br></br>
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sexe:</br>
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ville:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pays:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t\t\t\t<button type=\"button\" class=\"grey\" align=\"right\">modifier</button>
\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t <div class=\"task with-legend\">
                               Représentations</br></br>
\t\t\t\t\t\t<!-- The legend -->
\t\t\t\t\t         <table><tr><td WIDTH=150 HEIGHT=20>date</td><td WIDTH=400 HEIGHT=20>titre</td><td WIDTH=100 HEIGHT=20><a href=\"#\">détail</a></td></tr>
\t\t\t\t\t\t\t <tr><td WIDTH=150 HEIGHT=20>date</td><td WIDTH=300 HEIGHT=20>titre</td><td WIDTH=100 HEIGHT=20><a href=\"#\">détail</a></td></tr>
\t\t\t\t\t\t\t <tr><td WIDTH=150 HEIGHT=20>date</td><td WIDTH=300 HEIGHT=20>titre</td><td WIDTH=100 HEIGHT=20><a href=\"#\">détail</a></td></tr>
\t\t\t\t\t\t\t <tr><td WIDTH=150 HEIGHT=20>date</td><td WIDTH=300 HEIGHT=20>titre</td><td WIDTH=100 HEIGHT=20><a href=\"#\">détail</a></td></tr>
\t\t\t\t\t\t\t <tr><td WIDTH=150 HEIGHT=20>date</td><td WIDTH=300 HEIGHT=20>titre</td><td WIDTH=100 HEIGHT=20><a href=\"#\">détail</a></td></tr>
\t\t\t\t\t\t\t <tr><td WIDTH=150 HEIGHT=20>date</td><td WIDTH=300 HEIGHT=20>titre</td><td WIDTH=100 HEIGHT=20><a href=\"#\">détail</a></td></tr></table>
\t\t\t\t\t\t
\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t <div class=\"task with-legend\">
                               Préconisations</br></br>
\t\t\t\t\t\t<!-- The legend -->
\t\t\t\t\t         <table><tr><td WIDTH=150 HEIGHT=20>domaine</td><td WIDTH=00 HEIGHT=20>titre</td><td WIDTH=100 HEIGHT=20><a href=\"#\">détail</a></td></tr>
\t\t\t\t\t\t\t <tr><td WIDTH=150 HEIGHT=20>domaine</td><td WIDTH=300 HEIGHT=20>titre</td><td WIDTH=100 HEIGHT=20><a href=\"#\">détail</a></td></tr>
\t\t\t\t\t\t\t <tr><td WIDTH=150 HEIGHT=20>domaine</td><td WIDTH=300 HEIGHT=20>titre</td><td WIDTH=100 HEIGHT=20><a href=\"#\">détail</a></td></tr>
\t\t\t\t\t\t\t <tr><td WIDTH=150 HEIGHT=20>domaine</td><td WIDTH=300 HEIGHT=20>titre</td><td WIDTH=100 HEIGHT=20><a href=\"#\">détail</a></td></tr>
\t\t\t\t\t\t\t <tr><td WIDTH=150 HEIGHT=20>domaine</td><td WIDTH=300 HEIGHT=20>titre</td><td WIDTH=100 HEIGHT=20><a href=\"#\">détail</a></td></tr>
\t\t\t\t\t\t\t <tr><td WIDTH=150 HEIGHT=20>domaine</td><td WIDTH=300 HEIGHT=20>titre</td><td WIDTH=100 HEIGHT=20><a href=\"#\">détail</a></td></tr></table>
\t\t\t\t\t\t
\t\t\t\t\t\t\t </div>
\t\t\t\t\t  
            </div>
\t\t\t
\t\t\t\t\t
\t\t</section>
    
";
    }

    // line 86
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 87
        echo "
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Portefolio:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 87,  145 => 86,  82 => 26,  70 => 16,  67 => 15,  62 => 13,  59 => 12,  54 => 10,  51 => 9,  46 => 6,  43 => 5,  36 => 3,  33 => 2,);
    }
}
