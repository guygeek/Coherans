<?php

/* CoheransBundle:Organization:show.html.twig */
class __TwigTemplate_4081d9b76e912112a03c4b168c31fd7097ff2931f579ad3fdccf6a6a4a11b807 extends Twig_Template
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
        echo "Ajouter une organisation";
    }

    // line 6
    public function block_heading($context, array $blocks = array())
    {
        // line 7
        echo "    <!-- Page Heading -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">
                Organisations <small>Détail de l'organisation</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li class=\"\">
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><i class=\"fa fa-fw fa-dashboard\"></i> Accueil</a>
                </li> 
                <li class=\"\">
                    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("organization");
        echo "\"><i class=\"fa fa-fw fa-building\"></i> Organisations</a>
                </li>
                <li class=\"active\">
                    <i class=\"fa fa-eye\"></i> Détail
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
";
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "<div class=\"row\">
        
        <div class=\"col-md-12\">
            
            <table class=\"table table-bordered\">
                <tbody>
                    <tr>
                        <th class=\"col-lg-4\">Id</th>
                        <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "id", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "name", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Hierarchie</th>
                        <td>";
        // line 47
        echo (isset($context["htmlTree"]) ? $context["htmlTree"] : $this->getContext($context, "htmlTree"));
        echo "</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
            
        <div class=\"col-md-8\">
            <ul class=\"list-inline text-left\">
                <li>
                    <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("organization_edit", array("id" => $this->getAttribute((isset($context["organization"]) ? $context["organization"] : $this->getContext($context, "organization")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                    Modifier
                    </a>
                </li>
              
            </ul>

        </div>
        <div class=\"col-md-4\">
            <ul class=\"list-inline text-right\">
                <li>
                    <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("organization");
        echo "\">
                    Retour aux organisations
                    </a>
                </li>
            </ul>

        </div>                   

";
    }

    public function getTemplateName()
    {
        return "CoheransBundle:Organization:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 68,  117 => 57,  104 => 47,  97 => 43,  90 => 39,  80 => 31,  77 => 29,  63 => 18,  57 => 15,  47 => 7,  44 => 6,  38 => 4,  11 => 2,);
    }
}
