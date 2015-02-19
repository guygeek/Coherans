<?php

/* CoheransBundle:Organization:show.html.twig */
class __TwigTemplate_3fc36deca8a0e7722c625391e0012603a54154240f6e5f97f34b3c5f001f2170 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Ajouter une organisation";
    }

    // line 5
    public function block_heading($context, array $blocks = array())
    {
        // line 6
        echo "    <!-- Page Heading -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">
                Organisations <small>Détail de l'organisation</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li class=\"\">
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><i class=\"fa fa-fw fa-dashboard\"></i> Accueil</a>
                </li> 
                <li class=\"\">
                    <a href=\"";
        // line 17
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

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "<div class=\"row\">
        
        <div class=\"col-md-12\">
            
            <table class=\"table table-bordered\">
                <tbody>
                    <tr>
                        <th class=\"col-lg-4\">Id</th>
                        <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Hierarchie</th>
                        <td>";
        // line 46
        echo (isset($context["htmlTree"]) ? $context["htmlTree"] : $this->getContext($context, "htmlTree"));
        echo "</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
            
        <div class=\"col-md-12\">
            <ul class=\"list-inline text-right\">
                <li>
                    <a href=\"";
        // line 56
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
        return array (  117 => 56,  104 => 46,  97 => 42,  90 => 38,  80 => 30,  77 => 28,  63 => 17,  57 => 14,  47 => 6,  44 => 5,  38 => 3,  11 => 1,);
    }
}
