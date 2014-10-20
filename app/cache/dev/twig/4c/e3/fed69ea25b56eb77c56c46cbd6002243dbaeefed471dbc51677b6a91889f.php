<?php

/* EieinstitutBundle:Messaging:nouveau_message.html.twig */
class __TwigTemplate_4ce3fed69ea25b56eb77c56c46cbd6002243dbaeefed471dbc51677b6a91889f extends Twig_Template
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
        echo "
";
        // line 6
        if (((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")) == 1)) {
            // line 7
            echo "    Message envoyé !!! 
";
        } elseif (((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")) == (-1))) {
            // line 9
            echo "<section class=\"grid_9\">
    <div class=\"block-border\">
        <form class=\"block-content form\" id=\"table_form\" method=\"post\" action=\"";
            // line 11
            echo $this->env->getExtension('routing')->getPath("nouveau_message");
            echo "\">
            <h1>Nouveau message</h1>
            <fieldset>



                <p>
                    <label for=\"A\">A :</label>
                    <input type=\"text\" name=\"A\" id=\"A\">
                </p>

                <p>
                    <label for=\"objet\">Objet :</label>
                    <!--<input type=\"text\" style=\"background-color:; padding-left:10px; font-family:'nevis Bold', Arial; font-size:35px; color:#FFF;\" name=\"objet\" id=\"objet\">-->
                    <input  type=\"text\" name=\"Objet\" id=\"Objet\">
                </p>

                <p>
                    <label for=\"message\">Message :</label><br/>
                    <textarea id=\"editable\" name=\"message\" id=\"message\" cols=\"100\" rows=\"15\"></textarea>
                </p>


            </fieldset>

           
            <input type=\"submit\" name=\"submit\" id=\"submit\" value=\"Envoyer\">
        </form>

    </div>


</section> 
    
    ";
        }
        // line 46
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle:Messaging:nouveau_message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 151,  262 => 132,  259 => 131,  236 => 119,  195 => 87,  175 => 84,  188 => 107,  165 => 76,  287 => 187,  284 => 186,  256 => 161,  232 => 140,  191 => 108,  343 => 148,  338 => 146,  333 => 145,  328 => 143,  303 => 123,  281 => 112,  277 => 111,  270 => 109,  266 => 108,  231 => 93,  228 => 114,  226 => 91,  223 => 90,  194 => 67,  180 => 82,  155 => 50,  110 => 36,  81 => 26,  190 => 106,  174 => 103,  160 => 78,  152 => 93,  148 => 92,  90 => 29,  127 => 53,  114 => 46,  167 => 88,  146 => 71,  134 => 44,  263 => 130,  255 => 124,  213 => 95,  185 => 84,  153 => 76,  150 => 68,  124 => 56,  70 => 16,  683 => 508,  680 => 507,  675 => 97,  672 => 96,  667 => 88,  664 => 87,  659 => 85,  656 => 84,  651 => 11,  648 => 10,  642 => 510,  640 => 507,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 100,  237 => 95,  233 => 105,  216 => 128,  212 => 100,  206 => 115,  202 => 96,  198 => 113,  186 => 89,  184 => 83,  172 => 93,  170 => 82,  161 => 78,  181 => 84,  178 => 104,  129 => 48,  126 => 47,  113 => 37,  104 => 34,  100 => 36,  84 => 28,  20 => 1,  77 => 21,  65 => 22,  53 => 21,  58 => 13,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 116,  285 => 113,  283 => 88,  278 => 146,  268 => 85,  264 => 84,  258 => 81,  252 => 123,  247 => 78,  241 => 152,  229 => 108,  220 => 97,  214 => 69,  177 => 96,  169 => 87,  140 => 70,  132 => 59,  128 => 42,  107 => 35,  61 => 14,  273 => 110,  269 => 94,  254 => 103,  243 => 128,  240 => 96,  238 => 85,  235 => 94,  230 => 82,  227 => 81,  224 => 99,  221 => 103,  219 => 114,  217 => 102,  208 => 99,  204 => 72,  179 => 85,  159 => 61,  143 => 56,  135 => 70,  119 => 39,  102 => 38,  71 => 24,  67 => 15,  63 => 19,  59 => 12,  38 => 6,  94 => 35,  89 => 30,  85 => 29,  75 => 24,  68 => 21,  56 => 13,  87 => 28,  21 => 2,  26 => 6,  93 => 37,  88 => 35,  78 => 25,  46 => 6,  27 => 4,  44 => 11,  31 => 5,  28 => 4,  201 => 115,  196 => 97,  183 => 82,  171 => 79,  166 => 81,  163 => 87,  158 => 77,  156 => 72,  151 => 63,  142 => 72,  138 => 46,  136 => 56,  121 => 46,  117 => 46,  105 => 67,  91 => 35,  62 => 13,  49 => 20,  24 => 1,  25 => 4,  19 => 1,  79 => 47,  72 => 23,  69 => 22,  47 => 9,  40 => 9,  37 => 6,  22 => 2,  246 => 90,  157 => 71,  145 => 80,  139 => 71,  131 => 66,  123 => 79,  120 => 40,  115 => 53,  111 => 47,  108 => 36,  101 => 33,  98 => 36,  96 => 31,  83 => 30,  74 => 18,  66 => 20,  55 => 29,  52 => 12,  50 => 10,  43 => 5,  41 => 15,  35 => 10,  32 => 7,  29 => 3,  209 => 99,  203 => 78,  199 => 67,  193 => 94,  189 => 71,  187 => 110,  182 => 105,  176 => 80,  173 => 79,  168 => 74,  164 => 72,  162 => 73,  154 => 80,  149 => 81,  147 => 75,  144 => 91,  141 => 65,  133 => 55,  130 => 60,  125 => 41,  122 => 40,  116 => 38,  112 => 53,  109 => 68,  106 => 41,  103 => 37,  99 => 37,  95 => 31,  92 => 21,  86 => 56,  82 => 46,  80 => 24,  73 => 19,  64 => 35,  60 => 18,  57 => 22,  54 => 10,  51 => 9,  48 => 11,  45 => 19,  42 => 6,  39 => 16,  36 => 7,  33 => 2,  30 => 10,);
    }
}
