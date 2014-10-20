<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_eeeeb2d16b206aa4a23bf6ca2b53f4bc86dbb0e9c9c9edd1005b06016ab7242b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        echo "config_done";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ((isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url"))) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url")), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  810 => 492,  807 => 491,  796 => 489,  788 => 486,  775 => 485,  749 => 479,  727 => 476,  710 => 475,  702 => 472,  698 => 471,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  629 => 454,  620 => 451,  601 => 446,  567 => 414,  549 => 411,  389 => 160,  371 => 156,  334 => 141,  302 => 125,  290 => 119,  363 => 153,  449 => 198,  441 => 196,  431 => 189,  408 => 176,  401 => 172,  394 => 168,  335 => 134,  323 => 128,  320 => 127,  575 => 460,  537 => 428,  529 => 409,  512 => 412,  508 => 411,  487 => 396,  483 => 395,  479 => 394,  422 => 184,  464 => 339,  460 => 338,  396 => 283,  391 => 281,  382 => 275,  324 => 113,  308 => 287,  316 => 224,  717 => 544,  714 => 543,  707 => 131,  699 => 91,  691 => 88,  688 => 87,  673 => 546,  671 => 543,  524 => 399,  274 => 110,  251 => 153,  375 => 169,  345 => 147,  339 => 151,  327 => 114,  321 => 135,  315 => 131,  300 => 105,  211 => 96,  378 => 157,  353 => 328,  326 => 138,  295 => 151,  279 => 177,  257 => 135,  97 => 41,  23 => 3,  271 => 132,  222 => 83,  244 => 173,  661 => 307,  658 => 306,  632 => 290,  627 => 288,  613 => 285,  596 => 281,  593 => 280,  590 => 279,  580 => 277,  576 => 276,  572 => 459,  568 => 273,  553 => 268,  546 => 263,  533 => 427,  526 => 258,  513 => 254,  500 => 250,  481 => 239,  463 => 233,  445 => 227,  439 => 195,  433 => 223,  421 => 219,  415 => 180,  399 => 210,  390 => 203,  388 => 202,  372 => 168,  358 => 151,  351 => 120,  347 => 174,  336 => 169,  330 => 166,  218 => 129,  215 => 79,  210 => 77,  275 => 105,  207 => 75,  200 => 72,  289 => 113,  265 => 105,  205 => 122,  192 => 93,  586 => 278,  562 => 272,  555 => 342,  548 => 341,  542 => 340,  532 => 410,  525 => 336,  522 => 406,  519 => 397,  515 => 396,  509 => 253,  505 => 252,  501 => 330,  497 => 328,  491 => 327,  482 => 323,  475 => 237,  455 => 313,  451 => 229,  446 => 197,  438 => 308,  429 => 188,  417 => 297,  410 => 294,  404 => 211,  392 => 288,  356 => 217,  350 => 327,  344 => 119,  342 => 137,  329 => 131,  310 => 237,  301 => 178,  357 => 123,  348 => 140,  340 => 145,  332 => 116,  260 => 174,  386 => 159,  352 => 167,  311 => 135,  304 => 215,  299 => 129,  248 => 97,  234 => 133,  118 => 49,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 488,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 478,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 473,  704 => 130,  701 => 334,  696 => 90,  694 => 470,  690 => 469,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 456,  631 => 303,  628 => 302,  625 => 453,  622 => 452,  619 => 286,  616 => 298,  614 => 297,  611 => 296,  606 => 449,  603 => 283,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 361,  560 => 344,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 395,  520 => 243,  517 => 404,  510 => 239,  504 => 410,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 202,  456 => 221,  450 => 219,  442 => 309,  434 => 307,  403 => 196,  397 => 193,  383 => 185,  380 => 158,  373 => 156,  367 => 339,  361 => 152,  349 => 157,  331 => 140,  325 => 129,  319 => 163,  313 => 182,  307 => 128,  293 => 120,  282 => 178,  242 => 112,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 547,  536 => 400,  531 => 398,  527 => 408,  296 => 121,  280 => 167,  276 => 111,  272 => 160,  267 => 101,  245 => 142,  225 => 136,  318 => 111,  306 => 286,  297 => 104,  292 => 168,  76 => 28,  291 => 102,  288 => 118,  261 => 162,  250 => 114,  137 => 80,  197 => 69,  286 => 112,  262 => 98,  259 => 103,  236 => 156,  195 => 89,  175 => 58,  188 => 90,  165 => 83,  287 => 146,  284 => 168,  256 => 96,  232 => 88,  191 => 67,  343 => 146,  338 => 135,  333 => 238,  328 => 139,  303 => 106,  281 => 114,  277 => 182,  270 => 102,  266 => 135,  231 => 83,  228 => 142,  226 => 84,  223 => 149,  194 => 68,  180 => 82,  155 => 47,  110 => 38,  81 => 23,  190 => 76,  174 => 65,  160 => 98,  152 => 46,  148 => 70,  90 => 37,  127 => 35,  114 => 46,  167 => 88,  146 => 47,  134 => 39,  263 => 95,  255 => 101,  213 => 78,  185 => 74,  153 => 77,  150 => 55,  124 => 64,  70 => 19,  683 => 11,  680 => 10,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 242,  484 => 353,  253 => 100,  249 => 139,  237 => 151,  233 => 87,  216 => 79,  212 => 78,  206 => 94,  202 => 94,  198 => 95,  186 => 112,  184 => 63,  172 => 57,  170 => 84,  161 => 63,  181 => 65,  178 => 59,  129 => 65,  126 => 40,  113 => 40,  104 => 37,  100 => 36,  84 => 27,  20 => 1,  77 => 25,  65 => 17,  53 => 11,  58 => 15,  34 => 4,  480 => 352,  474 => 227,  469 => 235,  461 => 155,  457 => 231,  453 => 199,  444 => 325,  440 => 324,  437 => 147,  435 => 146,  430 => 209,  427 => 345,  423 => 204,  413 => 337,  409 => 132,  407 => 212,  402 => 130,  398 => 290,  393 => 194,  387 => 164,  384 => 282,  381 => 120,  379 => 119,  374 => 282,  368 => 280,  365 => 224,  362 => 181,  360 => 226,  355 => 329,  341 => 118,  337 => 239,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 158,  298 => 120,  294 => 162,  285 => 121,  283 => 115,  278 => 98,  268 => 131,  264 => 163,  258 => 94,  252 => 118,  247 => 155,  241 => 93,  229 => 87,  220 => 81,  214 => 128,  177 => 106,  169 => 78,  140 => 58,  132 => 59,  128 => 56,  107 => 37,  61 => 23,  273 => 124,  269 => 107,  254 => 154,  243 => 92,  240 => 132,  238 => 108,  235 => 89,  230 => 103,  227 => 86,  224 => 81,  221 => 100,  219 => 114,  217 => 99,  208 => 76,  204 => 97,  179 => 82,  159 => 107,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 23,  67 => 18,  63 => 21,  59 => 22,  38 => 5,  94 => 21,  89 => 30,  85 => 26,  75 => 22,  68 => 12,  56 => 14,  87 => 33,  21 => 2,  26 => 3,  93 => 38,  88 => 30,  78 => 24,  46 => 14,  27 => 7,  44 => 8,  31 => 3,  28 => 3,  201 => 121,  196 => 92,  183 => 124,  171 => 79,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 72,  138 => 71,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 29,  62 => 16,  49 => 12,  24 => 2,  25 => 35,  19 => 1,  79 => 29,  72 => 21,  69 => 26,  47 => 9,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 84,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 40,  111 => 47,  108 => 47,  101 => 33,  98 => 34,  96 => 35,  83 => 30,  74 => 22,  66 => 25,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 4,  32 => 6,  29 => 3,  209 => 120,  203 => 73,  199 => 93,  193 => 106,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 99,  162 => 59,  154 => 60,  149 => 99,  147 => 75,  144 => 42,  141 => 73,  133 => 57,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 39,  109 => 52,  106 => 51,  103 => 38,  99 => 23,  95 => 39,  92 => 31,  86 => 34,  82 => 25,  80 => 24,  73 => 23,  64 => 17,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 10,  45 => 11,  42 => 7,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
