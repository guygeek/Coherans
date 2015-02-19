<?php

/* CoheransBundle:Organization:index.html.twig */
class __TwigTemplate_75628f0b3766009808682596a97e0825a2acacf4ae7ce34bfa9c6fd24b61dbc4 extends Twig_Template
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
        echo "Organizations";
    }

    // line 6
    public function block_heading($context, array $blocks = array())
    {
        // line 7
        echo "    
    <!-- Page Heading -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">
                Organisations <small>Liste des organisations</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li class=\"\">
                    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><i class=\"fa fa-fw fa-dashboard\"></i> Accueil</a>
                </li>               
                <li class=\"active\">
                    <i class=\"fa fa-building\"></i> Organisation
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "
    <div class=\"row\">
        <div class=\"col-lg-8\">
            
            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Parent</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")));
        foreach ($context['_seq'] as $context["_key"] => $context["organization"]) {
            // line 43
            echo "                    <tr>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["organization"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["organization"], "name", array()), "html", null, true);
            echo "</td>
                        <td></td>
                        <td>
                        <ul class=\"list-inline\">
                            <li>
                                <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("organization_show", array("id" => $this->getAttribute($context["organization"], "id", array()))), "html", null, true);
            echo "\" class=\"fa fa-eye\" title=\"Détail de l'organization\"><i></i></a>
                            </li>
                            <li>
                                <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("organization_edit", array("id" => $this->getAttribute($context["organization"], "id", array()))), "html", null, true);
            echo "\" class=\"fa fa-pencil\" title=\"Modifier l'organization\"><i></i></a>
                            </li>
                        </ul>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organization'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                </tbody>
            </table>
            
        </div>
        
        <div class=\"col-md-4\">
            
            <div class=\"panel panel-default\">
              <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Hiérarchie</h3>
              </div>
              <div class=\"panel-body\">
                ";
        // line 71
        echo (isset($context["htmlTree"]) ? $context["htmlTree"] : $this->getContext($context, "htmlTree"));
        echo "
              </div>
            </div>
            
            

        </div>
            
         <div class=\"col-md-12\">
            
             <a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("organization_new");
        echo "\" class=\"btn btn-primary\" >Ajouter une organisation</a>

        </div>
               
                
                
    </div>
    <!-- /.row -->




";
    }

    public function getTemplateName()
    {
        return "CoheransBundle:Organization:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 81,  142 => 71,  128 => 59,  116 => 53,  110 => 50,  102 => 45,  98 => 44,  95 => 43,  91 => 42,  75 => 28,  72 => 27,  58 => 16,  47 => 7,  44 => 6,  38 => 4,  11 => 2,);
    }
}
