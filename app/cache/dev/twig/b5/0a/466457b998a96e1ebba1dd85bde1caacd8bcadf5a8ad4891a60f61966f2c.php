<?php

/* EieinstitutBundle:Pages/Aide:F.A.Q.html.twig */
class __TwigTemplate_b50a466457b998a96e1ebba1dd85bde1caacd8bcadf5a8ad4891a60f61966f2c extends Twig_Template
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
                <section class=\"grid_3\">
\t\t<div class=\"block-border\">
\t\t\t    <div class=\"block-content\">\t
\t\t\t\t<h1>Aide</h1>
\t\t\t\t\t<ul class=\"bullet-list  with-icon\">
\t\t\t\t\t\t<li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("AIDE_FAQ");
        echo "\">F.A.Q</a></li> 
\t\t\t\t\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("AIDE_Charte");
        echo "\">Charte d'utilisation</a> </li>
\t\t\t\t\t\t<li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("AIDE_Security");
        echo "\">Sécurité </a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("AIDE_Contact");
        echo "\">Contact </a></li> 
\t\t\t\t\t</ul>
                            </div>
\t\t</div>
                </section>\t
\t\t<section class=\"grid_9\">
\t\t\t<div class=\"block-border\">
\t\t\t    <div class=\"block-content\">

\t\t\t\t\t<div class=\"block-controls\">
\t\t\t\t\t\t<h1>F.A.Q </h1>
\t\t\t\t\t</div>
                                <div class=\"\">
\t\t\t\t<div class=\"task-description\">
\t\t\t\t<p style=\"font-weight:bold\">G&eacute;n&eacute;ral</p>

<p>Comment m'inscrire sur E-institut ? Pourquoi m'inscrire sur E-institut ? Je suis enseignant-chercheur, comment puis-je me servir d'E-institut ? Comment retrouver facilement une publication pr&eacute;cise ?</p>

<p style=\"font-weight:bold\"> Mon compte</p>

<p>Puis-je utiliser E-institut sans cr&eacute;er un compte ? J'ai oubli&eacute; mon mot de passe, puis-je le r&eacute;cup&eacute;rer ? Comment d&eacute;sactiver mon compte ?</p>

<p style=\"font-weight:bold\"> Mon e-portefolio</p>

<p>Qu'est-ce que mon e-portofolio ? Quelles informations sont publiques sur mon e-portofolio ? Quelles informations dois-je faire appara&icirc;tre sur mon e-portofolio ? Comment mettre &agrave; jour mon e-portofolio, modifier, ajouter ou supprimer des informations ?</p>

<p style=\"font-weight:bold\"> Mon cartable et messages</p>

<p>Qu'est-ce que mon cartable ? Qu'est-ce qui apparait dans mon fil d'actualit&eacute; ? Comment consulter mes messages re&ccedil;us ? Comment envoyer un message priv&eacute; ?</p>

<p style=\"font-weight:bold\"> Mon r&eacute;seau</p>

<p>Qu'est-ce que mon r&eacute;seau ? Comment demander le rattachement de ma tutelle ? A quoi peut me servir mon r&eacute;seau ? Qu'est-ce qu'un contact, un bin&ocirc;me, un groupe, une classe virtuelle, une tutelle ? Comment construire mon r&eacute;seau scientifique et p&eacute;dagogique ? Comment trouver de nouveaux contacts ? Comment entrer en contact avec quelqu'un ?</p>

<p style=\"font-weight:bold\"> Mes ressources : trouver du contenu scientifique, p&eacute;dagogique, acad&eacute;mique</p>

<p>Quels types de contenu sont-ils disponibles sur E-institut ? Comment trouver du contenu pertinent pour moi ? Il n'y a pas encore de contenu sur le sujet pr&eacute;cis que je cherche, que puis-je faire ? En lisant une publication, j'ai d&eacute;couvert une erreur, que puis-je faire ?</p>

<p style=\"font-weight:bold\"> Publier des ressources scientifiques, p&eacute;dagogiques ou informatives</p>

<p>Pourquoi publier mes documents ou le fruit de mon travail sur E-institut ? Comment publier du contenu sur E-institut ? Quelles sont les diff&eacute;rentes options de publications ? Quels types de fichiers puis-je ins&eacute;rer dans mes publications ? Comment modifier une de mes publications ? Comment supprimer une de mes publications ? Y-a-t-il des choses que je ne peux pas publier sur E-institut ? Pourquoi E-institut a-t-il supprim&eacute; ma publication ?</p>

<p style=\"font-weight:bold\">(idem : mod&egrave;le beebac, d&eacute;but de r&eacute;flexion pour r&eacute;diger les conditions sp&eacute;cifiques &agrave; E-institut, &agrave; noter : la liste des questions ci-dessus a d&eacute;j&agrave; fait l'objet d'une adaptation au contexte E-institut)</p>

