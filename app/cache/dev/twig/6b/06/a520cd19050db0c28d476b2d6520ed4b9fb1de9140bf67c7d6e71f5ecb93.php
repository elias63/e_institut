<?php

/* EieinstitutBundle:Ressources:ajouter_ressource.html.twig */
class __TwigTemplate_6b06a520cd19050db0c28d476b2d6520ed4b9fb1de9140bf67c7d6e71f5ecb93 extends Twig_Template
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
        echo "   | Ajouter une ressource
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
        echo "<section class=\"grid_9\">
\t\t\t<div class=\"block-border\">
\t\t\t    <div class=\"block-content\">

\t\t\t      
\t\t\t\t\t<div class=\"block-controls\">
\t\t\t\t\t\t\t\t<h1>Ajouter une ressource </h1>  <br><br>
\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t\t<form class=\"form\" id=\"ajouer_ressource\" method=\"post\" action=\"\">
\t\t\t\t\t\t\t<fieldset class=\"grey-bg\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<h3>Informations : </h3><br><br>
                                                        <span  class=\"label required\">
\t\t\t\t\t\t\t\t\t\t\tTitre 
\t\t\t\t\t\t\t\t\t\t</span>                                                             
\t\t\t\t\t\t\t\t<input id=\"id_titre\" class=\"full-width\" type=\"text\" name=\"titre\"></input> <br><br>
\t\t\t\t\t\t\t\t<!--<legend><a href=\"#\">Recherche avancée</legend>-->
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<span  class=\"label required\">
\t\t\t\t\t\t\t\t\t\t\tDescription
\t\t\t\t\t\t\t\t\t\t</span>
                                                                
                                                        \t<textarea id=\"id_description\" class=\"full-width\" type=\"text\" rows=\"10\" cols=\"7\" name=\"description\">textarea</textarea><br><br>

\t\t\t\t\t\t\t\t\t\t<span  class=\"label required\">
\t\t\t\t\t\t\t\t\t\t\t URL 
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input id=\"id_url\" class=\"full-width\" type=\"text\"  name=\"url\"></input> <br><br>
\t\t\t\t\t\t\t\t<div class=\"columns\">
\t\t\t\t\t\t\t<p class=\"colx2-left\">
\t\t\t\t\t\t\t\t\t<span  ><b>
\t\t\t\t\t\t\t\t\t\t\tTags</b>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input id=\"id_tags\" class=\"full-width\" type=\"text\" value=\"\" name=\"txt_tags\"> <br><br>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p class=\"colx2-right\">
\t\t\t\t\t\t\t<span  class=\"label \">
\t\t\t\t\t\t\t\t\t\t&nbsp;\t
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<button type=\"button\" name=\"add_tags_fiche\" onclick=\"addTag()\" >Ajouter</button> <br><br>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t<div class=\"block-border\">
\t\t\t    <div class=\"block-content no-title\">
\t\t\t    \t<h3>Tags</h3>
\t\t\t    
\t\t\t\t\t<ul class=\"tags\" id=\"tags\" name=\"listetags\">
\t\t\t\t\t  
\t\t\t\t\t</ul>

\t\t\t\t</div>
\t\t\t</div><br>
\t\t\t
\t\t\t
\t\t\t\t
\t\t\t\t<span  class=\"label required\"> Domaine </span>
\t\t\t\t\t<select class=\"full-width\" name=\"domaine\" id=\"id_domaine\" >
\t\t\t\t\t\t<option value=\"Banque/comptabilité/assurance\">Banque/comptabilité/assurance</option>
\t\t\t\t\t\t<option value=\"Commerce\">Commerce</option>
\t\t\t\t\t\t<option value=\"Droit\">Droit</option>
\t\t\t\t\t\t<option value=\"Economie\">Economie</option>
\t\t\t\t\t\t<option value=\"Gestion projet/Ressorces humaines\">Gestion projet/Ressorces humaines</option>
\t\t\t\t\t\t<option value=\"Informatique\">Informatique</option>
\t\t\t\t\t\t<option value=\"Informatique\">Marketing</option>
\t\t\t\t\t\t<option value=\"Santé\">Santé</option>
\t\t\t\t\t\t<option value=\"Autre\">Autre</option>
\t\t\t\t\t</select><br><br>\t\t
\t\t\t\t
\t\t\t\t<span  ><b> Théme <b></span>
\t\t\t\t\t\t<input id=\"id_theme\" class=\"full-width\" type=\"text\" value=\"\" name=\"theme\"><br><br>
\t\t\t\t\t\t
\t\t\t\t<span  class=\"label required\">Type</span>
\t\t\t\t\t<select class=\"full-width\" name=\"type\" id=\"id_type\">
\t\t\t\t\t\t<option value=\"Audio\">Audio</option>
\t\t\t\t\t\t<option value=\"Document\">Document</option>
\t\t\t\t\t\t<option value=\"Database\">Data base</option>
\t\t\t\t\t\t<option value=\"Excel\">Excel</option>
\t\t\t\t\t\t<option value=\"Flash\">Flash</option>
\t\t\t\t\t\t<option value=\"Pdf\">Pdf</option>
\t\t\t\t\t\t<option value=\"Vidéo\">Vidéo</option>
\t\t\t\t\t\t<option value=\"Word\">Word</option>
\t\t\t\t\t</select>
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t<div class=\"float-right\"><br>
\t\t\t\t\t<button type=\"button\" id=\"add-ressources\"><img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/tick-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Enregistrer </button>
\t\t\t\t\t<!--<button type=\"submit\" name=\"btn_add\" class=\"grey\" ><img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/tick-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Enregistrer</button>
\t\t\t\t\t<!--<button type=\"button\"><img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/tick-circle.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Enregistrer</button>-->
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</form>
\t\t\t\t\t\t
\t\t\t\t\t\t\t</fieldset>\t\t\t\t\t\t\t\t
\t\t</section>
 

