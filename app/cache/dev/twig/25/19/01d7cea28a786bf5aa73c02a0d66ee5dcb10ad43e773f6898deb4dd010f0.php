<?php

/* EieinstitutBundle:Pages:index.html.twig */
class __TwigTemplate_251901d7cea28a786bf5aa73c02a0d66ee5dcb10ad43e773f6898deb4dd010f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EieinstitutBundle::Master-Base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "Bienvenue ! | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "




    

     <section class=\"grid_5\">
         
         <div class=\"block-border\">
             
            
             
                       <div class=\"block-content no-title no-margin\">
                        <div class=\"camera_wrap camera_azure_skin\" id=\"camera_wrap_1\">
                            <div data-thumb=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/slides/thumbs/slide1-small.jpg"), "html", null, true);
        echo "\" data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/slides/slide1.jpg"), "html", null, true);
        echo "\">
                                <!--<div class=\"camera_caption fadeFromBottom\">
                                    Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
                                </div>-->
                            </div>
                            <div data-thumb=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/slides/thumbs/slide2-small.jpg"), "html", null, true);
        echo "\" data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/slides/slide2.jpg"), "html", null, true);
        echo "\">
                                <!--<div class=\"camera_caption fadeFromBottom\">
                                    Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
                                </div>-->
                            </div>
                            <!--<div data-thumb=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/slides/thumbs/leaf.jpg"), "html", null, true);
        echo "\" data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/slides/leaf.jpg"), "html", null, true);
        echo "\">
                                <div class=\"camera_caption fadeFromBottom\">
                                    It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em>
                                </div>
                            </div>
                            <div data-thumb=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/slides/thumbs/road.jpg"), "html", null, true);
        echo "\" data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/slides/road.jpg"), "html", null, true);
        echo "\">
                                <div class=\"camera_caption fadeFromBottom\"> <em>It's completely free</em> (even if a donation is appreciated) </div>
                            </div>
                            <div data-thumb=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/slides/thumbs/sea.jpg"), "html", null, true);
        echo "\" data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/slides/sea.jpg"), "html", null, true);
        echo "\">
                                <div class=\"camera_caption fadeFromBottom\"> 
                                    Camera slideshow provides many options <em>to customize your project</em> as more as possible
                                </div>
                            </div>-->
                            
                        </div>
                        <!-- #camera_wrap_1 -->
                        
                        
                            
                    
                        <h3>E- INSTITUT</h3><h4>Espace Numérique Académique Unifié (ENAU)</h4>
                            
                        <br>
                            
                            <p>E-institut est une initiative du réseau Ramses, le Réseau Africain pour la Mutualisation et le Soutien des pôles d'Excellence Scientifique.
                                    </p>
                             <p>Il a vocation à proposer aux établissements d'enseignement supérieur d'Afrique sub-saharienne une plateforme en ligne dédiée à l'éducation, au partage des savoirs et à la scolarité.
                            </p>
                        <!-- Tags -->
                        

                        </div>
                    </div>
                        
 </section>

                  



    <section class=\"grid_4\">
        <div class=\"block-border\">
            <div class=\"block-content no-title\">


                <h2>Ressources</h2>

                <!-- With the class no-margin -->
                <ul class=\"message no-margin\"></ul>
                <ul class=\"tabs js-tabs same-height\">
                    <li class=\"current\"><a href=\"#tab-Dernier\">Dérnier</a></li>
                    <li><a href=\"#tab-Populaire\">Populaire</a></li>
                    <li><a href=\"#tab-Recommande\">Recommandé</a></li>
                </ul>
                <div class=\"tabs-content\">
                            <div id=\"tab-Dernier\">

\t\t\t\t\t\t\t\t\t";
        // line 89
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiches"]) ? $context["fiches"] : $this->getContext($context, "fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 90
            echo "

                                <div class=\"task with-legend\">
                                    <!-- The legend -->
                                    <div class=\"legend\">

