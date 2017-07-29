<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ef4bc1ced39bc5d4d269f628452d4d17fd35ff192edd46dfb4bf704d4e7290f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_7965d35b22e7796cff9d757fd454378c4442ec6ec5d1d6361d4623e8ef581eb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7965d35b22e7796cff9d757fd454378c4442ec6ec5d1d6361d4623e8ef581eb8->enter($__internal_7965d35b22e7796cff9d757fd454378c4442ec6ec5d1d6361d4623e8ef581eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_245d40a82a0bf00dcedbf1004d68d255500297c9b2d620f5dec42b130fc3a229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245d40a82a0bf00dcedbf1004d68d255500297c9b2d620f5dec42b130fc3a229->enter($__internal_245d40a82a0bf00dcedbf1004d68d255500297c9b2d620f5dec42b130fc3a229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7965d35b22e7796cff9d757fd454378c4442ec6ec5d1d6361d4623e8ef581eb8->leave($__internal_7965d35b22e7796cff9d757fd454378c4442ec6ec5d1d6361d4623e8ef581eb8_prof);

        
        $__internal_245d40a82a0bf00dcedbf1004d68d255500297c9b2d620f5dec42b130fc3a229->leave($__internal_245d40a82a0bf00dcedbf1004d68d255500297c9b2d620f5dec42b130fc3a229_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8ab11daabbf3c691547e1006188e77442951d2b9bc83f77afed0a09a037866b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ab11daabbf3c691547e1006188e77442951d2b9bc83f77afed0a09a037866b8->enter($__internal_8ab11daabbf3c691547e1006188e77442951d2b9bc83f77afed0a09a037866b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_67727243b1c1cc01370ecc51aff37311e1df40ed6c9724727696f5dce0a57ccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67727243b1c1cc01370ecc51aff37311e1df40ed6c9724727696f5dce0a57ccd->enter($__internal_67727243b1c1cc01370ecc51aff37311e1df40ed6c9724727696f5dce0a57ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_67727243b1c1cc01370ecc51aff37311e1df40ed6c9724727696f5dce0a57ccd->leave($__internal_67727243b1c1cc01370ecc51aff37311e1df40ed6c9724727696f5dce0a57ccd_prof);

        
        $__internal_8ab11daabbf3c691547e1006188e77442951d2b9bc83f77afed0a09a037866b8->leave($__internal_8ab11daabbf3c691547e1006188e77442951d2b9bc83f77afed0a09a037866b8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6d073eb2de5ee83edadaaa29bd51ee78d561b9a9a9ca2544f16f81e9f6601f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d073eb2de5ee83edadaaa29bd51ee78d561b9a9a9ca2544f16f81e9f6601f1e->enter($__internal_6d073eb2de5ee83edadaaa29bd51ee78d561b9a9a9ca2544f16f81e9f6601f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8693b9575ed4c3a492c37e4bba8ea5358927821ab259bef463601216180fad88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8693b9575ed4c3a492c37e4bba8ea5358927821ab259bef463601216180fad88->enter($__internal_8693b9575ed4c3a492c37e4bba8ea5358927821ab259bef463601216180fad88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8693b9575ed4c3a492c37e4bba8ea5358927821ab259bef463601216180fad88->leave($__internal_8693b9575ed4c3a492c37e4bba8ea5358927821ab259bef463601216180fad88_prof);

        
        $__internal_6d073eb2de5ee83edadaaa29bd51ee78d561b9a9a9ca2544f16f81e9f6601f1e->leave($__internal_6d073eb2de5ee83edadaaa29bd51ee78d561b9a9a9ca2544f16f81e9f6601f1e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_54ff4a72ffed8c3fa5429d32d2bb177f84a30478d9ed7bdf5e679cd8164b3cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ff4a72ffed8c3fa5429d32d2bb177f84a30478d9ed7bdf5e679cd8164b3cf5->enter($__internal_54ff4a72ffed8c3fa5429d32d2bb177f84a30478d9ed7bdf5e679cd8164b3cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_19ee4bd0bfc62bd178d4bed54f4288f29639e7a40bdfa90b8b9a911fc8611cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ee4bd0bfc62bd178d4bed54f4288f29639e7a40bdfa90b8b9a911fc8611cb5->enter($__internal_19ee4bd0bfc62bd178d4bed54f4288f29639e7a40bdfa90b8b9a911fc8611cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_19ee4bd0bfc62bd178d4bed54f4288f29639e7a40bdfa90b8b9a911fc8611cb5->leave($__internal_19ee4bd0bfc62bd178d4bed54f4288f29639e7a40bdfa90b8b9a911fc8611cb5_prof);

        
        $__internal_54ff4a72ffed8c3fa5429d32d2bb177f84a30478d9ed7bdf5e679cd8164b3cf5->leave($__internal_54ff4a72ffed8c3fa5429d32d2bb177f84a30478d9ed7bdf5e679cd8164b3cf5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/bruno/Sites/Eurotrade_v2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
