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

/* C:\xampp\htdocs\arome/themes/aroma/pages/catalog.htm */
class __TwigTemplate_32a71d59f2f0f253d45a31b3e19858417709ec2a86b137a60278762b8ada85e9 extends \Twig\Template
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
        $tags = array("set" => 1, "partial" => 42);
        $filters = array("escape" => 4);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'partial'],
                ['escape'],
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
        $context["obCategory"] = twig_get_attribute($this->env, $this->source, ($context["CategoryPage"] ?? null), "get", [], "method", false, false, true, 1);
        // line 2
        echo "
<!-- BANNER HEADER -->
<div class=\"banner-header banner-product-item\" data-bg=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCatagory"] ?? null), "filename", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "\"
    style=\"background-image: url('";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obCategory"] ?? null), "preview_image", [], "any", false, false, true, 5), "path", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "');\">
    <div class=\"container text-center\">
        <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCategory"] ?? null), "name", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</h1>
    </div>
</div>
<div class=\"shop-area padding-top-120 padding-bottom-120  mobile-pt-70 mobile-pb-75 tab-pt-110\">
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
                                        <a data-toggle=\"tab\" href=\"#shop_list_view\" class=\"\"><i
                                                class=\"fa fa-th-list\"></i></a>
                                    </div>
                                </div>
                                <div class=\"showing-product-number\">
                                    <span>Showing 9 of 20 results</span>
                                </div>
                                <div class=\"short-by\">
                                    <select class=\"nice-select\">
                                        <option>Default sorting</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by new arrivals</option>
                                        <option>Sort by price: low to high</option>
                                        <option>Sort by price: high to low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            ";
        // line 42
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['obActiveCategory'] = ($context["obCategory"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("product/catalog"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/pages/catalog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 43,  115 => 42,  77 => 7,  72 => 5,  68 => 4,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set obCategory = CategoryPage.get() %}

<!-- BANNER HEADER -->
<div class=\"banner-header banner-product-item\" data-bg=\"{{ obCatagory.filename }}\"
    style=\"background-image: url('{{ obCategory.preview_image.path  }}');\">
    <div class=\"container text-center\">
        <h1>{{ obCategory.name }}</h1>
    </div>
</div>
<div class=\"shop-area padding-top-120 padding-bottom-120  mobile-pt-70 mobile-pb-75 tab-pt-110\">
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
                                        <a data-toggle=\"tab\" href=\"#shop_list_view\" class=\"\"><i
                                                class=\"fa fa-th-list\"></i></a>
                                    </div>
                                </div>
                                <div class=\"showing-product-number\">
                                    <span>Showing 9 of 20 results</span>
                                </div>
                                <div class=\"short-by\">
                                    <select class=\"nice-select\">
                                        <option>Default sorting</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by new arrivals</option>
                                        <option>Sort by price: low to high</option>
                                        <option>Sort by price: high to low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            {% partial 'product/catalog' obActiveCategory=obCategory %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\arome/themes/aroma/pages/catalog.htm", "");
    }
}
