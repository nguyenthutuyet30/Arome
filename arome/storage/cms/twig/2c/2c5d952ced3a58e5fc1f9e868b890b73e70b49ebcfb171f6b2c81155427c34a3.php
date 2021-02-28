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

/* C:\xampp\htdocs\arome/themes/aroma/pages/all-product.htm */
class __TwigTemplate_db0ae63db6324b6d25cef62fc53f015f2a09ad1ea1401f0c36e1006b4b997056 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 39, "partial" => 51);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'partial'],
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
        // line 1
        $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, true, 1), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, true, 1)], "method", false, false, true, 1), "active", [], "method", false, false, true, 1);
        // line 2
        echo "
";
        // line 3
        $context["iPage"] = twig_get_attribute($this->env, $this->source, ($context["Pagination"] ?? null), "getPageFromRequest", [], "method", false, false, true, 3);
        // line 4
        $context["iCount"] = twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "count", [], "method", false, false, true, 4);
        // line 5
        echo "
";
        // line 6
        $context["arProductList"] = twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "page", [0 => ($context["iPage"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["Pagination"] ?? null), "getCountPerPage", [], "method", false, false, true, 6)], "method", false, false, true, 6);
        // line 7
        echo "
<!-- BANNER HEADER -->


<div class=\"banner-header banner-product\">
    <div class=\"container text-center\">
        <h1>Sản phẩm</h1>
    </div>
</div>
<!-- END BANNER HEADER -->
<div class=\"shop-area padding-top-60 padding-bottom-60  mobile-pt-30 mobile-pb-75 tab-pt-110\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"shop-inner\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- shop-options -->
                            <div class=\"shop-options  clearfix\">
                                <div class=\"shop-grid-list-view-tab-menu\">
                                    <div class=\"nav\">
                                        <a class=\"active show\" data-toggle=\"tab\" href=\"#shop_grid_view\"><i
                                                class=\"fa fa-th\"></i></a>
                                        <!-- <a data-toggle=\"tab\" href=\"#shop_list_view\" class=\"\"><i
                                                class=\"fa fa-th-list\"></i></a> -->
                                    </div>
                                </div>
                                <div class=\"showing-product-number\">
                                    <span>Showing 9 of 20 results</span>
                                </div>
                                <div class=\"short-by\">
                                    <select class=\"nice-select\">
                                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["obProducts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
            // line 40
            echo "                                        <option>Default sorting</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by new arrivals</option>
                                        <option>Sort by price: low to high</option>
                                        <option>Sort by price: high to low</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            ";
        // line 51
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/catalog"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 52
        echo "                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-12\">
                ";
        // line 57
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['iPage'] = ($context["iPage"] ?? null)        ;
        $context['__cms_partial_params']['iCount'] = ($context["iCount"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pagination/pagination"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 58
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/pages/all-product.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 58,  143 => 57,  136 => 52,  132 => 51,  125 => 46,  114 => 40,  110 => 39,  76 => 7,  74 => 6,  71 => 5,  69 => 4,  67 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set obProductList = ProductList.make().sort(ProductList.getSorting()).active() %}

{% set iPage = Pagination.getPageFromRequest() %}
{% set iCount = obProductList.count() %}

{% set arProductList = obProductList.page(iPage, Pagination.getCountPerPage()) %}

<!-- BANNER HEADER -->


<div class=\"banner-header banner-product\">
    <div class=\"container text-center\">
        <h1>Sản phẩm</h1>
    </div>
</div>
<!-- END BANNER HEADER -->
<div class=\"shop-area padding-top-60 padding-bottom-60  mobile-pt-30 mobile-pb-75 tab-pt-110\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"shop-inner\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- shop-options -->
                            <div class=\"shop-options  clearfix\">
                                <div class=\"shop-grid-list-view-tab-menu\">
                                    <div class=\"nav\">
                                        <a class=\"active show\" data-toggle=\"tab\" href=\"#shop_grid_view\"><i
                                                class=\"fa fa-th\"></i></a>
                                        <!-- <a data-toggle=\"tab\" href=\"#shop_list_view\" class=\"\"><i
                                                class=\"fa fa-th-list\"></i></a> -->
                                    </div>
                                </div>
                                <div class=\"showing-product-number\">
                                    <span>Showing 9 of 20 results</span>
                                </div>
                                <div class=\"short-by\">
                                    <select class=\"nice-select\">
                                        {% for obProduct in obProducts %}
                                        <option>Default sorting</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by new arrivals</option>
                                        <option>Sort by price: low to high</option>
                                        <option>Sort by price: high to low</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            {% partial 'product/catalog' %}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-12\">
                {% partial 'pagination/pagination' iPage= iPage iCount= iCount%}
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\arome/themes/aroma/pages/all-product.htm", "");
    }
}