";
    }

    // line 120
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 121
        echo "\t<script>
\tfunction addTag()
\t{
\t\tconsole.log(\"TRK\", \$('#id_tags').val());
\t\tif(\$('#id_tags').val()!='')
\t\t\$('#tags').append(\"<li>\"+\$('#id_tags').val()+\"</li> \");
\t}
\t
\t
\t
\t\$('#add-ressources').click(function(){
        console.log(\"TRK\");
\t\t\tvar tags = [];
\t\t\tvar titre =\$('#id_titre').val();
\t\t\tvar domaine =\$('#id_domaine').val();
\t\t\tvar type =\$('#id_type').val();
\t\t\tvar url =\$('#id_url').val();
\t\t\tvar description =\$('#id_description').val();
\t\t\tvar theme =\$('#id_theme').val();
\t\t\tif(titre==''||url==''){
\t\t\talert('verifiez que tous les champs obligatoir sont remplis');
\t\t\t}else{
\t\t\$('#tags').each(function(){
\t\t\t//\$(this).find('li').toArray();
\t\t\t\$(this).find('li').each(function(){
\t\t\t\tvar current = \$(this);
\t\t\t\ttags.push( current.text() );
\t\t\t\tconsole.log(\"Li : \", current.text());
\t\t\t});
\t\t\t//alert(tags);
\t\t});

\t\t\$.post(
\t\t\"";
        // line 154
        echo $this->env->getExtension('routing')->getPath("Ressources_Ajouter");
        echo "\",
\t\t{param_titre:  titre ,param_domaine :  domaine,param_type :  type,param_url :  url,param_description :  description,param_tags :  tags,param_theme:  theme },
\t\t\tfunction(message)
\t\t\t{  
\t\t\t\tconsole.log(\"TRK Sucssess\", domaine);
\t\t\t\t
\t\t\t\t document.location.href=\"";
        // line 160
        echo $this->env->getExtension('routing')->getPath("Ressources");
        echo "\" ;
\t\t\t\t
\t\t\t}
\t\t);
    }});   
\t

\t</script>
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Ressources:ajouter_ressource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 360,  562 => 345,  555 => 342,  548 => 341,  542 => 340,  532 => 338,  525 => 336,  522 => 335,  519 => 334,  515 => 333,  509 => 332,  505 => 331,  501 => 330,  497 => 328,  491 => 327,  482 => 323,  475 => 318,  455 => 313,  451 => 312,  446 => 310,  438 => 308,  429 => 305,  417 => 297,  410 => 294,  404 => 292,  392 => 288,  356 => 276,  350 => 274,  344 => 272,  342 => 271,  329 => 265,  310 => 249,  301 => 243,  357 => 225,  348 => 218,  340 => 214,  332 => 209,  260 => 147,  386 => 286,  352 => 158,  311 => 135,  304 => 132,  299 => 129,  248 => 111,  234 => 106,  118 => 54,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 335,  701 => 334,  696 => 333,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 304,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 299,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 294,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 361,  560 => 344,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 242,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 317,  456 => 221,  450 => 219,  442 => 309,  434 => 307,  403 => 196,  397 => 193,  383 => 185,  380 => 284,  373 => 181,  367 => 179,  361 => 177,  349 => 157,  331 => 167,  325 => 140,  319 => 163,  313 => 161,  307 => 133,  293 => 128,  282 => 142,  242 => 123,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 326,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 124,  276 => 157,  272 => 138,  267 => 121,  245 => 151,  225 => 136,  318 => 139,  306 => 167,  297 => 152,  292 => 168,  76 => 24,  291 => 188,  288 => 187,  261 => 166,  250 => 158,  137 => 44,  197 => 80,  286 => 165,  262 => 119,  259 => 118,  236 => 132,  195 => 111,  175 => 90,  188 => 121,  165 => 106,  287 => 187,  284 => 186,  256 => 146,  232 => 160,  191 => 108,  343 => 171,  338 => 146,  333 => 266,  328 => 143,  303 => 166,  281 => 112,  277 => 111,  270 => 172,  266 => 135,  231 => 93,  228 => 142,  226 => 125,  223 => 154,  194 => 67,  180 => 93,  155 => 97,  110 => 47,  81 => 32,  190 => 76,  174 => 94,  160 => 81,  152 => 76,  148 => 87,  90 => 37,  127 => 45,  114 => 46,  167 => 88,  146 => 47,  134 => 44,  263 => 157,  255 => 155,  213 => 115,  185 => 120,  153 => 61,  150 => 60,  124 => 67,  70 => 16,  683 => 544,  680 => 507,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 152,  237 => 95,  233 => 105,  216 => 128,  212 => 100,  206 => 126,  202 => 109,  198 => 113,  186 => 103,  184 => 95,  172 => 73,  170 => 67,  161 => 105,  181 => 71,  178 => 101,  129 => 53,  126 => 67,  113 => 48,  104 => 45,  100 => 36,  84 => 26,  20 => 1,  77 => 33,  65 => 17,  53 => 11,  58 => 13,  34 => 3,  480 => 229,  474 => 227,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 217,  440 => 148,  437 => 147,  435 => 146,  430 => 209,  427 => 143,  423 => 204,  413 => 200,  409 => 132,  407 => 197,  402 => 130,  398 => 290,  393 => 194,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 282,  368 => 280,  365 => 111,  362 => 278,  360 => 226,  355 => 175,  341 => 105,  337 => 169,  322 => 101,  314 => 99,  312 => 170,  309 => 97,  305 => 158,  298 => 91,  294 => 162,  285 => 126,  283 => 125,  278 => 146,  268 => 152,  264 => 139,  258 => 81,  252 => 130,  247 => 78,  241 => 108,  229 => 108,  220 => 100,  214 => 113,  177 => 95,  169 => 107,  140 => 61,  132 => 47,  128 => 61,  107 => 34,  61 => 14,  273 => 110,  269 => 94,  254 => 132,  243 => 109,  240 => 96,  238 => 107,  235 => 94,  230 => 105,  227 => 81,  224 => 101,  221 => 103,  219 => 114,  217 => 128,  208 => 111,  204 => 118,  179 => 70,  159 => 63,  143 => 46,  135 => 55,  119 => 39,  102 => 32,  71 => 22,  67 => 15,  63 => 19,  59 => 12,  38 => 10,  94 => 48,  89 => 28,  85 => 30,  75 => 31,  68 => 21,  56 => 18,  87 => 35,  21 => 2,  26 => 6,  93 => 29,  88 => 35,  78 => 23,  46 => 6,  27 => 4,  44 => 15,  31 => 6,  28 => 5,  201 => 115,  196 => 107,  183 => 82,  171 => 79,  166 => 97,  163 => 86,  158 => 93,  156 => 62,  151 => 63,  142 => 77,  138 => 76,  136 => 48,  121 => 46,  117 => 47,  105 => 38,  91 => 35,  62 => 13,  49 => 20,  24 => 1,  25 => 4,  19 => 1,  79 => 32,  72 => 23,  69 => 20,  47 => 16,  40 => 14,  37 => 13,  22 => 2,  246 => 139,  157 => 71,  145 => 86,  139 => 71,  131 => 66,  123 => 50,  120 => 50,  115 => 36,  111 => 35,  108 => 36,  101 => 44,  98 => 34,  96 => 41,  83 => 33,  74 => 34,  66 => 20,  55 => 21,  52 => 17,  50 => 10,  43 => 5,  41 => 13,  35 => 4,  32 => 3,  29 => 3,  209 => 99,  203 => 108,  199 => 83,  193 => 101,  189 => 71,  187 => 110,  182 => 71,  176 => 69,  173 => 89,  168 => 86,  164 => 96,  162 => 77,  154 => 80,  149 => 67,  147 => 56,  144 => 58,  141 => 77,  133 => 78,  130 => 71,  125 => 41,  122 => 66,  116 => 38,  112 => 35,  109 => 47,  106 => 41,  103 => 37,  99 => 43,  95 => 37,  92 => 31,  86 => 28,  82 => 26,  80 => 25,  73 => 23,  64 => 26,  60 => 26,  57 => 22,  54 => 10,  51 => 9,  48 => 16,  45 => 7,  42 => 6,  39 => 11,  36 => 3,  33 => 2,  30 => 3,);
    }
}
