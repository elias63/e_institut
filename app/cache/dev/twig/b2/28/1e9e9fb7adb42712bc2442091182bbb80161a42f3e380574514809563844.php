<?php

/* EieinstitutBundle::Master-Base.html.twig */
class __TwigTemplate_b2281e9e9fb7adb42712bc2442091182bbb80161a42f3e380574514809563844 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/form.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/standard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t
\t<!-- Comment/uncomment one of these files to toggle between fixed and fluid layout -->
\t<!--<link href=\"css/960.gs.css\" rel=\"stylesheet\" type=\"text/css\">-->
\t<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/960.gs.fluid.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t
\t<!-- Custom styles -->
        
\t<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/simple-lists.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/block-lists.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/planning.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/table.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/calendars.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/wizard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/gallery.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t
\t<!-- Favicon -->
\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/favicon.ico"), "html", null, true);
        echo "\">
\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/favicon-large.png"), "html", null, true);
        echo "\">
\t
\t<!-- Modernizr for support detection, all javascript libs are moved right above </body> for better performance -->
\t<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/libs/modernizr.custom.min.js"), "html", null, true);
        echo "\"></script>
        
        <!-- js tinymce editeur textareaavec id editable -->
        <script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/tinymce/tinymce.min.js"), "html", null, true);
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
        force_p_newlines : false,
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
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/css/camera.css"), "html", null, true);
        echo "' type='text/css' media='all'>
 

        
        ";
        // line 84
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 87
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 90
        echo "</head>
<body>
    ";
        // line 92
        $this->env->loadTemplate("EieinstitutBundle::include/Header.html.twig")->display($context);
        // line 93
        echo "
\t<article class=\"container_12\">

\t";
        // line 96
        $this->displayBlock('content', $context, $blocks);
        // line 99
        echo "
\t</article>
\t
    ";
        // line 102
        $this->env->loadTemplate("EieinstitutBundle::include/Footer.html.twig")->display($context);
        // line 103
        echo "    
         
     <!--
\t
\tUpdated as v1.5:
\tLibs are moved here to improve performance
\t
\t-->
\t
\t<!-- Generic libs -->
\t<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/libs/jquery-1.6.3.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/old-browsers.js"), "html", null, true);
        echo "\"></script>\t\t<!-- remove if you do not need older browsers detection -->
\t<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/libs/jquery.hashchange.js"), "html", null, true);
        echo "\"></script>
\t
\t<!-- Template libs -->
\t<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/jquery.accessibleList.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/searchField.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/common.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/standard.js"), "html", null, true);
        echo "\"></script>
\t<!--[if lte IE 8]><script src=\"js/standard.ie.js\"></script><![endif]-->
\t<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/jquery.tip.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/jquery.contextMenu.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/jquery.modal.js"), "html", null, true);
        echo "\"></script>
\t
\t<!-- Custom styles lib -->
\t<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/list.js"), "html", null, true);
        echo "\"></script>
\t
\t<!-- Plugins -->
\t<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/libs/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eieinstitut/js/libs/jquery.datepick/jquery.datepick.min.js"), "html", null, true);
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
\t\t\t\t\t\t\t\t\treturn '<small><img src=\"images/icons/fugue/image.png\" width=\"16\" height=\"16\" class=\"picto\"> '+obj.aData[obj.iDataColumn]+' Ko</small>';
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
        // line 360
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">'+
    \t\t\t\t\t\t'<label for=\"username\">";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>'+
    \t\t\t\t\t\t'<input type=\"text\" id=\"username\" name=\"_username\" required=\"required\" />'+
\t\t\t\t\t\t    '<label for=\"password\">";
        // line 363
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
        // line 507
        $this->displayBlock('javascripts_Bottom', $context, $blocks);
        // line 510
        echo "        
</body>
</html>";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        // line 11
        echo "                E-institut 
            ";
    }

    // line 84
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 85
        echo "
        ";
    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        // line 88
        echo "
        ";
    }

    // line 96
    public function block_content($context, array $blocks = array())
    {
        // line 97
        echo "
\t";
    }

    // line 507
    public function block_javascripts_Bottom($context, array $blocks = array())
    {
        // line 508
        echo "
     ";
    }

    public function getTemplateName()
    {
        return "EieinstitutBundle::Master-Base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  683 => 508,  680 => 507,  675 => 97,  672 => 96,  667 => 88,  664 => 87,  659 => 85,  656 => 84,  651 => 11,  648 => 10,  642 => 510,  640 => 507,  493 => 363,  488 => 361,  484 => 360,  253 => 132,  249 => 131,  237 => 125,  233 => 124,  216 => 119,  212 => 118,  206 => 115,  202 => 114,  198 => 113,  186 => 103,  184 => 102,  172 => 93,  170 => 92,  161 => 84,  181 => 71,  178 => 70,  129 => 48,  126 => 47,  113 => 41,  104 => 37,  100 => 36,  84 => 29,  20 => 1,  77 => 24,  65 => 22,  53 => 21,  58 => 13,  34 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 123,  220 => 120,  214 => 69,  177 => 96,  169 => 60,  140 => 55,  132 => 49,  128 => 49,  107 => 36,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 128,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 121,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 99,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 30,  67 => 15,  63 => 15,  59 => 21,  38 => 6,  94 => 28,  89 => 26,  85 => 25,  75 => 31,  68 => 14,  56 => 9,  87 => 34,  21 => 2,  26 => 6,  93 => 31,  88 => 6,  78 => 21,  46 => 14,  27 => 4,  44 => 12,  31 => 5,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 90,  163 => 87,  158 => 58,  156 => 66,  151 => 63,  142 => 59,  138 => 50,  136 => 56,  121 => 46,  117 => 46,  105 => 40,  91 => 35,  62 => 23,  49 => 20,  24 => 1,  25 => 4,  19 => 1,  79 => 32,  72 => 16,  69 => 25,  47 => 19,  40 => 11,  37 => 13,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 43,  108 => 36,  101 => 39,  98 => 31,  96 => 31,  83 => 33,  74 => 25,  66 => 24,  55 => 15,  52 => 17,  50 => 10,  43 => 12,  41 => 15,  35 => 10,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 63,  164 => 59,  162 => 57,  154 => 80,  149 => 54,  147 => 58,  144 => 53,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 40,  106 => 36,  103 => 32,  99 => 31,  95 => 36,  92 => 21,  86 => 28,  82 => 22,  80 => 28,  73 => 19,  64 => 26,  60 => 21,  57 => 22,  54 => 18,  51 => 14,  48 => 15,  45 => 19,  42 => 6,  39 => 16,  36 => 9,  33 => 13,  30 => 10,);
    }
}
