<?php

/* EieinstitutBundle:Ressources:listes_ressources.html.twig */
class __TwigTemplate_2d8fd078e9d82240c9e4f71dcf9d844a0af55ee06695c2eb271df5831ecec172 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "search_ressource"), "method"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["TypeArray"]) ? $context["TypeArray"] : null));
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
            $context["TestType"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => ("type" . $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"))), "method");
            // line 52
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"closed\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 53
            $context["check"] = "";
            // line 54
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (((isset($context["TestType"]) ? $context["TestType"] : null) == (isset($context["type"]) ? $context["type"] : null))) {
                // line 55
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["check"] = "checked";
                // line 56
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 57
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"type";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\"   ";
            echo twig_escape_filter($this->env, (isset($context["check"]) ? $context["check"] : null), "html", null, true);
            echo "/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"simple-checkbox-1\">";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
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
        if (((isset($context["test1"]) ? $context["test1"] : null) == 1)) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["DomaineArray"]) ? $context["DomaineArray"] : null));
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
            $context["TestDomaine"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => ("domaine" . $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"))), "method");
            // line 76
            echo "                                                <li class=\"closed\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 77
            $context["check"] = "";
            // line 78
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (((isset($context["TestDomaine"]) ? $context["TestDomaine"] : null) == (isset($context["domaine"]) ? $context["domaine"] : null))) {
                // line 79
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["check"] = "checked";
                // line 80
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 81
            echo "                                                         <input type=\"checkbox\" name=\"domaine";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\"  value=\"";
            echo twig_escape_filter($this->env, (isset($context["domaine"]) ? $context["domaine"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["check"]) ? $context["check"] : null), "html", null, true);
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                        <label for=\"simple-checkbox-1\"> ";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["domaine"]) ? $context["domaine"] : null), "html", null, true);
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
        if (((isset($context["ordre"]) ? $context["ordre"] : null) == "dateCreation")) {
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
        if (((isset($context["ordre"]) ? $context["ordre"] : null) == "domaine")) {
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
        if (((isset($context["ordre"]) ? $context["ordre"] : null) == "titre")) {
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "ordre"), "method"), "html", null, true);
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
        if (((isset($context["Fiches"]) ? $context["Fiches"] : null) == null)) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["Fiches"]) ? $context["Fiches"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["Fiche"]) {
            // line 211
            echo "                          ";
            if (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "statut") == 1)) {
                // line 212
                echo "                            <div class=\"task with-legend \">
\t\t\t\t\t\t
                                           <!-- The legend -->
                                           <div class=\"legend\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 216
                if (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "type") == "Document")) {
                    // line 217
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "type") == "Excel")) {
                    // line 219
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-excel.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "type") == "Vidéo")) {
                    // line 221
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-film.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "type") == "Flash")) {
                    // line 223
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-flash-movie.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "type") == "Image")) {
                    // line 225
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-image.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "type") == "Audio")) {
                    // line 227
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-music.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "type") == "Pdf")) {
                    // line 229
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-pdf.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "type") == "Word")) {
                    // line 231
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-word.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "type") == "PPT")) {
                    // line 233
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-powerpoint.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "type") == "Zip")) {
                    // line 235
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-zipper.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "type") == "Text")) {
                    // line 237
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-text.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "type") == "Database")) {
                    // line 239
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/database.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 242
                echo "                                               ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "type"), "html", null, true);
                echo "
                                           </div>

                                           <div class=\"task-description\">

                                                   <!-- Task-list has special integration of the floating-tags class -->

                                                   <div class=\"columns\">
                                                            <!--";
                // line 250
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "DateCreation"), "Y-m-d H:i"), "html", null, true);
                echo "-->
                                                           <ul class=\"floating-tags\">
                                                                   <li class=\"tag-time\">";
                // line 252
                echo twig_escape_filter($this->env, $this->env->getExtension('time_ago_extension')->timeAgoInWordsFilter($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "DateCreation")), "html", null, true);
                echo "</li>
                                                                   <li class=\"tag-user\">";
                // line 253
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "User"), "username"), "html", null, true);
                echo "</li>
                                                                   <li>";
                // line 254
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "theme"), "html", null, true);
                echo "</li>
                                                                   <li>";
                // line 255
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "domaine"), "html", null, true);
                echo "</li>
                                                           </ul>
                                                           <h3><a href=\"#\"> ";
                // line 257
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "titre"), "html", null, true);
                echo "</a></h3>
                                                           ";
                // line 258
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "resume"), "html", null, true);
                echo "
                                                   </div> 
                                                   <div class=\"columns\">
                                                           <ul class=\"keywords\">
                                                                  ";
                // line 262
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "fiche_tags"));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    echo "  <li><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/tag-small.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "libelle"), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail_ressource", array("fiche" => $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : null), "id"))), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["total_articles"]) ? $context["total_articles"] : null), "html", null, true);
        echo "</strong> ressources</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 276
        echo $this->env->getExtension('routing')->getPath("Ressources", array("page" => 1));
        echo "\"> <span> |< </span> </a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Ressources", array("page" => (isset($context["previous_page"]) ? $context["previous_page"] : null))), "html", null, true);
        echo "\" title=\"Précédent\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation-180.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Précédent</a></li>
