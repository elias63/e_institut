<?php

/* EieinstitutBundle:include:Header.html.twig */
class __TwigTemplate_e81d1b6343dc438ff8648169c48a3f164101950d5d9c1276f2743a6cebc68e56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t<!-- Header -->
\t<a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("eieinstitut_homepage");
        echo "\"><img style=\"float:left;padding-left:10%;padding-top:5px;\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/logo_s2.png"), "html", null, true);
        echo "\" width=\"231\" height=\"91\"></a>
\t<!-- Server status -->
\t<header>
            
\t\t<div class=\"container_12\">
\t\t\t<div class=\"server-info\"><a href=\"https://www.facebook.com/pages/E-Institut-Espace-Num%C3%A9rique-Acad%C3%A9mique-Unifi%C3%A9-ENAU/212028762219064\" target=\"_blank\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/fb.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a></div>
\t\t\t<div class=\"server-info\"><a href=\"https://twitter.com/EInstitut\"target=\"_blank\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/tw.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a></div>
\t\t\t<div class=\"server-info\"><a href=\"http://www.linkedin.com/pub/e-institut/45/a43/168\" target=\"_blank\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/ln.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a> </div>
\t\t\t<div class=\"server-info\"><a href=\"http://www.youtube.com/channel/UCNJWFhvZoYW_Qx-GoHHRBcw\" target=\"_blank\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/yt.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a></div>
\t\t\t<div class=\"server-info\"><a href=\"https://plus.google.com/112849304228527795761/posts\" target=\"_blank\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/goo.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a></div>
\t\t\t<div class=\"server-info\"><a href=\"#\" target=\"_blank\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/social/rss.png"), "html", null, true);
        echo "\" width=\"24\" height=\"24\"></a></div>
                        <div class=\"server-info\" style=\"padding:0;\"><center><div style=\"font-weight:Bold; background-color:#373737; color:#f8b332;\">Accéder à RAMSES :</div> </center><a href=\"http://www.reseau-ramses.org/\" target=\"_blank\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/logo_ramses.png"), "html", null, true);
        echo "\" width=\"219\" height=\"69\"></a></div>
