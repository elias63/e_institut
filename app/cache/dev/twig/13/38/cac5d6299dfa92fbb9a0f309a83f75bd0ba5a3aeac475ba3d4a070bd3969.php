<?php

/* EieinstitutBundle:Ressources:listes_ressources.html.twig */
class __TwigTemplate_1338cac5d6299dfa92fbb9a0f309a83f75bd0ba5a3aeac475ba3d4a070bd3969 extends Twig_Template
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
        echo "   | Ressources
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


        <div class=\"clear\"></div>



        <!--section filtre -->\t   \t

        <section class=\"grid_3\">
\t\t\t<div class=\"block-border\">
                <div class=\"block-content\">
                        <h1> Filtre </h1>

                        <div class=\"block-controls\">
                              
                        </div>
\t\t\t\t<form class=\"form\" id=\"recherche_fiche\" method=\"post\" action=\"\">
                        <label for=\"simple-calendar\" id=\"titrer\">Mots Clés </label>
                        <p class=\"input-type-text\">
                            

                            <input type=\"text\" name=\"mot_cle\" id=\"simple-search\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "search_ressource"), "method"), "html", null, true);
        echo "\" style=\"width:90%\" title=\"Filter results\">
                           <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/magnifier.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\" class=\"float-right\">

                        </p>
           