\t\t\t\t\t\t\t\t\t\t    ";
            // line 96
            if (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "document")) {
                // line 97
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "excel")) {
                // line 99
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-excel.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "video")) {
                // line 101
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-film.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "flash")) {
                // line 103
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-flash-movie.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "image")) {
                // line 105
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-image.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "audio")) {
                // line 107
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-music.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "PDF")) {
                // line 109
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-pdf.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "word")) {
                // line 111
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-word.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "ppt")) {
                // line 113
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-powerpoint.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "zip")) {
                // line 115
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-zipper.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "text")) {
                // line 117
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-text.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "database")) {
                // line 119
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/database.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 

\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 122
            echo "
\t\t\t\t\t\t\t\t\t\t    ";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type"), "html", null, true);
            echo "
                                    </div>

                                    <div class=\"task-description\">

                                        <!-- Task-list has special integration of the floating-tags class -->
                                        <ul class=\"floating-tags\">
                                            <li class=\"tag-time\">";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('time_ago_extension')->timeAgoInWordsFilter($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "dateCreation")), "html", null, true);
            echo "</li>
                                            <li class=\"tag-user\">";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "user"), "username"), "html", null, true);
            echo "</li>
                                        </ul>

                                        <h3>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "titre"), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t\t\t        ";
            // line 135
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "resume"), 0, 25) . "..."), "html", null, true);
            echo "
                                    </div>
                                    <ul class=\"mini-menu\">
                                        <li><a href=\"#\" title=\"Delete\"> + Détails<img src=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation-000-white.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"></a></li>
                                    </ul>
                                </div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "






                            </div>
                            <div id=\"tab-Populaire\">
\t\t\t\t\t\t\t\t        ";
        // line 151
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiches"]) ? $context["fiches"] : $this->getContext($context, "fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 152
            echo "

                                    <div class=\"task with-legend\">
                                        <!-- The legend -->
                                        <div class=\"legend\">

\t\t\t\t\t\t\t\t\t\t    ";
            // line 158
            if (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "document")) {
                // line 159
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "excel")) {
                // line 161
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-excel.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "video")) {
                // line 163
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-film.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "flash")) {
                // line 165
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-flash-movie.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "image")) {
                // line 167
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-image.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "audio")) {
                // line 169
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-music.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "PDF")) {
                // line 171
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-pdf.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "word")) {
                // line 173
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-word.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "ppt")) {
                // line 175
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-powerpoint.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "zip")) {
                // line 177
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-zipper.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "text")) {
                // line 179
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-text.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "database")) {
                // line 181
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/database.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 

\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 184
            echo "
\t\t\t\t\t\t\t\t\t\t    ";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type"), "html", null, true);
            echo "
                                        </div>

                                        <div class=\"task-description\">

                                            <!-- Task-list has special integration of the floating-tags class -->
                                            <ul class=\"floating-tags\">
                                                <li class=\"tag-time\">";
            // line 192
            echo twig_escape_filter($this->env, $this->env->getExtension('time_ago_extension')->timeAgoInWordsFilter($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "dateCreation")), "html", null, true);
            echo "</li>
                                                <li class=\"tag-user\">";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "user"), "username"), "html", null, true);
            echo "</li>
                                            </ul>

                                            <h3>";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "titre"), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t\t\t        ";
            // line 197
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "resume"), 0, 25) . "..."), "html", null, true);
            echo "
                                        </div>
                                        <ul class=\"mini-menu\">
                                            <li><a href=\"#\" title=\"Delete\"> + Détails<img src=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation-000-white.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"></a></li>
                                        </ul>
                                    </div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "                                </div>
                                <div id=\"tab-Recommande\">



\t\t\t\t\t\t\t\t        ";
        // line 209
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiches"]) ? $context["fiches"] : $this->getContext($context, "fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 210
            echo "

                                    <div class=\"task with-legend\">
                                        <!-- The legend -->
                                        <div class=\"legend\">

\t\t\t\t\t\t\t\t\t\t    ";
            // line 216
            if (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "document")) {
                // line 217
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "excel")) {
                // line 219
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-excel.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "video")) {
                // line 221
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-film.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "flash")) {
                // line 223
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-flash-movie.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "image")) {
                // line 225
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-image.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "audio")) {
                // line 227
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-music.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "PDF")) {
                // line 229
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-pdf.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "word")) {
                // line 231
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-word.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "ppt")) {
                // line 233
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-powerpoint.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "zip")) {
                // line 235
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-zipper.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "text")) {
                // line 237
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/document-text.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type") == "database")) {
                // line 239
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/database.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"/> 

\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 242
            echo "
\t\t\t\t\t\t\t\t\t\t    ";
            // line 243
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "type"), "html", null, true);
            echo "
                                        </div>

                                        <div class=\"task-description\">

                                            <!-- Task-list has special integration of the floating-tags class -->
                                            <ul class=\"floating-tags\">
                                                <li class=\"tag-time\">";
            // line 250
            echo twig_escape_filter($this->env, $this->env->getExtension('time_ago_extension')->timeAgoInWordsFilter($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "dateCreation")), "html", null, true);
            echo "</li>
                                                <li class=\"tag-user\">";
            // line 251
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "user"), "username"), "html", null, true);
            echo "</li>
                                            </ul>

                                            <h3>";
            // line 254
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "titre"), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t\t\t        ";
            // line 255
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "resume"), 0, 25) . "..."), "html", null, true);
            echo "
                                        </div>
                                        <ul class=\"mini-menu\">
                                            <li><a href=\"#\" title=\"Delete\"> + Détails<img src=\"";
            // line 258
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation-000-white.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"></a></li>
                                        </ul>
                                    </div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        echo "                                </div>

                            </div>


            </div>

        </div>
