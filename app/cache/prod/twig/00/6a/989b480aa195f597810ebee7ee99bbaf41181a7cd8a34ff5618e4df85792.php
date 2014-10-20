<?php

/* EieinstitutBundle:Block:Block_Mon_portefolio.html.twig */
class __TwigTemplate_006a989b480aa195f597810ebee7ee99bbaf41181a7cd8a34ff5618e4df85792 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "



<!--Block portefolio-->

   
        <div class=\"block-border\">
            <div class=\"block-content\">
                <h1>Mon portefolio</h1>

                <ul class=\"simple-list\">
                    <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("profil");
        echo "\">Mon profil</a></li>
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("mon_compte");
        echo "\">Mon compte</a></li>
                    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("_agenda");
        echo "\">Mon agenda</a></li>
                </ul>
            </div>
        </div>
 ";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Block:Block_Mon_portefolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 15,  49 => 15,  45 => 14,  39 => 16,  31 => 5,  25 => 4,  20 => 1,  83 => 25,  77 => 24,  65 => 22,  53 => 20,  41 => 15,  64 => 23,  58 => 20,  48 => 15,  42 => 12,  40 => 11,  30 => 10,  28 => 5,  24 => 3,  22 => 2,  19 => 1,  114 => 48,  106 => 38,  103 => 37,  95 => 27,  88 => 40,  86 => 37,  71 => 23,  68 => 21,  66 => 24,  63 => 19,  60 => 21,  55 => 13,  52 => 17,  47 => 19,  44 => 8,  37 => 14,  34 => 8,  172 => 73,  169 => 72,  156 => 62,  147 => 56,  136 => 48,  132 => 47,  127 => 45,  123 => 44,  111 => 47,  107 => 34,  102 => 32,  98 => 22,  93 => 29,  89 => 26,  84 => 26,  80 => 25,  70 => 17,  67 => 16,  62 => 14,  59 => 21,  54 => 18,  51 => 10,  46 => 14,  43 => 12,  36 => 9,  33 => 13,);
    }
}
