<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_6ec362d435f8178fc344eeb98ce2e90d765b89d6297e2bc77d74b9cd41d650cb extends Twig_Template
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
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) ? $context["traces"] : $this->getContext($context, "traces")));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("almost") : ((((2 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "path"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  810 => 492,  807 => 491,  796 => 489,  788 => 486,  775 => 485,  749 => 479,  727 => 476,  710 => 475,  702 => 472,  698 => 471,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  629 => 454,  620 => 451,  601 => 446,  567 => 414,  549 => 411,  389 => 160,  371 => 156,  334 => 141,  302 => 125,  290 => 119,  363 => 153,  449 => 198,  441 => 196,  431 => 189,  408 => 176,  401 => 172,  394 => 168,  335 => 134,  323 => 128,  320 => 127,  575 => 460,  537 => 428,  529 => 409,  512 => 412,  508 => 411,  487 => 396,  483 => 395,  479 => 394,  422 => 184,  464 => 339,  460 => 338,  396 => 283,  391 => 281,  382 => 275,  324 => 113,  308 => 287,  316 => 224,  717 => 544,  714 => 543,  707 => 131,  699 => 91,  691 => 88,  688 => 87,  673 => 546,  671 => 543,  524 => 399,  274 => 110,  251 => 153,  375 => 169,  345 => 147,  339 => 151,  327 => 114,  321 => 135,  315 => 131,  300 => 105,  211 => 96,  378 => 157,  353 => 328,  326 => 138,  295 => 151,  279 => 177,  257 => 135,  97 => 41,  23 => 3,  271 => 132,  222 => 83,  244 => 173,  661 => 307,  658 => 306,  632 => 290,  627 => 288,  613 => 285,  596 => 281,  593 => 280,  590 => 279,  580 => 277,  576 => 276,  572 => 459,  568 => 273,  553 => 268,  546 => 263,  533 => 427,  526 => 258,  513 => 254,  500 => 250,  481 => 239,  463 => 233,  445 => 227,  439 => 195,  433 => 223,  421 => 219,  415 => 180,  399 => 210,  390 => 203,  388 => 202,  372 => 168,  358 => 151,  351 => 120,  347 => 174,  336 => 169,  330 => 166,  218 => 129,  215 => 79,  210 => 77,  275 => 105,  207 => 75,  200 => 72,  289 => 113,  265 => 105,  205 => 122,  192 => 93,  586 => 278,  562 => 272,  555 => 342,  548 => 341,  542 => 340,  532 => 410,  525 => 336,  522 => 406,  519 => 397,  515 => 396,  509 => 253,  505 => 252,  501 => 330,  497 => 328,  491 => 327,  482 => 323,  475 => 237,  455 => 313,  451 => 229,  446 => 197,  438 => 308,  429 => 188,  417 => 297,  410 => 294,  404 => 211,  392 => 288,  356 => 217,  350 => 327,  344 => 119,  342 => 137,  329 => 131,  310 => 237,  301 => 178,  357 => 123,  348 => 140,  340 => 145,  332 => 116,  260 => 174,  386 => 159,  352 => 167,  311 => 135,  304 => 215,  299 => 129,  248 => 97,  234 => 133,  118 => 49,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 488,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 478,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 473,  704 => 130,  701 => 334,  696 => 90,  694 => 470,  690 => 469,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 456,  631 => 303,  628 => 302,  625 => 453,  622 => 452,  619 => 286,  616 => 298,  614 => 297,  611 => 296,  606 => 449,  603 => 283,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 361,  560 => 344,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 395,  520 => 243,  517 => 404,  510 => 239,  504 => 410,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 202,  456 => 221,  450 => 219,  442 => 309,  434 => 307,  403 => 196,  397 => 193,  383 => 185,  380 => 158,  373 => 156,  367 => 339,  361 => 152,  349 => 157,  331 => 140,  325 => 129,  319 => 163,  313 => 182,  307 => 128,  293 => 120,  282 => 178,  242 => 112,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 547,  536 => 400,  531 => 398,  527 => 408,  296 => 121,  280 => 167,  276 => 111,  272 => 160,  267 => 101,  245 => 142,  225 => 136,  318 => 111,  306 => 286,  297 => 104,  292 => 168,  76 => 28,  291 => 102,  288 => 118,  261 => 162,  250 => 114,  137 => 80,  197 => 69,  286 => 112,  262 => 98,  259 => 103,  236 => 156,  195 => 89,  175 => 58,  188 => 90,  165 => 83,  287 => 146,  284 => 168,  256 => 96,  232 => 88,  191 => 67,  343 => 146,  338 => 135,  333 => 238,  328 => 139,  303 => 106,  281 => 114,  277 => 182,  270 => 102,  266 => 135,  231 => 83,  228 => 142,  226 => 84,  223 => 149,  194 => 68,  180 => 82,  155 => 47,  110 => 22,  81 => 23,  190 => 76,  174 => 65,  160 => 98,  152 => 46,  148 => 70,  90 => 37,  127 => 35,  114 => 46,  167 => 88,  146 => 47,  134 => 39,  263 => 95,  255 => 101,  213 => 78,  185 => 74,  153 => 77,  150 => 55,  124 => 64,  70 => 26,  683 => 11,  680 => 10,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 242,  484 => 353,  253 => 100,  249 => 139,  237 => 151,  233 => 87,  216 => 79,  212 => 78,  206 => 94,  202 => 94,  198 => 95,  186 => 112,  184 => 63,  172 => 57,  170 => 84,  161 => 63,  181 => 65,  178 => 59,  129 => 65,  126 => 40,  113 => 40,  104 => 37,  100 => 36,  84 => 27,  20 => 1,  77 => 25,  65 => 22,  53 => 17,  58 => 18,  34 => 5,  480 => 352,  474 => 227,  469 => 235,  461 => 155,  457 => 231,  453 => 199,  444 => 325,  440 => 324,  437 => 147,  435 => 146,  430 => 209,  427 => 345,  423 => 204,  413 => 337,  409 => 132,  407 => 212,  402 => 130,  398 => 290,  393 => 194,  387 => 164,  384 => 282,  381 => 120,  379 => 119,  374 => 282,  368 => 280,  365 => 224,  362 => 181,  360 => 226,  355 => 329,  341 => 118,  337 => 239,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 158,  298 => 120,  294 => 162,  285 => 121,  283 => 115,  278 => 98,  268 => 131,  264 => 163,  258 => 94,  252 => 118,  247 => 155,  241 => 93,  229 => 87,  220 => 81,  214 => 128,  177 => 106,  169 => 78,  140 => 58,  132 => 59,  128 => 56,  107 => 33,  61 => 23,  273 => 124,  269 => 107,  254 => 154,  243 => 92,  240 => 132,  238 => 108,  235 => 89,  230 => 103,  227 => 86,  224 => 81,  221 => 100,  219 => 114,  217 => 99,  208 => 76,  204 => 97,  179 => 82,  159 => 107,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  38 => 6,  94 => 21,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 16,  87 => 33,  21 => 2,  26 => 3,  93 => 38,  88 => 25,  78 => 18,  46 => 14,  27 => 7,  44 => 11,  31 => 8,  28 => 6,  201 => 121,  196 => 92,  183 => 124,  171 => 79,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 72,  138 => 71,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 34,  62 => 21,  49 => 14,  24 => 2,  25 => 35,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 15,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 84,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 65,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 35,  83 => 30,  74 => 27,  66 => 25,  55 => 38,  52 => 12,  50 => 16,  43 => 12,  41 => 19,  35 => 5,  32 => 6,  29 => 3,  209 => 120,  203 => 73,  199 => 93,  193 => 106,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 99,  162 => 59,  154 => 60,  149 => 99,  147 => 75,  144 => 42,  141 => 73,  133 => 57,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 38,  99 => 23,  95 => 39,  92 => 28,  86 => 34,  82 => 19,  80 => 29,  73 => 23,  64 => 24,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 14,  42 => 8,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
