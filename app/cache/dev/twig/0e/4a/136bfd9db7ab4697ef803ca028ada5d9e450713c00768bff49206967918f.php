<?php

/* EieinstitutBundle:Portefolio:agenda.html.twig */
class __TwigTemplate_0e4a136bfd9db7ab4697ef803ca028ada5d9e450713c00768bff49206967918f extends Twig_Template
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
        echo "   | Agenda
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
      
         
    <section class=\"grid_9\">
       
\t\t\t<div class=\"block-border\"><div class=\"block-content\">
\t\t\t\t<h1>Agenda</h1>  
                                <!--
                                <div id=\"msg\">
                                    <ul class=\"message success\">
                                        <li>This is a <strong>success message</strong>, out of any box</li>
                                        <li class=\"close-bt\"></li>
                                    </ul>
                                    <ul class=\"message error\">
                                        <li>This is a <strong>success message</strong>, out of any box</li>
                                        <li class=\"close-bt\"></li>
                                    </ul>
                                    <ul class=\"message warning\">
                                        <li>This is a <strong>success message</strong>, out of any box</li>
                                        <li class=\"close-bt\"></li>
                                    </ul>
                                        <ul class=\"message info\">
                                        <li>This is a <strong>success message</strong>, out of any box</li>
                                        <li class=\"close-bt\"></li>
                                    </ul>
                               </div>
                                -->
\t\t\t\t";
        // line 43
        $context["_date"] = ((("01-" . (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois"))) . "-") . (isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")));
        // line 44
        echo "                                ";
        $context["CurrentDate"] = twig_date_format_filter($this->env, (isset($context["_date"]) ? $context["_date"] : $this->getContext($context, "_date")), "d-m-Y");
        // line 45
        echo "                                ";
        $context["c"] = 0;
        // line 46
        echo "                                ";
        $context["c2"] = 0;
        // line 47
        echo "                                ";
        $context["FirstDay"] = 0;
        // line 48
        echo "                                ";
        $context["LastDay"] = twig_date_format_filter($this->env, (isset($context["CurrentDate"]) ? $context["CurrentDate"] : $this->getContext($context, "CurrentDate")), "t");
        echo " 
                                ";
        // line 49
        $context["DayName"] = twig_date_format_filter($this->env, (isset($context["CurrentDate"]) ? $context["CurrentDate"] : $this->getContext($context, "CurrentDate")), "l");
        // line 50
        echo "                                ";
        if (((isset($context["DayName"]) ? $context["DayName"] : $this->getContext($context, "DayName")) == "Sunday")) {
            // line 51
            echo "                                    ";
            $context["FirstDay"] = 0;
            // line 52
            echo "                                ";
        } elseif (((isset($context["DayName"]) ? $context["DayName"] : $this->getContext($context, "DayName")) == "Monday")) {
            // line 53
            echo "                                    ";
            $context["FirstDay"] = 1;
            // line 54
            echo "                                ";
        } elseif (((isset($context["DayName"]) ? $context["DayName"] : $this->getContext($context, "DayName")) == "Tuesday")) {
            // line 55
            echo "                                    ";
            $context["FirstDay"] = 2;
            // line 56
            echo "                                ";
        } elseif (((isset($context["DayName"]) ? $context["DayName"] : $this->getContext($context, "DayName")) == "Wednesday")) {
            // line 57
            echo "                                    ";
            $context["FirstDay"] = 3;
            // line 58
            echo "                                ";
        } elseif (((isset($context["DayName"]) ? $context["DayName"] : $this->getContext($context, "DayName")) == "Thursday")) {
            // line 59
            echo "                                    ";
            $context["FirstDay"] = 4;
            // line 60
            echo "                                ";
        } elseif (((isset($context["DayName"]) ? $context["DayName"] : $this->getContext($context, "DayName")) == "Friday")) {
            // line 61
            echo "                                    ";
            $context["FirstDay"] = 5;
            // line 62
            echo "                                ";
        } elseif (((isset($context["DayName"]) ? $context["DayName"] : $this->getContext($context, "DayName")) == "Saturday")) {
            // line 63
            echo "                                    ";
            $context["FirstDay"] = 6;
            // line 64
            echo "                                ";
        }
        // line 65
        echo "
                                ";
        // line 66
        $context["c3"] = ((isset($context["LastDay"]) ? $context["LastDay"] : $this->getContext($context, "LastDay")) + (isset($context["FirstDay"]) ? $context["FirstDay"] : $this->getContext($context, "FirstDay")));
        // line 67
        echo "                                ";
        $context["year"] = twig_date_format_filter($this->env, (isset($context["CurrentDate"]) ? $context["CurrentDate"] : $this->getContext($context, "CurrentDate")), "Y");
        // line 68
        echo "                                ";
        $context["month"] = twig_date_format_filter($this->env, (isset($context["CurrentDate"]) ? $context["CurrentDate"] : $this->getContext($context, "CurrentDate")), "m");
        // line 69
        echo "                                ";
        $context["day"] = twig_date_format_filter($this->env, (isset($context["CurrentDate"]) ? $context["CurrentDate"] : $this->getContext($context, "CurrentDate")), "d");
        // line 70
        echo "                                
                                ";
        // line 71
        $context["day"] = twig_date_format_filter($this->env, (isset($context["CurrentDate"]) ? $context["CurrentDate"] : $this->getContext($context, "CurrentDate")), "d");
        // line 72
        echo "                                
                                
\t\t\t\t<div class=\"block-controls\">
\t\t\t\t\t<ul class=\"controls-buttons\">
\t\t\t\t\t\t<li><a href=\"#\" title=\"Previous month\"><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/"), "html", null, true);
        echo "images/icons/fugue/navigation-180.png\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t\t<li class=\"sep\"></li>
