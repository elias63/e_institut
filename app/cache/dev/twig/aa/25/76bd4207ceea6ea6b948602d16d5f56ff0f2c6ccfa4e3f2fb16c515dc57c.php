<?php

/* EieinstitutBundle:Messaging:messages_recus.html.twig */
class __TwigTemplate_aa2576bd4207ceea6ea6b948602d16d5f56ff0f2c6ccfa4e3f2fb16c515dc57c extends Twig_Template
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
        echo "       Messages reçu | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
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
    <div class=\"block-border\">
\t<form class=\"block-content form\" id=\"table_form\" method=\"post\" action=\"\">
            <h1>Messages recus</h1>


            
            
            
            <div class=\"block-controls\">

                <ul class=\"controls-buttons\">
                    <li><a href=\"#\" title=\"Previous\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation-180.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Prec</a></li>
                    <li><a href=\"#\" title=\"Page 1\"><b>1</b></a></li>
                    <li><a href=\"#\" title=\"Page 2\" class=\"current\"><b>2</b></a></li>
                    <li><a href=\"#\" title=\"Page 3\"><b>3</b></a></li>
                    <li><a href=\"#\" title=\"Page 4\"><b>4</b></a></li>
                    <li><a href=\"#\" title=\"Page 5\"><b>5</b></a></li>
                    <li><a href=\"#\" title=\"Next\">Suiv <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
                    <li class=\"sep\"></li>
                    <li><a href=\"#\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/arrow-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
                </ul>

            </div>

            <div class=\"no-margin\"><table class=\"table\" cellspacing=\"0\" width=\"100%\">

                    <thead>
                        <tr>
                            <th class=\"black-cell\"><span class=\"loading\"></span></th>
                             
                            <th scope=\"col\">
                                <span class=\"column-sort\">
                                    <a href=\"#\" title=\"Sort up\" class=\"sort-up active\"></a>
                                    <a href=\"#\" title=\"Sort down\" class=\"sort-down\"></a>
                                </span>
                                De
                            </th>
                            <th scope=\"col\"  width=\"500\">Objet</th>

                            <th scope=\"col\">
                                <span class=\"column-sort\">
                                    <a href=\"#\" title=\"Sort up\" class=\"sort-up\"></a>
                                    <a href=\"#\" title=\"Sort down\" class=\"sort-down\"></a>
                                </span>
                                Date
                            </th>

                            <th scope=\"col\" class=\"table-actions\">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                          ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messagesrecus"]) ? $context["messagesrecus"] : $this->getContext($context, "messagesrecus")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 71
            echo "                                ";
            if (($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "etat") == 0)) {
                // line 72
                echo "                                 <tr>
                                     <th scope=\"row\" class=\"table-check-cell\"><input type=\"checkbox\" name=\"selected[]\" id=\"table-selected-1\" value=\"1\"></th>
                                    
                                     <td><strong> ";
                // line 75
                echo twig_escape_filter($this->env, strtoupper($this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "messagesuser"), "nom")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "messagesuser"), "prenom")), "html", null, true);
                echo "  </strong></td>
                                     <td><a href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("details_message", array("message" => $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "id"))), "html", null, true);
                echo "\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "objet"), "html", null, true);
                echo " </strong></a></td>

                                     <td><strong>";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('time_ago_extension')->timeAgoInWordsFilter($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "dateMessage")), "html", null, true);
                echo "</strong></td>

                                     <td class=\"table-actions\">
                                         <a  href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("details_message", array("message" => $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "id"))), "html", null, true);
                echo "\" title=\"D&eacutetails\" class=\"with-tip\">
                                         <img src=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/pencil.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\">
                                     </a> 
                                         <a href=\"#\" onclick=\"ConfirmSupression(";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "id"), "html", null, true);
                echo "); return false;\"title=\"Supprimer\" class=\"with-tip\">
                                            <img src=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"></a>
                                     </td>                               
                                 </tr>
                                ";
            } elseif (($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "etat") == 1)) {
                // line 89
                echo "                                  <tr>
                                     <th scope=\"row\" class=\"table-check-cell\"><input type=\"checkbox\" name=\"selected[]\" id=\"table-selected-1\" value=\"1\"></th>

                                    
                                     <td></td>
                                     <td><a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("details_message", array("message" => $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "objet"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "id"), "html", null, true);
                echo "</a></td>

                                     <td>";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('time_ago_extension')->timeAgoInWordsFilter($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "dateMessage")), "html", null, true);
                echo "</td>

                                     <td class=\"table-actions\">
                                         <a  href=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("details_message", array("message" => $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "id"))), "html", null, true);
                echo "\" title=\"D&eacutetails\" class=\"with-tip\">
                                         <img src=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/pencil.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\">
                                     </a> 
                                         <a href=\"#\" onclick=\"ConfirmSupression(";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "id"), "html", null, true);
                echo "); return false;\"title=\"Supprimer\" class=\"with-tip\">
                                            <img src=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
                echo "\" width=\"16\" height=\"16\"></a>
                                     </td>
                                 </tr>

                                 ";
            }
            // line 108
            echo "                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
                        


                    
                    </tbody>

                </table></div>

           

         

        </form></div>
</section> 



<div class=\"clear\"></div>

