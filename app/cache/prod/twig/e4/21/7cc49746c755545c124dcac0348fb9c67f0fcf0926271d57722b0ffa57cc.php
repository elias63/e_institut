<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_e4217cc49746c755545c124dcac0348fb9c67f0fcf0926271d57722b0ffa57cc extends Twig_Template
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

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "

   

";
        // line 14
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user")) {
            // line 15
            echo "


<section class=\"grid_12\">
    <div class=\"block-border\">
        <div class=\"block-content\">
            <div class=\"block-controls\">
                <h1>Connexion </h1><br><br>
            </div>
            
            <a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" class=\"button red\" title=\"Déconnexion\"><span class=\"smaller\">Déconnexion</span></a>
             <br>
        </div>
     </div>
</section>

                                
                                
";
        } else {
            // line 34
            echo "<section class=\"grid_4\"></section>
\t\t<section class=\"grid_4\">
\t\t\t<div class=\"block-border\">
\t\t\t    <div class=\"block-content no-title\">
\t\t\t    \t<h3>Autentification</h3>
\t\t\t\t\t

\t\t\t\t


<form action=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
            echo "\" method=\"post\">
<div class=\"form required\">
    \t<div class=\"columns\">
                <p class=\"colx-left\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
            echo "\" />
                </p>
        </div>
            <div class=\"columns\">
                            <p class=\"colx-left\">
                                    <label for=\"username\">Identifiant</label>
                                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
            echo "\" required=\"required\" class=\"full-width\" />

                                    
                                    
                            </p>
                    </div>
                    <div class=\"columns\">
                            <p class=\"colx-left\">
                                    <label for=\"_password\">Mot de passe</label>
                                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"full-width\"/>
                                    
                                    
                            </p>
                    </div>
                    <div class=\"columns\">
                            <p class=\"colx2-left\">

                                    <ul class=\"simple-list\">
                                        <li><a href=\"#\" title=\"Mdp\">Mot de passe oublié ?</a></li>
                                    </ul>
                            
                            
                                     <div class=\"columns\">
     
                                            <!-- Left column -->
                                           <div class=\"colx3-left-double\">
                                                  <p class=\"one-line-input grey-bg small-margin\">
                                                    <!-- <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />-->
                                                     <label for=\"remember_me\" class=\"float-left\">Maintenir la connexion</label>
                                                     <input type=\"checkbox\" name=\"_remember_me\" id=\"remember_me\" value=\"on\" class=\"mini-switch\" style=\"display: none;\" checked/>
                                                    </p>
                                            </div>

                                            <!-- Right column -->
                                            <div class=\"colx3-right\">
                                                <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"grey float-right\">Connexion</button>
                                            </div>

                                        </div>
                                        <div class=\"infos\">
                                               
                                                <p>Vous n’avez pas encore de compte E-institut ?</p>
                                                 <h3><a href=\"";
            // line 96
            echo $this->env->getExtension('routing')->getPath("inscription");
            echo "\" title=\"Créer un compte maintenant\">Créer un compte maintenant</a></h3>
                                        </div>
                            
                                         
                                        
                                        
                            
                                  
                            </p>
                    </div>
    </div>
        
        

        <div class=\"clear\"></div>
</form>
 
        </div>
    </div>
</section>
<section class=\"grid_4\"></section>                       
                                
 ";
        }
        // line 119
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 119,  136 => 96,  91 => 54,  82 => 48,  75 => 44,  63 => 34,  51 => 25,  39 => 15,  37 => 14,  31 => 10,  28 => 9,);
    }
}
