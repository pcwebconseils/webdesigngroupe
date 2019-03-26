<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_688bec0110d1ae505cf80da2613e686b0f408e422bc1386860f1a0a8c7ac2275 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [])));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 31
        echo "</head>
<body id=\"top\" class=\"";
        // line 32
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">

";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('footer', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('bottom', $context, $blocks);
        // line 69
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

    ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://unpkg.com/purecss@1.0.0/build/pure-min.css", 1 => 100], "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", 1 => 99], "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 98], "method");
        // line 20
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
    ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = [])
    {
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/app.js", 1 => 98], "method");
        // line 27
        echo "    ";
    }

    // line 34
    public function block_header($context, array $blocks = [])
    {
        // line 35
        echo "    <div class=\"header\">
        <div class=\"wrapper padding\">
            ";
        // line 41
        echo "            ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 46
        echo "        </div>
    </div>
";
    }

    // line 41
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 42
        echo "            <nav class=\"main-nav\">
                ";
        // line 43
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 43)->display($context);
        // line 44
        echo "            </nav>
            ";
    }

    // line 50
    public function block_body($context, array $blocks = [])
    {
        // line 51
        echo "    <section id=\"body\">
        <div class=\"wrapper padding\">
        ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "        </div>
    </section>
";
    }

    // line 53
    public function block_content($context, array $blocks = [])
    {
    }

    // line 58
    public function block_footer($context, array $blocks = [])
    {
        // line 59
        echo "    <div class=\"footer text-center\">
        <div class=\"wrapper padding\">
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
        </div>
    </div>
";
    }

    // line 66
    public function block_bottom($context, array $blocks = [])
    {
        // line 67
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 67,  223 => 66,  214 => 59,  211 => 58,  206 => 53,  200 => 54,  198 => 53,  194 => 51,  191 => 50,  186 => 44,  184 => 43,  181 => 42,  178 => 41,  172 => 46,  169 => 41,  165 => 35,  162 => 34,  158 => 27,  155 => 26,  152 => 25,  149 => 24,  144 => 20,  141 => 19,  138 => 18,  135 => 17,  132 => 16,  124 => 28,  122 => 24,  116 => 22,  114 => 16,  109 => 14,  105 => 13,  102 => 12,  100 => 11,  89 => 7,  86 => 6,  83 => 5,  76 => 69,  74 => 66,  71 => 65,  69 => 58,  66 => 57,  64 => 50,  61 => 49,  59 => 34,  54 => 32,  51 => 31,  49 => 5,  44 => 3,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('https://unpkg.com/purecss@1.0.0/build/pure-min.css', 100) %}
        {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 99) %}
        {% do assets.addCss('theme://css/custom.css', 98) %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 100) %}
        {% do assets.addJs('theme://js/app.js', 98) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

{% block header %}
    <div class=\"header\">
        <div class=\"wrapper padding\">
            {#<a class=\"logo left\" href=\"{{ base_url == '' ? '/' : base_url }}\">
                <i class=\"fa fa-rebel\"></i>
                {{ config.site.title }}
            </a>#}
            {% block header_navigation %}
            <nav class=\"main-nav\">
                {% include 'partials/navigation.html.twig' %}
            </nav>
            {% endblock %}
        </div>
    </div>
{% endblock %}

{% block body %}
    <section id=\"body\">
        <div class=\"wrapper padding\">
        {% block content %}{% endblock %}
        </div>
    </section>
{% endblock %}

{% block footer %}
    <div class=\"footer text-center\">
        <div class=\"wrapper padding\">
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
        </div>
    </div>
{% endblock %}

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\partials\\base.html.twig");
    }
}