\t\t</div>
\t</header>
\t<!-- End server status -->
\t
\t
\t<nav id=\"main-nav\">
\t\t<ul class=\"container_12\">
                        ";
        // line 21
        $context["CurrentMenu"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "CurrentMenu"), "method");
        // line 22
        echo "                        ";
        $context["index"] = "";
        // line 23
        echo "                        ";
        $context["EspacePersonnel"] = "";
        // line 24
        echo "                        ";
        $context["Ressources"] = "";
        // line 25
        echo "                        ";
        $context["TutorielsEnLigne"] = "";
        // line 26
        echo "                        ";
        $context["Annuaire"] = "";
        // line 27
        echo "                        ";
        $context["Forum"] = "";
        // line 28
        echo "                        ";
        $context["Actualites"] = "";
        // line 29
        echo "                        
                        ";
        // line 30
        if (((isset($context["CurrentMenu"]) ? $context["CurrentMenu"] : $this->getContext($context, "CurrentMenu")) == "index")) {
            // line 31
            echo "                            ";
            $context["index"] = "current";
            // line 32
            echo "                        ";
        } elseif (((isset($context["CurrentMenu"]) ? $context["CurrentMenu"] : $this->getContext($context, "CurrentMenu")) == "EspacePersonnel")) {
            // line 33
            echo "                            ";
            $context["EspacePersonnel"] = "current";
            // line 34
            echo "                        ";
        } elseif (((isset($context["CurrentMenu"]) ? $context["CurrentMenu"] : $this->getContext($context, "CurrentMenu")) == "Ressources")) {
            // line 35
            echo "                            ";
            $context["Ressources"] = "current";
            // line 36
            echo "                        ";
        } elseif (((isset($context["CurrentMenu"]) ? $context["CurrentMenu"] : $this->getContext($context, "CurrentMenu")) == "TutorielsEnLigne")) {
            // line 37
            echo "                            ";
            $context["TutorielsEnLigne"] = "current";
            // line 38
            echo "                        ";
        } elseif (((isset($context["CurrentMenu"]) ? $context["CurrentMenu"] : $this->getContext($context, "CurrentMenu")) == "Annuaire")) {
            // line 39
            echo "                            ";
            $context["Annuaire"] = "current";
            // line 40
            echo "                        ";
        } elseif (((isset($context["CurrentMenu"]) ? $context["CurrentMenu"] : $this->getContext($context, "CurrentMenu")) == "Forum")) {
            // line 41
            echo "                            ";
            $context["Forum"] = "current";
            // line 42
            echo "                        ";
        } elseif (((isset($context["CurrentMenu"]) ? $context["CurrentMenu"] : $this->getContext($context, "CurrentMenu")) == "Actualites")) {
            // line 43
            echo "                            ";
            $context["Actualites"] = "current";
            // line 44
            echo "                        
                        ";
        }
        // line 46
        echo "\t\t\t<li class=\"accueil ";
        echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("eieinstitut_homepage");
        echo "\" title=\"\">Accueil</a></li>
                        ";
        // line 47
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 48
            echo "\t\t\t<li class=\"users ";
            echo twig_escape_filter($this->env, (isset($context["EspacePersonnel"]) ? $context["EspacePersonnel"] : $this->getContext($context, "EspacePersonnel")), "html", null, true);
            echo "\" title=\"Espace personnel\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("Espace_Personnel");
            echo "\" title=\"\">Espace personnel</a></li>
                        ";
        }
        // line 50
        echo "\t\t\t<li class=\"medias ";
        echo twig_escape_filter($this->env, (isset($context["Ressources"]) ? $context["Ressources"] : $this->getContext($context, "Ressources")), "html", null, true);
        echo "\" title=\"Ressources\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("Ressources");
        echo "\" title=\"\">Ressources</a>
                           <!-- <ul>
                                <li><a href=\"#\" title=\"Articles\">Ressources</a></li>
                                <li><a href=\"#\" title=\"Add article\">Ajouter Ressource</a></li>
                            </ul>-->
                        </li>
                        ";
        // line 56
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 57
            echo "\t\t\t<li class=\"settings  ";
            echo twig_escape_filter($this->env, (isset($context["TutorielsEnLigne"]) ? $context["TutorielsEnLigne"] : $this->getContext($context, "TutorielsEnLigne")), "html", null, true);
            echo "\" title=\"Tutoriels en ligne\"><a href=\"#\" title=\"\">Tutoriels en ligne</a>
                            <!--<ul>
                                <li><a href=\"#\" title=\"Articles\">TBI & Visio</a></li>
                                <li><a href=\"#\" title=\"Add article\">Tutoriels en cours</a></li>
                                <li><a href=\"#\" title=\"Add article\">Demande en cours</a></li>
                            </ul>-->
                        </li>
\t\t\t<li class=\"contacts ";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["Annuaire"]) ? $context["Annuaire"] : $this->getContext($context, "Annuaire")), "html", null, true);
            echo "\" title=\"Annuaire\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("Annuaire");
            echo "\" title=\"\">Annuaire</a></li>
                        ";
        }
        // line 66
        echo "\t\t\t<li class=\"comments ";
        echo twig_escape_filter($this->env, (isset($context["Forum"]) ? $context["Forum"] : $this->getContext($context, "Forum")), "html", null, true);
        echo "\" title=\"Forum\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("Forum");
        echo "\" title=\"\">Forum</a></li>
                        <li class=\"write ";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["Actualites"]) ? $context["Actualites"] : $this->getContext($context, "Actualites")), "html", null, true);
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("actualite");
        echo "\" title=\"Actualités\">Actualités</a></li>