\t\t\t\t\t\t<li class=\"controls-block\"><strong>Janvier 2014  </strong></li>
\t\t\t\t\t\t<li class=\"sep\"></li>
\t\t\t\t\t\t<li><a href=\"#\" title=\"Next month\"><img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/"), "html", null, true);
        echo "images/icons/fugue/navigation.png\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"no-margin\">
\t\t\t\t\t<table cellspacing=\"0\" class=\"calendar\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"black-cell\"><span class=\"success\"></span></th>
\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"week-end\">Dimanche</th>
                                                                <th scope=\"col\">Lundi</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Mardi</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Mercredi</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Jeudi</th>
\t\t\t\t\t\t\t\t<th scope=\"col\">Vendredi</th>
\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"week-end\">Samedi</th>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
                                                    ";
        // line 100
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 101
            echo "                                                        <!-- first Day : date('l'),  
                                                             Last Day  : date('t'), date('z') 
                                                             Full Date : date('r') -->
                                                   <tr>
                                                       <th scope=\"row\">";
            // line 105
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</th>
                                                       ";
            // line 106
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 107
                echo "                                                            
                                                            ";
                // line 108
                $context["c2"] = ((isset($context["c2"]) ? $context["c2"] : $this->getContext($context, "c2")) + 1);
                // line 109
                echo "                                                           
                                                            ";
                // line 110
                if (((isset($context["c2"]) ? $context["c2"] : $this->getContext($context, "c2")) <= (isset($context["FirstDay"]) ? $context["FirstDay"] : $this->getContext($context, "FirstDay")))) {
                    // line 111
                    echo "                                                                
                                                                <td class=\"week-end other-month\">
                                                                   <span class=\"day\">* </span>
                                                                </td>
                                                                
                                                            ";
                } elseif ((((isset($context["c2"]) ? $context["c2"] : $this->getContext($context, "c2")) > (isset($context["FirstDay"]) ? $context["FirstDay"] : $this->getContext($context, "FirstDay"))) && ((isset($context["c2"]) ? $context["c2"] : $this->getContext($context, "c2")) <= (isset($context["c3"]) ? $context["c3"] : $this->getContext($context, "c3"))))) {
                    // line 117
                    echo "                                                                ";
                    $context["c"] = ((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")) + 1);
                    // line 118
                    echo "                                                                <td>
                                                                    <a href=\"#\" class=\"day\">";
                    // line 119
                    echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
                    echo " </a>
                                                                   
                                                                    <a href=\"#\" onclick=\"AddEvent( ";
                    // line 121
                    echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context["month"]) ? $context["month"] : $this->getContext($context, "month")), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "html", null, true);
                    echo "  ); return false;\" class=\"add-event\">Add</a>
                                                                    <ul class=\"events\">
                                                                        ";
                    // line 123
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["Evenements"]) ? $context["Evenements"] : $this->getContext($context, "Evenements")));
                    foreach ($context['_seq'] as $context["_key"] => $context["Event"]) {
                        // line 124
                        echo "                                                                             
                                                                            ";
                        // line 125
                        if (((((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")) == twig_date_format_filter($this->env, $this->getAttribute((isset($context["Event"]) ? $context["Event"] : $this->getContext($context, "Event")), "datedebut"), "d")) && ((isset($context["month"]) ? $context["month"] : $this->getContext($context, "month")) == twig_date_format_filter($this->env, $this->getAttribute((isset($context["Event"]) ? $context["Event"] : $this->getContext($context, "Event")), "datedebut"), "m"))) && ((isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")) == twig_date_format_filter($this->env, $this->getAttribute((isset($context["Event"]) ? $context["Event"] : $this->getContext($context, "Event")), "datedebut"), "Y")))) {
                            // line 126
                            echo "                                                                                <li><a href=\"#\"><b>";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Event"]) ? $context["Event"] : $this->getContext($context, "Event")), "datedebut"), "H:i"), "html", null, true);
                            echo "</b> ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Event"]) ? $context["Event"] : $this->getContext($context, "Event")), "titre"), "html", null, true);
                            echo "</a></li>
                                                                            ";
                        }
                        // line 128
                        echo "                                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Event'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 129
                    echo "                                                                    </ul>
                                                            </td>
                                                           ";
                } else {
                    // line 132
                    echo "                                                                ";
                    $context["c"] = 1;
                    // line 133
                    echo "                                                            
                                                                <td class=\"week-end other-month\">
\t\t\t\t\t\t\t\t\t<span class=\"day\">";
                    // line 135
                    echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "html", null, true);
                    echo " </span>
