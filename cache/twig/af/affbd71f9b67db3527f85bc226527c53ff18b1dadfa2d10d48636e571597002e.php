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
        // line 1
        echo "<div class=\"toggle_btn\">
    <span></span>
</div>

<div class=\"menu navi\">
    <div class=\"row\">
    <div class=\"menu-text col-md-6\">
        ";
        // line 31
        echo "    </div>
        <div class=\"contact col-md-6\">
            lol test
        </div>


    </div>

    <ul>
        ";
        // line 40
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdown", []), "enabled", [])) {
            // line 41
            echo "        ";
            echo $this->getAttribute($this, "loop", [0 => ($context["pages"] ?? null)], "method");
            echo "
";
        } else {
            // line 43
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 44
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("selected") : (""));
                // line 45
                echo "            <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
                <a href=\"";
                // line 46
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">
                    ";
                // line 47
                if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", [])) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", []);
                    echo "\"></i>";
                }
                // line 48
                echo "                    ";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 53
            echo "        <li>
            <a href=\"";
            // line 54
            echo $this->getAttribute($context["mitem"], "url", []);
            echo "\">
                ";
            // line 55
            if ($this->getAttribute($context["mitem"], "icon", [])) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($context["mitem"], "icon", []);
                echo "\"></i>";
            }
            // line 56
            echo "                ";
            echo $this->getAttribute($context["mitem"], "text", []);
            echo "
            </a>
        </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo " </ul>


";
        // line 63
        echo "<script type=\"text/javascript\">
    var btn = document.querySelector('.toggle_btn');
    var nav = document.querySelector('.navi');
    btn.onclick = function(){
        nav.classList.toggle('nav_open');
    };
</script>";
    }

    // line 8
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 9
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 10
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("selected") : (""));
                // line 11
                echo "                ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 12
                    echo "                    <li class=\"has-children ";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                        <a href=\"";
                    // line 13
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\">
                            ";
                    // line 14
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                        echo "\"></i>";
                    }
                    // line 15
                    echo "                            ";
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                        </a>
                        <ul>
                            ";
                    // line 18
                    echo $this->getAttribute($this, "loop", [0 => $context["p"]], "method");
                    echo "
                        </ul>
                    </li>
                ";
                } else {
                    // line 22
                    echo "                    <li class=\"";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                        <a href=\"";
                    // line 23
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\">
                            ";
                    // line 24
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                        echo "\"></i>";
                    }
                    // line 25
                    echo "                            ";
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                        </a>
                    </li>
                ";
                }
                // line 29
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 30,  211 => 29,  203 => 25,  197 => 24,  193 => 23,  188 => 22,  181 => 18,  174 => 15,  168 => 14,  164 => 13,  159 => 12,  156 => 11,  153 => 10,  148 => 9,  136 => 8,  126 => 63,  121 => 59,  110 => 56,  104 => 55,  100 => 54,  97 => 53,  93 => 52,  81 => 48,  75 => 47,  71 => 46,  66 => 45,  63 => 44,  58 => 43,  52 => 41,  50 => 40,  39 => 31,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"toggle_btn\">
    <span></span>
</div>

<div class=\"menu navi\">
    <div class=\"row\">
    <div class=\"menu-text col-md-6\">
        {% macro loop(page) %}
            {% for p in page.children.visible %}
                {% set current_page = (p.active or p.activeChild) ? 'selected' : '' %}
                {% if p.children.visible.count > 0 %}
                    <li class=\"has-children {{ current_page }}\">
                        <a href=\"{{ p.url }}\">
                            {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                            {{ p.menu }}
                        </a>
                        <ul>
                            {{ _self.loop(p) }}
                        </ul>
                    </li>
                {% else %}
                    <li class=\"{{ current_page }}\">
                        <a href=\"{{ p.url }}\">
                            {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                            {{ p.menu }}
                        </a>
                    </li>
                {% endif %}
            {% endfor %}
        {% endmacro %}
    </div>
        <div class=\"contact col-md-6\">
            lol test
        </div>


    </div>

    <ul>
        {% if theme_config.dropdown.enabled %}
        {{ _self.loop(pages) }}
{% else %}
        {% for page in pages.children.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'selected' : '' %}
            <li class=\"{{ current_page }}\">
                <a href=\"{{ page.url }}\">
                    {% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon }}\"></i>{% endif %}
                    {{ page.menu }}
                </a>
            </li>
        {% endfor %}
{% endif %}{% for mitem in site.menu %}
        <li>
            <a href=\"{{ mitem.url }}\">
                {% if mitem.icon %}<i class=\"fa fa-{{ mitem.icon }}\"></i>{% endif %}
                {{ mitem.text }}
            </a>
        </li>
{% endfor %} </ul>


{# Bloc JS #}
<script type=\"text/javascript\">
    var btn = document.querySelector('.toggle_btn');
    var nav = document.querySelector('.navi');
    btn.onclick = function(){
        nav.classList.toggle('nav_open');
    };
</script>", "partials/navigation.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\partials\\navigation.html.twig");
    }
}
