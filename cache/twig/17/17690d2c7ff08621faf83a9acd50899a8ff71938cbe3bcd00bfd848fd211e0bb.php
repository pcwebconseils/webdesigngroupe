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

/* blueprints.yaml.twig */
class __TwigTemplate_ccb1211c3fce0e61f708abc802303a150709e2e55fd32cc314e48584cecc718e extends \Twig\Template
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
        echo "name: ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("title", $this->getAttribute(($context["component"] ?? null), "name", []));
        echo "
version: 0.1.0
description: ";
        // line 3
        echo $this->getAttribute(($context["component"] ?? null), "description", []);
        echo "
icon: rebel
author:
  name: ";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", []), "name", []);
        echo "
  email: ";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", []), "email", []);
        echo "
homepage: https://github.com/";
        // line 8
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", []), "name", []));
        echo "/grav-theme-";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute(($context["component"] ?? null), "name", []));
        echo "
demo: http://demo.yoursite.com
keywords: grav, theme, etc
bugs: https://github.com/";
        // line 11
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", []), "name", []));
        echo "/grav-theme-";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute(($context["component"] ?? null), "name", []));
        echo "/issues
readme: https://github.com/";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", []), "name", []));
        echo "/grav-theme-";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute(($context["component"] ?? null), "name", []));
        echo "/blob/develop/README.md
license: MIT

form:
  validation: loose
  fields:
    dropdown.enabled:
        type: toggle
        label: Dropdown in Menu
        highlight: 1
        default: 1
        options:
          1: PLUGIN_ADMIN.ENABLED
          0: PLUGIN_ADMIN.DISABLED
        validate:
          type: bool
";
    }

    public function getTemplateName()
    {
        return "blueprints.yaml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  58 => 11,  50 => 8,  46 => 7,  42 => 6,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("name: {{ component.name|titleize }}
version: 0.1.0
description: {{ component.description }}
icon: rebel
author:
  name: {{ component.author.name }}
  email: {{ component.author.email }}
homepage: https://github.com/{{ component.author.name|hyphenize }}/grav-theme-{{ component.name|hyphenize }}
demo: http://demo.yoursite.com
keywords: grav, theme, etc
bugs: https://github.com/{{ component.author.name|hyphenize }}/grav-theme-{{ component.name|hyphenize }}/issues
readme: https://github.com/{{ component.author.name|hyphenize }}/grav-theme-{{ component.name|hyphenize }}/blob/develop/README.md
license: MIT

form:
  validation: loose
  fields:
    dropdown.enabled:
        type: toggle
        label: Dropdown in Menu
        highlight: 1
        default: 1
        options:
          1: PLUGIN_ADMIN.ENABLED
          0: PLUGIN_ADMIN.DISABLED
        validate:
          type: bool
", "blueprints.yaml.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\plugins\\devtools\\components\\theme\\pure-blank\\blueprints.yaml.twig");
    }
}
