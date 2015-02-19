<?php

/* CoheransBundle:Form:fields.html.twig */
class __TwigTemplate_2e534a2a0202a43174af4f1c575c5fb238fcf6ffe18dd3dd38aa3f8831b6f89e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'button_attributes' => array($this, 'block_button_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_errors', $context, $blocks);
        // line 12
        $this->displayBlock('button_attributes', $context, $blocks);
    }

    // line 1
    public function block_form_errors($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 4
            echo "<ul class=\"alert alert-error\">
";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 6
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "</ul>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 12
    public function block_button_attributes($context, array $blocks = array())
    {
        // line 13
        ob_start();
        // line 14
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 15
        $context["hasClass"] = false;
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 17
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"
";
            // line 18
            if (($context["attrname"] == "class")) {
                // line 19
                $context["hasClass"] = true;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        if ( !(isset($context["hasClass"]) ? $context["hasClass"] : $this->getContext($context, "hasClass"))) {
            // line 23
            echo "class=\"btn\"
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CoheransBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  92 => 22,  85 => 19,  83 => 18,  77 => 17,  73 => 16,  71 => 15,  62 => 14,  60 => 13,  57 => 12,  50 => 8,  41 => 6,  37 => 5,  34 => 4,  32 => 3,  30 => 2,  27 => 1,  23 => 12,  21 => 1,);
    }
}
