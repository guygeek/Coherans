<?php

/* CoheransBundle::layout.html.twig */
class __TwigTemplate_f9ac9d370b0830a8484a20cb4c025bf84e4ccd296cc35a80ba8330c3913a4519 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navigation' => array($this, 'block_navigation'),
            'heading' => array($this, 'block_heading'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        
        <!-- Bootstrap -->
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">

        <!-- HTML5 Shim and Respond.js add IE8 support of HTML5 elements and media queries -->
        ";
        // line 10
        $this->env->loadTemplate("BraincraftedBootstrapBundle::ie8-support.html.twig")->display($context);
        // line 11
        echo "    
        ";
        // line 12
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9ae6b84_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ae6b84_0") : $this->env->getExtension('assets')->getAssetUrl("css/9ae6b84_part_1_sb-admin_1.css");
            // line 13
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "9ae6b84"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ae6b84") : $this->env->getExtension('assets')->getAssetUrl("css/9ae6b84.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "      
        <title>Cohérans : ";
        // line 16
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>
       
    <div id=\"wrapper\">

        ";
        // line 22
        $this->displayBlock('navigation', $context, $blocks);
        // line 154
        echo "
        <div id=\"page-wrapper\">

            <div class=\"container-fluid\">  
                
                ";
        // line 159
        $this->displayBlock('heading', $context, $blocks);
        echo "   
                
                ";
        // line 161
        $this->displayBlock('content', $context, $blocks);
        // line 162
        echo "
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <!-- Include all JavaScripts, compiled by Assetic -->
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    
    ";
        // line 177
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3db9950_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3db9950_0") : $this->env->getExtension('assets')->getAssetUrl("js/3db9950_part_1_morris-data_1.js");
            // line 180
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "3db9950_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3db9950_1") : $this->env->getExtension('assets')->getAssetUrl("js/3db9950_part_1_morris_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "3db9950_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3db9950_2") : $this->env->getExtension('assets')->getAssetUrl("js/3db9950_part_1_morris.min_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "3db9950_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3db9950_3") : $this->env->getExtension('assets')->getAssetUrl("js/3db9950_part_1_raphael.min_4.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "3db9950_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3db9950_4") : $this->env->getExtension('assets')->getAssetUrl("js/3db9950_part_2_excanvas.min_1.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "3db9950_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3db9950_5") : $this->env->getExtension('assets')->getAssetUrl("js/3db9950_part_2_flot-data_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "3db9950_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3db9950_6") : $this->env->getExtension('assets')->getAssetUrl("js/3db9950_part_2_jquery.flot_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "3db9950_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3db9950_7") : $this->env->getExtension('assets')->getAssetUrl("js/3db9950_part_2_jquery.flot.pie_4.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "3db9950_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3db9950_8") : $this->env->getExtension('assets')->getAssetUrl("js/3db9950_part_2_jquery.flot.resize_5.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "3db9950_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3db9950_9") : $this->env->getExtension('assets')->getAssetUrl("js/3db9950_part_2_jquery.flot.tooltip.min_6.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "3db9950"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3db9950") : $this->env->getExtension('assets')->getAssetUrl("js/3db9950.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 182
        echo "
         
            
    </body>
</html>";
    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        // line 23
        echo "            <!-- Navigation -->
            <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.html\">COHERANS</a>
                </div>
                <!-- Top Menu Items -->
                <ul class=\"nav navbar-right top-nav\">
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-envelope\"></i> <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu message-dropdown\">
                            <li class=\"message-preview\">
                                <a href=\"#\">
                                    <div class=\"media\">
                                        <span class=\"pull-left\">
                                            <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                        </span>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\"><strong>John Smith</strong>
                                            </h5>
                                            <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"message-preview\">
                                <a href=\"#\">
                                    <div class=\"media\">
                                        <span class=\"pull-left\">
                                            <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                        </span>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\"><strong>John Smith</strong>
                                            </h5>
                                            <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"message-preview\">
                                <a href=\"#\">
                                    <div class=\"media\">
                                        <span class=\"pull-left\">
                                            <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                        </span>
                                        <div class=\"media-body\">
                                            <h5 class=\"media-heading\"><strong>John Smith</strong>
                                            </h5>
                                            <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"message-footer\">
                                <a href=\"#\">Read All New Messages</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu alert-dropdown\">
                            <li>
                                <a href=\"#\">Alert Name <span class=\"label label-default\">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href=\"#\">Alert Name <span class=\"label label-primary\">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href=\"#\">Alert Name <span class=\"label label-success\">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href=\"#\">Alert Name <span class=\"label label-info\">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href=\"#\">Alert Name <span class=\"label label-warning\">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href=\"#\">Alert Name <span class=\"label label-danger\">Alert Badge</span></a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">View All</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> John Smith <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"#\"><i class=\"fa fa-fw fa-user\"></i> Profile</a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-fw fa-envelope\"></i> Inbox</a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-fw fa-gear\"></i> Settings</a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                    <ul class=\"nav navbar-nav side-nav\">
                        <li class=\"active\">
                            <a href=\"";
        // line 141
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><i class=\"fa fa-fw fa-dashboard\"></i> Accueil</a>
                        </li>
                        <li class=\"\">
                            <a href=\"";
        // line 144
        echo $this->env->getExtension('routing')->getPath("organization");
        echo "\"><i class=\"fa fa-fw fa-building\"></i> Organizations </a>
                        </li>
                        <li class=\"\">
                            <a href=\"\"><i class=\"fa fa-fw fa-user\"></i> Personnes </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        ";
    }

    // line 159
    public function block_heading($context, array $blocks = array())
    {
    }

    // line 161
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CoheransBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 161,  339 => 159,  325 => 144,  319 => 141,  199 => 23,  196 => 22,  191 => 16,  183 => 182,  115 => 180,  111 => 177,  106 => 175,  101 => 173,  88 => 162,  86 => 161,  81 => 159,  74 => 154,  72 => 22,  63 => 16,  60 => 15,  46 => 13,  42 => 12,  39 => 11,  37 => 10,  31 => 7,  23 => 1,);
    }
}
