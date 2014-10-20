<?php

/* EiAdministrationBundle::Master-Base-Admin.html.twig */
class __TwigTemplate_f4259b6ae75e6d5b7f417e15c592b45ee67902da64e48e8e31979d01870d24e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'javascripts_Bottom' => array($this, 'block_javascripts_Bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--[if lt IE 8 ]><html lang=\"en\" class=\"no-js ie ie7\"><![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie\"><![endif]-->
<!--[if (gt IE 8)|!(IE)]><!-->
<html lang=\"en\" class=\"no-js\"><!--<![endif]-->
<head>
\t<meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t<title>
            ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "\t</title>
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\" content=\"\">
        
        
        <!-- Global stylesheets -->
\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/css/reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/css/form.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/css/standard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t
\t<!-- Comment/uncomment one of these files to toggle between fixed and fluid layout -->
\t<!--<link href=\"css/960.gs.css\" rel=\"stylesheet\" type=\"text/css\">-->
\t<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/css/960.gs.fluid.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t
\t<!-- Custom styles -->
        
\t<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/css/simple-lists.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/css/block-lists.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/css/planning.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/css/table.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/css/calendars.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/css/wizard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/css/gallery.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t
\t<!-- Favicon -->
\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/favicon.ico"), "html", null, true);
        echo "\">
\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/favicon-large.png"), "html", null, true);
        echo "\">
\t
\t<!-- Modernizr for support detection, all javascript libs are moved right above </body> for better performance -->
\t<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/js/libs/modernizr.custom.min.js"), "html", null, true);
        echo "\"></script>
        
        <!-- js tinymce editeur textareaavec id editable -->
        <script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
tinymce.init({
        selector: \"textarea#editable\",
        toolbar_items_size: 'small',
        plugins: [
                \"advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker\",
                \"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking\",
                \"table contextmenu directionality emoticons template textcolor paste textcolor\"
        ],
        toolbar1: \"bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect\",
        toolbar2: \"cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | code | forecolor backcolor\",
        toolbar3: \"table | hr removeformat | subscript superscript  | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft\",
        forced_root_block : '',
        force_p_newlines:false,

        menubar: false,
        toolbar_items_size: 'small',
        style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
        ],
        language : 'fr_FR',

});</script>   
\t
\t<!--///////////////////////////////////////////////////////////////////////////////////////////////////
        //
        //\t\tStyles Camera Slide
        //
        ///////////////////////////////////////////////////////////////////////////////////////////////////-->
        
        <link rel='stylesheet' id='camera-css'  href='";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/css/camera.css"), "html", null, true);
        echo "' type='text/css' media='all'>
 

        
        ";
        // line 86
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 89
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 92
        echo "</head>
<body>
  
    <div id=\"sub-nav\"><div class=\"container_12\">
\t\t<ul id=\"status-infos\">
                    <li class=\"spaced\">
                             <a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("eieinstitut_homepage");
        echo "\" class=\"button red\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/application-blog.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> Aller sur le site</a>
\t\t\t
                            </li>
\t\t\t<li class=\"spaced\">Bonjour: <strong>Administrator</strong></li>
\t\t\t<li>
\t\t\t\t<a href=\"#\" class=\"button\" title=\"5 messages\"><img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/images/icons/fugue/mail.png"), "html", null, true);
        echo "\" width=\"16\" height=\"16\"> <strong>5</strong></a>
\t\t\t\t<div id=\"messages-list\" class=\"result-block\" style=\"display: none;\">
\t\t\t\t\t<span class=\"arrow\"><span></span></span>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"small-files-list icon-mail relative\" style=\"overflow: hidden;\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\"><strong>10:15</strong> Please update...<br>
\t\t\t\t\t\t\t<small>From: System</small></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t\t<p id=\"messages-info\" class=\"result-info\"><a href=\"#\">Voir tous les mails »</a></p>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t
\t\t\t<li><a href=\"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" class=\"button red\" title=\"Logout\"><span class=\"smaller\">Déconnecter</span></a></li>
\t\t</ul>
\t\t
\t
\t</div></div>
    
\t<article class=\"container_12\">
 <h1>Tableau de bord</h1>
<!--section block-->
<section class=\"grid_3\">
";
        // line 128
        $this->env->loadTemplate("EiAdministrationBundle:admin:Block_Admin.html.twig")->display($context);
        echo " 
