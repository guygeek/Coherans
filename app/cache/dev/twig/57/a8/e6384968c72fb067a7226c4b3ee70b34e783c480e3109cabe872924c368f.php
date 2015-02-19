<?php

/* CoheransBundle:Default:index.html.twig */
class __TwigTemplate_57a8e6384968c72fb067a7226c4b3ee70b34e783c480e3109cabe872924c368f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("CoheransBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'heading' => array($this, 'block_heading'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoheransBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 6
    public function block_heading($context, array $blocks = array())
    {
        // line 7
        echo "    <!-- Page Heading -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">
                Accueil <small>xxxx</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li class=\"active\">
                    <i class=\"fa fa-dashboard\"></i> Accueil
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"alert alert-info alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <i class=\"fa fa-info-circle\"></i>  <strong>Like SB Admin?</strong> Try out <a href=\"http://startbootstrap.com/template-overviews/sb-admin-2\" class=\"alert-link\">SB Admin 2</a> for additional features!
            </div>
        </div>
    </div>
    <!-- /.row -->

    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-comments fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">26</div>
                            <div>New Comments!</div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">View Details</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-green\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-tasks fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">12</div>
                            <div>New Tasks!</div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">View Details</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-yellow\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-shopping-cart fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">124</div>
                            <div>New Orders!</div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">View Details</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6\">
            <div class=\"panel panel-red\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-support fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">13</div>
                            <div>Support Tickets!</div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">View Details</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->


";
    }

    public function getTemplateName()
    {
        return "CoheransBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 24,  65 => 23,  47 => 7,  44 => 6,  38 => 4,  11 => 2,);
    }
}
