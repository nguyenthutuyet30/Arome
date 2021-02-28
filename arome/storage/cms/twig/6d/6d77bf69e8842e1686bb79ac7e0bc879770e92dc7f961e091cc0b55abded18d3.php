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

/* C:\xampp\htdocs\arome/themes/aroma/partials/header.htm */
class __TwigTemplate_2db5117beef839e3010059478dedd8477e64e4c3226bdefdc4e617a875ec54b2 extends \Twig\Template
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
        $tags = array("partial" => 10, "component" => 24, "for" => 41);
        $filters = array("page" => 5, "theme" => 5, "escape" => 42);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'component', 'for'],
                ['page', 'theme', 'escape'],
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
        echo "<div class=\"header-bottom-area\" id=\"header-main\">
    <div class=\"container\">
        <div class=\"row header-bottom-inner\">
            <div class=\"header_logo col-lg-2 col-xl-2 col-md-12 col-xs-12\" id=\"header_logo\">
                <a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png");
        echo "\" alt=\"harosa\"></a>
                <div class=\"blockcart cart-preview mobile-view\">

                    <div class=\"mini-cart-wrapper\">

                        ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cart/mini-cart"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "                    </div>

                    <div class=\"search-product\" class=\"openBtn\" onclick=\"openSearch()\">
                        <i class=\"fas fa-search\"></i>
                    </div>
                </div>

            </div>
            <div class=\"menu col-xs-12 col-lg-10 col-xl-10 col-md-12\" id=\"menu\">
                <div class=\"col-right col-xs-12 col-lg-12 col-xl-12 col-md-12 display_top\">
                    <!-- main-menu -->
                    <div class=\"main-menu\">
                        <nav>
                            ";
        // line 24
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("staticMenu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 25
        echo "                        </nav>
                    </div>
                    <div class=\"mobile-menu-area\">
                        <div class=\"mobile-menu\">
                            <nav id=\"mobile-menu-active\">
                                <ul class=\"menu-overflow\">
                                    <div class=\"block-search-mobile\">
                                        <div id=\"search_widget-mobile\" class=\"search_top\">
                                            <form method=\"get\" action=\"#\">
                                                <!-- <input type=\"text\" name=\"search\" value=\"\" placeholder=\"Tìm kiếm...\"
                                                    class=\"text_input\">
                                                <button type=\"submit\" class=\"button-mobile\"><i
                                                        class=\"fa fa-search\"></i></button> -->
                                            </form>
                                        </div>
                                    </div>
                                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 42
            echo "                                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "</a></li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class=\"blockcart cart-preview\">
                        <div class=\"block-search  dropdown js-dropdown\">
                            <span class=\"search-icon\"><i class=\"fa fa-search\"></i></span>
                            <div id=\"search_widget\" class=\"search_top dropdown-menu\">
                                <form id=\"form-search-pc\" data-request=\"ProductList::onSearchProductList\">
                                    <input class=\"text_input\" id=\"search-pc\" name=\"search-pc\" value=\"\" placeholder=\"Nhập sản phẩm cần tìm và nhấn Enter...\"
                                        type=\"text\">
                                    <!-- <button type=\"submit\"><i class=\"fa fa-search\"></i></button> -->
                                </form>
                            </div>
                        </div>
                        <div class=\"mini-cart-wrapper desktop-view\">
                            ";
        // line 60
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cart/mini-cart"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 61
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 189
        echo "
";
        // line 260
        echo "
<!-- Overlay search mobile -->
<div id=\"myOverlay\" class=\"overlay\">
    <span class=\"closebtn\" onclick=\"closeSearch()\" title=\"Close Overlay\">×</span>
    <div class=\"overlay-content\">
        <form action=\"\">
            <input type=\"text\" placeholder=\"Vui lòng nhập nội dung cần tìm\" name=\"search\">
            <p class=\"search-description\">Nhập nội dung cần tìm kiếm và nhấn nút Enter</p>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 260,  166 => 189,  156 => 61,  152 => 60,  134 => 44,  123 => 42,  119 => 41,  101 => 25,  97 => 24,  82 => 11,  78 => 10,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"header-bottom-area\" id=\"header-main\">
    <div class=\"container\">
        <div class=\"row header-bottom-inner\">
            <div class=\"header_logo col-lg-2 col-xl-2 col-md-12 col-xs-12\" id=\"header_logo\">
                <a href=\"{{ 'home' | page }}\"><img src=\"{{ 'assets/img/logo.png' | theme}}\" alt=\"harosa\"></a>
                <div class=\"blockcart cart-preview mobile-view\">

                    <div class=\"mini-cart-wrapper\">

                        {% partial 'cart/mini-cart' %}
                    </div>

                    <div class=\"search-product\" class=\"openBtn\" onclick=\"openSearch()\">
                        <i class=\"fas fa-search\"></i>
                    </div>
                </div>

            </div>
            <div class=\"menu col-xs-12 col-lg-10 col-xl-10 col-md-12\" id=\"menu\">
                <div class=\"col-right col-xs-12 col-lg-12 col-xl-12 col-md-12 display_top\">
                    <!-- main-menu -->
                    <div class=\"main-menu\">
                        <nav>
                            {% component 'staticMenu' %}
                        </nav>
                    </div>
                    <div class=\"mobile-menu-area\">
                        <div class=\"mobile-menu\">
                            <nav id=\"mobile-menu-active\">
                                <ul class=\"menu-overflow\">
                                    <div class=\"block-search-mobile\">
                                        <div id=\"search_widget-mobile\" class=\"search_top\">
                                            <form method=\"get\" action=\"#\">
                                                <!-- <input type=\"text\" name=\"search\" value=\"\" placeholder=\"Tìm kiếm...\"
                                                    class=\"text_input\">
                                                <button type=\"submit\" class=\"button-mobile\"><i
                                                        class=\"fa fa-search\"></i></button> -->
                                            </form>
                                        </div>
                                    </div>
                                    {% for item in staticMenu.menuItems %}
                                    <li><a href=\"{{ item.url }}\">{{ item.title }}</a></li>
                                    {% endfor %}
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class=\"blockcart cart-preview\">
                        <div class=\"block-search  dropdown js-dropdown\">
                            <span class=\"search-icon\"><i class=\"fa fa-search\"></i></span>
                            <div id=\"search_widget\" class=\"search_top dropdown-menu\">
                                <form id=\"form-search-pc\" data-request=\"ProductList::onSearchProductList\">
                                    <input class=\"text_input\" id=\"search-pc\" name=\"search-pc\" value=\"\" placeholder=\"Nhập sản phẩm cần tìm và nhấn Enter...\"
                                        type=\"text\">
                                    <!-- <button type=\"submit\"><i class=\"fa fa-search\"></i></button> -->
                                </form>
                            </div>
                        </div>
                        <div class=\"mini-cart-wrapper desktop-view\">
                            {% partial 'cart/mini-cart' %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{# <div class=\"header-bottom-area\" id=\"header-main\">
    <div class=\"nav-style-01-wrap\">
        <div class=\"herboil__navbar-area navbar-area navbar-style-1\">
            <div class=\"container\">
                <div class=\"row header-bottom-inner\">
                    <div class=\"header_logo col-lg-2 col-xl-2 col-md-12 col-xs-12\" id=\"header_logo\">
                        <a href=\"{{ 'home' | page }}\"><img src=\"{{ 'assets/img/logo.png' | theme}}\" alt=\"harosa\"></a>
                        <!-- <div class=\"blockcart cart-preview mobile-view\">
                            <div class=\"mini-cart-wrapper\">
                                {% partial 'cart/mini-cart' %}
                            </div>
                        </div> -->
                    </div>
                    <div class=\"col-xs-12 col-lg-10 col-xl-10 col-md-12\">
                        <div class=\"mobile-menu\"></div>
                        <div class=\"herboil__navbar-inner\">
                            <div class=\"herboil__navbar\">
                                <nav>
                                    <ul>
                                        <li><a href=\"{{ 'home' | page }}\">TRANG CHỦ <i class=\"fa fa-angle-down\"></i></a>
                                        </li>
                                        <li><a href=\"{{ 'about' | page }}\">VỀ CHÚNG TÔI</a></li>
                                        <li><a href=\"#\">Shop <i class=\"fa fa-angle-down\"></i></a>
                                            <ul>
                                                <li><a href=\"{{ 'all-product' | page }}\">SẢN PHẨM</a></li>
                                                <li><a href=\"shop-sidebar.html\">Shop Sidebar</a></li>
                                                <li><a href=\"product-details.html\">Product Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"{{ 'blog' | page }}\">Blog <i class=\"fa fa-angle-down\"></i></a>
                                        </li>

                                        <li><a href=\"{{ 'contact' | page }}\">LIÊN HỆ</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class=\"header-search-minicart\">
                                <!-- Search -->
                                <div class=\"header-search\">
                                    <form action=\"#\" class=\"form-input-box\">
                                        <input type=\"text\" placeholder=\"Search...\">
                                        <button type=\"submit\"><i class=\"icon-Group-6703\"></i></button>
                                    </form>
                                </div>
                                <!-- Mini Cart -->
                                <div class=\"herboil__mini-cart\">
                                    <ul>
                                        <li>
                                            <a href=\"#\"><i class=\"icon-Group-6704\"></i><span><span
                                                        class=\"cart-text\">CART</span> [ 3 ]</span></a>
                                            <ul class=\"mini-cart-wrapper\">
                                                <li>
                                                    <div class=\"mini-cart-item\">
                                                        <div class=\"mini-cart-item-img\">
                                                            <a href=\"product-details.html\"><img
                                                                    src=\"assets/img/product/1.jpg\" alt=\"#\"></a>
                                                        </div>
                                                        <div class=\"mini-cart-item-content\">
                                                            <h4><a href=\"product-details.html\">CBD Beard Oil</a></h4>
                                                            <span>1 x \$149.00</span>
                                                            <span class=\"remove\"><a href=\"#\"><i
                                                                        class=\"fa fa-trash\"></i></a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"mini-cart-item\">
                                                        <div class=\"mini-cart-item-img\">
                                                            <a href=\"product-details.html\"><img
                                                                    src=\"assets/img/product/2.jpg\" alt=\"#\"></a>
                                                        </div>
                                                        <div class=\"mini-cart-item-content\">
                                                            <h4><a href=\"product-details.html\">Crown'd Beard Oil</a>
                                                            </h4>
                                                            <span>1 x \$99.00</span>
                                                            <span class=\"remove\"><a href=\"#\"><i
                                                                        class=\"fa fa-trash\"></i></a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"mini-cart-item\">
                                                        <div class=\"mini-cart-item-img\">
                                                            <a href=\"product-details.html\"><img
                                                                    src=\"assets/img/product/3.jpg\" alt=\"#\"></a>
                                                        </div>
                                                        <div class=\"mini-cart-item-content\">
                                                            <h4><a href=\"product-details.html\">Cremo Beard Oil</a></h4>
                                                            <span>1 x \$89.00</span>
                                                            <span class=\"remove\"><a href=\"#\"><i
                                                                        class=\"fa fa-trash\"></i></a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"mini-cart-item\">
                                                        <h4>Subtotal: <strong class=\"pull-right\">\$337.00</strong></h4>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"mini-cart-item\">
                                                        <div class=\"btn-wrapper\">
                                                            <a href=\"cart.html\" class=\"boxed-btn\">View Cart</a>
                                                            <a href=\"checkout.html\"
                                                                class=\"boxed-btn pull-right\">Checkout</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>#}

{# <div class=\"header-bottom-area\" id=\"header-main\">
    <div class=\"container\">
        <div class=\"row header-bottom-inner\">
            <div class=\"header_logo col-lg-2 col-xl-2 col-md-12 col-xs-12\" id=\"header_logo\">
                <a href=\"{{ 'home' | page }}\"><img src=\"{{ 'assets/img/logo.png' | theme}}\" alt=\"harosa\"></a>
                <div class=\"blockcart cart-preview mobile-view\">
                    <div class=\"mini-cart-wrapper\">
                        {% partial 'cart/mini-cart' %}
                    </div>
                </div>
            </div>
            <div class=\"menu col-xs-12 col-lg-10 col-xl-10 col-md-12\" id=\"menu\">
                <div class=\"col-right col-xs-12 col-lg-12 col-xl-12 col-md-12 display_top\">
                    <!-- main-menu -->
                    <div class=\"main-menu\">
                        <nav>
                            {% component 'staticMenu' %}
                        </nav>
                    </div>
                    <div class=\"mobile-menu-area\">
                        <div class=\"mobile-menu\"></div>
                        <div class=\"herboil__navbar-inner\">
                            <div class=\"herboil__navbar\">
                                <nav>
                                    <ul>
                                        <li><a href=\"\">Home <i class=\"fa fa-angle-down\"></i></a>

                                        </li>
                                        <li><a href=\"about.html\">About us</a></li>
                                        <li><a href=\"#\">Shop <i class=\"fa fa-angle-down\"></i></a>
                                            <ul>
                                                <li><a href=\"shop.html\">Shop</a></li>
                                                <li><a href=\"shop-sidebar.html\">Shop Sidebar</a></li>
                                                <li><a href=\"product-details.html\">Product Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"#\">Blog <i class=\"fa fa-angle-down\"></i></a>
                                            <ul>
                                                <li><a href=\"blog.html\">Blog</a></li>
                                                <li><a href=\"blog-sidebar.html\">Blog Sidebar</a></li>
                                                <li><a href=\"blog-details.html\">Blog Details</a></li>
                                            </ul>
                                        </li>

                                        <li><a href=\"contact.html\">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>
                    <div class=\"blockcart cart-preview\">
                        <div class=\"block-search  dropdown js-dropdown\">
                            <span class=\"search-icon\"><i class=\"fa fa-search\"></i></span>
                            <div id=\"search_widget\" class=\"search_top dropdown-menu\">
                                <form method=\"get\" action=\"#\">
                                    <input class=\"text_input\" name=\"s\" value=\"\" placeholder=\"Tìm kiếm...\" type=\"text\">
                                    <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class=\"mini-cart-wrapper desktop-view\">
                            {% partial 'cart/mini-cart' %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> #}

<!-- Overlay search mobile -->
<div id=\"myOverlay\" class=\"overlay\">
    <span class=\"closebtn\" onclick=\"closeSearch()\" title=\"Close Overlay\">×</span>
    <div class=\"overlay-content\">
        <form action=\"\">
            <input type=\"text\" placeholder=\"Vui lòng nhập nội dung cần tìm\" name=\"search\">
            <p class=\"search-description\">Nhập nội dung cần tìm kiếm và nhấn nút Enter</p>
        </form>
    </div>
</div>", "C:\\xampp\\htdocs\\arome/themes/aroma/partials/header.htm", "");
    }
}