<div class=\"clear\"></div>
</section>            
\t";
        // line 131
        $this->displayBlock('content', $context, $blocks);
        // line 136
        echo "        
\t</article>
\t

    
         
     <!--
\t
\tUpdated as v1.5:
\tLibs are moved here to improve performance
\t
\t-->
\t
\t<!-- Generic libs -->
\t<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/js/libs/jquery-1.6.3.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/js/old-browsers.js"), "html", null, true);
        echo "\"></script>\t\t<!-- remove if you do not need older browsers detection -->
\t<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/js/libs/jquery.hashchange.js"), "html", null, true);
        echo "\"></script>
\t
\t<!-- Template libs -->
\t<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/js/jquery.accessibleList.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/js/searchField.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/js/common.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/js/standard.js"), "html", null, true);
        echo "\"></script>
\t<!--[if lte IE 8]><script src=\"js/standard.ie.js\"></script><![endif]-->
\t<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/js/jquery.tip.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/js/jquery.contextMenu.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/js/jquery.modal.js"), "html", null, true);
        echo "\"></script>
\t
\t<!-- Custom styles lib -->
\t<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/js/list.js"), "html", null, true);
        echo "\"></script>
\t
\t<!-- Plugins -->
\t<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/js/libs/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eiadministration/js/libs/jquery.datepick/jquery.datepick.min.js"), "html", null, true);
        echo "\"></script>
\t


\t

\t<!-- Charts library -->
\t<!--Load the AJAX API-->
\t<script src=\"http://www.google.com/jsapi\"></script>
       
        
        
        <script>
