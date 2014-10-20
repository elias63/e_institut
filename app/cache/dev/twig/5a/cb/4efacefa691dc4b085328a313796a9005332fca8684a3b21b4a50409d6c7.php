<?php

/* EiAdministrationBundle:Contributor:tbd_contribu.html.twig */
class __TwigTemplate_5acb4efacefa691dc4b085328a313796a9005332fca8684a3b21b4a50409d6c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EiAdministrationBundle::Master-Base-Contribu.html.twig");

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
        return "EiAdministrationBundle::Master-Base-Contribu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "     Table du board | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "   
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
        echo "<section class=\"grid_9 \">\t\t\t   \t

        <div class=\"block-border\"> 
            <div class=\"block-content\"> <h1>Rapport d'activités</h1>\t\t\t\t\t\t\t\t
\t\t\t\t\t<div id=\"tab-global\" class=\"tabs-content\" style=\"height: 590px;\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<ul class=\"tabs js-tabs same-height\">
\t\t\t\t\t\t\t\t<li class=\"current\"><a href=\"#tab-comment\" title=\"Commentaires\">Commentaires</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-stats\" title=\"Options\">Statistiques</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-news\" title=\"Options\">Les actualités</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tabs-content\">
\t\t\t\t\t\t\t\t<!--commentaires-->
\t\t\t\t\t\t\t\t<div id=\"tab-comment\" style=\"height: 519px;\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<dl class=\"accordion\">
\t\t\t\t\t\t\t\t\t\t\t<dt class=\"opened\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/balloon-reverse.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Marc:</strong> 
\t\t\t\t\t\t\t\t\t\t\t\tDon't forget to tell the client <em>- Yesterday</em>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<dd style=\"display: block;\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"\" style=\"opacity: 10;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\" title=\"Contacter\"><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/mail.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Contacter</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\" title=\"Supprimer\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Supprimer</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<dt class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/folder.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Marc:</strong> 
\t\t\t\t\t\t\t\t\t\t\t\tDon't forget to tell the client <em>- Yesterday</em>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<dd style=\"display: block;\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"\" style=\"opacity: 10;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\" title=\"Contacter\"><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/mail.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Contacter</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\" title=\"Supprimer\"><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Supprimer</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<dt class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/balloon-reverse.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Marc:</strong> 
\t\t\t\t\t\t\t\t\t\t\t\tDon't forget to tell the client <em>- Yesterday</em>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<dd style=\"display: block;\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"\" style=\"opacity: 10;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\" title=\"Contacter\"><img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/mail.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Contacter</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0)\" title=\"Supprimer\"><img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Supprimer</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!--statistiques voir \"drawVisitorsChart()\"-->
\t\t\t\t\t\t\t\t<div id=\"tab-stats\" style=\"height: 519px;\">
\t\t\t\t\t\t\t\t\t\t<div id=\"chart_div\" style=\"height: 330px; position: relative;\">
\t\t\t\t\t\t\t\t\t\t\t<div dir=\"ltr\" style=\"position: relative; width: 1142px; height: 330px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<sv\tg width=\"1142\" height=\"330\" style=\"overflow: hidden;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<defs id=\"defs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<clipPath id=\"_ABSTRACT_RENDERER_ID_2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"141\" y=\"63\" width=\"861\" height=\"204\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</clipPath>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"0\" y=\"0\" width=\"1142\" height=\"330\" stroke=\"none\" stroke-width=\"0\" fill=\"#ffffff\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text text-anchor=\"start\" x=\"141\" y=\"37.9\" font-family=\"Arial\" font-size=\"14\" font-weight=\"bold\" stroke=\"none\" stroke-width=\"0\" fill=\"#000000\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tActivités mensuelles
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</text>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"1016\" y=\"63\" width=\"112\" height=\"83\" stroke=\"none\" stroke-width=\"0\" fill-opacity=\"0\" fill=\"#ffffff\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"1016\" y=\"63\" width=\"112\" height=\"14\" stroke=\"none\" stroke-width=\"0\" fill-opacity=\"0\" fill=\"#ffffff\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text text-anchor=\"start\" x=\"1035\" y=\"74.9\" font-family=\"Arial\" font-size=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#222222\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tVisites
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</text>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"1016\" y=\"63\" width=\"14\" height=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#3366cc\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"1016\" y=\"86\" width=\"112\" height=\"14\" stroke=\"none\" stroke-width=\"0\" fill-opacity=\"0\" fill=\"#ffffff\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text text-anchor=\"start\" x=\"1035\" y=\"97.9\" font-family=\"Arial\" font-size=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#222222\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPages visitées
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</text>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"1016\" y=\"86\" width=\"14\" height=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#dc3912\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"1016\" y=\"109\" width=\"112\" height=\"14\" stroke=\"none\" stroke-width=\"0\" fill-opacity=\"0\" fill=\"#ffffff\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text text-anchor=\"start\" x=\"1035\" y=\"120.9\" font-family=\"Arial\" font-size=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#222222\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSujets de dicussion
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</text>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"1016\" y=\"109\" width=\"14\" height=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#ff9900\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"1016\" y=\"132\" width=\"112\" height=\"14\" stroke=\"none\" stroke-width=\"0\" fill-opacity=\"0\" fill=\"#ffffff\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text text-anchor=\"start\" x=\"1035\" y=\"143.9\" font-family=\"Arial\" font-size=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#222222\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tRessources
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</text>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"1016\" y=\"132\" width=\"14\" height=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#109618\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"141\" y=\"63\" width=\"861\" height=\"204\" stroke=\"none\" stroke-width=\"0\" fill-opacity=\"0\" fill=\"#ffffff\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g clip-path=\"url(#_ABSTRACT_RENDERER_ID_2)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"141\" y=\"266\" width=\"861\" height=\"1\" stroke=\"none\" stroke-width=\"0\" fill=\"#cccccc\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"141\" y=\"215\" width=\"861\" height=\"1\" stroke=\"none\" stroke-width=\"0\" fill=\"#cccccc\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"141\" y=\"165\" width=\"861\" height=\"1\" stroke=\"none\" stroke-width=\"0\" fill=\"#cccccc\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"141\" y=\"114\" width=\"861\" height=\"1\" stroke=\"none\" stroke-width=\"0\" fill=\"#cccccc\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"141\" y=\"63\" width=\"861\" height=\"1\" stroke=\"none\" stroke-width=\"0\" fill=\"#cccccc\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"155\" y=\"225\" width=\"10\" height=\"41\" stroke=\"none\" stroke-width=\"0\" fill=\"#3366cc\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"227\" y=\"205\" width=\"10\" height=\"61\" stroke=\"none\" stroke-width=\"0\" fill=\"#3366cc\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"299\" y=\"179\" width=\"10\" height=\"87\" stroke=\"none\" stroke-width=\"0\" fill=\"#3366cc\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"370\" y=\"158\" width=\"10\" height=\"108\" stroke=\"none\" stroke-width=\"0\" fill=\"#3366cc\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"442\" y=\"144\" width=\"10\" height=\"122\" stroke=\"none\" stroke-width=\"0\" fill=\"#3366cc\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"514\" y=\"118\" width=\"10\" height=\"148\" stroke=\"none\" stroke-width=\"0\" fill=\"#3366cc\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"585\" y=\"149\" width=\"10\" height=\"117\" stroke=\"none\" stroke-width=\"0\" fill=\"#3366cc\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"657\" y=\"141\" width=\"10\" height=\"125\" stroke=\"none\" stroke-width=\"0\" fill=\"#3366cc\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"729\" y=\"83\" width=\"10\" height=\"183\" stroke=\"none\" stroke-width=\"0\" fill=\"#3366cc\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"800\" y=\"103\" width=\"10\" height=\"163\" stroke=\"none\" stroke-width=\"0\" fill=\"#3366cc\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"872\" y=\"186\" width=\"10\" height=\"80\" stroke=\"none\" stroke-width=\"0\" fill=\"#3366cc\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"944\" y=\"222\" width=\"10\" height=\"44\" stroke=\"none\" stroke-width=\"0\" fill=\"#3366cc\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"166\" y=\"198\" width=\"10\" height=\"68\" stroke=\"none\" stroke-width=\"0\" fill=\"#dc3912\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"238\" y=\"202\" width=\"10\" height=\"64\" stroke=\"none\" stroke-width=\"0\" fill=\"#dc3912\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"310\" y=\"184\" width=\"10\" height=\"82\" stroke=\"none\" stroke-width=\"0\" fill=\"#dc3912\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"381\" y=\"187\" width=\"10\" height=\"79\" stroke=\"none\" stroke-width=\"0\" fill=\"#dc3912\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"453\" y=\"178\" width=\"10\" height=\"88\" stroke=\"none\" stroke-width=\"0\" fill=\"#dc3912\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"525\" y=\"198\" width=\"10\" height=\"68\" stroke=\"none\" stroke-width=\"0\" fill=\"#dc3912\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"596\" y=\"179\" width=\"10\" height=\"87\" stroke=\"none\" stroke-width=\"0\" fill=\"#dc3912\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"668\" y=\"179\" width=\"10\" height=\"87\" stroke=\"none\" stroke-width=\"0\" fill=\"#dc3912\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"740\" y=\"189\" width=\"10\" height=\"77\" stroke=\"none\" stroke-width=\"0\" fill=\"#dc3912\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"811\" y=\"197\" width=\"10\" height=\"69\" stroke=\"none\" stroke-width=\"0\" fill=\"#dc3912\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"883\" y=\"176\" width=\"10\" height=\"90\" stroke=\"none\" stroke-width=\"0\" fill=\"#dc3912\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"955\" y=\"190\" width=\"10\" height=\"76\" stroke=\"none\" stroke-width=\"0\" fill=\"#dc3912\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"177\" y=\"225\" width=\"10\" height=\"41\" stroke=\"none\" stroke-width=\"0\" fill=\"#ff9900\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"249\" y=\"234\" width=\"10\" height=\"32\" stroke=\"none\" stroke-width=\"0\" fill=\"#ff9900\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"321\" y=\"234\" width=\"10\" height=\"32\" stroke=\"none\" stroke-width=\"0\" fill=\"#ff9900\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"392\" y=\"232\" width=\"10\" height=\"34\" stroke=\"none\" stroke-width=\"0\" fill=\"#ff9900\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"464\" y=\"227\" width=\"10\" height=\"39\" stroke=\"none\" stroke-width=\"0\" fill=\"#ff9900\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"536\" y=\"226\" width=\"10\" height=\"40\" stroke=\"none\" stroke-width=\"0\" fill=\"#ff9900\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"607\" y=\"217\" width=\"10\" height=\"49\" stroke=\"none\" stroke-width=\"0\" fill=\"#ff9900\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"679\" y=\"217\" width=\"10\" height=\"49\" stroke=\"none\" stroke-width=\"0\" fill=\"#ff9900\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"751\" y=\"223\" width=\"10\" height=\"43\" stroke=\"none\" stroke-width=\"0\" fill=\"#ff9900\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"822\" y=\"213\" width=\"10\" height=\"53\" stroke=\"none\" stroke-width=\"0\" fill=\"#ff9900\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"894\" y=\"217\" width=\"10\" height=\"49\" stroke=\"none\" stroke-width=\"0\" fill=\"#ff9900\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"966\" y=\"224\" width=\"10\" height=\"42\" stroke=\"none\" stroke-width=\"0\" fill=\"#ff9900\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"188\" y=\"229\" width=\"10\" height=\"37\" stroke=\"none\" stroke-width=\"0\" fill=\"#109618\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"260\" y=\"237\" width=\"10\" height=\"29\" stroke=\"none\" stroke-width=\"0\" fill=\"#109618\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"332\" y=\"237\" width=\"10\" height=\"29\" stroke=\"none\" stroke-width=\"0\" fill=\"#109618\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"403\" y=\"234\" width=\"10\" height=\"32\" stroke=\"none\" stroke-width=\"0\" fill=\"#109618\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"475\" y=\"222\" width=\"10\" height=\"44\" stroke=\"none\" stroke-width=\"0\" fill=\"#109618\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"547\" y=\"203\" width=\"10\" height=\"63\" stroke=\"none\" stroke-width=\"0\" fill=\"#109618\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"618\" y=\"220\" width=\"10\" height=\"46\" stroke=\"none\" stroke-width=\"0\" fill=\"#109618\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"690\" y=\"217\" width=\"10\" height=\"49\" stroke=\"none\" stroke-width=\"0\" fill=\"#109618\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"762\" y=\"226\" width=\"10\" height=\"40\" stroke=\"none\" stroke-width=\"0\" fill=\"#109618\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"833\" y=\"233\" width=\"10\" height=\"33\" stroke=\"none\" stroke-width=\"0\" fill=\"#109618\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"905\" y=\"226\" width=\"10\" height=\"40\" stroke=\"none\" stroke-width=\"0\" fill=\"#109618\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"977\" y=\"249\" width=\"10\" height=\"17\" stroke=\"none\" stroke-width=\"0\" fill=\"#109618\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"141\" y=\"266\" width=\"861\" height=\"1\" stroke=\"none\" stroke-width=\"0\" fill=\"#333333\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text text-anchor=\"middle\" x=\"177.33333333333334\" y=\"287.9\" font-family=\"Arial\" font-size=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#222222\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tJan
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</text>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text text-anchor=\"middle\" x=\"249\" y=\"287.9\" font-family=\"Arial\" font-size=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#222222\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFev
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</text>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text text-anchor=\"middle\" x=\"320.6666666666667\" y=\"287.9\" font-family=\"Arial\" font-size=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#222222\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMar
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</text>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text text-anchor=\"middle\" x=\"392.33333333333337\" y=\"287.9\" font-family=\"Arial\" font-size=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#222222\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAvr
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</text>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text text-anchor=\"middle\" x=\"464\" y=\"287.9\" font-family=\"Arial\" font-size=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#222222\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMai
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</text>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text text-anchor=\"middle\" x=\"535.6666666666667\" y=\"287.9\" font-family=\"Arial\" font-size=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#222222\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tJun
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</text>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text text-anchor=\"middle\" x=\"607.3333333333334\" y=\"287.9\" font-family=\"Arial\" font-size=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#222222\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tJul
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</text>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text text-anchor=\"middle\" x=\"679\" y=\"287.9\" font-family=\"Arial\" font-size=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#222222\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAou
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</text>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text text-anchor=\"middle\" x=\"750.6666666666667\" y=\"287.9\" font-family=\"Arial\" font-size=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#222222\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSep
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</text>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text text-anchor=\"middle\" x=\"822.3333333333334\" y=\"287.9\" font-family=\"Arial\" font-size=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#222222\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOct
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</text>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text text-anchor=\"middle\" x=\"894\" y=\"287.9\" font-family=\"Arial\" font-size=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#222222\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNov
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</text>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text text-anchor=\"middle\" x=\"965.6666666666667\" y=\"287.9\" font-family=\"Arial\" font-size=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#222222\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDec
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</text>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text text-anchor=\"end\" x=\"127\" y=\"271.4\" font-family=\"Arial\" font-size=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#444444\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t0
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</text>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text text-anchor=\"end\" x=\"127\" y=\"220.65\" font-family=\"Arial\" font-size=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#444444\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t60
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</text>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text text-anchor=\"end\" x=\"127\" y=\"169.9\" font-family=\"Arial\" font-size=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#444444\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t120
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</text>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text text-anchor=\"end\" x=\"127\" y=\"119.15\" font-family=\"Arial\" font-size=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#444444\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t180
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</text>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text text-anchor=\"end\" x=\"127\" y=\"68.4\" font-family=\"Arial\" font-size=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#444444\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t240
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</text>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text text-anchor=\"end\" x=\"127\" y=\"18.4\" font-family=\"Arial\" font-size=\"14\" stroke=\"none\" stroke-width=\"0\" fill=\"#444444\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNombre
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</text>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div style=\"display: none; position: absolute; top: 340px; left: 1152px; white-space: nowrap; font-family: Arial; font-size: 14px; font-weight: bold;\">
\t\t\t\t\t\t\t\t\t\t\t\t53
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!--actualités-->
\t\t\t\t\t\t\t\t<div id=\"tab-news\" style=\"height: 519px;\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"\"><form class=\"block-content form\" id=\"table_form\" method=\"post\" action=\"#\">
\t\t\t\t
\t\t\t\t
\t\t\t\t<div class=\"block-controls\">
\t\t\t\t\t
\t\t\t\t\t<ul class=\"controls-buttons\">
\t\t\t\t\t\t<li><a href=\"javascript:void(0)\" title=\"Previous\"><img src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation-180.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Prev</a></li>
\t\t\t\t\t\t<li><a href=\"javascript:void(0)\" title=\"Page 1\"><b>1</b></a></li>
\t\t\t\t\t\t<li><a href=\"javascript:void(0)\" title=\"Page 2\" class=\"current\"><b>2</b></a></li>
\t\t\t\t\t\t<li><a href=\"javascript:void(0)\" title=\"Page 3\"><b>3</b></a></li>
\t\t\t\t\t\t<li><a href=\"javascript:void(0)\" title=\"Page 4\"><b>4</b></a></li>
\t\t\t\t\t\t<li><a href=\"javascript:void(0)\" title=\"Page 5\"><b>5</b></a></li>
\t\t\t\t\t\t<li><a href=\"javascript:void(0)\" title=\"Next\">Next <img src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t\t<li class=\"sep\"></li>
\t\t\t\t\t\t<li><a href=\"javascript:void(0)\"><img src=\"";
        // line 345
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
\t\t\t\t\t\t\t<th scope=\"row\" class=\"table-check-cell\"><input type=\"checkbox\" name=\"selected[]\" id=\"table-selected-1\" value=\"1\"></th>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<th scope=\"col\">
\t\t\t\t\t\t\t\t<span class=\"column-sort\">
\t\t\t\t\t\t\t\t\t<a href=\"\" title=\"Sort up\" class=\"sort-up\"></a>
\t\t\t\t\t\t\t\t\t<a href=\"\" title=\"Sort down\" class=\"sort-down\"></a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\tTitre
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th scope=\"col\">Description</th>
\t\t\t\t\t\t\t<th scope=\"col\">
\t\t\t\t\t\t\t<span class=\"column-sort\">
\t\t\t\t\t\t\t\t\t<a href=\"\" title=\"Sort up\" class=\"sort-up\"></a>
\t\t\t\t\t\t\t\t\t<a href=\"\" title=\"Sort down\" class=\"sort-down\"></a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\tAuteur
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th scope=\"col\">Date
\t\t\t\t\t\t\t\t<span class=\"column-sort\">
\t\t\t\t\t\t\t\t\t<a href=\"\" title=\"Sort up\" class=\"sort-up\"></a>
\t\t\t\t\t\t\t\t\t<a href=\"\" title=\"Sort down\" class=\"sort-down\"></a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"table-actions\">Actions</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"table-actions\">Nombre de Vue</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t
\t\t\t\t\t<tbody>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\" class=\"table-check-cell\"><input type=\"checkbox\" name=\"selected[]\" id=\"table-selected-1\" value=\"1\"></th>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>Lorem ipsum sit amet</td>
\t\t\t\t\t\t\t<td> ma  description</td>
\t\t\t\t\t\t\t<td>Ali</td>
\t\t\t\t\t\t\t<td>02-05-2010</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td class=\"table-actions\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" title=\"Modifier\" class=\"with-tip\"><img src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/pencil.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" title=\"Afficher\" class=\"with-tip\"><img src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/magnifier.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" title=\"Metttre dans la corbeille\" class=\"with-tip\"><img src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\" class=\"table-check-cell\"><input type=\"checkbox\" name=\"selected[]\" id=\"table-selected-1\" value=\"1\"></th>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>Lorem ipsum sit amet</td>
\t\t\t\t\t\t\t<td> ma  description</td>
\t\t\t\t\t\t\t<td>Ali</td>
\t\t\t\t\t\t\t<td>02-05-2010</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td class=\"table-actions\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" title=\"Modifier\" class=\"with-tip\"><img src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/pencil.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" title=\"Afficher\" class=\"with-tip\"><img src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/magnifier.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" title=\"Metttre dans la corbeille\" class=\"with-tip\"><img src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\" class=\"table-check-cell\"><input type=\"checkbox\" name=\"selected[]\" id=\"table-selected-1\" value=\"1\"></th>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>Lorem ipsum sit amet</td>
\t\t\t\t\t\t\t<td> ma  description</td>
\t\t\t\t\t\t\t<td>Ali</td>
\t\t\t\t\t\t\t<td>02-05-2010</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td class=\"table-actions\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" title=\"Modifier\" class=\"with-tip\"><img src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/pencil.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" title=\"Afficher\" class=\"with-tip\"><img src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/magnifier.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" title=\"Metttre dans la corbeille\" class=\"with-tip\"><img src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t
\t\t\t\t</table></div>
\t\t\t\t
\t\t\t\t<ul class=\"message no-margin\">
\t\t\t\t\t<li>Results 1 - 5 out of 23</li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t
\t\t\t\t\t
\t\t\t</form></div>
\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t<div class=\"clear\"></div>\t\t\t\t\t\t\t\t
\t</div>
\t\t\t\t\t\t\t\t
</section>\t\t               
";
    }

    // line 459
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 460
        echo "
