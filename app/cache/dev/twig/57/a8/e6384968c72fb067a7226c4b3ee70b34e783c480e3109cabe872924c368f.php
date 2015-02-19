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
                Accueil <small>Bienvenue sur Cohérans</small>
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
                <i class=\"fa fa-info-circle\"></i>
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
                            <i class=\"fa fa-building fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["nbOrganizations"]) ? $context["nbOrganizations"] : $this->getContext($context, "nbOrganizations")), "html", null, true);
        echo "</div>
                            <div>Organisations</div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">Détails</span>
                        <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("organization");
        echo "\" class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></a>
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
                            <i class=\"fa fa-user fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">0</div>
                            <div>Personnes</div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">Détails</span>
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
                            <div class=\"huge\">0</div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">Détails</span>
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
                            <div class=\"huge\">0</div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <a href=\"#\">
                    <div class=\"panel-footer\">
                        <span class=\"pull-left\">Détails</span>
                        <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"clearfix\"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->
    
    
    <div class=\"row\">
       <div class=\"col-lg-12\">
           <div class=\"panel panel-default\">
               <div class=\"panel-heading\">
                   <h3 class=\"panel-title\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Area Chart</h3>
               </div>
               <div class=\"panel-body\">
                   <div id=\"morris-area-chart\"></div>
               </div>
           </div>
       </div>
   </div>
   <!-- /.row -->

   <div class=\"row\">
       <div class=\"col-lg-4\">
           <div class=\"panel panel-default\">
               <div class=\"panel-heading\">
                   <h3 class=\"panel-title\"><i class=\"fa fa-long-arrow-right fa-fw\"></i> Donut Chart</h3>
               </div>
               <div class=\"panel-body\">
                   <div id=\"morris-donut-chart\"></div>
                   <div class=\"text-right\">
                       <a href=\"#\">View Details <i class=\"fa fa-arrow-circle-right\"></i></a>
                   </div>
               </div>
           </div>
       </div>
       <div class=\"col-lg-4\">
           <div class=\"panel panel-default\">
               <div class=\"panel-heading\">
                   <h3 class=\"panel-title\"><i class=\"fa fa-clock-o fa-fw\"></i> Tasks Panel</h3>
               </div>
               <div class=\"panel-body\">
                   <div class=\"list-group\">
                       <a href=\"#\" class=\"list-group-item\">
                           <span class=\"badge\">just now</span>
                           <i class=\"fa fa-fw fa-calendar\"></i> Calendar updated
                       </a>
                       <a href=\"#\" class=\"list-group-item\">
                           <span class=\"badge\">4 minutes ago</span>
                           <i class=\"fa fa-fw fa-comment\"></i> Commented on a post
                       </a>
                       <a href=\"#\" class=\"list-group-item\">
                           <span class=\"badge\">23 minutes ago</span>
                           <i class=\"fa fa-fw fa-truck\"></i> Order 392 shipped
                       </a>
                       <a href=\"#\" class=\"list-group-item\">
                           <span class=\"badge\">46 minutes ago</span>
                           <i class=\"fa fa-fw fa-money\"></i> Invoice 653 has been paid
                       </a>
                       <a href=\"#\" class=\"list-group-item\">
                           <span class=\"badge\">1 hour ago</span>
                           <i class=\"fa fa-fw fa-user\"></i> A new user has been added
                       </a>
                       <a href=\"#\" class=\"list-group-item\">
                           <span class=\"badge\">2 hours ago</span>
                           <i class=\"fa fa-fw fa-check\"></i> Completed task: \"pick up dry cleaning\"
                       </a>
                       <a href=\"#\" class=\"list-group-item\">
                           <span class=\"badge\">yesterday</span>
                           <i class=\"fa fa-fw fa-globe\"></i> Saved the world
                       </a>
                       <a href=\"#\" class=\"list-group-item\">
                           <span class=\"badge\">two days ago</span>
                           <i class=\"fa fa-fw fa-check\"></i> Completed task: \"fix error on sales page\"
                       </a>
                   </div>
                   <div class=\"text-right\">
                       <a href=\"#\">View All Activity <i class=\"fa fa-arrow-circle-right\"></i></a>
                   </div>
               </div>
           </div>
       </div>
       <div class=\"col-lg-4\">
           <div class=\"panel panel-default\">
               <div class=\"panel-heading\">
                   <h3 class=\"panel-title\"><i class=\"fa fa-money fa-fw\"></i> Transactions Panel</h3>
               </div>
               <div class=\"panel-body\">
                   <div class=\"table-responsive\">
                       <table class=\"table table-bordered table-hover table-striped\">
                           <thead>
                               <tr>
                                   <th>Order #</th>
                                   <th>Order Date</th>
                                   <th>Order Time</th>
                                   <th>Amount (USD)</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>3326</td>
                                   <td>10/21/2013</td>
                                   <td>3:29 PM</td>
                                   <td>\$321.33</td>
                               </tr>
                               <tr>
                                   <td>3325</td>
                                   <td>10/21/2013</td>
                                   <td>3:20 PM</td>
                                   <td>\$234.34</td>
                               </tr>
                               <tr>
                                   <td>3324</td>
                                   <td>10/21/2013</td>
                                   <td>3:03 PM</td>
                                   <td>\$724.17</td>
                               </tr>
                               <tr>
                                   <td>3323</td>
                                   <td>10/21/2013</td>
                                   <td>3:00 PM</td>
                                   <td>\$23.71</td>
                               </tr>
                               <tr>
                                   <td>3322</td>
                                   <td>10/21/2013</td>
                                   <td>2:49 PM</td>
                                   <td>\$8345.23</td>
                               </tr>
                               <tr>
                                   <td>3321</td>
                                   <td>10/21/2013</td>
                                   <td>2:23 PM</td>
                                   <td>\$245.12</td>
                               </tr>
                               <tr>
                                   <td>3320</td>
                                   <td>10/21/2013</td>
                                   <td>2:15 PM</td>
                                   <td>\$5663.54</td>
                               </tr>
                               <tr>
                                   <td>3319</td>
                                   <td>10/21/2013</td>
                                   <td>2:13 PM</td>
                                   <td>\$943.45</td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                   <div class=\"text-right\">
                       <a href=\"#\">View All Transactions <i class=\"fa fa-arrow-circle-right\"></i></a>
                   </div>
               </div>
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
        return array (  101 => 52,  90 => 44,  68 => 24,  65 => 23,  47 => 7,  44 => 6,  38 => 4,  11 => 2,);
    }
}
