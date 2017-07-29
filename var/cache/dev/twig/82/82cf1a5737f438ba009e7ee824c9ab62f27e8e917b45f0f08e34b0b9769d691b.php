<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2de374e67e496f6c9244186b912f9a27d442d4873d1742fa3e6e03eaf1de624c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bbae71463878e5666e222ec0cfbe0461eea1c6a95d9b4d1e3ebc7b285c86106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bbae71463878e5666e222ec0cfbe0461eea1c6a95d9b4d1e3ebc7b285c86106->enter($__internal_4bbae71463878e5666e222ec0cfbe0461eea1c6a95d9b4d1e3ebc7b285c86106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_23580a4f57b2ad21a7374a3f7cd12845c312bee32793c8c09a7849a364a7b86d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23580a4f57b2ad21a7374a3f7cd12845c312bee32793c8c09a7849a364a7b86d->enter($__internal_23580a4f57b2ad21a7374a3f7cd12845c312bee32793c8c09a7849a364a7b86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bbae71463878e5666e222ec0cfbe0461eea1c6a95d9b4d1e3ebc7b285c86106->leave($__internal_4bbae71463878e5666e222ec0cfbe0461eea1c6a95d9b4d1e3ebc7b285c86106_prof);

        
        $__internal_23580a4f57b2ad21a7374a3f7cd12845c312bee32793c8c09a7849a364a7b86d->leave($__internal_23580a4f57b2ad21a7374a3f7cd12845c312bee32793c8c09a7849a364a7b86d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c17e6fd807c194e92bc0a25c318b0f530aeea6ed081ba57dcc435c4382ac459b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c17e6fd807c194e92bc0a25c318b0f530aeea6ed081ba57dcc435c4382ac459b->enter($__internal_c17e6fd807c194e92bc0a25c318b0f530aeea6ed081ba57dcc435c4382ac459b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b2ff94b796149dea5743699dc98f95d71f9613b0c967004224379621890c876a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ff94b796149dea5743699dc98f95d71f9613b0c967004224379621890c876a->enter($__internal_b2ff94b796149dea5743699dc98f95d71f9613b0c967004224379621890c876a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b2ff94b796149dea5743699dc98f95d71f9613b0c967004224379621890c876a->leave($__internal_b2ff94b796149dea5743699dc98f95d71f9613b0c967004224379621890c876a_prof);

        
        $__internal_c17e6fd807c194e92bc0a25c318b0f530aeea6ed081ba57dcc435c4382ac459b->leave($__internal_c17e6fd807c194e92bc0a25c318b0f530aeea6ed081ba57dcc435c4382ac459b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc88cf1ef39321bcc619c7e23ca127909de01ee972ba21e66388ec47ce5bfcc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc88cf1ef39321bcc619c7e23ca127909de01ee972ba21e66388ec47ce5bfcc9->enter($__internal_dc88cf1ef39321bcc619c7e23ca127909de01ee972ba21e66388ec47ce5bfcc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_01b08799ae473106f0b3192bae7f9055c576ec0f2f76cbc52bf3cf5f93c7fe76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b08799ae473106f0b3192bae7f9055c576ec0f2f76cbc52bf3cf5f93c7fe76->enter($__internal_01b08799ae473106f0b3192bae7f9055c576ec0f2f76cbc52bf3cf5f93c7fe76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_01b08799ae473106f0b3192bae7f9055c576ec0f2f76cbc52bf3cf5f93c7fe76->leave($__internal_01b08799ae473106f0b3192bae7f9055c576ec0f2f76cbc52bf3cf5f93c7fe76_prof);

        
        $__internal_dc88cf1ef39321bcc619c7e23ca127909de01ee972ba21e66388ec47ce5bfcc9->leave($__internal_dc88cf1ef39321bcc619c7e23ca127909de01ee972ba21e66388ec47ce5bfcc9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b53d9c0d6705630c5c816178e00d767c75a148f331360c4e76e7d0a20c01ca93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b53d9c0d6705630c5c816178e00d767c75a148f331360c4e76e7d0a20c01ca93->enter($__internal_b53d9c0d6705630c5c816178e00d767c75a148f331360c4e76e7d0a20c01ca93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fd7749206e15886ec828d584c1bc162037ef041d8e84ccdc9e48ebe6a32ade8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7749206e15886ec828d584c1bc162037ef041d8e84ccdc9e48ebe6a32ade8d->enter($__internal_fd7749206e15886ec828d584c1bc162037ef041d8e84ccdc9e48ebe6a32ade8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fd7749206e15886ec828d584c1bc162037ef041d8e84ccdc9e48ebe6a32ade8d->leave($__internal_fd7749206e15886ec828d584c1bc162037ef041d8e84ccdc9e48ebe6a32ade8d_prof);

        
        $__internal_b53d9c0d6705630c5c816178e00d767c75a148f331360c4e76e7d0a20c01ca93->leave($__internal_b53d9c0d6705630c5c816178e00d767c75a148f331360c4e76e7d0a20c01ca93_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/bruno/Sites/Eurotrade_v2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