</div>
\t\t\t\t</div>
                           
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t    </div>\t
\t\t\t</div>
 
\t\t</section>
\t\t<!--fin section lioste des publications -->\t
";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Pages/Aide:F.A.Q.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 133,  286 => 151,  262 => 132,  259 => 131,  236 => 119,  195 => 87,  175 => 84,  188 => 107,  165 => 76,  287 => 187,  284 => 186,  256 => 161,  232 => 140,  191 => 108,  343 => 148,  338 => 146,  333 => 145,  328 => 143,  303 => 123,  281 => 112,  277 => 111,  270 => 109,  266 => 108,  231 => 93,  228 => 114,  226 => 91,  223 => 90,  194 => 67,  180 => 82,  155 => 97,  110 => 58,  81 => 26,  190 => 106,  174 => 103,  160 => 78,  152 => 93,  148 => 92,  90 => 29,  127 => 53,  114 => 46,  167 => 88,  146 => 71,  134 => 44,  263 => 130,  255 => 124,  213 => 95,  185 => 84,  153 => 76,  150 => 68,  124 => 56,  70 => 16,  683 => 508,  680 => 507,  675 => 97,  672 => 96,  667 => 88,  664 => 87,  659 => 85,  656 => 84,  651 => 11,  648 => 10,  642 => 510,  640 => 507,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 100,  237 => 95,  233 => 105,  216 => 128,  212 => 100,  206 => 115,  202 => 96,  198 => 113,  186 => 89,  184 => 83,  172 => 93,  170 => 82,  161 => 78,  181 => 84,  178 => 104,  129 => 48,  126 => 47,  113 => 37,  104 => 34,  100 => 36,  84 => 27,  20 => 1,  77 => 21,  65 => 22,  53 => 21,  58 => 13,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 116,  285 => 113,  283 => 88,  278 => 146,  268 => 85,  264 => 84,  258 => 81,  252 => 123,  247 => 78,  241 => 152,  229 => 108,  220 => 97,  214 => 69,  177 => 96,  169 => 87,  140 => 70,  132 => 59,  128 => 42,  107 => 35,  61 => 17,  273 => 110,  269 => 94,  254 => 103,  243 => 128,  240 => 96,  238 => 85,  235 => 94,  230 => 82,  227 => 81,  224 => 99,  221 => 103,  219 => 114,  217 => 102,  208 => 99,  204 => 72,  179 => 85,  159 => 61,  143 => 56,  135 => 70,  119 => 39,  102 => 53,  71 => 24,  67 => 18,  63 => 19,  59 => 22,  38 => 10,  94 => 48,  89 => 30,  85 => 29,  75 => 24,  68 => 21,  56 => 13,  87 => 28,  21 => 2,  26 => 6,  93 => 37,  88 => 35,  78 => 25,  46 => 6,  27 => 4,  44 => 11,  31 => 5,  28 => 4,  201 => 115,  196 => 97,  183 => 82,  171 => 79,  166 => 81,  163 => 87,  158 => 77,  156 => 72,  151 => 63,  142 => 72,  138 => 46,  136 => 56,  121 => 46,  117 => 46,  105 => 67,  91 => 35,  62 => 13,  49 => 15,  24 => 1,  25 => 4,  19 => 1,  79 => 47,  72 => 23,  69 => 22,  47 => 13,  40 => 9,  37 => 6,  22 => 2,  246 => 90,  157 => 71,  145 => 80,  139 => 71,  131 => 66,  123 => 79,  120 => 40,  115 => 53,  111 => 47,  108 => 36,  101 => 33,  98 => 36,  96 => 31,  83 => 30,  74 => 34,  66 => 20,  55 => 21,  52 => 12,  50 => 10,  43 => 12,  41 => 13,  35 => 10,  32 => 7,  29 => 3,  209 => 99,  203 => 78,  199 => 67,  193 => 94,  189 => 71,  187 => 110,  182 => 105,  176 => 115,  173 => 79,  168 => 74,  164 => 72,  162 => 73,  154 => 80,  149 => 81,  147 => 75,  144 => 91,  141 => 65,  133 => 78,  130 => 60,  125 => 41,  122 => 40,  116 => 38,  112 => 53,  109 => 68,  106 => 41,  103 => 37,  99 => 37,  95 => 31,  92 => 21,  86 => 43,  82 => 46,  80 => 24,  73 => 19,  64 => 35,  60 => 18,  57 => 22,  54 => 10,  51 => 14,  48 => 11,  45 => 14,  42 => 11,  39 => 11,  36 => 8,  33 => 2,  30 => 10,);
    }
}
