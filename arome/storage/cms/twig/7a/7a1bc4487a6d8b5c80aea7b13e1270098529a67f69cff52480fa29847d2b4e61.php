<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\arome/themes/aroma/partials/pagination/pagination.htm */
class __TwigTemplate_a50cf3a2dd6d6b23b549a3e1290a2916775bfb734bd1d9bec56f3b85754d1a9d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("set" => 1, "if" => 4, "for" => 5);
        $filters = array("escape" => 6);
        $functions = array("url_current" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
                ['url_current']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["arPaginationList"] = twig_get_attribute($this->env, $this->source, ($context["Pagination"] ?? null), "get", [0 => ($context["iPage"] ?? null), 1 => ($context["iCount"] ?? null)], "method", false, false, true, 1);
        // line 2
        echo "
";
        // line 4
        if ( !twig_test_empty(($context["arPaginationList"] ?? null))) {
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["arPaginationList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["arPagination"]) {
                // line 6
                echo "<a href=\"";
                echo call_user_func_array($this->env->getFunction('url_current')->getCallable(), ["current"]);
                echo "?page=";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["arPagination"], "value", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["arPagination"], "class", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
                echo "\"
    data-code=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["arPagination"], "code", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
                echo "\">
    ";
                // line 8
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["arPagination"], "name", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                echo "
</a>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arPagination'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/partials/pagination/pagination.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 8,  82 => 7,  73 => 6,  69 => 5,  67 => 4,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set arPaginationList = Pagination.get(iPage, iCount) %}

{# Render pagination buttons #}
{% if arPaginationList is not empty %}
{% for arPagination in arPaginationList %}
<a href=\"{{ url_current() }}?page={{ arPagination.value }}\" class=\"{{ arPagination.class }}\"
    data-code=\"{{ arPagination.code }}\">
    {{ arPagination.name }}
</a>
{% endfor %}
{% endif %}", "C:\\xampp\\htdocs\\arome/themes/aroma/partials/pagination/pagination.htm", "");
    }
}
