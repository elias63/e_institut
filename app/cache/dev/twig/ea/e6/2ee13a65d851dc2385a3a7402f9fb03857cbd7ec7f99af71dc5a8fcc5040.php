<?php

/* EiAdministrationBundle:Messaging:details_message1.html.twig */
class __TwigTemplate_eae62ee13a65d851dc2385a3a7402f9fb03857cbd7ec7f99af71dc5a8fcc5040 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EiAdministrationBundle::Master-Base-Admin.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'Slide' => array($this, 'block_Slide'),
            'content' => array($this, 'block_content'),
            'javascripts_Bottom' => array($this, 'block_javascripts_Bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EiAdministrationBundle::Master-Base-Admin.html.twig";
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
        echo "   | Messages
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
    public function block_Slide($context, array $blocks = array())
    {
        // line 14
        echo "
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "<section class=\"grid_9\">
\t\t\t<div class=\"block-border\">
\t\t\t    <div class=\"block-content\">

\t\t\t      
\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<!--<div class=\"task with-legend\">-->
\t\t\t\t\t<!--<section class=\"grid_12\">-->
\t\t\t<div class=\"block-border\"><form class=\"block-content form\" name=\"table_form\" id=\"table_form\" method=\"post\" action=\"\">
\t\t\t\t
\t\t\t\t
\t\t\t\t<div class=\"block-controls\">
\t\t\t\t\t
\t\t\t\t\t<ul class=\"controls-buttons\">
\t\t\t\t\t\t<li><a href=\"#\" title=\"Previous\"><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation-180.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Prec</a></li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li><a href=\"#\" title=\"Next\">Suiv <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/navigation.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"></a></li>
\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t
\t\t\t\t<div class=\"no-margin\"><table class=\"table\" cellspacing=\"0\" width=\"100%\">
\t\t\t\t
\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<tbody>
\t\t\t\t\t\t
                                                 
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\" class=\"table-check-cell\">A</th>
\t\t\t\t\t\t\t<td>";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["detailsmessage1"]) ? $context["detailsmessage1"] : $this->getContext($context, "detailsmessage1")), "users"));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            echo " ";
            echo twig_escape_filter($this->env, strtoupper($this->getAttribute((isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "nom")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "prenom")), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\" class=\"table-check-cell\">Objet</th>
\t\t\t\t\t\t\t<td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailsmessage1"]) ? $context["detailsmessage1"] : $this->getContext($context, "detailsmessage1")), "objet"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\" class=\"table-check-cell\">text</th>
\t\t\t\t\t\t\t<td><textarea id=\"complex-fr-subtitle\" class=\"full-width\" rows=\"10\" cols=\"7\" name=\"description\" disabled> ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailsmessage1"]) ? $context["detailsmessage1"] : $this->getContext($context, "detailsmessage1")), "message"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</textarea>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t
\t\t\t\t</table></div>
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t<div class=\"block-footer\">
\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<a href=\"#\" onclick=\"ConfirmSupression(";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailsmessage1"]) ? $context["detailsmessage1"] : $this->getContext($context, "detailsmessage1")), "id"), "html", null, true);
        echo "); return false;\"class=\"button\">Supprimer</a>
\t\t\t\t\t<span class=\"sep\"></span>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t</form></div>
\t\t<!--</section> -->
\t\t\t\t\t
\t\t\t<!--</div>-->\t\t
\t\t\t\t\t
\t\t\t    </div>
\t\t\t\t
\t\t\t</div>
 