</section> 

<section class=\"grid_3\">
    <div class=\"block-border\">
        <div class=\"block-content no-title\">


            <h2>Evenements tutoriel en ligne</h2>

            <!-- With the class no-margin -->
            <ul class=\"message no-margin\"></ul>

            <!-- Note: for tables, a wrapping div is required -->
            <div class=\"no-margin\">
                <table cellspacing=\"0\" class=\"list-calendar\">
                    <tbody>


                        <!-- Use the class empty to change visual style -->
                                                ";
        // line 289
        $context["Number"] = 0;
        // line 290
        echo "                                                ";
        $context["year"] = twig_date_format_filter($this->env, "Now", "Y");
        // line 291
        echo "                                                ";
        $context["month"] = twig_date_format_filter($this->env, "Now", "m");
        // line 292
        echo "                                                ";
        $context["day"] = twig_date_format_filter($this->env, "Now", "d");
        // line 293
        echo "                                                ";
        $context["LastDay"] = twig_date_format_filter($this->env, "Now", "t");
        // line 294
        echo "                                                ";
        $context["CalcDay"] = 0;
        // line 295
        echo "                                                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 296
            echo "                        <tr class=\"empty\">
                                                    ";
            // line 297
            $context["CalcDay"] = (((isset($context["day"]) ? $context["day"] : $this->getContext($context, "day")) + (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))) - 1);
            // line 298
            echo "                                                        ";
            if (((isset($context["CalcDay"]) ? $context["CalcDay"] : $this->getContext($context, "CalcDay")) > (isset($context["LastDay"]) ? $context["LastDay"] : $this->getContext($context, "LastDay")))) {
                // line 299
                echo "                                                            ";
                $context["CalcDay"] = ((isset($context["CalcDay"]) ? $context["CalcDay"] : $this->getContext($context, "CalcDay")) - (isset($context["LastDay"]) ? $context["LastDay"] : $this->getContext($context, "LastDay")));
                // line 300
                echo "                                                            ";
                if (((isset($context["CalcDay"]) ? $context["CalcDay"] : $this->getContext($context, "CalcDay")) == 1)) {
                    // line 301
                    echo "                                                                ";
                    $context["month"] = ((isset($context["month"]) ? $context["month"] : $this->getContext($context, "month")) + 1);
                    // line 302
                    echo "                                                                ";
                    if (((isset($context["month"]) ? $context["month"] : $this->getContext($context, "month")) == 12)) {
                        // line 303
                        echo "                                                                    ";
                        $context["month"] = 1;
                        // line 304
                        echo "                                                                    ";
                        $context["year"] = ((isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")) + 1);
                        // line 305
                        echo "                                                                ";
                    }
                    // line 306
                    echo "                                                            ";
                }
                // line 307
                echo "                                                        ";
            }
            // line 308
            echo "

                                <th scope=\"row\">
                                                        ";
            // line 311
            if (((isset($context["CalcDay"]) ? $context["CalcDay"] : $this->getContext($context, "CalcDay")) < 10)) {
                // line 312
                echo "                                                            ";
                $context["CalcDay"] = ("0" . (isset($context["CalcDay"]) ? $context["CalcDay"] : $this->getContext($context, "CalcDay")));
                // line 313
                echo "                                                        ";
            }
            // line 314
            echo "                                                            ";
            echo twig_escape_filter($this->env, (isset($context["CalcDay"]) ? $context["CalcDay"] : $this->getContext($context, "CalcDay")), "html", null, true);
            echo "
                                    </th>
                                    <td>  

                                                         ";
            // line 318
            $context["_date"] = (((((isset($context["CalcDay"]) ? $context["CalcDay"] : $this->getContext($context, "CalcDay")) . "-") . (isset($context["month"]) ? $context["month"] : $this->getContext($context, "month"))) . "-") . (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")));
            // line 319
            echo "
                                                        ";
            // line 320
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                // line 321
                echo "                                        Aujourd'hui
                                                        ";
            } else {
                // line 323
                echo "                                                            ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["_date"]) ? $context["_date"] : $this->getContext($context, "_date")), "m-Y"), "html", null, true);
                echo "

                                                        ";
            }
            // line 326
            echo "


                                                      ";
            // line 330
            echo "                                        <!-- Full events list -->
                                        <ul class=\"events\">
                                                            ";
            // line 332
            $context["NumberByDay"] = 0;
            // line 333
            echo "                                                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Tutos"]) ? $context["Tutos"] : $this->getContext($context, "Tutos")));
            foreach ($context['_seq'] as $context["_key"] => $context["Tuto"]) {
                // line 334
                echo "
                                                                ";
                // line 335
                if ((twig_date_format_filter($this->env, (isset($context["_date"]) ? $context["_date"] : $this->getContext($context, "_date")), "Y-m-d", "Europe/Paris") == twig_date_format_filter($this->env, $this->getAttribute((isset($context["Tuto"]) ? $context["Tuto"] : $this->getContext($context, "Tuto")), "dateDebut"), "Y-m-d", "Europe/Paris"))) {
                    // line 336
                    echo "                                                                    ";
                    $context["colorClass"] = "";
                    // line 337
                    echo "                                                                    ";
                    if (($this->getAttribute($this->getAttribute((isset($context["Tuto"]) ? $context["Tuto"] : $this->getContext($context, "Tuto")), "typetutoriel"), "id") == 2)) {
                        // line 338
                        echo "                                                                        ";
                        $context["colorClass"] = "red";
                        // line 339
                        echo "                                                                    ";
                    }
                    // line 340
                    echo "                                                <li class=\"";
                    echo twig_escape_filter($this->env, (isset($context["colorClass"]) ? $context["colorClass"] : $this->getContext($context, "colorClass")), "html", null, true);
                    echo "\"><a href=\"#\"><b>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Tuto"]) ? $context["Tuto"] : $this->getContext($context, "Tuto")), "dateDebut"), "H:I", "Europe/Paris"), "html", null, true);
                    echo "</b> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Tuto"]) ? $context["Tuto"] : $this->getContext($context, "Tuto")), "titre"), "html", null, true);
                    echo " </a></li>

                                                                     ";
                    // line 342
                    $context["Number"] = ((isset($context["Number"]) ? $context["Number"] : $this->getContext($context, "Number")) + 1);
                    // line 343
                    echo "                                                                     ";
                    $context["NumberByDay"] = (isset($context["Number"]) ? $context["Number"] : $this->getContext($context, "Number"));
                    // line 344
                    echo "                                                                ";
                }
                // line 345
                echo "
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tuto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 347
            echo "
                                                            ";
            // line 348
            if (((isset($context["NumberByDay"]) ? $context["NumberByDay"] : $this->getContext($context, "NumberByDay")) == 0)) {
                echo " 
                                                <li>Aucune évenement </li>   
                                                            ";
            }
            // line 350
            echo "         
                                                            ";
            // line 351
            $context["NumberByDay"] = 0;
            // line 352
            echo "                                                </ul>

                                                <!--<div class=\"more-events\">
                                                    3 more events
                                                    <ul>
                                                        <li><a href=\"#\"><b>17:00</b> Other Event</a></li>
                                                         <li><a href=\"#\"><b>17:00</b> Other Event</a></li>
                                                          <li><a href=\"#\"><b>17:00</b> Other Event</a></li>
                                                           
                                                       
                                                    </ul>
                                                </div>-->


                                            </td>
                                        </tr>

                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 370
        echo "




                                    </tbody>
                                </table>
                            </div>
                            <!-- With the class no-margin -->
                            <ul class=\"message no-margin\">
                                <li>";
        // line 380
        echo twig_escape_filter($this->env, (isset($context["Number"]) ? $context["Number"] : $this->getContext($context, "Number")), "html", null, true);
        echo " evenements exists</li>
                            </ul>
                        </div>


                    </div>
                </div>
            </section> 



         

            <section class=\"grid_9\">
                <div class=\"block-border\">
                    <div class=\"block-content no-title\">
                        <h2>Actualités</h2>
                                     ";
        // line 397
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualites"]) ? $context["actualites"] : $this->getContext($context, "actualites")));
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 398
            echo "                        <div class=\"task with-legend\">

                            <!-- The legend -->
                            <a href=\"";
            // line 401
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail_actualite", array("actualite" => $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "id"))), "html", null, true);
            echo "\">
                                <img style=\"float: left;margin-right: 5px;\" src=\"";
            // line 402
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "urlimage")), "html", null, true);
            echo "\" width=\"100\" height=\"100\"  align=\"absmiddle\" /></a>
                            <a href=\"";
            // line 403
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail_actualite", array("actualite" => $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "id"))), "html", null, true);
            echo "\"><h2>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "titre"), "html", null, true);
            echo "</h2></a>
                                                           ";
            // line 404
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "contenu"), 0, 250) . "..."), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail_actualite", array("actualite" => $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "id"))), "html", null, true);
            echo "\">Lire la suite</a>
                            <p style=\"text-align:right;\">Publié le ";
            // line 405
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "dateactualite"), "d/m/Y"), "html", null, true);
            echo "  par ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "user"), "username"), "html", null, true);
            echo "</p>
                            <div class=\"clear\"></div>




                        </div>
                               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 413
        echo "                    </div>
            </section>\t\t







            <section class=\"grid_3\">
                <div class=\"block-border\">
                    <div class=\"block-content no-title\">
                        <h3>Réseau</h3>


                    </div>
                    
                    <div class=\"clear\"></div>
                        
                    
                    <div class=\"block-content no-title\">
                        <h3>Tags</h3>
                        <!-- Tags -->
                        <ul class=\"tags\">
                                            ";
        // line 437
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 438
            echo "                                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "libelle"), "html", null, true);
            echo "</li>

