<?php

/* base.html.twig */
class __TwigTemplate_8c557d389c34aaf2311526bfb2585db90f2fc4a5f384317d7fdfe5a8765dbf42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c673e7abf6d508e47da9626f0067f8186175e39d2324edb54dfb90f98e0a2e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c673e7abf6d508e47da9626f0067f8186175e39d2324edb54dfb90f98e0a2e0->enter($__internal_1c673e7abf6d508e47da9626f0067f8186175e39d2324edb54dfb90f98e0a2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c88ec9b61373c3a427bc7e92eaac87992f3518005aa3320f97b3888dc0467ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88ec9b61373c3a427bc7e92eaac87992f3518005aa3320f97b3888dc0467ad8->enter($__internal_c88ec9b61373c3a427bc7e92eaac87992f3518005aa3320f97b3888dc0467ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1c673e7abf6d508e47da9626f0067f8186175e39d2324edb54dfb90f98e0a2e0->leave($__internal_1c673e7abf6d508e47da9626f0067f8186175e39d2324edb54dfb90f98e0a2e0_prof);

        
        $__internal_c88ec9b61373c3a427bc7e92eaac87992f3518005aa3320f97b3888dc0467ad8->leave($__internal_c88ec9b61373c3a427bc7e92eaac87992f3518005aa3320f97b3888dc0467ad8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b72fbe3c17b47a3e1c78435b86a1404b2fc147040e9aa5a6cf646f6e88870bbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b72fbe3c17b47a3e1c78435b86a1404b2fc147040e9aa5a6cf646f6e88870bbc->enter($__internal_b72fbe3c17b47a3e1c78435b86a1404b2fc147040e9aa5a6cf646f6e88870bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_77d9e54a1c8655532d086210b0f0256846f1d54f162345711c50a21568d81fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d9e54a1c8655532d086210b0f0256846f1d54f162345711c50a21568d81fae->enter($__internal_77d9e54a1c8655532d086210b0f0256846f1d54f162345711c50a21568d81fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_77d9e54a1c8655532d086210b0f0256846f1d54f162345711c50a21568d81fae->leave($__internal_77d9e54a1c8655532d086210b0f0256846f1d54f162345711c50a21568d81fae_prof);

        
        $__internal_b72fbe3c17b47a3e1c78435b86a1404b2fc147040e9aa5a6cf646f6e88870bbc->leave($__internal_b72fbe3c17b47a3e1c78435b86a1404b2fc147040e9aa5a6cf646f6e88870bbc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f4749b9ac357732b0253730a7d1e7da30af95f2de93b5aa68ee65751e5702ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4749b9ac357732b0253730a7d1e7da30af95f2de93b5aa68ee65751e5702ce0->enter($__internal_f4749b9ac357732b0253730a7d1e7da30af95f2de93b5aa68ee65751e5702ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b1fe6854d45a86e620a1c081d320cdf214a7a235343c8ebee702f81f3598e87f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1fe6854d45a86e620a1c081d320cdf214a7a235343c8ebee702f81f3598e87f->enter($__internal_b1fe6854d45a86e620a1c081d320cdf214a7a235343c8ebee702f81f3598e87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b1fe6854d45a86e620a1c081d320cdf214a7a235343c8ebee702f81f3598e87f->leave($__internal_b1fe6854d45a86e620a1c081d320cdf214a7a235343c8ebee702f81f3598e87f_prof);

        
        $__internal_f4749b9ac357732b0253730a7d1e7da30af95f2de93b5aa68ee65751e5702ce0->leave($__internal_f4749b9ac357732b0253730a7d1e7da30af95f2de93b5aa68ee65751e5702ce0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_aed9bffd02784f7c2783b51b37875d06a6a9f298d50292adafc088fcb3c4b8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed9bffd02784f7c2783b51b37875d06a6a9f298d50292adafc088fcb3c4b8b1->enter($__internal_aed9bffd02784f7c2783b51b37875d06a6a9f298d50292adafc088fcb3c4b8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34425dde174a644c20d8e10a1da9025b8ee744f2f87b61718245666d745c458b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34425dde174a644c20d8e10a1da9025b8ee744f2f87b61718245666d745c458b->enter($__internal_34425dde174a644c20d8e10a1da9025b8ee744f2f87b61718245666d745c458b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_34425dde174a644c20d8e10a1da9025b8ee744f2f87b61718245666d745c458b->leave($__internal_34425dde174a644c20d8e10a1da9025b8ee744f2f87b61718245666d745c458b_prof);

        
        $__internal_aed9bffd02784f7c2783b51b37875d06a6a9f298d50292adafc088fcb3c4b8b1->leave($__internal_aed9bffd02784f7c2783b51b37875d06a6a9f298d50292adafc088fcb3c4b8b1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f3c07a9ba303e78515d9d8a845b7a2f36205a6e44781c619613ef29f85c9017f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3c07a9ba303e78515d9d8a845b7a2f36205a6e44781c619613ef29f85c9017f->enter($__internal_f3c07a9ba303e78515d9d8a845b7a2f36205a6e44781c619613ef29f85c9017f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8cb380e415d90ae953ed35555686245364ba08e8e15535fb8b620b98bd0efa61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb380e415d90ae953ed35555686245364ba08e8e15535fb8b620b98bd0efa61->enter($__internal_8cb380e415d90ae953ed35555686245364ba08e8e15535fb8b620b98bd0efa61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8cb380e415d90ae953ed35555686245364ba08e8e15535fb8b620b98bd0efa61->leave($__internal_8cb380e415d90ae953ed35555686245364ba08e8e15535fb8b620b98bd0efa61_prof);

        
        $__internal_f3c07a9ba303e78515d9d8a845b7a2f36205a6e44781c619613ef29f85c9017f->leave($__internal_f3c07a9ba303e78515d9d8a845b7a2f36205a6e44781c619613ef29f85c9017f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/bruno/Sites/Eurotrade_v2/app/Resources/views/base.html.twig");
    }
}
