<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4e3b987bcc8ab806ccbb6eab430efbf4ad94fce683b7eef35bd979edfc3bc7e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a0013ca069758204760d40f61c8648062cc60871340a81870ce944f735f1407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a0013ca069758204760d40f61c8648062cc60871340a81870ce944f735f1407->enter($__internal_6a0013ca069758204760d40f61c8648062cc60871340a81870ce944f735f1407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_261ea6de6b100cf1f6103dd8b677d20c9573ccdd69c5498ecbb9c6ef0d0a6091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261ea6de6b100cf1f6103dd8b677d20c9573ccdd69c5498ecbb9c6ef0d0a6091->enter($__internal_261ea6de6b100cf1f6103dd8b677d20c9573ccdd69c5498ecbb9c6ef0d0a6091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a0013ca069758204760d40f61c8648062cc60871340a81870ce944f735f1407->leave($__internal_6a0013ca069758204760d40f61c8648062cc60871340a81870ce944f735f1407_prof);

        
        $__internal_261ea6de6b100cf1f6103dd8b677d20c9573ccdd69c5498ecbb9c6ef0d0a6091->leave($__internal_261ea6de6b100cf1f6103dd8b677d20c9573ccdd69c5498ecbb9c6ef0d0a6091_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b406bb274c0e591acfaef54bd25467ec22605416622bc8c4f00ef98eefe70b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b406bb274c0e591acfaef54bd25467ec22605416622bc8c4f00ef98eefe70b6->enter($__internal_2b406bb274c0e591acfaef54bd25467ec22605416622bc8c4f00ef98eefe70b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1eec45a6defeb69b0802d4a9105e6a9d885c5c459a995696b0ed51e065ba2d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eec45a6defeb69b0802d4a9105e6a9d885c5c459a995696b0ed51e065ba2d42->enter($__internal_1eec45a6defeb69b0802d4a9105e6a9d885c5c459a995696b0ed51e065ba2d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_1eec45a6defeb69b0802d4a9105e6a9d885c5c459a995696b0ed51e065ba2d42->leave($__internal_1eec45a6defeb69b0802d4a9105e6a9d885c5c459a995696b0ed51e065ba2d42_prof);

        
        $__internal_2b406bb274c0e591acfaef54bd25467ec22605416622bc8c4f00ef98eefe70b6->leave($__internal_2b406bb274c0e591acfaef54bd25467ec22605416622bc8c4f00ef98eefe70b6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_dde32e5124604ebeae8f691e6c49b86eea2c136bec70303cb4ebfcd456df225c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde32e5124604ebeae8f691e6c49b86eea2c136bec70303cb4ebfcd456df225c->enter($__internal_dde32e5124604ebeae8f691e6c49b86eea2c136bec70303cb4ebfcd456df225c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_00529d942300afd392d3882825f3b0fd72b166188b1d6f04091ab03080481513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00529d942300afd392d3882825f3b0fd72b166188b1d6f04091ab03080481513->enter($__internal_00529d942300afd392d3882825f3b0fd72b166188b1d6f04091ab03080481513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_00529d942300afd392d3882825f3b0fd72b166188b1d6f04091ab03080481513->leave($__internal_00529d942300afd392d3882825f3b0fd72b166188b1d6f04091ab03080481513_prof);

        
        $__internal_dde32e5124604ebeae8f691e6c49b86eea2c136bec70303cb4ebfcd456df225c->leave($__internal_dde32e5124604ebeae8f691e6c49b86eea2c136bec70303cb4ebfcd456df225c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec505f4cafba0817693a58b492b458d9288e8bdb41cb12cb365bcc8dae6603ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec505f4cafba0817693a58b492b458d9288e8bdb41cb12cb365bcc8dae6603ee->enter($__internal_ec505f4cafba0817693a58b492b458d9288e8bdb41cb12cb365bcc8dae6603ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3b34b62aba21737a6714b9bcf4cc1b23776679e5319b33dff57bcd2e7cdf52a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b34b62aba21737a6714b9bcf4cc1b23776679e5319b33dff57bcd2e7cdf52a->enter($__internal_d3b34b62aba21737a6714b9bcf4cc1b23776679e5319b33dff57bcd2e7cdf52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d3b34b62aba21737a6714b9bcf4cc1b23776679e5319b33dff57bcd2e7cdf52a->leave($__internal_d3b34b62aba21737a6714b9bcf4cc1b23776679e5319b33dff57bcd2e7cdf52a_prof);

        
        $__internal_ec505f4cafba0817693a58b492b458d9288e8bdb41cb12cb365bcc8dae6603ee->leave($__internal_ec505f4cafba0817693a58b492b458d9288e8bdb41cb12cb365bcc8dae6603ee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/bruno/Sites/Eurotrade_v2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