\t\t\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 441
        echo "                            </ul>

                        </div>
                    </div>
            </section>    
            <section class=\"grid_3 form\">
                <div class=\"block-border\">
                    <div class=\"block-content no-title\">
                        <h3>Newsletter</h3>
                         <p>
\t\t\t\t\t\t<label for=\"simple-calendar\">Votre adresse email :</label>
\t\t\t\t\t\t<span class=\"input-type-text margin-right relative\">
                                                    <input type=\"text\" name=\"simple-calendar\" id=\"simple-calendar\" value=\"\" class=\"datepicker hasDatepick\"><img src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/mail.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\">
\t\t\t\t\t\t</span> 
\t\t\t\t\t\t<button type=\"button\" class=\"grey\">S'inscrire</button>
\t\t\t\t\t</p>

                    </div>
                    </div>
            </section>   


                <div class=\"clear\"></div>





";
    }

    // line 471
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 472
        echo "                <!-- <script type='text/javascript' src='js/camera.slide/jquery.min.js'></script>-->
                <script type='text/javascript' src='";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/camera.slide/jquery.mobile.customized.min.js"), "html", null, true);
        echo "'></script>
                <script type='text/javascript' src='";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/camera.slide/jquery.easing.1.3.js"), "html", null, true);
        echo "'></script>
                <script type='text/javascript' src='";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/camera.slide/camera.min.js"), "html", null, true);
        echo "'></script>
                <script>
                    jQuery(function() {
                        jQuery('#camera_wrap_1').camera({
                            thumbnails: true
                        });
                    });
                    </script>
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Pages:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 335,  701 => 334,  696 => 333,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 304,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 299,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 294,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 289,  560 => 262,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 242,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 223,  456 => 221,  450 => 219,  442 => 216,  434 => 210,  403 => 196,  397 => 193,  383 => 185,  380 => 184,  373 => 181,  367 => 179,  361 => 177,  349 => 173,  331 => 167,  325 => 165,  319 => 163,  313 => 161,  307 => 159,  293 => 151,  282 => 142,  242 => 123,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 326,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 162,  276 => 161,  272 => 138,  267 => 158,  245 => 151,  225 => 136,  318 => 173,  306 => 167,  297 => 152,  292 => 168,  76 => 22,  291 => 188,  288 => 187,  261 => 166,  250 => 158,  137 => 44,  197 => 133,  286 => 165,  262 => 134,  259 => 156,  236 => 119,  195 => 87,  175 => 84,  188 => 107,  165 => 89,  287 => 187,  284 => 186,  256 => 131,  232 => 119,  191 => 108,  343 => 171,  338 => 146,  333 => 145,  328 => 143,  303 => 166,  281 => 112,  277 => 111,  270 => 172,  266 => 135,  231 => 93,  228 => 142,  226 => 117,  223 => 131,  194 => 67,  180 => 109,  155 => 97,  110 => 34,  81 => 24,  190 => 105,  174 => 103,  160 => 71,  152 => 89,  148 => 65,  90 => 37,  127 => 53,  114 => 46,  167 => 88,  146 => 47,  134 => 44,  263 => 157,  255 => 155,  213 => 95,  185 => 84,  153 => 76,  150 => 48,  124 => 56,  70 => 27,  683 => 544,  680 => 507,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 152,  237 => 95,  233 => 105,  216 => 128,  212 => 100,  206 => 126,  202 => 109,  198 => 113,  186 => 103,  184 => 103,  172 => 99,  170 => 82,  161 => 78,  181 => 71,  178 => 101,  129 => 41,  126 => 40,  113 => 48,  104 => 32,  100 => 36,  84 => 25,  20 => 1,  77 => 33,  65 => 17,  53 => 21,  58 => 13,  34 => 3,  480 => 229,  474 => 227,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 217,  440 => 148,  437 => 147,  435 => 146,  430 => 209,  427 => 143,  423 => 204,  413 => 200,  409 => 132,  407 => 197,  402 => 130,  398 => 129,  393 => 192,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 175,  341 => 105,  337 => 169,  322 => 101,  314 => 99,  312 => 170,  309 => 97,  305 => 158,  298 => 91,  294 => 162,  285 => 113,  283 => 88,  278 => 146,  268 => 85,  264 => 139,  258 => 81,  252 => 130,  247 => 78,  241 => 150,  229 => 108,  220 => 115,  214 => 113,  177 => 96,  169 => 87,  140 => 45,  132 => 42,  128 => 57,  107 => 33,  61 => 17,  273 => 110,  269 => 94,  254 => 132,  243 => 128,  240 => 96,  238 => 85,  235 => 94,  230 => 82,  227 => 81,  224 => 141,  221 => 103,  219 => 114,  217 => 128,  208 => 111,  204 => 118,  179 => 85,  159 => 61,  143 => 46,  135 => 43,  119 => 39,  102 => 53,  71 => 30,  67 => 15,  63 => 19,  59 => 12,  38 => 10,  94 => 48,  89 => 30,  85 => 35,  75 => 31,  68 => 21,  56 => 13,  87 => 34,  21 => 2,  26 => 6,  93 => 28,  88 => 35,  78 => 23,  46 => 15,  27 => 4,  44 => 6,  31 => 2,  28 => 6,  201 => 115,  196 => 107,  183 => 82,  171 => 79,  166 => 97,  163 => 86,  158 => 93,  156 => 90,  151 => 63,  142 => 72,  138 => 46,  136 => 59,  121 => 46,  117 => 46,  105 => 40,  91 => 35,  62 => 13,  49 => 20,  24 => 1,  25 => 4,  19 => 1,  79 => 32,  72 => 23,  69 => 22,  47 => 16,  40 => 6,  37 => 13,  22 => 2,  246 => 157,  157 => 71,  145 => 80,  139 => 71,  131 => 66,  123 => 39,  120 => 38,  115 => 36,  111 => 43,  108 => 36,  101 => 39,  98 => 40,  96 => 29,  83 => 33,  74 => 34,  66 => 20,  55 => 21,  52 => 10,  50 => 10,  43 => 7,  41 => 5,  35 => 10,  32 => 7,  29 => 3,  209 => 99,  203 => 78,  199 => 83,  193 => 94,  189 => 71,  187 => 110,  182 => 105,  176 => 98,  173 => 79,  168 => 92,  164 => 96,  162 => 94,  154 => 80,  149 => 81,  147 => 75,  144 => 91,  141 => 79,  133 => 78,  130 => 60,  125 => 41,  122 => 40,  116 => 38,  112 => 35,  109 => 47,  106 => 41,  103 => 37,  99 => 37,  95 => 36,  92 => 21,  86 => 43,  82 => 46,  80 => 32,  73 => 32,  64 => 26,  60 => 22,  57 => 22,  54 => 10,  51 => 9,  48 => 11,  45 => 19,  42 => 14,  39 => 11,  36 => 3,  33 => 4,  30 => 3,);
    }
}