\t\t\t\t\t\t<div class=\"clear\"></div>


                    <ul class=\"collapsible-list with-bg\">
                                <li>
                                        <b class=\"toggle\"></b>
                                        <span>Type </span>
                                        <ul>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TypeArray"]) ? $context["TypeArray"] : $this->getContext($context, "TypeArray")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 51
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context["TestType"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => ("type" . $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"))), "method");
            // line 52
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"closed\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 53
            $context["check"] = "";
            // line 54
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (((isset($context["TestType"]) ? $context["TestType"] : $this->getContext($context, "TestType")) == (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))) {
                // line 55
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["check"] = "checked";
                // line 56
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 57
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"type";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "\"   ";
            echo twig_escape_filter($this->env, (isset($context["check"]) ? $context["check"] : $this->getContext($context, "check")), "html", null, true);
            echo "/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"simple-checkbox-1\">";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                                                
                                        </ul>
                                </li>
\t\t\t\t\t\t\t\t";
        // line 66
        if (((isset($context["test1"]) ? $context["test1"] : $this->getContext($context, "test1")) == 1)) {
            // line 67
            echo "                                <li>
\t\t\t\t\t\t\t\t";
        } else {
            // line 69
            echo "\t\t\t\t\t\t\t\t<li class=\"closed\">
\t\t\t\t\t\t\t\t";
        }
        // line 71
        echo "                                        <b class=\"toggle\"></b>
                                        <span>Domaine </span>
                                        <ul>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["DomaineArray"]) ? $context["DomaineArray"] : $this->getContext($context, "DomaineArray")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["domaine"]) {
            // line 75
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context["TestDomaine"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => ("domaine" . $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"))), "method");
            // line 76
            echo "                                                <li class=\"closed\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 77
            $context["check"] = "";
            // line 78
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (((isset($context["TestDomaine"]) ? $context["TestDomaine"] : $this->getContext($context, "TestDomaine")) == (isset($context["domaine"]) ? $context["domaine"] : $this->getContext($context, "domaine")))) {
                // line 79
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["check"] = "checked";
                // line 80
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 81
            echo "                                                         <input type=\"checkbox\" name=\"domaine";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\"  value=\"";
            echo twig_escape_filter($this->env, (isset($context["domaine"]) ? $context["domaine"] : $this->getContext($context, "domaine")), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["check"]) ? $context["check"] : $this->getContext($context, "check")), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                        <label for=\"simple-checkbox-1\"> ";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["domaine"]) ? $context["domaine"] : $this->getContext($context, "domaine")), "html", null, true);
            echo " </label>
                                                </li>
\t\t\t\t\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domaine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "\t\t\t\t\t\t\t\t\t\t\t\t
                                        </ul>
                                </li>

                               <!-- <li class=\"closed\">
                                <b class=\"toggle\"></b>
                                <span >Pour préparer</span>
                                    <ul>
                                                
                                                        <ul class=\"checkable-list\">
                                                                <li class=\"closed\"><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-1\" value=\"1\">&nbsp;<label for=\"simple-radio-1\"> Mes cours</label></li>
                                                                <li class=\"closed\"><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-2\" value=\"2\">&nbsp;<label for=\"simple-radio-2\"> Mes travaux dirigés</label></li>
                                                                <li class=\"closed\"><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-2\" value=\"2\">&nbsp;<label for=\"simple-radio-2\"> Mes expériences </label></li> 
                                                                <li class=\"closed\"><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-2\" value=\"2\">&nbsp;<label for=\"simple-radio-2\"> Mes exposés scientifiques</label></li>                                      
                                                        </ul>
                                    </ul>

                                        
                                </li>

                                <li class=\"closed\">
                                <b class=\"toggle\"></b>
                                <span >Pour donner des compléments documentaires à</span>
                                        <ul class=\"checkable-list\">
                                            <li class=\"closed\"><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-1\" value=\"1\">&nbsp;<label for=\"simple-radio-1\"> Mes cours</label></li>
                                            <li class=\"closed\"><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-2\" value=\"2\">&nbsp;<label for=\"simple-radio-2\"> Mes travaux dirigés</label></li>
                                            <li class=\"closed\"><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-2\" value=\"2\">&nbsp;<label for=\"simple-radio-2\"> Mes expériences </label></li> 
                                            <li class=\"closed\"><input type=\"radio\" name=\"simple-radio\" id=\"simple-radio-2\" value=\"2\">&nbsp;<label for=\"simple-radio-2\"> Mes exposés scientifiques</label></li>                                      
                                         </ul>
                                </li>

                                <li class=\"closed\">
                                <b class=\"toggle\"></b>
                                <span >Choix des base</span>

\t\t\t\t\t\t\t\t\t\t<ul class=\"checkable-list\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"closed\"><input type=\"checkbox\" name=\"stats-display[]\" id=\"stats-display-0\" value=\"0\">&nbsp;<label for=\"stats-display-0\">Pour comprendre les bases d'un sujet</label></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"closed\"><input type=\"checkbox\" name=\"stats-display[]\" id=\"stats-display-1\" value=\"1\">&nbsp;<label for=\"stats-display-1\">Pour approfondir mes connaissances sur un sujet</label></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"closed\"><input type=\"checkbox\" name=\"stats-display[]\" id=\"stats-display-0\" value=\"0\">&nbsp;<label for=\"stats-display-0\">Pour résoudre les problèmes du domaine</label> </li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"closed\"><input type=\"checkbox\" name=\"stats-display[]\" id=\"stats-display-1\" value=\"1\">&nbsp;<label for=\"stats-display-1\">Pour s'exercer</label></li>                                         
\t\t\t\t\t\t\t\t\t\t</ul>
                            </li>
                        </ul>-->
                        <div class=\"clear\"></div>
\t\t\t\t\t\t<div class=\"float-right\" >
                           <button type=\"submit\" name=\"btn_search\" class=\"grey\" >Rechercher</button>
                        </div>
\t\t\t\t\t\t 
\t\t\t\t</form>
\t\t\t\t\t\t <div class=\"clear\"></div>
                

                </div>
\t\t\t</div>
        </section>
        <!--fin section filtre -->\t

        <!--section liste des publications-->\t

        <section class=\"grid_9\">
                <div class=\"block-border\">
                    <div class=\"block-content\">


                                <div class=\"block-controls\">
                                                        <h1>Publications </h1>  <br><br>

                                </div>
                                <form class=\"form\" id=\"tab-stats\" method=\"post\" action=\"\">
                                    
 
        
        
\t\t\t\t\t\t<div class=\"block-controls\">
\t\t\t\t\t\t\t<div class=\"controls-buttons\">
                                        

                                            <!-- The class sub-hover removes the hover effect for the whole div -->
\t\t\t\t\t\t\t\t<div class=\"sub-hover\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"disabled\">Libellé</a>
\t\t\t\t\t\t\t\t\t\t";
        // line 166
        if (((isset($context["ordre"]) ? $context["ordre"] : $this->getContext($context, "ordre")) == "dateCreation")) {
            echo " 
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"trier\" id=\"simple-radio-2\" value=\"dateCreation\" onClick=\"submit();\" checked >Date</input>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 169
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"trier\" id=\"simple-radio-2\" value=\"dateCreation\" onClick=\"submit();\">Date</input>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 171
        echo "\t\t\t\t\t\t\t\t\t\t";
        if (((isset($context["ordre"]) ? $context["ordre"] : $this->getContext($context, "ordre")) == "domaine")) {
            echo " 
\t\t\t\t\t\t\t\t\t\t<input  type=\"radio\" name=\"trier\" id=\"simple-radio-1\" value=\"domaine\" onClick=\"submit();\" checked >Domaine</input>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 174
            echo "\t\t\t\t\t\t\t\t\t\t<input  type=\"radio\" name=\"trier\" id=\"simple-radio-1\" value=\"domaine\" onClick=\"submit();\">Domaine</input>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 176
        echo "\t\t\t\t\t\t\t\t\t\t";
        if (((isset($context["ordre"]) ? $context["ordre"] : $this->getContext($context, "ordre")) == "titre")) {
            echo " 
\t\t\t\t\t\t\t\t\t\t<input  type=\"radio\" name=\"trier\" id=\"simple-radio-3\" value=\"titre\" onClick=\"submit();\" checked >Titre</input>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 179
            echo "\t\t\t\t\t\t\t\t\t\t<input  type=\"radio\" name=\"trier\" id=\"simple-radio-3\" value=\"titre\" onClick=\"submit();\">Titre</input>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 181
        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>                    
\t\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"controls-buttons\">

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t <label for=\"show-empty\">Trier par [ ";
        // line 189
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "ordre"), "method"), "html", null, true);
        echo " ]</label>
\t\t\t\t\t\t\t\t\t</li>  
\t\t\t\t\t\t\t\t\t<li class=\"sep\"></li>                 
\t\t\t\t\t\t\t\t</ul>
                                       
\t\t\t\t\t
\t\t\t\t\t\t</div>
      

                <!--fin recherche avancée-->\t
                               

                        <!--</form>-->
\t\t\t\t\t ";
        // line 202
        if (((isset($context["Fiches"]) ? $context["Fiches"] : $this->getContext($context, "Fiches")) == null)) {
            // line 203
            echo "\t\t\t\t\t <div class=\"task with-legend \"><ul class=\"message error no-margin\">
\t\t\t\t\t\t<li><strong>Pas de publications trouvées pour votre recherche !</strong></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<br>
\t\t\t\t\t
\t\t\t\t\t </div>
\t\t\t\t\t ";
        }
        // line 210
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Fiches"]) ? $context["Fiches"] : $this->getContext($context, "Fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["Fiche"]) {
            // line 211
            echo "                          ";
            if (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "statut") == 1)) {
                // line 212
                echo "                            <div class=\"task with-legend \">
\t\t\t\t\t\t
                                           <!-- The legend -->
                                           <div class=\"legend\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 216
                if (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "Document")) {
                    // line 217
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "Excel")) {
                    // line 219
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-excel.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "Vidéo")) {
                    // line 221
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-film.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "Flash")) {
                    // line 223
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-flash-movie.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "Image")) {
                    // line 225
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-image.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "Audio")) {
                    // line 227
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-music.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "Pdf")) {
                    // line 229
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-pdf.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "Word")) {
                    // line 231
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-word.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "PPT")) {
                    // line 233
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-powerpoint.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "Zip")) {
                    // line 235
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-zipper.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "Text")) {
                    // line 237
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-text.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "Database")) {
                    // line 239
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/database.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 242
                echo "                                               ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type"), "html", null, true);
                echo "
                                           </div>

                                           <div class=\"task-description\">

                                                   <!-- Task-list has special integration of the floating-tags class -->

                                                   <div class=\"columns\">
                                                            <!--";
                // line 250
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "DateCreation"), "Y-m-d H:i"), "html", null, true);
                echo "-->
                                                           <ul class=\"floating-tags\">
                                                                   <li class=\"tag-time\">";
                // line 252
                echo twig_escape_filter($this->env, $this->env->getExtension('time_ago_extension')->timeAgoInWordsFilter($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "DateCreation")), "html", null, true);
                echo "</li>
                                                                   <li class=\"tag-user\">";
                // line 253
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "User"), "username"), "html", null, true);
                echo "</li>
                                                                   <li>";
                // line 254
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "theme"), "html", null, true);
                echo "</li>
                                                                   <li>";
                // line 255
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "domaine"), "html", null, true);
                echo "</li>
                                                           </ul>
                                                           <h3><a href=\"#\"> ";
                // line 257
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "titre"), "html", null, true);
                echo "</a></h3>
                                                           ";
                // line 258
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "resume"), "html", null, true);
                echo "
                                                   </div> 
                                                   <div class=\"columns\">
                                                           <ul class=\"keywords\">
                                                                  ";
                // line 262
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "fiche_tags"));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    echo "  <li><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/tag-small.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "libelle"), "html", null, true);
                    echo " </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 263
                echo "                                                                  
                                                           </ul>
                                                   </div>
                                           </div>
                                                   <ul class=\"mini-menu\" style=\"opacity: 0;\">
                                                           <li><a href=\"";
                // line 268
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail_ressource", array("fiche" => $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "id"))), "html", null, true);
                echo "\" title=\"Detail\"> + Détails<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation-000-white.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"></a></li>
                                                   </ul>
                                           </div>\t
                       ";
            }
            // line 272
            echo "\t\t\t\t\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "                              
