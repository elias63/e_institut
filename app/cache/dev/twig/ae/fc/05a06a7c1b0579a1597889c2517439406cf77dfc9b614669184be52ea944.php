<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_aefc05a06a7c1b0579a1597889c2517439406cf77dfc9b614669184be52ea944 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 460,  537 => 428,  529 => 426,  512 => 412,  508 => 411,  487 => 396,  483 => 395,  479 => 394,  422 => 343,  464 => 339,  460 => 338,  396 => 283,  391 => 281,  382 => 275,  324 => 229,  308 => 216,  316 => 224,  717 => 544,  714 => 543,  707 => 131,  699 => 91,  691 => 88,  688 => 87,  673 => 546,  671 => 543,  524 => 399,  274 => 181,  251 => 153,  375 => 169,  345 => 152,  339 => 151,  327 => 149,  321 => 176,  315 => 139,  300 => 134,  211 => 96,  378 => 232,  353 => 216,  326 => 193,  295 => 151,  279 => 177,  257 => 135,  97 => 45,  23 => 3,  271 => 132,  222 => 130,  244 => 173,  661 => 307,  658 => 306,  632 => 290,  627 => 288,  613 => 285,  596 => 281,  593 => 280,  590 => 279,  580 => 277,  576 => 276,  572 => 459,  568 => 273,  553 => 268,  546 => 263,  533 => 427,  526 => 258,  513 => 254,  500 => 250,  481 => 239,  463 => 233,  445 => 227,  439 => 225,  433 => 223,  421 => 219,  415 => 217,  399 => 210,  390 => 203,  388 => 202,  372 => 168,  358 => 179,  351 => 153,  347 => 174,  336 => 169,  330 => 166,  218 => 129,  215 => 79,  210 => 99,  275 => 139,  207 => 133,  200 => 126,  289 => 161,  265 => 113,  205 => 122,  192 => 93,  586 => 278,  562 => 272,  555 => 342,  548 => 341,  542 => 340,  532 => 338,  525 => 336,  522 => 257,  519 => 397,  515 => 396,  509 => 253,  505 => 252,  501 => 330,  497 => 328,  491 => 327,  482 => 323,  475 => 237,  455 => 313,  451 => 229,  446 => 310,  438 => 308,  429 => 305,  417 => 297,  410 => 294,  404 => 211,  392 => 288,  356 => 217,  350 => 274,  344 => 243,  342 => 271,  329 => 265,  310 => 237,  301 => 178,  357 => 225,  348 => 244,  340 => 159,  332 => 209,  260 => 174,  386 => 286,  352 => 167,  311 => 135,  304 => 215,  299 => 129,  248 => 86,  234 => 133,  118 => 62,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 130,  701 => 334,  696 => 90,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 291,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 286,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 283,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 361,  560 => 344,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 395,  520 => 243,  517 => 255,  510 => 239,  504 => 410,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 317,  456 => 221,  450 => 219,  442 => 309,  434 => 307,  403 => 196,  397 => 193,  383 => 185,  380 => 284,  373 => 181,  367 => 179,  361 => 177,  349 => 157,  331 => 167,  325 => 140,  319 => 163,  313 => 182,  307 => 236,  293 => 129,  282 => 178,  242 => 112,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 547,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 167,  276 => 161,  272 => 160,  267 => 142,  245 => 142,  225 => 136,  318 => 141,  306 => 169,  297 => 165,  292 => 168,  76 => 26,  291 => 208,  288 => 187,  261 => 162,  250 => 114,  137 => 80,  197 => 120,  286 => 175,  262 => 117,  259 => 156,  236 => 156,  195 => 89,  175 => 81,  188 => 85,  165 => 76,  287 => 146,  284 => 168,  256 => 119,  232 => 158,  191 => 108,  343 => 160,  338 => 146,  333 => 238,  328 => 230,  303 => 166,  281 => 120,  277 => 182,  270 => 172,  266 => 135,  231 => 134,  228 => 142,  226 => 102,  223 => 149,  194 => 86,  180 => 82,  155 => 95,  110 => 52,  81 => 24,  190 => 105,  174 => 109,  160 => 98,  152 => 87,  148 => 70,  90 => 40,  127 => 77,  114 => 46,  167 => 88,  146 => 47,  134 => 76,  263 => 157,  255 => 172,  213 => 135,  185 => 91,  153 => 83,  150 => 48,  124 => 64,  70 => 16,  683 => 11,  680 => 10,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 242,  484 => 353,  253 => 132,  249 => 139,  237 => 151,  233 => 155,  216 => 128,  212 => 120,  206 => 94,  202 => 94,  198 => 95,  186 => 112,  184 => 84,  172 => 113,  170 => 108,  161 => 93,  181 => 107,  178 => 110,  129 => 65,  126 => 40,  113 => 57,  104 => 48,  100 => 27,  84 => 25,  20 => 1,  77 => 29,  65 => 23,  53 => 11,  58 => 13,  34 => 3,  480 => 352,  474 => 227,  469 => 235,  461 => 155,  457 => 231,  453 => 151,  444 => 325,  440 => 324,  437 => 147,  435 => 146,  430 => 209,  427 => 345,  423 => 204,  413 => 337,  409 => 132,  407 => 212,  402 => 130,  398 => 290,  393 => 194,  387 => 283,  384 => 282,  381 => 120,  379 => 119,  374 => 282,  368 => 280,  365 => 224,  362 => 181,  360 => 226,  355 => 175,  341 => 105,  337 => 239,  322 => 101,  314 => 99,  312 => 223,  309 => 138,  305 => 158,  298 => 123,  294 => 162,  285 => 121,  283 => 125,  278 => 146,  268 => 131,  264 => 163,  258 => 115,  252 => 118,  247 => 155,  241 => 164,  229 => 137,  220 => 140,  214 => 128,  177 => 106,  169 => 78,  140 => 70,  132 => 59,  128 => 56,  107 => 33,  61 => 14,  273 => 124,  269 => 123,  254 => 154,  243 => 154,  240 => 132,  238 => 108,  235 => 118,  230 => 103,  227 => 113,  224 => 141,  221 => 100,  219 => 114,  217 => 99,  208 => 98,  204 => 97,  179 => 82,  159 => 107,  143 => 46,  135 => 70,  119 => 66,  102 => 34,  71 => 26,  67 => 15,  63 => 34,  59 => 12,  38 => 6,  94 => 35,  89 => 30,  85 => 29,  75 => 25,  68 => 17,  56 => 24,  87 => 26,  21 => 2,  26 => 2,  93 => 37,  88 => 35,  78 => 34,  46 => 6,  27 => 4,  44 => 6,  31 => 5,  28 => 4,  201 => 121,  196 => 125,  183 => 124,  171 => 79,  166 => 90,  163 => 89,  158 => 96,  156 => 72,  151 => 85,  142 => 72,  138 => 71,  136 => 87,  121 => 69,  117 => 57,  105 => 52,  91 => 35,  62 => 13,  49 => 9,  24 => 1,  25 => 5,  19 => 1,  79 => 32,  72 => 22,  69 => 34,  47 => 16,  40 => 12,  37 => 13,  22 => 1,  246 => 157,  157 => 84,  145 => 72,  139 => 71,  131 => 66,  123 => 64,  120 => 64,  115 => 65,  111 => 52,  108 => 43,  101 => 46,  98 => 39,  96 => 29,  83 => 32,  74 => 33,  66 => 16,  55 => 11,  52 => 10,  50 => 10,  43 => 7,  41 => 5,  35 => 5,  32 => 3,  29 => 3,  209 => 120,  203 => 126,  199 => 125,  193 => 106,  189 => 92,  187 => 119,  182 => 120,  176 => 111,  173 => 105,  168 => 84,  164 => 99,  162 => 76,  154 => 78,  149 => 99,  147 => 75,  144 => 82,  141 => 65,  133 => 57,  130 => 64,  125 => 64,  122 => 63,  116 => 61,  112 => 53,  109 => 53,  106 => 49,  103 => 38,  99 => 37,  95 => 42,  92 => 35,  86 => 34,  82 => 33,  80 => 24,  73 => 35,  64 => 26,  60 => 21,  57 => 12,  54 => 10,  51 => 9,  48 => 9,  45 => 7,  42 => 6,  39 => 15,  36 => 8,  33 => 2,  30 => 1,);
    }
}
