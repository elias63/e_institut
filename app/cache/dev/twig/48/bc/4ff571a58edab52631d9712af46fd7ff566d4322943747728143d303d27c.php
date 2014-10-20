<?php

/* EieinstitutBundle:Ressources:Action_fiche.html.twig */
class __TwigTemplate_48bc4ff571a58edab52631d9712af46fd7ff566d4322943747728143d303d27c extends Twig_Template
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
                <div class=\"block-border\">
                <div class=\"block-content\">
                        <h1> Filtre </h1>

                        <div class=\"block-controls\">
                                <!--<ul class=\"controls-buttons\">
                                        <li><a href=\"#\"><strong>Afficher tout</strong></a></li>
                                        <li class=\"sep\"></li>
                                        <li><a href=\"#\" title=\"Actualiser\"><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/arrow-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
                                </ul>-->
                        </div>
                    <form class=\"form\" id=\"recherche_fiche\" method=\"post\" action=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("action_fiche");
        echo "\">
                        <label for=\"simple-calendar\" id=\"titrer\">Mots Clés</label>
                        <p class=\"input-type-text\">
                            

                            <input type=\"text\" name=\"titre\" id=\"simple-search\" value=\"\" style=\"width:90%\" title=\"Filter results\">
                            <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/magnifier.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\" class=\"float-right\">

                        </p>


                        
                        <div class=\"columns\">                  
                        <span class=\"label\">Domaine</span>
                        <select name=\"Domaine\" id=\"stats-sites-0\" class=\"full-width\">
                            <option value=\"-1\">--->Choisissez<---</option>
                                <option value=\"0\">Informatique</option>
                                <option value=\"0\">Economie</option>
                        </select>
                        </div>
           

                    <div class=\"columns\">
                    <span class=\"label\">Théme</span>
                    <select name=\"theme\" id=\"stats-sites-0\" class=\"full-width\">
                        <option value=\"-1\">--->Choisissez<---</option>
                            <option value=\"0\">Développemnt</option>
                            <option value=\"0\">Réseau</option>
                    </select>
            
                    </div>
            
            
                    <div class=\"columns\">
                            <span class=\"label\">Type</span>
                            <select name=\"type\" id=\"stats-sites-0\" class=\"full-width\">
                                <option value=\"-1\">--->Choisissez<---</option>
                                    <option value=\"0\">Vidéo</option>
                                    <option value=\"0\">Document PDF</option>
                            </select>                  
                    </div>
            
                    
                                        


                                      


                        
                       
                    

                       
                   
                      <div class=\"clear\"></div>
                <div class=\"float-right\" >
                             <button type=\"submit\" class=\"grey\" >Rechercher</button>
                         </div>
 <div class=\"clear\"></div>
                </form>

                     <ul class=\"collapsible-list with-bg\">
                                <li>
                                        <b class=\"toggle\"></b>
                                        <span>Type</span>
                                        <ul>

                                                <li class=\"closed\">
                                                        <input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-1\" value=\"1\">
                                                        <label for=\"simple-checkbox-1\">Video</label>
                                                </li>
                                                <li class=\"closed\">
                                                        <input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-2\" value=\"2\">
                                                        <label for=\"simple-checkbox-2\">Support papier</label>
                                                </li>
                                                <li class=\"closed\">
                                                        <input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-3\" value=\"3\">
                                                        <label for=\"simple-checkbox-3\">Slide</label>
                                                </li>
                                                <li class=\"closed\">
                                                        <input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-4\" value=\"4\">
                                                        <label for=\"simple-checkbox-4\">Audio</label>
                                                </li>
                                                <li class=\"closed\">
                                                        <input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-5\" value=\"5\">
                                                        <label for=\"simple-checkbox-5\">Code source</label>
                                                </li>
                                        </ul>
                                </li>
                                <li class=\"closed\">
                                        <b class=\"toggle\"></b>
                                        <span>Domaine</span>
                                        <ul>
                                                <li class=\"closed\">
                                                        <input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-1\" value=\"1\">
                                                        <label for=\"simple-checkbox-1\">Informatique</label>
                                                </li>
                                                <li class=\"closed\">
                                                        <input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-2\" value=\"2\">
                                                        <label for=\"simple-checkbox-2\">Droit</label>
                                                </li>
                                                <li class=\"closed\">
                                                        <input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-3\" value=\"3\">
                                                        <label for=\"simple-checkbox-3\">Economie</label>
                                                </li>
                                        </ul>
                                </li>
                                <li class=\"closed\">
                                        <b class=\"toggle\"></b>
                                        <span>Thème</span>
                                        <ul>
                                                <li class=\"closed\">
                                                        <input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-1\" value=\"1\">
                                                        <label for=\"simple-checkbox-1\">Base de donnés</label>
                                                </li>
                                                <li class=\"closed\">
                                                        <input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-2\" value=\"2\">
                                                        <label for=\"simple-checkbox-2\">JAVA</label>
                                                </li>
                                        </ul>
                                </li>

                                <li class=\"closed\">
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

                                <ul class=\"checkable-list\">
                                                                        <li class=\"closed\"><input type=\"checkbox\" name=\"stats-display[]\" id=\"stats-display-0\" value=\"0\">&nbsp;<label for=\"stats-display-0\">Pour comprendre les bases d'un sujet</label></li>
                                                                        <li class=\"closed\"><input type=\"checkbox\" name=\"stats-display[]\" id=\"stats-display-1\" value=\"1\">&nbsp;<label for=\"stats-display-1\">Pour approfondir mes connaissances sur un sujet</label></li>
                                                                        <li class=\"closed\"><input type=\"checkbox\" name=\"stats-display[]\" id=\"stats-display-0\" value=\"0\">&nbsp;<label for=\"stats-display-0\">Pour résoudre les problèmes du domaine</label> </li>
                                                                        <li class=\"closed\"><input type=\"checkbox\" name=\"stats-display[]\" id=\"stats-display-1\" value=\"1\">&nbsp;<label for=\"stats-display-1\">Pour s'exercer</label></li>                                         
                                                        </ul>
                            </li>
                        </ul>
                         <div class=\"float-right\" >
                             <button type=\"button\" class=\"grey\" >Rechercher</button>
                         </div>

                         <div class=\"clear\"></div>
                

                </div></div>
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
                                    
 
        
        
        <div class=\"block-controls\">
             <div class=\"controls-buttons\">
                                        

                                            <!-- The class sub-hover removes the hover effect for the whole div -->
                                            <div class=\"sub-hover\">
                                                    <a href=\"#\" class=\"disabled\">Libellé</a>
                                                    <a href=\"#\">Date</a>
                                                    <a href=\"#\">Domaine</a>
                                                    <a href=\"#\">Link 2</a>
                                                    <a href=\"#\">Link 2</a>
                                            </div>
                                           
                                            
                                    </div>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"controls-buttons\">
