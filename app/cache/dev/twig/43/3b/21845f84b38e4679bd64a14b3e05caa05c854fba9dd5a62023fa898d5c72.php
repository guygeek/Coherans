<?php

/* CoheransBundle:Organization:edit.html.twig */
class __TwigTemplate_433b21845f84b38e4679bd64a14b3e05caa05c854fba9dd5a62023fa898d5c72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("CoheransBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

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
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "CoheransBundle:Form:bootstrap-form-horizontal.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Modifier une organisation";
    }

    // line 7
    public function block_heading($context, array $blocks = array())
    {
        // line 8
        echo "    <!-- Page Heading -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">
                Organisations <small>Modifier une organisation</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li class=\"\">
                    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><i class=\"fa fa-fw fa-dashboard\"></i> Accueil</a>
                </li> 
                <li class=\"\">
                    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("organization");
        echo "\"><i class=\"fa fa-fw fa-building\"></i> Organisations</a>
                </li>
                <li class=\"active\">
                    <i class=\"fa fa-pencil\"></i> Modifier
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "<div class=\"row\">
        
        <div class=\"col-md-6\">
            
            <form action=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("organization_update", array("id" => $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                <input type=\"hidden\" name=\"_method\" value=\"PUT\" />                
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <input type=\"submit\" class=\"btn btn-primary\" id=\"\" value=\"Modifier\"/>
              
            </form>           
           
        </div>
        <div class=\"col-md-12\">    
            <ul class=\"list-inline text-right\">
                <li>
                    <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("organization");
        echo "\">
                    Retour aux organisations
                    </a>
                </li>
            </ul>
                    
        </div>
        
    </div>




";
    }

    public function getTemplateName()
    {
        return "CoheransBundle:Organization:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 47,  96 => 38,  89 => 36,  83 => 32,  80 => 30,  66 => 19,  60 => 16,  50 => 8,  47 => 7,  41 => 5,  37 => 1,  35 => 3,  11 => 1,);
    }
}