\t\t</ul>
\t</nav>
\t\t
\t\t\t
\t<!-- End main nav -->
\t
\t<!-- Sub nav -->
\t<div id=\"sub-nav\"><div class=\"container_12\">
\t\t
\t\t<a href=\"#\" title=\"Aide\" class=\"nav-button\"><b>Rechercher</b></a>
\t
\t\t<form id=\"search-form\" name=\"search-form\" method=\"post\" action=\"search.html\">
\t\t\t<input type=\"text\" name=\"s\" id=\"s\" value=\"\" title=\"Search admin...\" autocomplete=\"off\">
\t\t</form>
\t
\t</div></div>
\t<!-- End sub nav -->
\t
\t<!-- Status bar -->
\t<div id=\"status-bar\">
\t\t<div class=\"container_12\">
                        ";
        // line 89
        $context["messages"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "messages"), "method");
        // line 90
        echo "\t\t\t<ul id=\"status-infos\">
                            ";
        // line 91
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 92
            echo "                                
                            <li class=\"spaced\">Bonjour  <strong>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "</strong></li>
                            ";
            // line 94
            if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_CONTRIBUTEUR"))) {
                // line 95
                echo "                            <li class=\"spaced\">
                                <a href=\"";
                // line 96
                echo $this->env->getExtension('routing')->getPath("ei_administration_homepage");
                echo "\" id=\"breadcrumb\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/application-blog.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"> <font color=\"#FFFFFF\">Administration</font></a>
\t\t\t
                            </li>
                            ";
            }
            // line 100
            echo "                           
                                
\t\t\t<li>
\t\t\t\t<a href=\"#\" class=\"button\" title=\"";
            // line 103
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))), "html", null, true);
            echo " messages\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/mail.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"> <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "msg"), "method"), "html", null, true);
            echo "</strong></a>
\t\t\t\t<div id=\"messages-list\" class=\"result-block\" style=\"display: none;\">
\t\t\t\t\t<span class=\"arrow\"><span></span></span>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"small-files-list icon-mail relative\" style=\"overflow: hidden;\">
\t\t\t\t\t\t";
            // line 108
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 109
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                // line 110
                echo $this->env->getExtension('routing')->getPath("messages_recus");
                echo "\">
\t\t\t\t\t\t\t<strong>";
                // line 111
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "dateMessage"), "H:II"), "html", null, true);
                echo "</strong>
\t\t\t\t\t\t\t";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "objet"), "html", null, true);
                echo "<br>
\t\t\t\t\t\t\t<small>De : ";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "messagesuser"), "username"), "html", null, true);
                echo "</small></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t\t<p id=\"messages-info\" class=\"result-info\"><a href=\"#\">Boîte de réception</a></p>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\" class=\"button\" title=\"2 comments\"><img src=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/balloon.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"> <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "notif"), "method"), "html", null, true);
            echo "</strong></a>
\t\t\t\t<div id=\"comments-list\" class=\"result-block\">
\t\t\t\t\t<span class=\"arrow\"><span></span></span>
\t\t\t\t\t
\t\t\t\t\t<!--<ul class=\"small-files-list icon-comment\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\"><strong>Jane</strong>: I don't think so<br>
\t\t\t\t\t\t\t<small>On <strong>Post title</strong></small></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\"><strong>Ken_54</strong>: What about using a different...<br>
\t\t\t\t\t\t\t<small>On <strong>Post title</strong></small></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</ul>-->
\t\t\t\t\t
\t\t\t\t\t<p id=\"comments-info\" class=\"result-info\"><a href=\"#\">Voir tous les notifications</a></p>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t
                        <li><a href=\"";
            // line 143
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" class=\"button red\" title=\"Déconnexion\"><span class=\"smaller\">Déconnexion</span></a></li>
                        ";
        } else {
            // line 145
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("inscription");
            echo "\"  class=\"button gray\" title=\"Inscription\"><span class=\"smaller\">Inscription</span></a></li>
                            <li><a href=\"";
            // line 146
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\"  class=\"button green\" title=\"Connexion\"><span class=\"smaller\">Connexion</span></a></li>
                         ";
        }
        // line 148
        echo "\t\t</ul>
\t\t\t
\t\t\t<ul id=\"breadcrumb\">
\t\t\t\t<li><a href=\"#\" title=\"Accueil\">Accueil</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<!-- End status bar -->
\t
\t<div id=\"header-shadow\"></div>
\t<!-- End header -->

