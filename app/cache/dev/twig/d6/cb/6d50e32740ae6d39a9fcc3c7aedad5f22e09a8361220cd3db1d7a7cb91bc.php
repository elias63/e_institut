<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_d6cb6d50e32740ae6d39a9fcc3c7aedad5f22e09a8361220cd3db1d7a7cb91bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 198,  441 => 196,  431 => 189,  408 => 176,  401 => 172,  394 => 168,  335 => 134,  323 => 128,  320 => 127,  575 => 460,  537 => 428,  529 => 426,  512 => 412,  508 => 411,  487 => 396,  483 => 395,  479 => 394,  422 => 184,  464 => 339,  460 => 338,  396 => 283,  391 => 281,  382 => 275,  324 => 229,  308 => 216,  316 => 224,  717 => 544,  714 => 543,  707 => 131,  699 => 91,  691 => 88,  688 => 87,  673 => 546,  671 => 543,  524 => 399,  274 => 181,  251 => 153,  375 => 169,  345 => 152,  339 => 151,  327 => 149,  321 => 176,  315 => 125,  300 => 121,  211 => 96,  378 => 232,  353 => 216,  326 => 193,  295 => 151,  279 => 177,  257 => 135,  97 => 41,  23 => 3,  271 => 132,  222 => 130,  244 => 173,  661 => 307,  658 => 306,  632 => 290,  627 => 288,  613 => 285,  596 => 281,  593 => 280,  590 => 279,  580 => 277,  576 => 276,  572 => 459,  568 => 273,  553 => 268,  546 => 263,  533 => 427,  526 => 258,  513 => 254,  500 => 250,  481 => 239,  463 => 233,  445 => 227,  439 => 195,  433 => 223,  421 => 219,  415 => 180,  399 => 210,  390 => 203,  388 => 202,  372 => 168,  358 => 179,  351 => 141,  347 => 174,  336 => 169,  330 => 166,  218 => 129,  215 => 79,  210 => 99,  275 => 105,  207 => 75,  200 => 72,  289 => 113,  265 => 113,  205 => 122,  192 => 93,  586 => 278,  562 => 272,  555 => 342,  548 => 341,  542 => 340,  532 => 338,  525 => 336,  522 => 257,  519 => 397,  515 => 396,  509 => 253,  505 => 252,  501 => 330,  497 => 328,  491 => 327,  482 => 323,  475 => 237,  455 => 313,  451 => 229,  446 => 197,  438 => 308,  429 => 188,  417 => 297,  410 => 294,  404 => 211,  392 => 288,  356 => 217,  350 => 274,  344 => 243,  342 => 137,  329 => 131,  310 => 237,  301 => 178,  357 => 225,  348 => 140,  340 => 159,  332 => 209,  260 => 174,  386 => 286,  352 => 167,  311 => 135,  304 => 215,  299 => 129,  248 => 94,  234 => 133,  118 => 49,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 130,  701 => 334,  696 => 90,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 291,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 286,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 283,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 361,  560 => 344,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 395,  520 => 243,  517 => 255,  510 => 239,  504 => 410,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 202,  456 => 221,  450 => 219,  442 => 309,  434 => 307,  403 => 196,  397 => 193,  383 => 185,  380 => 160,  373 => 156,  367 => 179,  361 => 146,  349 => 157,  331 => 167,  325 => 129,  319 => 163,  313 => 182,  307 => 236,  293 => 129,  282 => 178,  242 => 112,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 547,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 167,  276 => 161,  272 => 160,  267 => 101,  245 => 142,  225 => 136,  318 => 141,  306 => 169,  297 => 165,  292 => 168,  76 => 25,  291 => 208,  288 => 187,  261 => 162,  250 => 114,  137 => 80,  197 => 71,  286 => 112,  262 => 98,  259 => 156,  236 => 156,  195 => 89,  175 => 65,  188 => 85,  165 => 60,  287 => 146,  284 => 168,  256 => 96,  232 => 158,  191 => 67,  343 => 160,  338 => 135,  333 => 238,  328 => 230,  303 => 122,  281 => 120,  277 => 182,  270 => 102,  266 => 135,  231 => 134,  228 => 142,  226 => 84,  223 => 149,  194 => 70,  180 => 82,  155 => 95,  110 => 22,  81 => 23,  190 => 105,  174 => 109,  160 => 98,  152 => 87,  148 => 70,  90 => 27,  127 => 60,  114 => 46,  167 => 88,  146 => 47,  134 => 54,  263 => 157,  255 => 172,  213 => 78,  185 => 66,  153 => 56,  150 => 55,  124 => 64,  70 => 19,  683 => 11,  680 => 10,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 242,  484 => 353,  253 => 132,  249 => 139,  237 => 151,  233 => 87,  216 => 79,  212 => 120,  206 => 94,  202 => 94,  198 => 95,  186 => 112,  184 => 84,  172 => 64,  170 => 108,  161 => 63,  181 => 65,  178 => 66,  129 => 65,  126 => 40,  113 => 48,  104 => 48,  100 => 39,  84 => 24,  20 => 1,  77 => 29,  65 => 23,  53 => 12,  58 => 17,  34 => 3,  480 => 352,  474 => 227,  469 => 235,  461 => 155,  457 => 231,  453 => 199,  444 => 325,  440 => 324,  437 => 147,  435 => 146,  430 => 209,  427 => 345,  423 => 204,  413 => 337,  409 => 132,  407 => 212,  402 => 130,  398 => 290,  393 => 194,  387 => 164,  384 => 282,  381 => 120,  379 => 119,  374 => 282,  368 => 280,  365 => 224,  362 => 181,  360 => 226,  355 => 143,  341 => 105,  337 => 239,  322 => 101,  314 => 99,  312 => 124,  309 => 138,  305 => 158,  298 => 120,  294 => 162,  285 => 121,  283 => 125,  278 => 106,  268 => 131,  264 => 163,  258 => 115,  252 => 118,  247 => 155,  241 => 90,  229 => 85,  220 => 81,  214 => 128,  177 => 106,  169 => 78,  140 => 58,  132 => 59,  128 => 56,  107 => 33,  61 => 17,  273 => 124,  269 => 123,  254 => 154,  243 => 154,  240 => 132,  238 => 108,  235 => 118,  230 => 103,  227 => 113,  224 => 141,  221 => 100,  219 => 114,  217 => 99,  208 => 98,  204 => 97,  179 => 82,  159 => 107,  143 => 46,  135 => 62,  119 => 40,  102 => 40,  71 => 26,  67 => 20,  63 => 18,  59 => 14,  38 => 6,  94 => 34,  89 => 30,  85 => 32,  75 => 25,  68 => 17,  56 => 11,  87 => 34,  21 => 2,  26 => 9,  93 => 37,  88 => 32,  78 => 26,  46 => 13,  27 => 3,  44 => 6,  31 => 3,  28 => 3,  201 => 121,  196 => 125,  183 => 124,  171 => 79,  166 => 90,  163 => 89,  158 => 62,  156 => 58,  151 => 59,  142 => 72,  138 => 71,  136 => 87,  121 => 50,  117 => 19,  105 => 34,  91 => 33,  62 => 13,  49 => 14,  24 => 1,  25 => 35,  19 => 1,  79 => 32,  72 => 22,  69 => 34,  47 => 8,  40 => 6,  37 => 5,  22 => 1,  246 => 93,  157 => 84,  145 => 72,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 65,  111 => 47,  108 => 19,  101 => 43,  98 => 39,  96 => 37,  83 => 33,  74 => 27,  66 => 16,  55 => 13,  52 => 12,  50 => 10,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 3,  209 => 120,  203 => 73,  199 => 125,  193 => 106,  189 => 92,  187 => 119,  182 => 120,  176 => 63,  173 => 105,  168 => 61,  164 => 99,  162 => 59,  154 => 60,  149 => 99,  147 => 54,  144 => 82,  141 => 51,  133 => 57,  130 => 46,  125 => 51,  122 => 63,  116 => 39,  112 => 53,  109 => 53,  106 => 45,  103 => 38,  99 => 31,  95 => 42,  92 => 35,  86 => 34,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 21,  57 => 12,  54 => 10,  51 => 9,  48 => 9,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