\t\t\t\t\t\t\t\t  ";
        // line 278
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["last_page"]) ? $context["last_page"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 279
            echo "\t\t\t\t\t\t\t\t\t";
            if (((isset($context["page"]) ? $context["page"] : null) == (isset($context["current_page"]) ? $context["current_page"] : null))) {
                // line 280
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a  title=\"Page ";
                // line 281
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                echo "\" class=\"current\"><b>";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                echo "</b></a></li>
\t\t\t\t\t\t\t\t";
            } else {
                // line 283
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Ressources", array("page" => (isset($context["page"]) ? $context["page"] : null))), "html", null, true);
                echo "\"  title=\"Page ";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                echo "\"><b>";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Ressources", array("page" => (isset($context["next_page"]) ? $context["next_page"] : null))), "html", null, true);
        echo "\">Suivant <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Ressources", array("page" => (isset($context["last_page"]) ? $context["last_page"] : null))), "html", null, true);
        echo "\" title=\"derniére page\"> <span> >| </span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t \t\t\t</ul> <div class=\"clear\"></div> <center><div class=\"pagination_desc\" > 
\t\t\t\t\t\t\t\t ";
        // line 290
        if (((isset($context["last_page"]) ? $context["last_page"] : null) > 1)) {
            // line 291
            echo "\t\t\t\t\t\t\t\t - page <strong>";
            echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["last_page"]) ? $context["last_page"] : null), "html", null, true);
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
        return array (  661 => 307,  658 => 306,  634 => 291,  632 => 290,  627 => 288,  619 => 286,  613 => 285,  603 => 283,  596 => 281,  593 => 280,  590 => 279,  586 => 278,  580 => 277,  576 => 276,  572 => 275,  568 => 273,  562 => 272,  553 => 268,  546 => 263,  533 => 262,  526 => 258,  522 => 257,  517 => 255,  513 => 254,  509 => 253,  505 => 252,  500 => 250,  488 => 242,  481 => 239,  475 => 237,  469 => 235,  463 => 233,  457 => 231,  451 => 229,  445 => 227,  439 => 225,  433 => 223,  427 => 221,  421 => 219,  415 => 217,  413 => 216,  407 => 212,  404 => 211,  399 => 210,  390 => 203,  388 => 202,  372 => 189,  362 => 181,  358 => 179,  351 => 176,  347 => 174,  340 => 171,  336 => 169,  330 => 166,  248 => 86,  231 => 83,  221 => 81,  218 => 80,  215 => 79,  212 => 78,  210 => 77,  207 => 76,  204 => 75,  187 => 74,  182 => 71,  178 => 69,  174 => 67,  172 => 66,  167 => 63,  149 => 59,  139 => 57,  136 => 56,  133 => 55,  130 => 54,  128 => 53,  125 => 52,  122 => 51,  105 => 50,  89 => 37,  85 => 36,  61 => 14,  58 => 13,  53 => 11,  50 => 10,  45 => 7,  42 => 6,  35 => 4,  32 => 3,);
    }
}
