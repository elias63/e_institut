<?php

/* EieinstitutBundle:Pages:utilisateurs.html.twig */
class __TwigTemplate_d02fd24f41b7a55057e4aacbf200ffaf7edfc030b7f69a38471153e2c7526814 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EiAdministrationBundle::Master-Base-admin.html.twig");

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
        return "EiAdministrationBundle::Master-Base-admin.html.twig";
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
        echo "   | Annuaire
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

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
<section class=\"grid_9\">
    <div class=\"block-border\">
        <div class=\"block-content\">
            <div class=\"block-controls\">
                <h1>Utilisateurs 
                     <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("new_utilisateur", array("id" => "add"));
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/plus-circle-blue.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Ajouter</a>
                 </h1> 
            </div> 
                
                
            <table class=\"table sortable no-margin\" cellspacing=\"0\" width=\"100%\">

                <thead>
                    <tr>
                        <th class=\"black-cell\">Statut</th>
                        <th scope=\"col\">
                            <span class=\"column-sort\">
                                <a href=\"#\" title=\"Sort up\" class=\"sort-up\"></a>
                                <a href=\"#\" title=\"Sort down\" class=\"sort-down\"></a>
                            </span>
                            Pseudo
                        </th>
                        <th scope=\"col\">
                            <span class=\"column-sort\">
                                <a href=\"#\" title=\"Sort up\" class=\"sort-up\"></a>
                                <a href=\"#\" title=\"Sort down\" class=\"sort-down\"></a>
                            </span>
                            Nom & prénom
                        </th>
                        <th scope=\"col\">Email</th>
                        <th scope=\"col\">
                            <span class=\"column-sort\">
                                <a href=\"#\" title=\"Sort up\" class=\"sort-up\"></a>
                                <a href=\"#\" title=\"Sort down\" class=\"sort-down\"></a>
                            </span>
                            Dérnière date de connexion
                        </th>

                        <th scope=\"col\">
                            <span class=\"column-sort\">
                                <a href=\"#\" title=\"Sort up\" class=\"sort-up\"></a>
                                <a href=\"#\" title=\"Sort down\" class=\"sort-down\"></a>
                            </span>
                            Sth
                        </th>
                        <th scope=\"col\" class=\"table-actions\">Actions</th>
                    </tr>
                </thead>

                <tbody>

                 ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Users"]) ? $context["Users"] : $this->getContext($context, "Users")));
        foreach ($context['_seq'] as $context["_key"] => $context["User"]) {
            // line 67
            echo "                
                
                    <tr>
                        <td class=\"th table-check-cell\"><input type=\"checkbox\" name=\"selected[]\" id=\"table-selected-1\" value=\"1\"></td>
                        <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "username"), "html", null, true);
            echo "</td>
                        <td></td>
                        <td></td>
                        <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('time_ago_extension')->timeAgoInWordsFilter($this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "lastlogin")), "html", null, true);
            echo "</td>
                        <td></td>
                        <td class=\"table-actions\">
                            <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_utilisateur", array("id" => $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "id"))), "html", null, true);
            echo "\" title=\"Edit\" class=\"with-tip\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/pencil.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"></a>
                            <a onclick=\"DeleteUser( ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "id"), "html", null, true);
            echo " ); return false;\"  title=\"Delete\" class=\"with-tip\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/cross-circle.png"), "html", null, true);
            echo "\" width=\"16\" height=\"16\"></a>
                        </td>
                    </tr>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['User'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                </tbody>

            </table>


        </div>\t
    </div>
</section>


";
    }

    // line 94
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 95
        echo "<script>
    
    //Delete Modal
            function DeleteUser(id)
            {
                    \$.modal({
                            content: 'Voulez-vous supprimer cet utilisateur ?'
                                              ,
                            title: 'Confirmation',
                            maxWidth: 300,
                            buttons: {
                                    'Confirmer': function(win) 
                                    { 
                                       console.log(\"Entrer \");
                                    // Action 
                                    \$.post(
                                           \"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("supprimer_utilisateur");
        echo "\",
                                               {param_id : id  },
                                               function(message)
                                               {  
                                                  console.log(\"Retourner \");
                                                  \$(\"body\").load(\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("Utilisateurs");
        echo "\");
                                                  console.log(\"success \");
                                               }
                                       );
                                    
                                    
                                     },
                                    'Annuler': function(win) { win.closeModal(); }
                            }
                    });
            }
    
    
    /*
     * Table sorting
     */

    // A small classes setup...
    \$.fn.dataTableExt.oStdClasses.sWrapper = 'no-margin last-child';
    \$.fn.dataTableExt.oStdClasses.sInfo = 'message no-margin';
    \$.fn.dataTableExt.oStdClasses.sLength = 'float-left';
    \$.fn.dataTableExt.oStdClasses.sFilter = 'float-right';
    \$.fn.dataTableExt.oStdClasses.sPaging = 'sub-hover paging_';
    \$.fn.dataTableExt.oStdClasses.sPagePrevEnabled = 'control-prev';
    \$.fn.dataTableExt.oStdClasses.sPagePrevDisabled = 'control-prev disabled';
    \$.fn.dataTableExt.oStdClasses.sPageNextEnabled = 'control-next';
    \$.fn.dataTableExt.oStdClasses.sPageNextDisabled = 'control-next disabled';
    \$.fn.dataTableExt.oStdClasses.sPageFirst = 'control-first';
    \$.fn.dataTableExt.oStdClasses.sPagePrevious = 'control-prev';
    \$.fn.dataTableExt.oStdClasses.sPageNext = 'control-next';
    \$.fn.dataTableExt.oStdClasses.sPageLast = 'control-last';

    // Apply to table
    \$('.sortable').each(function(i)
    {
        // DataTable config
        var table = \$(this),
                oTable = table.dataTable({
            /*
             * We set specific options for each columns here. Some columns contain raw data to enable correct sorting, so we convert it for display
             * @url http://www.datatables.net/usage/columns
             */
            aoColumns: [
                {bSortable: false}, // No sorting for this columns, as it only contains checkboxes
                {sType: 'string'},
                {bSortable: 'string'},
                {sType: 'string'},
                {sType: 'date'},
                {sType: 'numeric', bUseRendered: false, fnRender: function(obj) // Size is given as float for sorting, convert to format 000 x 000
                    {
                        return obj.aData[obj.iDataColumn].split('.').join(' x ');
                    }
                },
                {bSortable: false}\t// No sorting for actions column
            ],
            /*
             * Set DOM structure for table controls
             * @url http://www.datatables.net/examples/basic_init/dom.html
             */
            sDom: '<\"block-controls\"<\"controls-buttons\"p>>rti<\"block-footer clearfix\"lf>',
            /*
             * Callback to apply template setup
             */
            fnDrawCallback: function()
            {
                this.parent().applyTemplateSetup();
            },
            fnInitComplete: function()
            {
                this.parent().applyTemplateSetup();
            }
        });

        // Sorting arrows behaviour
        table.find('thead .sort-up').click(function(event)
        {
            // Stop link behaviour
            event.preventDefault();

            // Find column index
            var column = \$(this).closest('th'),
                    columnIndex = column.parent().children().index(column.get(0));

            // Send command
            oTable.fnSort([[columnIndex, 'asc']]);

            // Prevent bubbling
            return false;
        });
        table.find('thead .sort-down').click(function(event)
        {
            // Stop link behaviour
            event.preventDefault();

            // Find column index
            var column = \$(this).closest('th'),
                    columnIndex = column.parent().children().index(column.get(0));

            // Send command
            oTable.fnSort([[columnIndex, 'desc']]);

            // Prevent bubbling
            return false;
        });
    });

 
            
         </script>
    
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Pages:utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 335,  701 => 334,  696 => 333,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 304,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 299,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 294,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 289,  560 => 262,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 242,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 223,  456 => 221,  450 => 219,  442 => 216,  434 => 210,  403 => 196,  397 => 193,  383 => 185,  380 => 184,  373 => 181,  367 => 179,  361 => 177,  349 => 173,  331 => 167,  325 => 165,  319 => 163,  313 => 161,  307 => 159,  293 => 151,  282 => 142,  242 => 123,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 326,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 162,  276 => 161,  272 => 138,  267 => 158,  245 => 151,  225 => 136,  318 => 173,  306 => 167,  297 => 152,  292 => 168,  76 => 22,  291 => 188,  288 => 187,  261 => 166,  250 => 158,  137 => 44,  197 => 133,  286 => 165,  262 => 134,  259 => 156,  236 => 119,  195 => 111,  175 => 84,  188 => 107,  165 => 89,  287 => 187,  284 => 186,  256 => 131,  232 => 119,  191 => 108,  343 => 171,  338 => 146,  333 => 145,  328 => 143,  303 => 166,  281 => 112,  277 => 111,  270 => 172,  266 => 135,  231 => 93,  228 => 142,  226 => 117,  223 => 131,  194 => 67,  180 => 109,  155 => 97,  110 => 34,  81 => 24,  190 => 105,  174 => 94,  160 => 82,  152 => 89,  148 => 78,  90 => 37,  127 => 53,  114 => 46,  167 => 88,  146 => 47,  134 => 44,  263 => 157,  255 => 155,  213 => 95,  185 => 84,  153 => 76,  150 => 48,  124 => 67,  70 => 27,  683 => 544,  680 => 507,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 152,  237 => 95,  233 => 105,  216 => 128,  212 => 100,  206 => 126,  202 => 109,  198 => 113,  186 => 103,  184 => 103,  172 => 99,  170 => 82,  161 => 78,  181 => 71,  178 => 101,  129 => 41,  126 => 40,  113 => 48,  104 => 32,  100 => 36,  84 => 25,  20 => 1,  77 => 33,  65 => 17,  53 => 10,  58 => 13,  34 => 3,  480 => 229,  474 => 227,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 217,  440 => 148,  437 => 147,  435 => 146,  430 => 209,  427 => 143,  423 => 204,  413 => 200,  409 => 132,  407 => 197,  402 => 130,  398 => 129,  393 => 192,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 175,  341 => 105,  337 => 169,  322 => 101,  314 => 99,  312 => 170,  309 => 97,  305 => 158,  298 => 91,  294 => 162,  285 => 113,  283 => 88,  278 => 146,  268 => 85,  264 => 139,  258 => 81,  252 => 130,  247 => 78,  241 => 150,  229 => 108,  220 => 115,  214 => 113,  177 => 95,  169 => 87,  140 => 45,  132 => 42,  128 => 57,  107 => 33,  61 => 14,  273 => 110,  269 => 94,  254 => 132,  243 => 128,  240 => 96,  238 => 85,  235 => 94,  230 => 82,  227 => 81,  224 => 141,  221 => 103,  219 => 114,  217 => 128,  208 => 111,  204 => 118,  179 => 85,  159 => 61,  143 => 46,  135 => 43,  119 => 39,  102 => 53,  71 => 30,  67 => 15,  63 => 19,  59 => 12,  38 => 10,  94 => 48,  89 => 30,  85 => 35,  75 => 31,  68 => 21,  56 => 18,  87 => 34,  21 => 2,  26 => 6,  93 => 28,  88 => 35,  78 => 23,  46 => 15,  27 => 4,  44 => 15,  31 => 6,  28 => 5,  201 => 115,  196 => 107,  183 => 82,  171 => 79,  166 => 97,  163 => 86,  158 => 93,  156 => 90,  151 => 63,  142 => 77,  138 => 46,  136 => 74,  121 => 46,  117 => 46,  105 => 40,  91 => 35,  62 => 13,  49 => 20,  24 => 1,  25 => 4,  19 => 1,  79 => 32,  72 => 23,  69 => 20,  47 => 16,  40 => 14,  37 => 13,  22 => 2,  246 => 157,  157 => 71,  145 => 80,  139 => 71,  131 => 66,  123 => 39,  120 => 66,  115 => 36,  111 => 71,  108 => 36,  101 => 39,  98 => 40,  96 => 29,  83 => 33,  74 => 34,  66 => 20,  55 => 21,  52 => 17,  50 => 9,  43 => 7,  41 => 13,  35 => 3,  32 => 2,  29 => 3,  209 => 99,  203 => 116,  199 => 83,  193 => 94,  189 => 71,  187 => 110,  182 => 105,  176 => 98,  173 => 79,  168 => 92,  164 => 96,  162 => 94,  154 => 80,  149 => 81,  147 => 75,  144 => 91,  141 => 79,  133 => 78,  130 => 71,  125 => 41,  122 => 40,  116 => 38,  112 => 35,  109 => 47,  106 => 41,  103 => 37,  99 => 37,  95 => 36,  92 => 21,  86 => 49,  82 => 46,  80 => 32,  73 => 32,  64 => 26,  60 => 26,  57 => 22,  54 => 10,  51 => 9,  48 => 16,  45 => 6,  42 => 5,  39 => 11,  36 => 3,  33 => 4,  30 => 3,);
    }
}
