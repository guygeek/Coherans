<?php

/* CoheransBundle:Organization:new.html.twig */
class __TwigTemplate_333cec9e3bfb02d6a54898ca8ee784a742ee0713409c665297400e5fe116a187 extends Twig_Template
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
        // line 4
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "CoheransBundle:Form:bootstrap-form-horizontal.html.twig"));
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Ajouter une organisation";
    }

    // line 8
    public function block_heading($context, array $blocks = array())
    {
        // line 9
        echo "    <!-- Page Heading -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">
                Organisations <small>Ajouter une organisation</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li class=\"\">
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><i class=\"fa fa-fw fa-dashboard\"></i> Accueil</a>
                </li> 
                <li class=\"\">
                    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("organization");
        echo "\"><i class=\"fa fa-fw fa-building\"></i> Organisations</a>
                </li>
                <li class=\"active\">
                    <i class=\"fa fa-plus\"></i> Ajouter
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 33
        echo "<div class=\"row\">
        
        <div class=\"col-md-6\">
            
            <form action=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("organization_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                
                
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                
                <input type=\"submit\" class=\"btn btn-primary\" id=\"\" value=\"Ajouter\"/>
              
            </form>           
           
        </div>
        <div class=\"col-md-12\">    
            <ul class=\"list-inline text-right\">
                <li>
                    <a href=\"";
        // line 50
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
        return "CoheransBundle:Organization:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 50,  97 => 40,  89 => 37,  83 => 33,  80 => 31,  66 => 20,  60 => 17,  50 => 9,  47 => 8,  41 => 6,  37 => 2,  35 => 4,  11 => 2,);
    }
}