\t\t\t\t\t\t
\t\t\t\t\t\t 
                          <li><a href=\"#\" title=\"Précédent\"><img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation-180.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Précédent</a></li>
                                        <li><a href=\"#\" title=\"Page 1\"><b>1</b></a></li>
                                        <li><a href=\"#\" title=\"Page 2\" class=\"current\"><b>2</b></a></li>
                                        <li><a href=\"#\" title=\"Page 3\"><b>3</b></a></li>
                                        <li><a href=\"#\" title=\"Page 4\"><b>4</b></a></li>
                                        <li><a href=\"#\" title=\"Page 5\"><b>5</b></a></li>
                                        <li><a href=\"#\" title=\"suivant\">Suivant <img src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
                                        <li class=\"sep\"></li>   
                        <li>
                             <label for=\"show-empty\">Trier par</label>
                        </li>  
                        <li class=\"sep\"></li>                 
\t\t\t\t\t</ul>
                                       
\t\t\t\t\t
\t\t\t\t</div>
      

                <!--fin recherche avancée-->\t
                               

                        </form>\t<input type=\"texte\"/>
                        ";
        // line 265
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Fiches"]) ? $context["Fiches"] : $this->getContext($context, "Fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["Fiche"]) {
            // line 266
            echo "                          ";
            if (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "statut") == 1)) {
                echo "  
                            <div class=\"task with-legend \">
\t\t\t\t\t\t
                                           <!-- The legend -->
                                           <div class=\"legend\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 271
                if (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "document")) {
                    // line 272
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "excel")) {
                    // line 274
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-excel.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "video")) {
                    // line 276
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-film.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "flash")) {
                    // line 278
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-flash-movie.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "image")) {
                    // line 280
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-image.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "audio")) {
                    // line 282
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-music.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "pdf")) {
                    // line 284
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-pdf.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "word")) {
                    // line 286
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-word.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "ppt")) {
                    // line 288
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-powerpoint.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "zip")) {
                    // line 290
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-zipper.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "text")) {
                    // line 292
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-text.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type") == "database")) {
                    // line 294
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/database.png"), "html", null, true);
                    echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 297
                echo "                                               ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "type"), "html", null, true);
                echo "
                                           </div>

                                           <div class=\"task-description\">

                                                   <!-- Task-list has special integration of the floating-tags class -->

                                                   <div class=\"columns\">
                                                            <!--";
                // line 305
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "DateCreation"), "Y-m-d H:i"), "html", null, true);
                echo "-->
                                                           <ul class=\"floating-tags\">
                                                                   <li class=\"tag-time\">";
                // line 307
                echo twig_escape_filter($this->env, $this->env->getExtension('time_ago_extension')->timeAgoInWordsFilter($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "DateCreation")), "html", null, true);
                echo "</li>
                                                                   <li class=\"tag-user\">";
                // line 308
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "User"), "username"), "html", null, true);
                echo "</li>
                                                                   <li>";
                // line 309
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "theme"), "html", null, true);
                echo "</li>
                                                                   <li>";
                // line 310
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "domaine"), "html", null, true);
                echo "</li>
                                                           </ul>
                                                           <h3><a href=\"#\"> ";
                // line 312
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "titre"), "html", null, true);
                echo "</a></h3>
                                                           ";
                // line 313
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "resume"), "html", null, true);
                echo "
                                                   </div> 
                                                   <div class=\"columns\">
                                                           <ul class=\"keywords\">
                                                                  ";
                // line 317
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
                // line 318
                echo "                                                                  
                                                           </ul>
                                                   </div>
                                           </div>
                                                   <ul class=\"mini-menu\" style=\"opacity: 0;\">
                                                           <li><a href=\"";
                // line 323
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail_ressource", array("fiche" => $this->getAttribute((isset($context["Fiche"]) ? $context["Fiche"] : $this->getContext($context, "Fiche")), "id"))), "html", null, true);
                echo "\" title=\"Detail\"> + Détails<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation-000-white.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"></a></li>
                                                   </ul>
                                           </div>\t
                       ";
            }
            // line 327
            echo "\t\t\t\t\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 328
        echo "                              