\t\t\t\t\t\t<ul class=\"controls-buttons\">
\t\t\t\t\t\t<li>il y'a <strong>";
        // line 275
        echo twig_escape_filter($this->env, (isset($context["total_articles"]) ? $context["total_articles"] : $this->getContext($context, "total_articles")), "html", null, true);
        echo "</strong> ressources</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 276
        echo $this->env->getExtension('routing')->getPath("Ressources", array("page" => 1));
        echo "\"> <span> |< </span> </a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Ressources", array("page" => (isset($context["previous_page"]) ? $context["previous_page"] : $this->getContext($context, "previous_page")))), "html", null, true);
        echo "\" title=\"Précédent\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation-180.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Précédent</a></li>
\t\t\t\t\t\t\t\t  ";
        // line 278
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page"))));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 279
            echo "\t\t\t\t\t\t\t\t\t";
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")))) {
                // line 280
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a  title=\"Page ";
                // line 281
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "\" class=\"current\"><b>";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "</b></a></li>
\t\t\t\t\t\t\t\t";
            } else {
                // line 283
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Ressources", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
                echo "\"  title=\"Page ";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "\"><b>";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "</b></a></li>
\t\t\t\t\t\t\t\t";
            }
            // line 285
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 286
        echo "\t\t\t\t\t\t\t\t<li name=\"suiv\" value=\"1\"><a  title=\"suivant\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Ressources", array("page" => (isset($context["next_page"]) ? $context["next_page"] : $this->getContext($context, "next_page")))), "html", null, true);
        echo "\">Suivant <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Ressources", array("page" => (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")))), "html", null, true);
        echo "\" title=\"derniére page\"> <span> >| </span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t \t\t\t</ul> <div class=\"clear\"></div> <center><div class=\"pagination_desc\" > 
\t\t\t\t\t\t\t\t ";
        // line 290
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 291
            echo "\t\t\t\t\t\t\t\t - page <strong>";
            echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")), "html", null, true);
            echo "</strong> ";
        }
        echo " -</div></center>
\t\t\t\t\t</form>\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t
\t\t\t\t\t\t
                    </div>

                </div>

        </section>
        <!--fin section liste des publications -->\t


";
    }

    // line 306
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 307
        echo "<SCRIPT language=javascript>