";
    }

    public function getTemplateName()
    {
        return "EiAdministrationBundle:Contributor:tbd_contribu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 460,  537 => 428,  529 => 426,  512 => 412,  508 => 411,  487 => 396,  483 => 395,  479 => 394,  422 => 343,  464 => 339,  460 => 338,  396 => 283,  391 => 281,  382 => 275,  324 => 229,  308 => 216,  316 => 224,  717 => 544,  714 => 543,  707 => 131,  699 => 91,  691 => 88,  688 => 87,  673 => 546,  671 => 543,  524 => 399,  274 => 181,  251 => 153,  375 => 169,  345 => 152,  339 => 151,  327 => 149,  321 => 176,  315 => 139,  300 => 134,  211 => 134,  378 => 232,  353 => 216,  326 => 193,  295 => 209,  279 => 177,  257 => 135,  97 => 45,  23 => 3,  271 => 204,  222 => 130,  244 => 173,  661 => 307,  658 => 306,  632 => 290,  627 => 288,  613 => 285,  596 => 281,  593 => 280,  590 => 279,  580 => 277,  576 => 276,  572 => 459,  568 => 273,  553 => 268,  546 => 263,  533 => 427,  526 => 258,  513 => 254,  500 => 250,  481 => 239,  463 => 233,  445 => 227,  439 => 225,  433 => 223,  421 => 219,  415 => 217,  399 => 210,  390 => 203,  388 => 202,  372 => 168,  358 => 179,  351 => 153,  347 => 174,  336 => 169,  330 => 166,  218 => 129,  215 => 79,  210 => 99,  275 => 139,  207 => 133,  200 => 126,  289 => 161,  265 => 113,  205 => 122,  192 => 93,  586 => 278,  562 => 272,  555 => 342,  548 => 341,  542 => 340,  532 => 338,  525 => 336,  522 => 257,  519 => 397,  515 => 396,  509 => 253,  505 => 252,  501 => 330,  497 => 328,  491 => 327,  482 => 323,  475 => 237,  455 => 313,  451 => 229,  446 => 310,  438 => 308,  429 => 305,  417 => 297,  410 => 294,  404 => 211,  392 => 288,  356 => 217,  350 => 274,  344 => 243,  342 => 271,  329 => 265,  310 => 237,  301 => 178,  357 => 225,  348 => 244,  340 => 159,  332 => 209,  260 => 174,  386 => 286,  352 => 167,  311 => 135,  304 => 215,  299 => 129,  248 => 86,  234 => 133,  118 => 62,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 130,  701 => 334,  696 => 90,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 291,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 286,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 283,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 361,  560 => 344,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 395,  520 => 243,  517 => 255,  510 => 239,  504 => 410,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 317,  456 => 221,  450 => 219,  442 => 309,  434 => 307,  403 => 196,  397 => 193,  383 => 185,  380 => 284,  373 => 181,  367 => 179,  361 => 177,  349 => 157,  331 => 167,  325 => 140,  319 => 163,  313 => 182,  307 => 236,  293 => 129,  282 => 178,  242 => 112,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 547,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 167,  276 => 161,  272 => 160,  267 => 142,  245 => 142,  225 => 136,  318 => 141,  306 => 169,  297 => 165,  292 => 168,  76 => 26,  291 => 208,  288 => 187,  261 => 162,  250 => 114,  137 => 80,  197 => 120,  286 => 175,  262 => 117,  259 => 156,  236 => 156,  195 => 124,  175 => 116,  188 => 120,  165 => 83,  287 => 187,  284 => 168,  256 => 119,  232 => 158,  191 => 120,  343 => 160,  338 => 146,  333 => 238,  328 => 230,  303 => 166,  281 => 120,  277 => 182,  270 => 172,  266 => 135,  231 => 134,  228 => 142,  226 => 131,  223 => 149,  194 => 105,  180 => 112,  155 => 95,  110 => 52,  81 => 24,  190 => 77,  174 => 109,  160 => 98,  152 => 87,  148 => 70,  90 => 40,  127 => 77,  114 => 46,  167 => 105,  146 => 47,  134 => 76,  263 => 157,  255 => 172,  213 => 135,  185 => 91,  153 => 83,  150 => 48,  124 => 64,  70 => 16,  683 => 11,  680 => 10,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 242,  484 => 353,  253 => 132,  249 => 139,  237 => 151,  233 => 155,  216 => 101,  212 => 120,  206 => 94,  202 => 99,  198 => 95,  186 => 112,  184 => 97,  172 => 113,  170 => 108,  161 => 93,  181 => 107,  178 => 110,  129 => 65,  126 => 40,  113 => 57,  104 => 48,  100 => 27,  84 => 25,  20 => 1,  77 => 29,  65 => 23,  53 => 11,  58 => 13,  34 => 3,  480 => 352,  474 => 227,  469 => 235,  461 => 155,  457 => 231,  453 => 151,  444 => 325,  440 => 324,  437 => 147,  435 => 146,  430 => 209,  427 => 345,  423 => 204,  413 => 337,  409 => 132,  407 => 212,  402 => 130,  398 => 290,  393 => 194,  387 => 283,  384 => 282,  381 => 120,  379 => 119,  374 => 282,  368 => 280,  365 => 224,  362 => 181,  360 => 226,  355 => 175,  341 => 105,  337 => 239,  322 => 101,  314 => 99,  312 => 223,  309 => 138,  305 => 158,  298 => 123,  294 => 162,  285 => 121,  283 => 125,  278 => 146,  268 => 161,  264 => 163,  258 => 115,  252 => 118,  247 => 155,  241 => 164,  229 => 137,  220 => 140,  214 => 128,  177 => 106,  169 => 112,  140 => 81,  132 => 42,  128 => 56,  107 => 33,  61 => 14,  273 => 124,  269 => 123,  254 => 154,  243 => 154,  240 => 132,  238 => 112,  235 => 108,  230 => 121,  227 => 132,  224 => 141,  221 => 147,  219 => 114,  217 => 128,  208 => 122,  204 => 97,  179 => 120,  159 => 107,  143 => 46,  135 => 79,  119 => 66,  102 => 34,  71 => 26,  67 => 29,  63 => 34,  59 => 27,  38 => 6,  94 => 38,  89 => 30,  85 => 29,  75 => 25,  68 => 17,  56 => 24,  87 => 26,  21 => 2,  26 => 2,  93 => 36,  88 => 33,  78 => 34,  46 => 14,  27 => 4,  44 => 6,  31 => 5,  28 => 4,  201 => 121,  196 => 125,  183 => 124,  171 => 106,  166 => 90,  163 => 89,  158 => 96,  156 => 97,  151 => 85,  142 => 81,  138 => 71,  136 => 87,  121 => 69,  117 => 57,  105 => 52,  91 => 35,  62 => 19,  49 => 9,  24 => 1,  25 => 5,  19 => 1,  79 => 32,  72 => 22,  69 => 34,  47 => 16,  40 => 12,  37 => 13,  22 => 1,  246 => 157,  157 => 84,  145 => 72,  139 => 80,  131 => 78,  123 => 64,  120 => 64,  115 => 65,  111 => 52,  108 => 43,  101 => 46,  98 => 39,  96 => 29,  83 => 32,  74 => 33,  66 => 16,  55 => 11,  52 => 23,  50 => 10,  43 => 17,  41 => 5,  35 => 4,  32 => 3,  29 => 6,  209 => 107,  203 => 126,  199 => 125,  193 => 101,  189 => 92,  187 => 119,  182 => 120,  176 => 111,  173 => 105,  168 => 84,  164 => 99,  162 => 83,  154 => 78,  149 => 99,  147 => 84,  144 => 82,  141 => 77,  133 => 57,  130 => 64,  125 => 64,  122 => 63,  116 => 61,  112 => 60,  109 => 53,  106 => 49,  103 => 38,  99 => 46,  95 => 42,  92 => 35,  86 => 34,  82 => 33,  80 => 27,  73 => 35,  64 => 26,  60 => 21,  57 => 20,  54 => 16,  51 => 25,  48 => 22,  45 => 7,  42 => 6,  39 => 15,  36 => 5,  33 => 6,  30 => 1,);
    }
}