\t\t\t\t\t\t<ul class=\"controls-buttons\">
\t\t\t\t\t\t<li>il y'a <strong>";
        // line 330
        echo twig_escape_filter($this->env, (isset($context["total_articles"]) ? $context["total_articles"] : $this->getContext($context, "total_articles")), "html", null, true);
        echo "</strong> ressources</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 331
        echo $this->env->getExtension('routing')->getPath("Ressources", array("page" => 1));
        echo "\"> <span> |< </span> </a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Ressources", array("page" => (isset($context["previous_page"]) ? $context["previous_page"] : $this->getContext($context, "previous_page")))), "html", null, true);
        echo "\" title=\"Précédent\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation-180.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Précédent</a></li>
\t\t\t\t\t\t\t\t  ";
        // line 333
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page"))));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 334
            echo "\t\t\t\t\t\t\t\t\t";
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")))) {
                // line 335
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a  title=\"Page ";
                // line 336
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "\" class=\"current\"><b>";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "</b></a></li>
\t\t\t\t\t\t\t\t";
            } else {
                // line 338
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Ressources", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
                echo "\"  title=\"Page ";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "\"><b>";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "</b></a></li>
\t\t\t\t\t\t\t\t";
            }
            // line 340
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 341
        echo "\t\t\t\t\t\t\t\t<li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Ressources", array("page" => (isset($context["next_page"]) ? $context["next_page"] : $this->getContext($context, "next_page")))), "html", null, true);
        echo "\" title=\"suivant\">Suivant <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Ressources", array("page" => (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")))), "html", null, true);
        echo "\" title=\"derniére page\"> <span> >| </span> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t \t\t\t</ul> <div class=\"clear\"></div> <center><div class=\"pagination_desc\" > 
\t\t\t\t\t\t\t\t ";
        // line 344
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 345
            echo "\t\t\t\t\t\t\t\t - page <strong>";
            echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")), "html", null, true);
            echo "</strong> ";
        }
        echo " -</div></center>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t
\t\t\t\t\t\t
                    </div>

                </div>

        </section>
        <!--fin section lioste des publications -->\t


";
    }

    // line 360
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 361
        echo "
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Ressources:Action_fiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 360,  562 => 345,  555 => 342,  548 => 341,  542 => 340,  532 => 338,  525 => 336,  522 => 335,  519 => 334,  515 => 333,  509 => 332,  505 => 331,  501 => 330,  497 => 328,  491 => 327,  482 => 323,  475 => 318,  455 => 313,  451 => 312,  446 => 310,  438 => 308,  429 => 305,  417 => 297,  410 => 294,  404 => 292,  392 => 288,  356 => 276,  350 => 274,  344 => 272,  342 => 271,  329 => 265,  310 => 249,  301 => 243,  357 => 225,  348 => 218,  340 => 214,  332 => 209,  260 => 147,  386 => 286,  352 => 158,  311 => 135,  304 => 132,  299 => 129,  248 => 111,  234 => 106,  118 => 54,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 335,  701 => 334,  696 => 333,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 304,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 299,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 294,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 361,  560 => 344,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 242,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 317,  456 => 221,  450 => 219,  442 => 309,  434 => 307,  403 => 196,  397 => 193,  383 => 185,  380 => 284,  373 => 181,  367 => 179,  361 => 177,  349 => 157,  331 => 167,  325 => 140,  319 => 163,  313 => 161,  307 => 133,  293 => 128,  282 => 142,  242 => 123,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 326,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 124,  276 => 157,  272 => 138,  267 => 121,  245 => 151,  225 => 136,  318 => 139,  306 => 167,  297 => 152,  292 => 168,  76 => 24,  291 => 188,  288 => 187,  261 => 166,  250 => 158,  137 => 44,  197 => 80,  286 => 165,  262 => 119,  259 => 118,  236 => 132,  195 => 111,  175 => 90,  188 => 107,  165 => 78,  287 => 187,  284 => 186,  256 => 146,  232 => 119,  191 => 108,  343 => 171,  338 => 146,  333 => 266,  328 => 143,  303 => 166,  281 => 112,  277 => 111,  270 => 172,  266 => 135,  231 => 93,  228 => 142,  226 => 125,  223 => 131,  194 => 67,  180 => 93,  155 => 97,  110 => 47,  81 => 32,  190 => 76,  174 => 94,  160 => 81,  152 => 76,  148 => 87,  90 => 37,  127 => 45,  114 => 46,  167 => 88,  146 => 47,  134 => 44,  263 => 157,  255 => 155,  213 => 115,  185 => 84,  153 => 61,  150 => 60,  124 => 67,  70 => 17,  683 => 544,  680 => 507,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 152,  237 => 95,  233 => 105,  216 => 128,  212 => 100,  206 => 126,  202 => 109,  198 => 113,  186 => 103,  184 => 95,  172 => 73,  170 => 67,  161 => 78,  181 => 71,  178 => 101,  129 => 53,  126 => 67,  113 => 48,  104 => 45,  100 => 36,  84 => 26,  20 => 1,  77 => 33,  65 => 17,  53 => 11,  58 => 13,  34 => 3,  480 => 229,  474 => 227,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 217,  440 => 148,  437 => 147,  435 => 146,  430 => 209,  427 => 143,  423 => 204,  413 => 200,  409 => 132,  407 => 197,  402 => 130,  398 => 290,  393 => 194,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 282,  368 => 280,  365 => 111,  362 => 278,  360 => 226,  355 => 175,  341 => 105,  337 => 169,  322 => 101,  314 => 99,  312 => 170,  309 => 97,  305 => 158,  298 => 91,  294 => 162,  285 => 126,  283 => 125,  278 => 146,  268 => 152,  264 => 139,  258 => 81,  252 => 130,  247 => 78,  241 => 108,  229 => 108,  220 => 100,  214 => 113,  177 => 95,  169 => 72,  140 => 61,  132 => 47,  128 => 61,  107 => 34,  61 => 14,  273 => 110,  269 => 94,  254 => 132,  243 => 109,  240 => 96,  238 => 107,  235 => 94,  230 => 105,  227 => 81,  224 => 101,  221 => 103,  219 => 114,  217 => 128,  208 => 111,  204 => 118,  179 => 70,  159 => 63,  143 => 46,  135 => 55,  119 => 39,  102 => 32,  71 => 22,  67 => 16,  63 => 19,  59 => 13,  38 => 10,  94 => 48,  89 => 28,  85 => 30,  75 => 31,  68 => 21,  56 => 18,  87 => 35,  21 => 2,  26 => 6,  93 => 29,  88 => 35,  78 => 23,  46 => 7,  27 => 4,  44 => 15,  31 => 6,  28 => 5,  201 => 115,  196 => 107,  183 => 82,  171 => 79,  166 => 97,  163 => 86,  158 => 93,  156 => 62,  151 => 63,  142 => 77,  138 => 76,  136 => 48,  121 => 46,  117 => 47,  105 => 38,  91 => 35,  62 => 14,  49 => 20,  24 => 1,  25 => 4,  19 => 1,  79 => 32,  72 => 23,  69 => 20,  47 => 16,  40 => 14,  37 => 13,  22 => 2,  246 => 139,  157 => 71,  145 => 86,  139 => 71,  131 => 66,  123 => 50,  120 => 50,  115 => 36,  111 => 35,  108 => 36,  101 => 44,  98 => 34,  96 => 41,  83 => 33,  74 => 34,  66 => 20,  55 => 21,  52 => 17,  50 => 10,  43 => 6,  41 => 13,  35 => 4,  32 => 3,  29 => 3,  209 => 99,  203 => 108,  199 => 83,  193 => 101,  189 => 71,  187 => 110,  182 => 71,  176 => 69,  173 => 89,  168 => 86,  164 => 96,  162 => 77,  154 => 80,  149 => 67,  147 => 56,  144 => 58,  141 => 77,  133 => 78,  130 => 71,  125 => 41,  122 => 66,  116 => 38,  112 => 35,  109 => 47,  106 => 41,  103 => 37,  99 => 43,  95 => 37,  92 => 31,  86 => 28,  82 => 26,  80 => 25,  73 => 23,  64 => 26,  60 => 26,  57 => 22,  54 => 11,  51 => 10,  48 => 16,  45 => 7,  42 => 6,  39 => 11,  36 => 4,  33 => 3,  30 => 3,);
    }
}
