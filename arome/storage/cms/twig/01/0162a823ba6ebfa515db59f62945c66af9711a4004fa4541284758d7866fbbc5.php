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

/* C:\xampp\htdocs\arome/themes/aroma/partials/product/catalog.htm */
class __TwigTemplate_7499314ddf618539bc50ae07a648ae88f5f25095c4acd9ce51aa059651ab9a22 extends \Twig\Template
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
        $tags = array("if" => 2, "set" => 4, "for" => 28, "partial" => 30);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for', 'partial'],
                [],
                []
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
        // line 2
        if ( !twig_test_empty(($context["obActiveCategory"] ?? null))) {
            // line 3
            echo "
";
            // line 4
            $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, true, 4), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, true, 4)], "method", false, false, true, 4), "active", [], "method", false, false, true, 4), "category", [0 => twig_get_attribute($this->env, $this->source, ($context["obActiveCategory"] ?? null), "id", [], "any", false, false, true, 4), 1 => true], "method", false, false, true, 4);
        } else {
            // line 6
            $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, true, 6), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, true, 6)], "method", false, false, true, 6), "active", [], "method", false, false, true, 6);
        }
        // line 9
        $context["iPage"] = twig_get_attribute($this->env, $this->source, ($context["Pagination"] ?? null), "getPageFromRequest", [], "method", false, false, true, 9);
        // line 10
        $context["iCount"] = twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "count", [], "method", false, false, true, 10);
        // line 11
        echo "
";
        // line 13
        if (($context["search"] ?? null)) {
            // line 14
            echo "    ";
            $context["arProductList"] = twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "filterProductList", [0 => twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "page", [0 => ($context["iPage"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["Pagination"] ?? null), "getCountPerPage", [], "method", false, false, true, 14)], "method", false, false, true, 14), 1 => ($context["search"] ?? null)], "method", false, false, true, 14);
            // line 15
            echo "    
";
        } else {
            // line 17
            echo "    ";
            $context["arProductList"] = twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "page", [0 => ($context["iPage"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["Pagination"] ?? null), "getCountPerPage", [], "method", false, false, true, 17)], "method", false, false, true, 17);
        }
        // line 19
        echo "
";
        // line 20
        if ( !twig_test_empty(($context["arProductList"] ?? null))) {
            // line 22
            echo "<div class=\"shop-grid-list-view-tab-content\">
    <div class=\"tab-content\">
        <!-- Shop Grid View -->
        <div class=\"tab-pane fade active show\" id=\"shop_grid_view\">
            <div class=\"shop-grid-view-tab-content-inner\">
                <div class=\"row\">
                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["arProductList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
                // line 29
                echo "                    <div class=\"col-xl-3 col-lg-4 col-6\">
                        ";
                // line 30
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['obProduct'] = $context["obProduct"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/product-card"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 31
                echo "                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                    <div class=\"col-lg-12\">
                        ";
            // line 34
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['iCount'] = ($context["iCount"] ?? null)            ;
            $context['__cms_partial_params']['iPage'] = ($context["iPage"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/pagination"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 35
            echo "                    </div>
                </div>

            </div>
        </div>
        <div class=\"tab-pane fade\" id=\"shop_list_view\">
            <div class=\"shop-list-view-tab-content-inner\">
                <div class=\"row\">
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["arProductList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
                // line 44
                echo "                    <div class=\"col-12\">
                        ";
                // line 45
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['obProduct'] = $context["obProduct"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/product-card-lage"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 46
                echo "                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                    <div class=\"col-lg-12\">
                        ";
            // line 49
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['iCount'] = ($context["iCount"] ?? null)            ;
            $context['__cms_partial_params']['iPage'] = ($context["iPage"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/pagination"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 50
            echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        } else {
            // line 57
            echo "<div>
    Không có sản phẩm nào.
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/partials/product/catalog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 57,  172 => 50,  166 => 49,  163 => 48,  156 => 46,  151 => 45,  148 => 44,  144 => 43,  134 => 35,  128 => 34,  125 => 33,  118 => 31,  113 => 30,  110 => 29,  106 => 28,  98 => 22,  96 => 20,  93 => 19,  89 => 17,  85 => 15,  82 => 14,  80 => 13,  77 => 11,  75 => 10,  73 => 9,  70 => 6,  67 => 4,  64 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Get product collection #}
{% if obActiveCategory is not empty %}

{% set obProductList = ProductList.make().sort(ProductList.getSorting()).active().category(obActiveCategory.id, true) %}
{% else %}
{% set obProductList = ProductList.make().sort(ProductList.getSorting()).active() %}
{% endif %}
{# Get array with pagination buttons #}
{% set iPage = Pagination.getPageFromRequest() %}
{% set iCount = obProductList.count() %}

{# Apply pagination to product collection and get array with product items #}
{% if search %}
    {% set arProductList = ProductList.filterProductList(obProductList.page(iPage, Pagination.getCountPerPage()), search) %}
    
{% else %}
    {% set arProductList = obProductList.page(iPage, Pagination.getCountPerPage()) %}
{% endif %}

{% if arProductList is not empty %}
{# Render product list #}
<div class=\"shop-grid-list-view-tab-content\">
    <div class=\"tab-content\">
        <!-- Shop Grid View -->
        <div class=\"tab-pane fade active show\" id=\"shop_grid_view\">
            <div class=\"shop-grid-view-tab-content-inner\">
                <div class=\"row\">
                    {% for obProduct in arProductList %}
                    <div class=\"col-xl-3 col-lg-4 col-6\">
                        {% partial 'product/product-card' obProduct=obProduct %}
                    </div>
                    {% endfor %}
                    <div class=\"col-lg-12\">
                        {% partial 'product/pagination' iCount=iCount iPage=iPage %}
                    </div>
                </div>

            </div>
        </div>
        <div class=\"tab-pane fade\" id=\"shop_list_view\">
            <div class=\"shop-list-view-tab-content-inner\">
                <div class=\"row\">
                    {% for obProduct in arProductList %}
                    <div class=\"col-12\">
                        {% partial 'product/product-card-lage' obProduct=obProduct %}
                    </div>
                    {% endfor %}
                    <div class=\"col-lg-12\">
                        {% partial 'product/pagination' iCount=iCount iPage=iPage %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% else %}
<div>
    Không có sản phẩm nào.
</div>
{% endif %}", "C:\\xampp\\htdocs\\arome/themes/aroma/partials/product/catalog.htm", "");
    }
}
