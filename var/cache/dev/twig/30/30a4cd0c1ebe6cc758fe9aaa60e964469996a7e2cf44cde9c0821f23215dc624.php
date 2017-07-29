<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_a2f9134308656ac59cb00428b5813fff0d91cd5c6c7ac6d829b8155a720084c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7122fce0920c47535550343b5599d43cfe59aaac0643e181be980b48583adac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7122fce0920c47535550343b5599d43cfe59aaac0643e181be980b48583adac5->enter($__internal_7122fce0920c47535550343b5599d43cfe59aaac0643e181be980b48583adac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_237a41f480f3e5715d1631a960361b24bb8778a197af7d11963808b37b80c987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237a41f480f3e5715d1631a960361b24bb8778a197af7d11963808b37b80c987->enter($__internal_237a41f480f3e5715d1631a960361b24bb8778a197af7d11963808b37b80c987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_7122fce0920c47535550343b5599d43cfe59aaac0643e181be980b48583adac5->leave($__internal_7122fce0920c47535550343b5599d43cfe59aaac0643e181be980b48583adac5_prof);

        
        $__internal_237a41f480f3e5715d1631a960361b24bb8778a197af7d11963808b37b80c987->leave($__internal_237a41f480f3e5715d1631a960361b24bb8778a197af7d11963808b37b80c987_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee0e0c7719da5a1a8561eb8d03e01499287d06c4f5ea4784be3e24b543cd8c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee0e0c7719da5a1a8561eb8d03e01499287d06c4f5ea4784be3e24b543cd8c2f->enter($__internal_ee0e0c7719da5a1a8561eb8d03e01499287d06c4f5ea4784be3e24b543cd8c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_79db7bc12acf090c1e6ac265219759574e68bb6572ce2a343db82d2ab5a917d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79db7bc12acf090c1e6ac265219759574e68bb6572ce2a343db82d2ab5a917d2->enter($__internal_79db7bc12acf090c1e6ac265219759574e68bb6572ce2a343db82d2ab5a917d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_79db7bc12acf090c1e6ac265219759574e68bb6572ce2a343db82d2ab5a917d2->leave($__internal_79db7bc12acf090c1e6ac265219759574e68bb6572ce2a343db82d2ab5a917d2_prof);

        
        $__internal_ee0e0c7719da5a1a8561eb8d03e01499287d06c4f5ea4784be3e24b543cd8c2f->leave($__internal_ee0e0c7719da5a1a8561eb8d03e01499287d06c4f5ea4784be3e24b543cd8c2f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3122b8003834531112ef2da2f1f6561407bd38e4ca1c7977cdc64942cc7684f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3122b8003834531112ef2da2f1f6561407bd38e4ca1c7977cdc64942cc7684f2->enter($__internal_3122b8003834531112ef2da2f1f6561407bd38e4ca1c7977cdc64942cc7684f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fb91902ae244fde7d14cd96fa59b8f0d0509872e309a135e9671af3c35b4c465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb91902ae244fde7d14cd96fa59b8f0d0509872e309a135e9671af3c35b4c465->enter($__internal_fb91902ae244fde7d14cd96fa59b8f0d0509872e309a135e9671af3c35b4c465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fb91902ae244fde7d14cd96fa59b8f0d0509872e309a135e9671af3c35b4c465->leave($__internal_fb91902ae244fde7d14cd96fa59b8f0d0509872e309a135e9671af3c35b4c465_prof);

        
        $__internal_3122b8003834531112ef2da2f1f6561407bd38e4ca1c7977cdc64942cc7684f2->leave($__internal_3122b8003834531112ef2da2f1f6561407bd38e4ca1c7977cdc64942cc7684f2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7902c9c4ac71da219c657eed3b9489f892e0ca469e0f8cd2970063fc73050d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7902c9c4ac71da219c657eed3b9489f892e0ca469e0f8cd2970063fc73050d4->enter($__internal_b7902c9c4ac71da219c657eed3b9489f892e0ca469e0f8cd2970063fc73050d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_436d7105b5b94b554706ef27a14304cf3961f7b55a89dba29cb163b58b0f31d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436d7105b5b94b554706ef27a14304cf3961f7b55a89dba29cb163b58b0f31d0->enter($__internal_436d7105b5b94b554706ef27a14304cf3961f7b55a89dba29cb163b58b0f31d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_436d7105b5b94b554706ef27a14304cf3961f7b55a89dba29cb163b58b0f31d0->leave($__internal_436d7105b5b94b554706ef27a14304cf3961f7b55a89dba29cb163b58b0f31d0_prof);

        
        $__internal_b7902c9c4ac71da219c657eed3b9489f892e0ca469e0f8cd2970063fc73050d4->leave($__internal_b7902c9c4ac71da219c657eed3b9489f892e0ca469e0f8cd2970063fc73050d4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/bruno/Sites/Eurotrade_v2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