\t\t
\t\t/*
\t\t * This script shows how to setup the various template plugins and functions
\t\t */
\t\t
\t\t\$(document).ready(function()
\t\t{
\t\t\t/*
\t\t\t * Example context menu
\t\t\t */
\t\t\t
\t\t\t// Context menu for all favorites
\t\t\t\$('.favorites li').bind('contextMenu', function(event, list)
\t\t\t{
\t\t\t\tvar li = \$(this);
\t\t\t\t
\t\t\t\t// Add links to the menu
\t\t\t\tif (li.prev().length > 0)
\t\t\t\t{
\t\t\t\t\tlist.push({ text: 'Move up', link:'#', icon:'up' });
\t\t\t\t}
\t\t\t\tif (li.next().length > 0)
\t\t\t\t{
\t\t\t\t\tlist.push({ text: 'Move down', link:'#', icon:'down' });
\t\t\t\t}
\t\t\t\tlist.push(false);\t// Separator
\t\t\t\tlist.push({ text: 'Delete', link:'#', icon:'delete' });
\t\t\t\tlist.push({ text: 'Edit', link:'#', icon:'edit' });
\t\t\t});
\t\t\t
\t\t\t// Extra options for the first one
\t\t\t\$('.favorites li:first').bind('contextMenu', function(event, list)
\t\t\t{
\t\t\t\tlist.push(false);\t// Separator
\t\t\t\tlist.push({ text: 'Settings', icon:'terminal', link:'#', subs:[
\t\t\t\t\t{ text: 'General settings', link: '#', icon: 'blog' },
\t\t\t\t\t{ text: 'System settings', link: '#', icon: 'server' },
\t\t\t\t\t{ text: 'Website settings', link: '#', icon: 'network' }
\t\t\t\t] });
\t\t\t});
\t\t\t
\t\t\t/*
\t\t\t * Dynamic tab content loading
\t\t\t */
\t\t\t
\t\t\t\$('#tab-comments').onTabShow(function()
\t\t\t{
\t\t\t\t\$(this).loadWithEffect('ajax-tab.html', function()
\t\t\t\t{
\t\t\t\t\tnotify('Content loaded via ajax');
\t\t\t\t});
\t\t\t}, true);
\t\t\t
\t\t\t/*
\t\t\t * Table sorting
\t\t\t */
\t\t\t
\t\t\t// A small classes setup...
\t\t\t\$.fn.dataTableExt.oStdClasses.sWrapper = 'no-margin last-child';
\t\t\t\$.fn.dataTableExt.oStdClasses.sInfo = 'message no-margin';
\t\t\t\$.fn.dataTableExt.oStdClasses.sLength = 'float-left';
\t\t\t\$.fn.dataTableExt.oStdClasses.sFilter = 'float-right';
\t\t\t\$.fn.dataTableExt.oStdClasses.sPaging = 'sub-hover paging_';
\t\t\t\$.fn.dataTableExt.oStdClasses.sPagePrevEnabled = 'control-prev';
\t\t\t\$.fn.dataTableExt.oStdClasses.sPagePrevDisabled = 'control-prev disabled';
\t\t\t\$.fn.dataTableExt.oStdClasses.sPageNextEnabled = 'control-next';
\t\t\t\$.fn.dataTableExt.oStdClasses.sPageNextDisabled = 'control-next disabled';
\t\t\t\$.fn.dataTableExt.oStdClasses.sPageFirst = 'control-first';
\t\t\t\$.fn.dataTableExt.oStdClasses.sPagePrevious = 'control-prev';
\t\t\t\$.fn.dataTableExt.oStdClasses.sPageNext = 'control-next';
\t\t\t\$.fn.dataTableExt.oStdClasses.sPageLast = 'control-last';
\t\t\t
\t\t\t// Apply to table
\t\t\t\$('.sortable').each(function(i)
\t\t\t{
\t\t\t\t// DataTable config
\t\t\t\tvar table = \$(this),
\t\t\t\t\toTable = table.dataTable({
\t\t\t\t\t\t/*
\t\t\t\t\t\t * We set specific options for each columns here. Some columns contain raw data to enable correct sorting, so we convert it for display
\t\t\t\t\t\t * @url http://www.datatables.net/usage/columns
\t\t\t\t\t\t */
\t\t\t\t\t\taoColumns: [
\t\t\t\t\t\t\t{ bSortable: false },\t// No sorting for this columns, as it only contains checkboxes
\t\t\t\t\t\t\t{ sType: 'string' },
\t\t\t\t\t\t\t{ bSortable: false },
\t\t\t\t\t\t\t{ sType: 'numeric', bUseRendered: false, fnRender: function(obj) // Append unit and add icon
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\treturn obj.aData[obj.iDataColumn];
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t{ sType: 'date' },
\t\t\t\t\t\t\t{ sType: 'numeric', bUseRendered: false, fnRender: function(obj) // Size is given as float for sorting, convert to format 000 x 000
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\treturn obj.aData[obj.iDataColumn].split('.').join(' x ');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t{ bSortable: false }\t// No sorting for actions column
\t\t\t\t\t\t],
\t\t\t\t\t\t
\t\t\t\t\t\t/*
\t\t\t\t\t\t * Set DOM structure for table controls
\t\t\t\t\t\t * @url http://www.datatables.net/examples/basic_init/dom.html
\t\t\t\t\t\t */
\t\t\t\t\t\tsDom: '<\"block-controls\"<\"controls-buttons\"p>>rti<\"block-footer clearfix\"lf>',
\t\t\t\t\t\t
\t\t\t\t\t\t/*
\t\t\t\t\t\t * Callback to apply template setup
\t\t\t\t\t\t */
\t\t\t\t\t\tfnDrawCallback: function()
\t\t\t\t\t\t{
\t\t\t\t\t\t\tthis.parent().applyTemplateSetup();
\t\t\t\t\t\t},
\t\t\t\t\t\tfnInitComplete: function()
\t\t\t\t\t\t{
\t\t\t\t\t\t\tthis.parent().applyTemplateSetup();
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t
\t\t\t\t// Sorting arrows behaviour
\t\t\t\ttable.find('thead .sort-up').click(function(event)
\t\t\t\t{
\t\t\t\t\t// Stop link behaviour
\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t
\t\t\t\t\t// Find column index
\t\t\t\t\tvar column = \$(this).closest('th'),
\t\t\t\t\t\tcolumnIndex = column.parent().children().index(column.get(0));
\t\t\t\t\t
\t\t\t\t\t// Send command
\t\t\t\t\toTable.fnSort([[columnIndex, 'asc']]);
\t\t\t\t\t
\t\t\t\t\t// Prevent bubbling
\t\t\t\t\treturn false;
\t\t\t\t});
\t\t\t\ttable.find('thead .sort-down').click(function(event)
\t\t\t\t{
\t\t\t\t\t// Stop link behaviour
\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t
\t\t\t\t\t// Find column index
\t\t\t\t\tvar column = \$(this).closest('th'),
\t\t\t\t\t\tcolumnIndex = column.parent().children().index(column.get(0));
\t\t\t\t\t
\t\t\t\t\t// Send command
\t\t\t\t\toTable.fnSort([[columnIndex, 'desc']]);
\t\t\t\t\t
\t\t\t\t\t// Prevent bubbling
\t\t\t\t\treturn false;
\t\t\t\t});
\t\t\t});
\t\t\t
\t\t\t/*
\t\t\t * Datepicker
\t\t\t * Thanks to sbkyle! http://themeforest.net/user/sbkyle
\t\t\t */
\t\t\t\$('.datepicker').datepick({
\t\t\t\talignment: 'bottom',
\t\t\t\tshowOtherMonths: true,
\t\t\t\tselectOtherMonths: true,
\t\t\t\trenderer: {
\t\t\t\t\tpicker: '<div class=\"datepick block-border clearfix form\"><div class=\"mini-calendar clearfix\">' +
\t\t\t\t\t\t\t'{months}</div></div>',
\t\t\t\t\tmonthRow: '{months}', 
\t\t\t\t\tmonth: '<div class=\"calendar-controls\" style=\"white-space: nowrap\">' +
\t\t\t\t\t\t\t\t'{monthHeader:M yyyy}' +
\t\t\t\t\t\t\t'</div>' +
\t\t\t\t\t\t\t'<table cellspacing=\"0\">' +
\t\t\t\t\t\t\t\t'<thead>{weekHeader}</thead>' +
\t\t\t\t\t\t\t\t'<tbody>{weeks}</tbody></table>', 
\t\t\t\t\tweekHeader: '<tr>{days}</tr>', 
\t\t\t\t\tdayHeader: '<th>{day}</th>', 
\t\t\t\t\tweek: '<tr>{days}</tr>', 
\t\t\t\t\tday: '<td>{day}</td>', 
\t\t\t\t\tmonthSelector: '.month', 
\t\t\t\t\tdaySelector: 'td', 
\t\t\t\t\trtlClass: 'rtl', 
\t\t\t\t\tmultiClass: 'multi', 
\t\t\t\t\tdefaultClass: 'default', 
\t\t\t\t\tselectedClass: 'selected', 
\t\t\t\t\thighlightedClass: 'highlight', 
\t\t\t\t\ttodayClass: 'today', 
\t\t\t\t\totherMonthClass: 'other-month', 
\t\t\t\t\tweekendClass: 'week-end', 
\t\t\t\t\tcommandClass: 'calendar', 
\t\t\t\t\tcommandLinkClass: 'button',
\t\t\t\t\tdisabledClass: 'unavailable'
\t\t\t\t}
\t\t\t});
\t\t});
\t\t
\t\t// Demo modal
\t\tfunction openModal()
\t\t{
\t\t\t\$.modal({
\t\t\t\tcontent: '<p>This is an example of modal window. You can open several at the same time (click button below!), move them and resize them.</p>'+
\t\t\t\t\t\t  '<p>The plugin provides several other functions to control them, try below:</p>'+
\t\t\t\t\t\t  '<ul class=\"simple-list with-icon\">'+
\t\t\t\t\t\t  '    <li><a href=\"javascript:void(0)\" onclick=\"\$(this).getModalWindow().setModalTitle(\\'\\')\">Remove title</a></li>'+
\t\t\t\t\t\t  '    <li><a href=\"javascript:void(0)\" onclick=\"\$(this).getModalWindow().setModalTitle(\\'New title\\')\">Change title</a></li>'+
\t\t\t\t\t\t  '    <li><a href=\"javascript:void(0)\" onclick=\"\$(this).getModalWindow().loadModalContent(\\'ajax-modal.html\\')\">Load Ajax content</a></li>'+
\t\t\t\t\t\t  '</ul>',
\t\t\t\ttitle: 'Example modal window',
\t\t\t\tmaxWidth: 500,
\t\t\t\tbuttons: {
\t\t\t\t\t'Open new modal': function(win) { openModal(); },
\t\t\t\t\t'Close': function(win) { win.closeModal(); }
\t\t\t\t}
\t\t\t});
\t\t}
\t\t
\t\t//login Modal
\t\tfunction login()
\t\t{
\t\t\t\$.modal({
\t\t\t\tcontent: '<form action=\"";
        // line 397
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">'+
    \t\t\t\t\t\t'<label for=\"username\">";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>'+
    \t\t\t\t\t\t'<input type=\"text\" id=\"username\" name=\"_username\" required=\"required\" />'+
\t\t\t\t\t\t    '<label for=\"password\">";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>'+
\t\t\t\t\t\t    '<input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />'+

\t\t\t\t\t\t    '<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />'+
\t\t\t\t\t\t    '<label for=\"remember_me\">Maintenire la connexion</label>'+

\t\t\t\t\t\t    '<input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Connexion\" />'+
\t\t\t\t\t\t'</form>'
\t\t\t\t\t\t  ,
\t\t\t\ttitle: 'Connexion',
\t\t\t\tmaxWidth: 300,
\t\t\t\tbuttons: {
\t\t\t\t\t'Se connecter': function(win) { 
\t\t\t\t\t// Action login
\t\t\t\t\t },
\t\t\t\t\t'Fermer': function(win) { win.closeModal(); }
\t\t\t\t}
\t\t\t});
\t\t}
\t\t
\t\t
\t\t//Mot de passe oublié
\t\t
\t\t/*function ForgetMdp() 
\t\t{
\t\t\t\t
\t\t\t\t\$.modal({
\t\t\t\t\t
\t\t\t\t\tcontent: '<div class=\"form\">'+
\t\t\t\t
\t\t\t\t'<fieldset class=\"grey-bg\">'+
\t\t\t\t\t\t\t'<legend>Entrez votre email</legend>'+
\t\t\t\t\t\t\t'<div class=\"colx4-left-double required\">'+
\t\t\t\t\t\t\t\t\t\t'<label for=\"complex-fr-title\">Email</label>'+
\t\t\t\t\t\t\t\t\t\t'<span class=\"relative\">'+
\t\t\t\t\t\t\t\t\t\t'<input type=\"text\" name=\"nom\" id=\"complex-fr-title\" value=\"Email\" class=\"full-width\">'+
\t\t\t\t\t\t\t\t\t'<span class=\"check-ok\"></span>'+
\t\t\t\t\t\t\t\t'</span>'+
\t\t\t\t\t\t\t'</div><br>'+
\t\t\t\t\t\t'</fieldset>'+
\t\t\t\t\t\t
\t\t\t\t\t\t'',
\t\t\t\t\t\ttitle: 'Mot de passe oublié',
\t\t\t\t\t\tmaxWidth: 500,
\t\t\t\t\t\tbuttons: {
\t\t\t\t\t\t\t'Validé': function(win) { 
\t\t\t\t\t\t\t//action ici
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t'Annuler': function(win) { win.closeModal(); }
\t\t\t\t\t\t}
\t\t\t\t});
\t\t} */
\t\t
\t\t
\t\t\t// inscription modal
\t\tfunction inscriptionModal()
\t\t{
\t\t\t\$.modal({
\t\t\t\tcontent: '<div class=\"form\">'+
\t\t\t\t
\t\t\t\t'<fieldset class=\"grey-bg\">'+
\t\t\t\t\t\t\t'<legend>Vos informations</legend>'+
\t\t\t\t\t\t\t'<div class=\"colx4-left-double required\">'+
\t\t\t\t\t\t\t\t\t\t'<label for=\"complex-fr-title\">Nom</label>'+
\t\t\t\t\t\t\t\t\t\t'<span class=\"relative\">'+
\t\t\t\t\t\t\t\t\t\t'<input type=\"text\" name=\"nom\" id=\"complex-fr-title\" value=\"Votre nom\" class=\"full-width\">'+
\t\t\t\t\t\t\t\t\t'<span class=\"check-ok\"></span>'+
\t\t\t\t\t\t\t\t'</span>'+
\t\t\t\t\t\t\t'</div><br>'+
\t\t\t\t\t\t\t'<div class=\"colx4-right-double required\">'+
\t\t\t\t\t\t\t\t\t\t'<label for=\"complex-fr-title\">Prénom</label>'+
\t\t\t\t\t\t\t\t\t\t'<span class=\"relative\">'+
\t\t\t\t\t\t\t\t\t\t'<input type=\"text\" name=\"prenom\" id=\"complex-fr-title\" value=\"Votre prénom\" class=\"full-width\">'+
\t\t\t\t\t\t\t\t\t'<span class=\"check-ok\"></span>'+
\t\t\t\t\t\t\t\t'</span>'+
\t\t\t\t\t\t\t'</div><br>'+
\t\t\t\t\t\t\t'<div class=\" required\">'+
\t\t\t\t\t\t\t\t\t\t'<label for=\"complex-fr-title\">Adresse mail</label>'+
\t\t\t\t\t\t\t\t\t\t'<span class=\"relative\">'+
\t\t\t\t\t\t\t\t\t\t'<input type=\"text\" name=\"nom\" id=\"complex-fr-title\" value=\"Votre adresse mail\" class=\"full-width\">'+
\t\t\t\t\t\t\t\t\t'<span class=\"check-ok\"></span>'+
\t\t\t\t\t\t\t\t'</span>'+
\t\t\t\t\t\t\t'</div>'+
\t\t\t\t\t'</fieldset>'+
\t\t\t\t\t
\t\t\t\t\t'<fieldset class=\"grey-bg\">'+
\t\t\t\t\t\t\t'<legend>Votre compte</legend>'+
\t\t\t\t\t\t\t'<div class=\" required\">'+
\t\t\t\t\t\t\t\t\t\t'<label for=\"complex-fr-title\">Identifiant</label>'+
\t\t\t\t\t\t\t\t\t\t'<span class=\"relative\">'+
\t\t\t\t\t\t\t\t\t\t'<input type=\"text\" name=\"nom\" id=\"complex-fr-title\" value=\"votre identifiant\" class=\"full-width\">'+
\t\t\t\t\t\t\t\t\t'<span class=\"check-ok\"></span>'+
\t\t\t\t\t\t\t\t'</span>'+
\t\t\t\t\t\t\t'</div><br>'+
\t\t\t\t\t\t\t'<div class=\" required\">'+
\t\t\t\t\t\t\t\t\t\t'<label for=\"complex-fr-title\">Mot de passe</label>'+
\t\t\t\t\t\t\t\t\t\t'<span class=\"relative\">'+
\t\t\t\t\t\t\t\t\t\t'<input type=\"text\" name=\"prenom\" id=\"complex-fr-title\" value=\"Votre mot de passe\" class=\"full-width\">'+
\t\t\t\t\t\t\t\t\t'<span class=\"check-ok\"></span>'+
\t\t\t\t\t\t\t\t'</span>'+
\t\t\t\t\t\t\t'</div><br>'+
\t\t\t\t\t\t\t'<div class=\" required\">'+
\t\t\t\t\t\t\t\t\t\t'<label for=\"complex-fr-title\">Saisir à nouveau le mot de passe</label>'+
\t\t\t\t\t\t\t\t\t\t'<span class=\"relative\">'+
\t\t\t\t\t\t\t\t\t\t'<input type=\"text\" name=\"nom\" id=\"complex-fr-title\" value=\"Votre mot de passe\" class=\"full-width\">'+
\t\t\t\t\t\t\t\t\t'<span class=\"check-ok\"></span>'+
\t\t\t\t\t\t\t\t'</span>'+
\t\t\t\t\t\t\t'</div>'+
\t\t\t\t\t'</fieldset>'+
\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t'<fieldset class=\"grey-bg with-legend\">'+
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t'<input type=\"checkbox\" name=\"simple-checkbox[]\" id=\"simple-checkbox-1\" value=\"1\">'+
\t\t\t\t\t\t\t\t\t\t '&nbsp;' + '<label for=\"simple-checkbox-1\">J\\'ai lu et j\\'accepte les <a href=\"#\" > Conditions d\\'utilisations </a></label> <br><br><br>'+
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t'<div id=\"captcha\"> <img src=\"images/captcha.jpg\"> </div>'+

\t\t\t\t\t\t
\t\t\t\t\t\t\t'</fieldset>'+

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t



\t\t\t    \t  
\t\t\t\t'',
\t\t\t\ttitle: 'Inscription',
\t\t\t\tmaxWidth: 500,
\t\t\t\tbuttons: {
\t\t\t\t\t'Validé': function(win) { 
\t\t\t\t\t\t//action ici
\t\t\t\t\t },
\t\t\t\t\t'Annuler': function(win) { win.closeModal(); }
\t\t\t\t}
\t\t\t});
\t\t}
\t
\t</script>
        
     ";
        // line 544
        $this->displayBlock('javascripts_Bottom', $context, $blocks);
        // line 547
        echo "        
</body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        // line 11
        echo "                Administration E-institut 
            ";
    }

    // line 86
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 87
        echo "
        ";
    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        // line 90
        echo "
        ";
    }

    // line 131
    public function block_content($context, array $blocks = array())
    {
        // line 132
        echo "           
      

\t";
    }

    // line 544
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 545
        echo "
     ";
    }

    public function getTemplateName()
    {
        return "EiAdministrationBundle::Master-Base-Admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  271 => 204,  222 => 161,  244 => 173,  661 => 307,  658 => 306,  632 => 290,  627 => 288,  613 => 285,  596 => 281,  593 => 280,  590 => 279,  580 => 277,  576 => 276,  572 => 275,  568 => 273,  553 => 268,  546 => 263,  533 => 262,  526 => 258,  513 => 254,  500 => 250,  481 => 239,  463 => 233,  445 => 227,  439 => 225,  433 => 223,  421 => 219,  415 => 217,  399 => 210,  390 => 203,  388 => 202,  372 => 189,  358 => 179,  351 => 176,  347 => 174,  336 => 169,  330 => 166,  218 => 80,  215 => 79,  210 => 77,  275 => 139,  207 => 106,  200 => 142,  289 => 125,  265 => 113,  205 => 72,  192 => 67,  586 => 278,  562 => 272,  555 => 342,  548 => 341,  542 => 340,  532 => 338,  525 => 336,  522 => 257,  519 => 334,  515 => 333,  509 => 253,  505 => 252,  501 => 330,  497 => 328,  491 => 327,  482 => 323,  475 => 237,  455 => 313,  451 => 229,  446 => 310,  438 => 308,  429 => 305,  417 => 297,  410 => 294,  404 => 211,  392 => 288,  356 => 276,  350 => 274,  344 => 272,  342 => 271,  329 => 265,  310 => 237,  301 => 243,  357 => 225,  348 => 218,  340 => 171,  332 => 209,  260 => 147,  386 => 286,  352 => 158,  311 => 135,  304 => 132,  299 => 129,  248 => 86,  234 => 130,  118 => 41,  946 => 475,  942 => 474,  938 => 473,  935 => 472,  932 => 471,  911 => 453,  897 => 441,  887 => 438,  883 => 437,  857 => 413,  841 => 405,  835 => 404,  829 => 403,  825 => 402,  821 => 401,  816 => 398,  812 => 397,  792 => 380,  780 => 370,  757 => 352,  755 => 351,  752 => 350,  746 => 348,  743 => 347,  736 => 345,  733 => 344,  730 => 343,  728 => 342,  718 => 340,  715 => 339,  712 => 338,  709 => 337,  706 => 336,  704 => 335,  701 => 334,  696 => 333,  694 => 332,  690 => 330,  678 => 323,  674 => 321,  669 => 319,  653 => 312,  646 => 308,  643 => 307,  637 => 305,  634 => 291,  631 => 303,  628 => 302,  625 => 301,  622 => 300,  619 => 286,  616 => 298,  614 => 297,  611 => 296,  606 => 295,  603 => 283,  600 => 293,  597 => 292,  594 => 291,  591 => 290,  589 => 361,  560 => 344,  550 => 258,  544 => 255,  540 => 254,  534 => 251,  530 => 250,  520 => 243,  517 => 255,  510 => 239,  504 => 237,  498 => 235,  492 => 233,  486 => 231,  468 => 225,  462 => 317,  456 => 221,  450 => 219,  442 => 309,  434 => 307,  403 => 196,  397 => 193,  383 => 185,  380 => 284,  373 => 181,  367 => 179,  361 => 177,  349 => 157,  331 => 167,  325 => 140,  319 => 163,  313 => 161,  307 => 236,  293 => 128,  282 => 142,  242 => 123,  239 => 122,  729 => 545,  726 => 544,  719 => 132,  716 => 131,  711 => 90,  708 => 89,  703 => 87,  700 => 86,  695 => 11,  692 => 10,  685 => 547,  536 => 400,  531 => 398,  527 => 397,  296 => 169,  280 => 162,  276 => 161,  272 => 160,  267 => 158,  245 => 151,  225 => 136,  318 => 139,  306 => 167,  297 => 152,  292 => 168,  76 => 24,  291 => 188,  288 => 187,  261 => 166,  250 => 158,  137 => 44,  197 => 80,  286 => 165,  262 => 119,  259 => 156,  236 => 132,  195 => 99,  175 => 116,  188 => 121,  165 => 89,  287 => 187,  284 => 186,  256 => 146,  232 => 160,  191 => 108,  343 => 171,  338 => 146,  333 => 266,  328 => 143,  303 => 166,  281 => 120,  277 => 111,  270 => 172,  266 => 135,  231 => 83,  228 => 167,  226 => 125,  223 => 131,  194 => 118,  180 => 93,  155 => 103,  110 => 47,  81 => 24,  190 => 76,  174 => 67,  160 => 106,  152 => 71,  148 => 70,  90 => 38,  127 => 45,  114 => 46,  167 => 63,  146 => 101,  134 => 81,  263 => 157,  255 => 155,  213 => 115,  185 => 93,  153 => 61,  150 => 102,  124 => 67,  70 => 16,  683 => 544,  680 => 507,  675 => 97,  672 => 320,  667 => 318,  664 => 87,  659 => 314,  656 => 313,  651 => 311,  648 => 10,  642 => 510,  640 => 306,  493 => 363,  488 => 242,  484 => 360,  253 => 132,  249 => 152,  237 => 95,  233 => 105,  216 => 128,  212 => 78,  206 => 126,  202 => 109,  198 => 113,  186 => 103,  184 => 95,  172 => 66,  170 => 67,  161 => 109,  181 => 71,  178 => 117,  129 => 53,  126 => 67,  113 => 48,  104 => 37,  100 => 27,  84 => 26,  20 => 1,  77 => 30,  65 => 15,  53 => 21,  58 => 12,  34 => 5,  480 => 229,  474 => 227,  469 => 235,  461 => 155,  457 => 231,  453 => 151,  444 => 217,  440 => 148,  437 => 147,  435 => 146,  430 => 209,  427 => 221,  423 => 204,  413 => 216,  409 => 132,  407 => 212,  402 => 130,  398 => 290,  393 => 194,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 282,  368 => 280,  365 => 111,  362 => 181,  360 => 226,  355 => 175,  341 => 105,  337 => 169,  322 => 101,  314 => 99,  312 => 170,  309 => 97,  305 => 158,  298 => 131,  294 => 162,  285 => 126,  283 => 125,  278 => 146,  268 => 152,  264 => 139,  258 => 135,  252 => 130,  247 => 183,  241 => 150,  229 => 108,  220 => 100,  214 => 113,  177 => 113,  169 => 107,  140 => 61,  132 => 83,  128 => 56,  107 => 34,  61 => 13,  273 => 115,  269 => 114,  254 => 132,  243 => 94,  240 => 96,  238 => 131,  235 => 94,  230 => 105,  227 => 81,  224 => 126,  221 => 81,  219 => 114,  217 => 128,  208 => 111,  204 => 118,  179 => 92,  159 => 104,  143 => 53,  135 => 60,  119 => 39,  102 => 66,  71 => 30,  67 => 16,  63 => 34,  59 => 12,  38 => 6,  94 => 48,  89 => 30,  85 => 29,  75 => 31,  68 => 21,  56 => 23,  87 => 34,  21 => 2,  26 => 2,  93 => 29,  88 => 39,  78 => 29,  46 => 14,  27 => 4,  44 => 6,  31 => 10,  28 => 9,  201 => 134,  196 => 107,  183 => 82,  171 => 79,  166 => 111,  163 => 86,  158 => 93,  156 => 82,  151 => 63,  142 => 100,  138 => 76,  136 => 96,  121 => 46,  117 => 46,  105 => 40,  91 => 35,  62 => 19,  49 => 20,  24 => 1,  25 => 3,  19 => 1,  79 => 32,  72 => 19,  69 => 36,  47 => 7,  40 => 11,  37 => 13,  22 => 1,  246 => 139,  157 => 71,  145 => 86,  139 => 57,  131 => 49,  123 => 50,  120 => 50,  115 => 48,  111 => 43,  108 => 36,  101 => 39,  98 => 65,  96 => 30,  83 => 33,  74 => 29,  66 => 20,  55 => 11,  52 => 10,  50 => 9,  43 => 5,  41 => 10,  35 => 10,  32 => 2,  29 => 8,  209 => 153,  203 => 108,  199 => 83,  193 => 101,  189 => 71,  187 => 74,  182 => 71,  176 => 98,  173 => 66,  168 => 92,  164 => 107,  162 => 119,  154 => 103,  149 => 59,  147 => 56,  144 => 58,  141 => 77,  133 => 55,  130 => 57,  125 => 55,  122 => 51,  116 => 38,  112 => 43,  109 => 47,  106 => 38,  103 => 28,  99 => 43,  95 => 36,  92 => 34,  86 => 36,  82 => 48,  80 => 32,  73 => 37,  64 => 26,  60 => 15,  57 => 22,  54 => 16,  51 => 25,  48 => 11,  45 => 19,  42 => 5,  39 => 15,  36 => 5,  33 => 6,  30 => 1,);
    }
}