\t\t</section>
     
                      ";
    }

    // line 107
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 108
        echo "
      <script type=\"text/javascript\">
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
        // line 123
        echo $this->env->getExtension('routing')->getPath("ei_administration_supprimer_messages");
        echo "',
                                            {param_idmessage :   id },
                                                function(message)
                                                {  
                                                    console.log(\"Supprimer\");
                                                    \$(\"body\").load(\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("ei_administration_Envoyes");
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
        return "EiAdministrationBundle:Messaging:details_message1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 460,  537 => 428,  529 => 426,  512 => 412,  508 => 411,  487 => 396,  483 => 395,  479 => 394,  422 => 343,  464 => 339,  460 => 338,  396 => 283,  391 => 281,  382 => 275,  324 => 229,  308 => 216,  316 => 224,  717 => 544,  714 => 543,  707 => 131,  699 => 91,  691 => 88,  688 => 87,  673 => 546,  671 => 543,  524 => 399,  274 => 181,  251 => 153,  375 => 169,  345 => 152,  339 => 151,  327 => 149,  321 => 176,  315 => 139,  300 => 134,  211 => 134,  378 => 232,  353 => 216,  326 => 193,  295 => 209,  279 => 177,  257 => 135,  97 => 45,  23 => 3,  271 => 204,  222 => 130,  244 => 173,  661 => 307,  658 => 306,  632 => 290,  627 => 288,  613 => 285,  596 => 281,  593 => 280,  590 => 279,  580 => 277,  576 => 276,  572 => 459,  568 => 273,  553 => 268,  546 => 263,  533 => 427,  526 => 258,  513 => 254,  500 => 250,  481 => 239,  463 => 233,  445 => 227,  439 => 225,  433 => 223,  421 => 219,  415 => 217,  399 => 210,  390 => 203,  388 => 202,  372 => 168,  358 => 179,  351 => 153,  347 => 174,  336 => 169,  330 => 166,  218 => 129,  215 => 79,  210 => 99,  275 => 139,  207 => 133,  200 => 126,  289 => 161,  265 => 113,  205 => 122,  192 => 93,  586 => 278,  562 => 272,  555 => 342,  548 => 341,  542 => 340,  532 => 338,  525 => 336,  522 => 257,  519 => 397,  515 => 396,  509 => 253,  505 => 252,  501 => 330,  497 => 328,  491 => 327,  482 => 323,  475 => 237,  455 => 313,  451 => 229,  446 => 310,  438 => 308,  429 => 305,  417 => 297,  410 => 294,  404 => 211,  392 => 288,  356 => 217,  350 => 274,  344 => 243,  342 => 271,  329 => 265,  310 => 237,  301 => 178,  357 => 225,  348 => 244,  340 => 159,  332 => 209,  260 => 174,  386 => 286,  352 => 167,  311 => 135,  304 => 215,  299 => 129,  248 => 86,  234 => 133,  118 => 62,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 130,  701 => 334,  696 => 90,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 291,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 286,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 283,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 361,  560 => 344,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 395,  520 => 243,  517 => 255,  510 => 239,  504 => 410,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 317,  456 => 221,  450 => 219,  442 => 309,  434 => 307,  403 => 196,  397 => 193,  383 => 185,  380 => 284,  373 => 181,  367 => 179,  361 => 177,  349 => 157,  331 => 167,  325 => 140,  319 => 163,  313 => 182,  307 => 236,  293 => 129,  282 => 178,  242 => 112,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 547,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 167,  276 => 161,  272 => 160,  267 => 142,  245 => 142,  225 => 136,  318 => 141,  306 => 169,  297 => 165,  292 => 168,  76 => 26,  291 => 208,  288 => 187,  261 => 162,  250 => 114,  137 => 80,  197 => 120,  286 => 175,  262 => 117,  259 => 156,  236 => 156,  195 => 124,  175 => 116,  188 => 107,  165 => 85,  287 => 187,  284 => 168,  256 => 119,  232 => 158,  191 => 108,  343 => 160,  338 => 146,  333 => 238,  328 => 230,  303 => 166,  281 => 120,  277 => 182,  270 => 172,  266 => 135,  231 => 134,  228 => 142,  226 => 131,  223 => 149,  194 => 105,  180 => 112,  155 => 95,  110 => 52,  81 => 24,  190 => 105,  174 => 109,  160 => 98,  152 => 87,  148 => 70,  90 => 40,  127 => 77,  114 => 46,  167 => 88,  146 => 47,  134 => 76,  263 => 157,  255 => 172,  213 => 135,  185 => 91,  153 => 83,  150 => 48,  124 => 64,  70 => 19,  683 => 11,  680 => 10,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 242,  484 => 353,  253 => 132,  249 => 139,  237 => 151,  233 => 155,  216 => 128,  212 => 120,  206 => 94,  202 => 99,  198 => 95,  186 => 112,  184 => 97,  172 => 113,  170 => 108,  161 => 93,  181 => 107,  178 => 110,  129 => 65,  126 => 40,  113 => 57,  104 => 48,  100 => 27,  84 => 25,  20 => 1,  77 => 29,  65 => 23,  53 => 11,  58 => 13,  34 => 3,  480 => 352,  474 => 227,  469 => 235,  461 => 155,  457 => 231,  453 => 151,  444 => 325,  440 => 324,  437 => 147,  435 => 146,  430 => 209,  427 => 345,  423 => 204,  413 => 337,  409 => 132,  407 => 212,  402 => 130,  398 => 290,  393 => 194,  387 => 283,  384 => 282,  381 => 120,  379 => 119,  374 => 282,  368 => 280,  365 => 224,  362 => 181,  360 => 226,  355 => 175,  341 => 105,  337 => 239,  322 => 101,  314 => 99,  312 => 223,  309 => 138,  305 => 158,  298 => 123,  294 => 162,  285 => 121,  283 => 125,  278 => 146,  268 => 161,  264 => 163,  258 => 115,  252 => 118,  247 => 155,  241 => 164,  229 => 137,  220 => 140,  214 => 128,  177 => 106,  169 => 86,  140 => 81,  132 => 59,  128 => 56,  107 => 33,  61 => 14,  273 => 124,  269 => 123,  254 => 154,  243 => 154,  240 => 132,  238 => 112,  235 => 108,  230 => 121,  227 => 132,  224 => 141,  221 => 147,  219 => 114,  217 => 125,  208 => 123,  204 => 97,  179 => 120,  159 => 107,  143 => 46,  135 => 79,  119 => 66,  102 => 34,  71 => 26,  67 => 18,  63 => 34,  59 => 13,  38 => 6,  94 => 38,  89 => 30,  85 => 29,  75 => 25,  68 => 17,  56 => 24,  87 => 26,  21 => 2,  26 => 2,  93 => 37,  88 => 35,  78 => 34,  46 => 7,  27 => 4,  44 => 6,  31 => 5,  28 => 4,  201 => 121,  196 => 125,  183 => 124,  171 => 106,  166 => 90,  163 => 89,  158 => 96,  156 => 97,  151 => 85,  142 => 81,  138 => 71,  136 => 87,  121 => 69,  117 => 57,  105 => 52,  91 => 35,  62 => 14,  49 => 9,  24 => 1,  25 => 5,  19 => 1,  79 => 32,  72 => 22,  69 => 34,  47 => 16,  40 => 12,  37 => 13,  22 => 1,  246 => 157,  157 => 84,  145 => 72,  139 => 80,  131 => 78,  123 => 64,  120 => 64,  115 => 65,  111 => 52,  108 => 43,  101 => 46,  98 => 39,  96 => 29,  83 => 32,  74 => 33,  66 => 16,  55 => 11,  52 => 23,  50 => 10,  43 => 6,  41 => 5,  35 => 4,  32 => 3,  29 => 6,  209 => 120,  203 => 126,  199 => 125,  193 => 106,  189 => 92,  187 => 119,  182 => 120,  176 => 111,  173 => 105,  168 => 84,  164 => 99,  162 => 83,  154 => 78,  149 => 99,  147 => 84,  144 => 82,  141 => 65,  133 => 57,  130 => 64,  125 => 64,  122 => 63,  116 => 61,  112 => 53,  109 => 53,  106 => 49,  103 => 38,  99 => 46,  95 => 42,  92 => 35,  86 => 34,  82 => 33,  80 => 27,  73 => 35,  64 => 26,  60 => 21,  57 => 20,  54 => 11,  51 => 10,  48 => 22,  45 => 7,  42 => 6,  39 => 15,  36 => 4,  33 => 3,  30 => 1,);
    }
}
