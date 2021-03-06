<?php

/* EieinstitutBundle:Pages/Legal:Licence.html.twig */
class __TwigTemplate_f78a0420d0fee37e875a50a94c0886765db9de812f0d58c0a1d412113c1dfab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EieinstitutBundle::Master-Base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <!--section detail-->\t                
\t\t<section class=\"grid_3\">
\t\t<div class=\"block-border\">
\t\t\t    <div class=\"block-content\">\t
\t\t\t\t<h1>Légal</h1>
\t\t\t\t\t <ul class=\"bullet-list\">
\t\t\t\t\t\t\t   \t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("AIDE_Charte");
        echo "\">Conditions d'utilisation</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("Legal_Vie_privee");
        echo "\">Vie privée</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("Legal_Licence");
        echo "\">Licences ouvertures</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("Legal_Signaler");
        echo "\">Signaler</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("Legal_Mention");
        echo "\">Mentions légales</a></li>\t\t\t\t\t\t\t\t\t
                            </ul>
\t\t\t\t</div>
\t\t</div>
                </section>
\t\t<section class=\"grid_9\">
\t\t\t<div class=\"block-border\">
\t\t\t    <div class=\"block-content\">

\t\t\t\t\t<div class=\"block-controls\">
\t\t\t\t\t\t<h1>Licence </h1>
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t<div class=\"\">
\t\t\t\t\t<div class=\"task-description\"><p style=\"font-weight:bold\">Principe Général</p>

<p>E-institut propose à ses utilisateurs deux sortes de licences pour leur contenu :</p>

<p><b>Les licences Creative Commons. </b>
Pour plus d'informations sur les options qui vous sont offertes, rendez-vous sur le site des licences Creative Commons. :</p>

<ul>
\t<li>http://creativecommons.org/licenses/</li>
\t<li>Pour choisir une licence creative commons</li>
\t<li>http://creativecommons.org/choose/?lang=fr</li>
</ul>

<p ><b>Le copyright </b>(tout droit réservé)<br />
http://fr.wikipedia.org/wiki/Droit_d%27auteur </p>

<p>Que vous choisissiez une licence creative commons ou un copyright pour vos contenus, tout ce que vous publiez sur E-institut est consultable et réutilisable gratuitement et librement sur E-institut. Cependant ces licences protègent ou restreignent l'utilisation de vos publications en dehors de E-institut sans votre accord express.</p>

<p style=\"font-weight:bold\">Utilisation interne et externe des contenus éducatifs de la communauté E-institut </p>

<p>Une fois qu'un contenu (contenu éducatif) est sur E-institut, il est libre d'utilisation et de modification pour tous ses membres. Si un membre souhaite récupérer un contenu pour l'utiliser à l'extérieur d'E-institut, sur le web ou dans le monde physique, ce contenu lui est proposé sous licence Creative Commons Attribution Non-Commerciale NoDerivs. Cette licence prévoit les dispositions principales suivantes :</p>


<p>les Contenus restent libres et gratuits où qu'ils soient reproduits <br />
    les Contenus ne sont pas exploitables commercialement par des tiers sauf avec votre accord express<br />
    les Contenus s'ils sont modifiés doivent l'être au sein de E-institut.</p>

<p>Si ce contenu est copyrighté par son auteur, toute utilisation de ce contenu à l’extérieur E-institut doit être au préalable confirmé par son auteur.</p>



<p>Il s'agit pour nous d'une question de réciprocité. Exemple: si vous donnez votre savoir à la communauté, et que quelqu'un le fait évoluer, il nous semble normal que vous-même et la communauté E-institut puissiez bénéficier de cette évolution.</p>

<p style=\"font-weight:bold\">
(idem : modèle beebac, début de réflexion pour rédiger les conditions spécifiques à E-institut et savoir comment Beebac peut affirmer que les modifications faites sur son site sont légales. Autrement dit : Beebac a-t-il demander ou fait une déclaration officielle auprès d'un organisme particulier. <br />
E-institut est-il soumis aux règles de droits français ? a priori oui)</p></div>
\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t    </div>
\t\t\t\t
\t\t\t</div>
 
