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
        // line 32
        echo "</head>
<body id=\"top\" class=\"";
        // line 33
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">

";
        // line 35
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('footer', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('bottom', $context, $blocks);
        // line 59
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
        // line 29
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
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/app.js"], "method");
        // line 27
        echo "
        ";
    }

    // line 35
    public function block_header($context, array $blocks = [])
    {
        // line 36
        echo "        ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 36)->display($context);
        // line 37
        echo "
";
    }

    // line 40
    public function block_body($context, array $blocks = [])
    {
        // line 41
        echo "    <section id=\"body\">
        <div class=\"wrapper padding\">
        ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "        </div>
    </section>
";
    }

    // line 43
    public function block_content($context, array $blocks = [])
    {
    }

    // line 48
    public function block_footer($context, array $blocks = [])
    {
        // line 49
        echo "    <div class=\"footer text-center\">
        <div class=\"wrapper padding\">
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
        </div>
    </div>
";
    }

    // line 56
    public function block_bottom($context, array $blocks = [])
    {
        // line 57
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
        return array (  208 => 57,  205 => 56,  196 => 49,  193 => 48,  188 => 43,  182 => 44,  180 => 43,  176 => 41,  173 => 40,  168 => 37,  165 => 36,  162 => 35,  157 => 27,  154 => 26,  151 => 25,  148 => 24,  143 => 20,  140 => 19,  137 => 18,  134 => 17,  131 => 16,  123 => 29,  121 => 24,  115 => 22,  113 => 16,  108 => 14,  104 => 13,  101 => 12,  99 => 11,  88 => 7,  85 => 6,  82 => 5,  75 => 59,  73 => 56,  70 => 55,  68 => 48,  65 => 47,  63 => 40,  60 => 39,  58 => 35,  53 => 33,  50 => 32,  48 => 5,  43 => 3,  40 => 2,  38 => 1,);
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
        {% do assets.addJs('jquery', 100)%}
    {% do assets.addJs('theme://js/app.js')%}

        {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

{% block header %}
        {% include 'partials/header.html.twig' %}

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