<!-- End content -->
";
    }

    // line 131
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 132
        echo "<script type=\"text/javascript\">
    function ConfirmSupression(id)
        {
            \$.modal({
                content: 'Voulez-vous supprimer ce message ?'
                          ,
                title: 'Confirmation',
                maxWidth: 300,
                buttons: {
                    'Confirmer': function(win) { 
                    // Action login
                   // var idmsg = id;
                        console.log(\"Message id :\", id);
                        \$.post(
                                            '";
        // line 146
        echo $this->env->getExtension('routing')->getPath("supprimer_messages");
        echo "',
                                            {param_idmessage :   id },
                                                function(message)
                                                {  
                                                    console.log(\"Supprimer\");
                                                    \$(\"body\").load(\"";
        // line 151
        echo $this->env->getExtension('routing')->getPath("Recus");
        echo "\");
                                                 
                                                }
                                        );



                     },
                    'Fermer': function(win) { win.closeModal(); }
                }
            });
        }
</script>
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Messaging:messages_recus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 151,  262 => 132,  259 => 131,  236 => 119,  195 => 87,  175 => 84,  188 => 107,  165 => 76,  287 => 187,  284 => 186,  256 => 161,  232 => 140,  191 => 108,  343 => 148,  338 => 146,  333 => 145,  328 => 143,  303 => 123,  281 => 112,  277 => 111,  270 => 109,  266 => 108,  231 => 93,  228 => 114,  226 => 91,  223 => 90,  194 => 67,  180 => 82,  155 => 50,  110 => 36,  81 => 26,  190 => 106,  174 => 103,  160 => 78,  152 => 93,  148 => 92,  90 => 29,  127 => 53,  114 => 46,  167 => 88,  146 => 71,  134 => 44,  263 => 130,  255 => 124,  213 => 95,  185 => 84,  153 => 76,  150 => 68,  124 => 56,  70 => 16,  683 => 508,  680 => 507,  675 => 97,  672 => 96,  667 => 88,  664 => 87,  659 => 85,  656 => 84,  651 => 11,  648 => 10,  642 => 510,  640 => 507,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 100,  237 => 95,  233 => 105,  216 => 128,  212 => 100,  206 => 115,  202 => 96,  198 => 113,  186 => 89,  184 => 83,  172 => 93,  170 => 82,  161 => 78,  181 => 84,  178 => 104,  129 => 48,  126 => 47,  113 => 37,  104 => 34,  100 => 36,  84 => 28,  20 => 1,  77 => 21,  65 => 22,  53 => 21,  58 => 13,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 116,  285 => 113,  283 => 88,  278 => 146,  268 => 85,  264 => 84,  258 => 81,  252 => 123,  247 => 78,  241 => 152,  229 => 108,  220 => 97,  214 => 69,  177 => 96,  169 => 87,  140 => 70,  132 => 59,  128 => 42,  107 => 35,  61 => 14,  273 => 110,  269 => 94,  254 => 103,  243 => 128,  240 => 96,  238 => 85,  235 => 94,  230 => 82,  227 => 81,  224 => 99,  221 => 103,  219 => 114,  217 => 102,  208 => 99,  204 => 72,  179 => 85,  159 => 61,  143 => 56,  135 => 70,  119 => 39,  102 => 38,  71 => 24,  67 => 15,  63 => 19,  59 => 12,  38 => 6,  94 => 35,  89 => 30,  85 => 29,  75 => 24,  68 => 21,  56 => 13,  87 => 28,  21 => 2,  26 => 6,  93 => 37,  88 => 35,  78 => 25,  46 => 6,  27 => 4,  44 => 10,  31 => 5,  28 => 4,  201 => 115,  196 => 97,  183 => 82,  171 => 79,  166 => 81,  163 => 87,  158 => 77,  156 => 72,  151 => 63,  142 => 72,  138 => 46,  136 => 56,  121 => 46,  117 => 46,  105 => 67,  91 => 35,  62 => 13,  49 => 20,  24 => 1,  25 => 4,  19 => 1,  79 => 47,  72 => 23,  69 => 22,  47 => 9,  40 => 9,  37 => 6,  22 => 2,  246 => 90,  157 => 71,  145 => 80,  139 => 71,  131 => 66,  123 => 79,  120 => 40,  115 => 53,  111 => 47,  108 => 36,  101 => 33,  98 => 36,  96 => 31,  83 => 30,  74 => 18,  66 => 20,  55 => 29,  52 => 12,  50 => 10,  43 => 5,  41 => 15,  35 => 10,  32 => 7,  29 => 3,  209 => 99,  203 => 78,  199 => 67,  193 => 94,  189 => 71,  187 => 110,  182 => 105,  176 => 80,  173 => 79,  168 => 74,  164 => 72,  162 => 73,  154 => 80,  149 => 81,  147 => 75,  144 => 91,  141 => 65,  133 => 55,  130 => 60,  125 => 41,  122 => 40,  116 => 38,  112 => 53,  109 => 68,  106 => 41,  103 => 37,  99 => 37,  95 => 31,  92 => 21,  86 => 56,  82 => 22,  80 => 24,  73 => 19,  64 => 35,  60 => 18,  57 => 22,  54 => 10,  51 => 9,  48 => 11,  45 => 19,  42 => 6,  39 => 16,  36 => 3,  33 => 2,  30 => 10,);
    }
}