\t\t</section>
\t\t<!--fin section lioste des publications -->\t
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Pages/Legal:Licence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 335,  701 => 334,  696 => 333,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 304,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 299,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 294,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 289,  560 => 262,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 242,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 223,  456 => 221,  450 => 219,  442 => 216,  434 => 210,  403 => 196,  397 => 193,  383 => 185,  380 => 184,  373 => 181,  367 => 179,  361 => 177,  349 => 173,  331 => 167,  325 => 165,  319 => 163,  313 => 161,  307 => 159,  293 => 151,  282 => 142,  242 => 123,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 326,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 162,  276 => 161,  272 => 138,  267 => 158,  245 => 151,  225 => 136,  318 => 173,  306 => 167,  297 => 152,  292 => 168,  76 => 22,  291 => 188,  288 => 187,  261 => 166,  250 => 158,  137 => 44,  197 => 133,  286 => 165,  262 => 134,  259 => 156,  236 => 119,  195 => 87,  175 => 84,  188 => 107,  165 => 89,  287 => 187,  284 => 186,  256 => 131,  232 => 119,  191 => 108,  343 => 171,  338 => 146,  333 => 145,  328 => 143,  303 => 166,  281 => 112,  277 => 111,  270 => 172,  266 => 135,  231 => 93,  228 => 142,  226 => 117,  223 => 131,  194 => 67,  180 => 109,  155 => 97,  110 => 34,  81 => 24,  190 => 105,  174 => 103,  160 => 71,  152 => 89,  148 => 65,  90 => 37,  127 => 53,  114 => 46,  167 => 88,  146 => 47,  134 => 44,  263 => 157,  255 => 155,  213 => 95,  185 => 84,  153 => 76,  150 => 48,  124 => 56,  70 => 27,  683 => 544,  680 => 507,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 152,  237 => 95,  233 => 105,  216 => 128,  212 => 100,  206 => 126,  202 => 109,  198 => 113,  186 => 103,  184 => 103,  172 => 99,  170 => 82,  161 => 78,  181 => 71,  178 => 101,  129 => 41,  126 => 40,  113 => 48,  104 => 32,  100 => 36,  84 => 25,  20 => 1,  77 => 33,  65 => 17,  53 => 21,  58 => 13,  34 => 3,  480 => 229,  474 => 227,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 217,  440 => 148,  437 => 147,  435 => 146,  430 => 209,  427 => 143,  423 => 204,  413 => 200,  409 => 132,  407 => 197,  402 => 130,  398 => 129,  393 => 192,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 175,  341 => 105,  337 => 169,  322 => 101,  314 => 99,  312 => 170,  309 => 97,  305 => 158,  298 => 91,  294 => 162,  285 => 113,  283 => 88,  278 => 146,  268 => 85,  264 => 139,  258 => 81,  252 => 130,  247 => 78,  241 => 150,  229 => 108,  220 => 115,  214 => 113,  177 => 96,  169 => 87,  140 => 45,  132 => 42,  128 => 57,  107 => 33,  61 => 17,  273 => 110,  269 => 94,  254 => 132,  243 => 128,  240 => 96,  238 => 85,  235 => 94,  230 => 82,  227 => 81,  224 => 141,  221 => 103,  219 => 114,  217 => 128,  208 => 111,  204 => 118,  179 => 85,  159 => 61,  143 => 46,  135 => 43,  119 => 39,  102 => 53,  71 => 30,  67 => 15,  63 => 19,  59 => 12,  38 => 10,  94 => 48,  89 => 30,  85 => 35,  75 => 31,  68 => 21,  56 => 16,  87 => 34,  21 => 2,  26 => 6,  93 => 28,  88 => 35,  78 => 23,  46 => 15,  27 => 4,  44 => 13,  31 => 5,  28 => 4,  201 => 115,  196 => 107,  183 => 82,  171 => 79,  166 => 97,  163 => 86,  158 => 93,  156 => 90,  151 => 63,  142 => 72,  138 => 46,  136 => 59,  121 => 46,  117 => 46,  105 => 40,  91 => 35,  62 => 13,  49 => 20,  24 => 1,  25 => 4,  19 => 1,  79 => 32,  72 => 23,  69 => 22,  47 => 16,  40 => 12,  37 => 13,  22 => 2,  246 => 157,  157 => 71,  145 => 80,  139 => 71,  131 => 66,  123 => 39,  120 => 38,  115 => 36,  111 => 43,  108 => 36,  101 => 39,  98 => 40,  96 => 29,  83 => 33,  74 => 34,  66 => 20,  55 => 21,  52 => 15,  50 => 10,  43 => 7,  41 => 5,  35 => 10,  32 => 7,  29 => 3,  209 => 99,  203 => 78,  199 => 83,  193 => 94,  189 => 71,  187 => 110,  182 => 105,  176 => 98,  173 => 79,  168 => 92,  164 => 96,  162 => 94,  154 => 80,  149 => 81,  147 => 75,  144 => 91,  141 => 79,  133 => 78,  130 => 60,  125 => 41,  122 => 40,  116 => 38,  112 => 35,  109 => 47,  106 => 41,  103 => 37,  99 => 37,  95 => 36,  92 => 21,  86 => 43,  82 => 46,  80 => 32,  73 => 32,  64 => 26,  60 => 22,  57 => 22,  54 => 10,  51 => 9,  48 => 14,  45 => 19,  42 => 14,  39 => 11,  36 => 3,  33 => 4,  30 => 3,);
    }
}