\t\t\t\t\t\t\t\t</td>
                                                           
                                                           ";
                }
                // line 139
                echo "\t\t\t\t\t\t\t\t
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "    
\t\t\t\t\t\t\t</tr> 
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                                                    
                                                 
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<ul class=\"message no-margin\">
\t\t\t\t\t<li>18 events found</li>
\t\t\t\t</ul>
\t\t\t
\t\t\t</div></div>
\t\t</section>
";
    }

    // line 157
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 158
        echo "  <script>
     //login Modal
\t\tfunction AddEvent(_day,_month,_year)
\t\t{
\t\t\t\$.modal({
\t\t\t\tcontent: _day + '-' +_month + '-' + _year +
                                         '<form class=\"form\" id=\"tab-stats\" method=\"post\" action=\"\"><div class=\"form\">'+
\t\t\t\t
                                        '<fieldset class=\"grey-bg\">'+
                                            '<legend>Informations de l\\'événement</legend>'+
                                            '<div class=\"colx4-left-double required\">'+
                                                                    '<label for=\"complex-fr-title\">Titre</label>'+
                                                                    '<span class=\"relative\">'+
                                                                    '<input type=\"text\" name=\"EventTitre\" id=\"EventTitre\" value=\"\" class=\"full-width\">'+
                                                            '<span class=\"check-ok\"></span>'+
                                                    '</span>'+
                                            '</div>'+
                                        '</fieldset>'+
\t\t\t\t\t'</form>',
\t\t\t\ttitle: 'Ajouter une événement ',
\t\t\t\tmaxWidth: 300,
\t\t\t\tbuttons: {
\t\t\t\t\t'Ajouter': function(win) { 
\t\t\t\t\t// Action login
                                        
                                        console.log(\"buttons ajouter\");
                                        
                                       
                                        
                                        var date = _day + '-' +_month + '-' + _year;
                                        
                                        \$.post(
                                            \"";
        // line 190
        echo $this->env->getExtension('routing')->getPath("Ajouter_evenement");
        echo "\",
                                                {param_date : date ,param_Titre :  \$('#EventTitre').val() },
                                                function(message)
                                                {  
                                                    \$(\"body\").load(\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Navigation_agenda", array("annee" => 2014, "mois" => 1)), "html", null, true);
        echo "\");
                                                  /* console.log(\"success : \" + message );
                                                    setTimeout(
\t\t\t\t\t\t  function() 
\t\t\t\t\t\t  {
\t\t\t\t\t\t    //do something special
\t\t\t\t\t\t    \$(\"body\").load(\"path\");
\t\t\t\t\t\t  }, 10);*/
                                                }
                                        );
                                        
                                        
                                        
                                    /*var values = \$(this).serialize();
                                       
                                    \$.ajax({
                                        url: \"\",
                                        type: \"post\",
                                        data: values,
                                        success: function(){
                                            alert(\"success\");
                                            //\$(\"#result\").html('Submitted successfully');
                                        },
                                        error:function(){
                                            alert(\"failure\");
                                            //\$(\"#result\").html('There is error while submit');
                                        }
                                    });*/
                                        
                                        
\t\t\t\t\t },
\t\t\t\t\t'Fermer': function(win) { win.closeModal(); }
\t\t\t\t}
\t\t\t});
\t\t}
       </script>
     
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Portefolio:agenda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 190,  352 => 158,  311 => 135,  304 => 132,  299 => 129,  248 => 111,  234 => 106,  118 => 49,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 335,  701 => 334,  696 => 333,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 304,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 299,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 294,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 289,  560 => 262,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 242,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 223,  456 => 221,  450 => 219,  442 => 216,  434 => 210,  403 => 196,  397 => 193,  383 => 185,  380 => 184,  373 => 181,  367 => 179,  361 => 177,  349 => 157,  331 => 167,  325 => 140,  319 => 163,  313 => 161,  307 => 133,  293 => 128,  282 => 142,  242 => 123,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 326,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 124,  276 => 123,  272 => 138,  267 => 121,  245 => 151,  225 => 136,  318 => 139,  306 => 167,  297 => 152,  292 => 168,  76 => 22,  291 => 188,  288 => 187,  261 => 166,  250 => 158,  137 => 44,  197 => 80,  286 => 165,  262 => 119,  259 => 118,  236 => 119,  195 => 111,  175 => 84,  188 => 107,  165 => 65,  287 => 187,  284 => 186,  256 => 117,  232 => 119,  191 => 108,  343 => 171,  338 => 146,  333 => 143,  328 => 143,  303 => 166,  281 => 112,  277 => 111,  270 => 172,  266 => 135,  231 => 93,  228 => 142,  226 => 117,  223 => 131,  194 => 67,  180 => 109,  155 => 97,  110 => 47,  81 => 24,  190 => 76,  174 => 94,  160 => 82,  152 => 89,  148 => 78,  90 => 37,  127 => 53,  114 => 46,  167 => 88,  146 => 47,  134 => 44,  263 => 157,  255 => 155,  213 => 95,  185 => 84,  153 => 61,  150 => 60,  124 => 67,  70 => 16,  683 => 544,  680 => 507,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 152,  237 => 95,  233 => 105,  216 => 128,  212 => 100,  206 => 126,  202 => 109,  198 => 113,  186 => 103,  184 => 72,  172 => 99,  170 => 67,  161 => 78,  181 => 71,  178 => 101,  129 => 53,  126 => 52,  113 => 48,  104 => 45,  100 => 36,  84 => 25,  20 => 1,  77 => 33,  65 => 17,  53 => 10,  58 => 13,  34 => 3,  480 => 229,  474 => 227,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 217,  440 => 148,  437 => 147,  435 => 146,  430 => 209,  427 => 143,  423 => 204,  413 => 200,  409 => 132,  407 => 197,  402 => 130,  398 => 129,  393 => 194,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 175,  341 => 105,  337 => 169,  322 => 101,  314 => 99,  312 => 170,  309 => 97,  305 => 158,  298 => 91,  294 => 162,  285 => 126,  283 => 125,  278 => 146,  268 => 85,  264 => 139,  258 => 81,  252 => 130,  247 => 78,  241 => 108,  229 => 108,  220 => 100,  214 => 113,  177 => 95,  169 => 87,  140 => 45,  132 => 54,  128 => 57,  107 => 46,  61 => 14,  273 => 110,  269 => 94,  254 => 132,  243 => 109,  240 => 96,  238 => 107,  235 => 94,  230 => 105,  227 => 81,  224 => 101,  221 => 103,  219 => 114,  217 => 128,  208 => 111,  204 => 118,  179 => 70,  159 => 63,  143 => 46,  135 => 55,  119 => 39,  102 => 53,  71 => 30,  67 => 15,  63 => 19,  59 => 12,  38 => 10,  94 => 48,  89 => 30,  85 => 35,  75 => 31,  68 => 21,  56 => 18,  87 => 34,  21 => 2,  26 => 6,  93 => 28,  88 => 35,  78 => 23,  46 => 6,  27 => 4,  44 => 15,  31 => 6,  28 => 5,  201 => 115,  196 => 107,  183 => 82,  171 => 79,  166 => 97,  163 => 86,  158 => 93,  156 => 62,  151 => 63,  142 => 77,  138 => 56,  136 => 74,  121 => 46,  117 => 46,  105 => 40,  91 => 35,  62 => 13,  49 => 20,  24 => 1,  25 => 4,  19 => 1,  79 => 32,  72 => 23,  69 => 20,  47 => 16,  40 => 14,  37 => 13,  22 => 2,  246 => 110,  157 => 71,  145 => 80,  139 => 71,  131 => 66,  123 => 51,  120 => 50,  115 => 36,  111 => 71,  108 => 36,  101 => 44,  98 => 40,  96 => 29,  83 => 33,  74 => 34,  66 => 20,  55 => 21,  52 => 17,  50 => 9,  43 => 5,  41 => 13,  35 => 3,  32 => 2,  29 => 3,  209 => 99,  203 => 116,  199 => 83,  193 => 94,  189 => 71,  187 => 110,  182 => 71,  176 => 69,  173 => 68,  168 => 66,  164 => 96,  162 => 64,  154 => 80,  149 => 81,  147 => 59,  144 => 58,  141 => 57,  133 => 78,  130 => 71,  125 => 41,  122 => 40,  116 => 38,  112 => 35,  109 => 47,  106 => 41,  103 => 37,  99 => 43,  95 => 36,  92 => 21,  86 => 49,  82 => 46,  80 => 32,  73 => 32,  64 => 26,  60 => 26,  57 => 22,  54 => 10,  51 => 9,  48 => 16,  45 => 6,  42 => 5,  39 => 11,  36 => 3,  33 => 2,  30 => 3,);
    }
}