\t
\t<!-- Always visible control bar 
\t<div id=\"control-bar\" class=\"grey-bg clearfix\"><div class=\"container_12\">
\t
\t\t<div class=\"float-left\">
\t\t\t<button type=\"button\"><img src=\"\" width=\"16\" height=\"16\"> Accueil E-INSTITUT</button>
\t\t</div>
\t\t
\t\t<div class=\"float-right\"> 
\t\t\t
\t\t</div>
\t\t\t
\t</div></div>-->";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:include:Header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 148,  338 => 146,  333 => 145,  328 => 143,  303 => 123,  281 => 112,  277 => 111,  270 => 109,  266 => 108,  231 => 93,  228 => 92,  226 => 91,  223 => 90,  194 => 67,  180 => 64,  155 => 50,  110 => 36,  81 => 26,  190 => 107,  174 => 103,  160 => 95,  152 => 93,  148 => 92,  90 => 29,  127 => 53,  114 => 46,  167 => 56,  146 => 71,  134 => 44,  263 => 130,  255 => 124,  213 => 95,  185 => 84,  153 => 67,  150 => 68,  124 => 56,  70 => 16,  683 => 508,  680 => 507,  675 => 97,  672 => 96,  667 => 88,  664 => 87,  659 => 85,  656 => 84,  651 => 11,  648 => 10,  642 => 510,  640 => 507,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 100,  237 => 95,  233 => 105,  216 => 113,  212 => 118,  206 => 115,  202 => 114,  198 => 113,  186 => 106,  184 => 102,  172 => 93,  170 => 102,  161 => 78,  181 => 84,  178 => 104,  129 => 48,  126 => 47,  113 => 37,  104 => 34,  100 => 36,  84 => 27,  20 => 1,  77 => 21,  65 => 22,  53 => 21,  58 => 13,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 116,  285 => 113,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 123,  247 => 78,  241 => 152,  229 => 122,  220 => 97,  214 => 69,  177 => 96,  169 => 57,  140 => 60,  132 => 82,  128 => 42,  107 => 35,  61 => 14,  273 => 110,  269 => 94,  254 => 103,  243 => 128,  240 => 96,  238 => 85,  235 => 94,  230 => 82,  227 => 81,  224 => 99,  221 => 89,  219 => 114,  217 => 75,  208 => 92,  204 => 72,  179 => 82,  159 => 61,  143 => 56,  135 => 53,  119 => 39,  102 => 38,  71 => 24,  67 => 21,  63 => 19,  59 => 12,  38 => 6,  94 => 28,  89 => 28,  85 => 25,  75 => 24,  68 => 21,  56 => 13,  87 => 28,  21 => 2,  26 => 6,  93 => 30,  88 => 53,  78 => 25,  46 => 23,  27 => 4,  44 => 10,  31 => 6,  28 => 5,  201 => 115,  196 => 97,  183 => 82,  171 => 61,  166 => 90,  163 => 87,  158 => 77,  156 => 94,  151 => 63,  142 => 59,  138 => 46,  136 => 56,  121 => 46,  117 => 46,  105 => 67,  91 => 35,  62 => 13,  49 => 20,  24 => 1,  25 => 4,  19 => 1,  79 => 47,  72 => 23,  69 => 22,  47 => 9,  40 => 9,  37 => 6,  22 => 2,  246 => 90,  157 => 71,  145 => 47,  139 => 45,  131 => 43,  123 => 79,  120 => 40,  115 => 53,  111 => 47,  108 => 36,  101 => 33,  98 => 32,  96 => 31,  83 => 30,  74 => 18,  66 => 20,  55 => 29,  52 => 12,  50 => 10,  43 => 5,  41 => 15,  35 => 10,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 85,  189 => 71,  187 => 66,  182 => 105,  176 => 80,  173 => 79,  168 => 74,  164 => 72,  162 => 73,  154 => 80,  149 => 54,  147 => 48,  144 => 91,  141 => 48,  133 => 55,  130 => 60,  125 => 41,  122 => 40,  116 => 38,  112 => 42,  109 => 68,  106 => 41,  103 => 37,  99 => 40,  95 => 31,  92 => 21,  86 => 56,  82 => 22,  80 => 28,  73 => 19,  64 => 35,  60 => 18,  57 => 22,  54 => 10,  51 => 9,  48 => 11,  45 => 19,  42 => 6,  39 => 16,  36 => 8,  33 => 2,  30 => 10,);
    }
}
