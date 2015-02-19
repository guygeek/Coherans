<?php

/* CoheransBundle:Form:bootstrap-form-horizontal.html.twig */
class __TwigTemplate_8b747ccab8ce5c51ee2e186b37fcefe16c2ff4e992bf15b7a5f184d96a7c47ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_start' => array($this, 'block_form_start'),
            'form_row' => array($this, 'block_form_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_start', $context, $blocks);
        // line 16
        echo " 
";
        // line 17
        $this->displayBlock('form_row', $context, $blocks);
    }

    // line 1
    public function block_form_start($context, array $blocks = array())
    {
        echo " 
    ";
        // line 2
        ob_start();
        echo " 
        ";
        // line 3
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        echo " 
        ";
        // line 4
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            echo " 
            ";
            // line 5
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
            echo " 
        ";
        } else {
            // line 6
            echo " 
            ";
            // line 7
            $context["form_method"] = "POST";
            echo " 
        ";
        }
        // line 8
        echo " 
        <form method=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" class=\"form-horizontal\" 
            action=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "            ";
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo "> 
        ";
        // line 12
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            echo " 
            <input type=\"hidden\" name=\"_method\" value=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" /> 
        ";
        }
        // line 14
        echo " 
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 15
        echo " 
";
    }

    // line 17
    public function block_form_row($context, array $blocks = array())
    {
        echo " 
    ";
        // line 18
        ob_start();
        echo " 
        <div class=\"form-group\"> 
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo " 
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo " 
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo " 
        </div> 
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 24
        echo " 
";
    }

    public function getTemplateName()
    {
        return "CoheransBundle:Form:bootstrap-form-horizontal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  131 => 24,  125 => 22,  121 => 21,  117 => 20,  112 => 18,  107 => 17,  102 => 15,  98 => 14,  93 => 13,  89 => 12,  82 => 11,  67 => 10,  63 => 9,  60 => 8,  55 => 7,  52 => 6,  47 => 5,  43 => 4,  39 => 3,  35 => 2,  30 => 1,  26 => 17,  23 => 16,  21 => 1,);
    }
}
