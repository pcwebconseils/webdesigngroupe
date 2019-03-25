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

/* partials/navigation.html.twig */
class __TwigTemplate_84606a4e16c6efd02921aedaf0a4fc3a92c3eced9ba72a20d3e088cbeb0a4d1d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo "    ";
        // line 3
        echo "        ";
        // line 4
        echo "        ";
        // line 5
        echo "            ";
        // line 6
        echo "                ";
        // line 7
        echo "                    ";
        // line 8
        echo "                    ";
        // line 9
        echo "                ";
        // line 10
        echo "                ";
        // line 11
        echo "                    ";
        // line 12
        echo "                ";
        // line 13
        echo "            ";
        // line 14
        echo "        ";
        // line 15
        echo "            ";
        // line 16
        echo "                ";
        // line 17
        echo "                    ";
        // line 18
        echo "                    ";
        // line 19
        echo "                ";
        // line 20
        echo "            ";
        // line 21
        echo "        ";
        // line 22
        echo "    ";
        // line 24
        echo "
";
        // line 26
        echo "    ";
        // line 27
        echo "        ";
        // line 28
        echo "    ";
        // line 29
        echo "        ";
        // line 30
        echo "            ";
        // line 31
        echo "            ";
        // line 32
        echo "                ";
        // line 33
        echo "                    ";
        // line 34
        echo "                    ";
        // line 35
        echo "                ";
        // line 36
        echo "            ";
        // line 37
        echo "        ";
        // line 38
        echo "    ";
        // line 39
        echo "    ";
        // line 40
        echo "        ";
        // line 41
        echo "            ";
        // line 42
        echo "                ";
        // line 43
        echo "                ";
        // line 44
        echo "            ";
        // line 45
        echo "        ";
        // line 46
        echo "    ";
        // line 48
        echo "
<nav>
    <input type=\"search\" placeholder=\"Rechercher...\">
    <a href=\"#\"><i class=\"material-icons\">home</i>Home</a>
    <a href=\"#\"><i class=\"material-icons\">directions_car</i>Product</a>
    <a href=\"#\"><i class=\"material-icons\">drafts</i>Contact</a>
    <a href=\"#\"><i class=\"material-icons\">face</i>Profile</a>
</nav>";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  117 => 48,  115 => 46,  113 => 45,  111 => 44,  109 => 43,  107 => 42,  105 => 41,  103 => 40,  101 => 39,  99 => 38,  97 => 37,  95 => 36,  93 => 35,  91 => 34,  89 => 33,  87 => 32,  85 => 31,  83 => 30,  81 => 29,  79 => 28,  77 => 27,  75 => 26,  72 => 24,  70 => 22,  68 => 21,  66 => 20,  64 => 19,  62 => 18,  60 => 17,  58 => 16,  56 => 15,  54 => 14,  52 => 13,  50 => 12,  48 => 11,  46 => 10,  44 => 9,  42 => 8,  40 => 7,  38 => 6,  36 => 5,  34 => 4,  32 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#{% macro loop(page) %}#}
    {#{% for p in page.children.visible %}#}
        {#{% set current_page = (p.active or p.activeChild) ? 'selected' : '' %}#}
        {#{% if p.children.visible.count > 0 %}#}
            {#<li class=\"has-children {{ current_page }} material-icons\">#}
                {#<a href=\"{{ p.url }}\">#}
                    {#{% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}#}
                    {#{{ p.menu }}#}
                {#</a>#}
                {#<ul>#}
                    {#{{ _self.loop(p) }}#}
                {#</ul>#}
            {#</li>#}
        {#{% else %}#}
            {#<li class=\"{{ current_page }} \">#}
                {#<a href=\"{{ p.url }}\">#}
                    {#{% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}#}
                    {#{{ p.menu }}#}
                {#</a>#}
            {#</li>#}
        {#{% endif %}#}
    {#{% endfor %}#}
{#{% endmacro %}#}

{#<ul>#}
    {#{% if theme_config.dropdown.enabled %}#}
        {#{{ _self.loop(pages) }}#}
    {#{% else %}#}
        {#{% for page in pages.children.visible %}#}
            {#{% set current_page = (page.active or page.activeChild) ? 'selected' : '' %}#}
            {#<li class=\"{{ current_page }}\">#}
                {#<a href=\"{{ page.url }}\">#}
                    {#{% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon }}\"></i>{% endif %}#}
                    {#{{ page.menu }}#}
                {#</a>#}
            {#</li>#}
        {#{% endfor %}#}
    {#{% endif %}#}
    {#{% for mitem in site.menu %}#}
        {#<li>#}
            {#<a href=\"{{ mitem.url }}\">#}
                {#{% if mitem.icon %}<i class=\"fa fa-{{ mitem.icon }}\"></i>{% endif %}#}
                {#{{ mitem.text }}#}
            {#</a>#}
        {#</li>#}
    {#{% endfor %}#}
{#</ul>#}

<nav>
    <input type=\"search\" placeholder=\"Rechercher...\">
    <a href=\"#\"><i class=\"material-icons\">home</i>Home</a>
    <a href=\"#\"><i class=\"material-icons\">directions_car</i>Product</a>
    <a href=\"#\"><i class=\"material-icons\">drafts</i>Contact</a>
    <a href=\"#\"><i class=\"material-icons\">face</i>Profile</a>
</nav>", "partials/navigation.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\partials\\navigation.html.twig");
    }
}