var chaine=\"Les chiens et les chiennes, les chats et les oiseaux\";
var reg=new RegExp(\"(chien)\", \"g\");
document.write(\"Chaîne d'origine : \" + chaine + \"<BR>\");
document.write(\"Chaîne traitée : \" + chaine.replace(reg,\"<SPAN style='background-color=yellow'>\$1</SPAN></FONT>\") + \"<BR>\");
</SCRIPT>
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Ressources:listes_ressources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  661 => 307,  658 => 306,  632 => 290,  627 => 288,  613 => 285,  596 => 281,  593 => 280,  590 => 279,  580 => 277,  576 => 276,  572 => 275,  568 => 273,  553 => 268,  546 => 263,  533 => 262,  526 => 258,  513 => 254,  500 => 250,  481 => 239,  463 => 233,  445 => 227,  439 => 225,  433 => 223,  421 => 219,  415 => 217,  399 => 210,  390 => 203,  388 => 202,  372 => 189,  358 => 179,  351 => 176,  347 => 174,  336 => 169,  330 => 166,  218 => 80,  215 => 79,  210 => 77,  275 => 139,  207 => 76,  200 => 121,  289 => 125,  265 => 113,  205 => 72,  192 => 67,  586 => 278,  562 => 272,  555 => 342,  548 => 341,  542 => 340,  532 => 338,  525 => 336,  522 => 257,  519 => 334,  515 => 333,  509 => 253,  505 => 252,  501 => 330,  497 => 328,  491 => 327,  482 => 323,  475 => 237,  455 => 313,  451 => 229,  446 => 310,  438 => 308,  429 => 305,  417 => 297,  410 => 294,  404 => 211,  392 => 288,  356 => 276,  350 => 274,  344 => 272,  342 => 271,  329 => 265,  310 => 249,  301 => 243,  357 => 225,  348 => 218,  340 => 171,  332 => 209,  260 => 147,  386 => 286,  352 => 158,  311 => 135,  304 => 132,  299 => 129,  248 => 86,  234 => 130,  118 => 41,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 335,  701 => 334,  696 => 333,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 291,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 286,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 283,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 361,  560 => 344,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 255,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 317,  456 => 221,  450 => 219,  442 => 309,  434 => 307,  403 => 196,  397 => 193,  383 => 185,  380 => 284,  373 => 181,  367 => 179,  361 => 177,  349 => 157,  331 => 167,  325 => 140,  319 => 163,  313 => 161,  307 => 133,  293 => 128,  282 => 142,  242 => 123,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 326,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 124,  276 => 157,  272 => 138,  267 => 121,  245 => 151,  225 => 136,  318 => 139,  306 => 167,  297 => 152,  292 => 168,  76 => 24,  291 => 188,  288 => 187,  261 => 166,  250 => 158,  137 => 44,  197 => 80,  286 => 165,  262 => 119,  259 => 118,  236 => 132,  195 => 111,  175 => 90,  188 => 121,  165 => 106,  287 => 187,  284 => 186,  256 => 146,  232 => 160,  191 => 108,  343 => 171,  338 => 146,  333 => 266,  328 => 143,  303 => 166,  281 => 120,  277 => 111,  270 => 172,  266 => 135,  231 => 83,  228 => 142,  226 => 125,  223 => 154,  194 => 118,  180 => 93,  155 => 97,  110 => 47,  81 => 42,  190 => 76,  174 => 67,  160 => 106,  152 => 76,  148 => 87,  90 => 37,  127 => 45,  114 => 46,  167 => 63,  146 => 101,  134 => 81,  263 => 157,  255 => 155,  213 => 115,  185 => 110,  153 => 61,  150 => 102,  124 => 67,  70 => 28,  683 => 544,  680 => 507,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 242,  484 => 360,  253 => 132,  249 => 152,  237 => 95,  233 => 105,  216 => 128,  212 => 78,  206 => 126,  202 => 109,  198 => 113,  186 => 103,  184 => 95,  172 => 66,  170 => 67,  161 => 105,  181 => 71,  178 => 69,  129 => 53,  126 => 67,  113 => 48,  104 => 45,  100 => 36,  84 => 26,  20 => 1,  77 => 30,  65 => 35,  53 => 11,  58 => 13,  34 => 3,  480 => 229,  474 => 227,  469 => 235,  461 => 155,  457 => 231,  453 => 151,  444 => 217,  440 => 148,  437 => 147,  435 => 146,  430 => 209,  427 => 221,  423 => 204,  413 => 216,  409 => 132,  407 => 212,  402 => 130,  398 => 290,  393 => 194,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 282,  368 => 280,  365 => 111,  362 => 181,  360 => 226,  355 => 175,  341 => 105,  337 => 169,  322 => 101,  314 => 99,  312 => 170,  309 => 97,  305 => 158,  298 => 131,  294 => 162,  285 => 126,  283 => 125,  278 => 146,  268 => 152,  264 => 139,  258 => 135,  252 => 130,  247 => 78,  241 => 132,  229 => 108,  220 => 100,  214 => 113,  177 => 95,  169 => 107,  140 => 61,  132 => 47,  128 => 53,  107 => 34,  61 => 14,  273 => 115,  269 => 114,  254 => 132,  243 => 94,  240 => 96,  238 => 131,  235 => 94,  230 => 105,  227 => 81,  224 => 126,  221 => 81,  219 => 114,  217 => 128,  208 => 111,  204 => 75,  179 => 70,  159 => 63,  143 => 53,  135 => 50,  119 => 39,  102 => 66,  71 => 22,  67 => 15,  63 => 19,  59 => 12,  38 => 10,  94 => 48,  89 => 37,  85 => 36,  75 => 31,  68 => 21,  56 => 23,  87 => 35,  21 => 2,  26 => 6,  93 => 29,  88 => 35,  78 => 48,  46 => 6,  27 => 4,  44 => 17,  31 => 6,  28 => 5,  201 => 71,  196 => 107,  183 => 82,  171 => 79,  166 => 97,  163 => 86,  158 => 93,  156 => 54,  151 => 63,  142 => 100,  138 => 76,  136 => 56,  121 => 46,  117 => 47,  105 => 50,  91 => 35,  62 => 13,  49 => 20,  24 => 1,  25 => 4,  19 => 1,  79 => 32,  72 => 23,  69 => 36,  47 => 16,  40 => 14,  37 => 13,  22 => 2,  246 => 139,  157 => 71,  145 => 86,  139 => 57,  131 => 49,  123 => 50,  120 => 50,  115 => 36,  111 => 35,  108 => 36,  101 => 44,  98 => 65,  96 => 41,  83 => 32,  74 => 29,  66 => 20,  55 => 21,  52 => 22,  50 => 10,  43 => 5,  41 => 13,  35 => 4,  32 => 3,  29 => 3,  209 => 99,  203 => 108,  199 => 83,  193 => 101,  189 => 71,  187 => 74,  182 => 71,  176 => 111,  173 => 66,  168 => 86,  164 => 107,  162 => 77,  154 => 103,  149 => 59,  147 => 56,  144 => 58,  141 => 77,  133 => 55,  130 => 54,  125 => 52,  122 => 51,  116 => 38,  112 => 40,  109 => 67,  106 => 38,  103 => 37,  99 => 43,  95 => 37,  92 => 34,  86 => 28,  82 => 26,  80 => 25,  73 => 37,  64 => 25,  60 => 24,  57 => 22,  54 => 10,  51 => 9,  48 => 16,  45 => 7,  42 => 6,  39 => 12,  36 => 3,  33 => 2,  30 => 3,);
    }
}
