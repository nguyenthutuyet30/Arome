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

/* C:\xampp\htdocs\arome/themes/aroma/pages/product-page.htm */
class __TwigTemplate_2c9394abfef32a785bad0e809c925a04bcb2ea48512ac78bef26b7259f369ca1 extends \Twig\Template
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
        $tags = array("set" => 2, "if" => 31, "for" => 35);
        $filters = array("page" => 13, "escape" => 37, "raw" => 140);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['page', 'escape', 'raw'],
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
        $context["obProduct"] = twig_get_attribute($this->env, $this->source, ($context["ProductPage"] ?? null), "get", [], "method", false, false, true, 2);
        // line 3
        echo "

<!-- BREADCRUMB AREA START -->
<div class=\"herboil__breadcrumb-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"breadcrumb-inner\">
                    <div class=\"breadcrumb-list\">
                        <ul>
                            <!-- <li><a href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a></li> -->
                            <li><a href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("all-product");
        echo "\">Sản phẩm</a></li>
                            <li><span>Chi tiết sản phẩm</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- SHOP AREA START -->
<div class=\"product-details-area padding-top-60 mobile-pt-30 mobile-pb-40\">
    <div class=\"container\">
        <div class=\"product-details-inner\">
            <div class=\"row\">
                <div class=\"col-xl-7 col-lg-6 col-md-12\">
                    ";
        // line 31
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, true, 31))) {
            // line 32
            echo "                    <div class=\"product-details-img-gallery\">
                        <div class=\"product-details-small-img \">
                            <div class=\"product-details-small-img-active slick-arrow-style-1 slick-dots-style-1\">
                                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, true, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 36
                echo "                                <div class=\"single-img\">
                                    <img src=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 37), "description", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "\">
                                </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                            </div>

                        </div>
                        <div class=\"product-details-large-img\">
                            <div class=\"product-details-large-img-active slick-arrow-style-1 slick-dots-style-1\">
                                ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, true, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 46
                echo "                                <div class=\"single-img\">
                                    <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                echo "\" data-rel=\"lightcase:myCollection\">
                                        <img src=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["img"], "description", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                echo "\">
                                    </a>
                                </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 56
        echo "                </div>
                <div class=\"col-xl-5 col-lg-6 col-md-12\">
                    <div class=\"product-details-content\">
                        <div class=\"customer-review\">
                            <ul>
                                <li><i class=\"fa fa-star\"></i></li>
                                <li><i class=\"fa fa-star\"></i></li>
                                <li><i class=\"fa fa-star\"></i></li>
                                <li><i class=\"fa fa-star-half-o\"></i></li>
                                <li><i class=\"fa fa-star-o\"></i></li>
                            </ul>
                            <span class=\"review-count\"><a href=\"#\">(5 Customer review)</a></span>

                        </div>
                        <h4 class=\"product-title\">";
        // line 70
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "</h4>
                        <p class=\"product-bmi\">(50mg/ml)</p>
                        <div class=\"product-price\">
                            ";
        // line 73
        $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "offer", [], "any", false, false, true, 73), "first", [], "method", false, false, true, 73);
        // line 74
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "isNotEmpty", [], "method", false, false, true, 74)) {
            // line 75
            echo "                            <span class=\"regular-price\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "</span>
                            ";
            // line 76
            if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price", [], "any", false, false, true, 76) > 0)) {
                // line 77
                echo "                            <del class=\"price price-sale\"> ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                echo "</del>
                            ";
            }
            // line 79
            echo "                            ";
        }
        // line 80
        echo "                        </div>
                        <div class=\"product-excerpt\">
                            <p>";
        // line 82
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_text", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
        echo "</p>
                        </div>

                        <div class=\"single-product-info\">
                            <div class=\"cart-plus-minus\">
                                <div class=\"buttons_added\">
                                    <input class=\"minus is-form\" type=\"button\" value=\"-\">
                                    <input aria-label=\"quantity\" class=\"input-qty\" id=\"input-qty\" max=\"10\" min=\"1\"
                                        name=\"\" type=\"number\" value=\"1\">
                                    <input class=\"plus is-form\" type=\"button\" value=\"+\">
                                </div>
                                <!-- <input type=\"text\" value=\"02\" name=\"qtybutton\" class=\"cart-plus-minus-box\"> -->
                            </div>
                            <div class=\"product-details-cart-btn btn-wrapper\">
                                <a class=\"boxed-btn reverse-color\" href=\"#\"
                                    onclick=\"addCart('";
        // line 97
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
        echo "', document.getElementById('input-qty').value)\">Thêm
                                    vào
                                    giỏ</a>
                            </div>
                            <div class=\"product-details-buy-btn btn-wrapper\">
                                <a class=\"boxed-btn reverse-color\"
                                    onclick=\"addCart('";
        // line 103
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
        echo "', document.getElementById('input-qty').value)\"
                                    href=\"#\">Mua
                                    ngay</a>
                            </div>
                            <!-- <div class=\"product-share social-media\">
                                <span class=\"pro-meta-title\">Share: </span>
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                </ul>
                            </div> -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOP AREA END -->

<!-- TAB AREA START -->
<div class=\"product-details-tab-area padding-bottom-40 mobile-pt-30 mobile-pb-30\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"product-details-tab-inner\">
                    <div class=\"product-details-tab-menu nav\">
                        <a class=\"active\" data-toggle=\"tab\" href=\"#tab-1-1\">Mô tả</a>
                        <!-- <a data-toggle=\"tab\" href=\"#tab-1-2\">Chương trình khuyến mãi</a> -->
                        <a data-toggle=\"tab\" href=\"#tab-1-3\">Cảm nhận Khách hàng</a>
                    </div>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane fade show active\" id=\"tab-1-1\">
                            <div class=\"product-details-tab-content\">
                                ";
        // line 140
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "description", [], "any", false, false, true, 140), 140, $this->source);
        echo "
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"tab-1-2\">
                            <div class=\"product-details-tab-content\">


                                <p>";
        // line 147
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "sale", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"tab-1-3\">
                            <div class=\"product-details-tab-content comments-area\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <!-- review-area -->
                                        <div class=\"review-area\">
                                            <div class=\"review-header\">
                                                <h4>Bình luận</h4>
                                                <div class=\"customer-review\">
                                                    <ul>
                                                        <li><i class=\"fa fa-star\"></i></li>
                                                        <li><i class=\"fa fa-star\"></i></li>
                                                        <li><i class=\"fa fa-star\"></i></li>
                                                        <li><i class=\"fa fa-star-half-o\"></i></li>
                                                        <li><i class=\"fa fa-star-o\"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"review-item\">
                                                <div class=\"reviewer-info\">
                                                    <h6>Mai</h6>
                                                    <span class=\"review-date\">Ngày 4 tháng 2 năm 2020</span>
                                                    <div class=\"customer-review\">
                                                        <ul>
                                                            <li><i class=\"fa fa-star\"></i></li>
                                                            <li><i class=\"fa fa-star\"></i></li>
                                                            <li><i class=\"fa fa-star\"></i></li>
                                                            <li><i class=\"fa fa-star-half-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class=\"reviewer-comment\">
                                                    <p>Sản phẩm tôi đã mua nhiều lần, rất thơm.</p>
                                                </div>
                                            </div>
                                            <div class=\"review-item\">
                                                <div class=\"reviewer-info\">
                                                    <h6>Phong</h6>
                                                    <span class=\"review-date\">Ngày 3 tháng 2 năm 2021</span>
                                                    <div class=\"customer-review\">
                                                        <ul>
                                                            <li><i class=\"fa fa-star\"></i></li>
                                                            <li><i class=\"fa fa-star\"></i></li>
                                                            <li><i class=\"fa fa-star\"></i></li>
                                                            <li><i class=\"fa fa-star-half-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class=\"reviewer-comment\">
                                                    <p>Lần đầu tiên tôi mua tinh dầu tại đây, rất thơm và hiệu quả diệt
                                                        côn trùng. Tôi sẽ ủng hộ.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <!-- comments-form-area -->
                                        <div class=\"comments-form-area\">
                                            <h4 class=\"title-1\">Viết bình luận</h4>
                                            <p><small>Bạn nhập vào email để bình luận được hiển thị và nhập đầy đủ các
                                                    trường *</small></p>
                                            <form action=\"#\" class=\"comments-from\">
                                                <input type=\"text\" name=\"name\" placeholder=\"Họ tên*\">
                                                <input type=\"text\" name=\"email\" placeholder=\"Email*\">
                                                <textarea name=\"message\" placeholder=\"Bình luận\"></textarea>
                                                <div class=\"btn-wrapper\">
                                                    <button class=\"boxed-btn black-btn fullwidth-btn\"
                                                        type=\"submit\">Gửi</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- TAB AREA END -->

<!-- Button Shopping -->
<div class=\"product-details-buy-btn btn-wrapper text-center padding-bottom-60\">
    <a class=\"boxed-btn reverse-color\" onclick=\"addCart('";
        // line 237
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, true, 237), 237, $this->source), "html", null, true);
        echo "')\" href=\"#\">Mua ngay</a>
</div>
<!-- Button Shopping End -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/pages/product-page.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 237,  289 => 147,  279 => 140,  239 => 103,  230 => 97,  212 => 82,  208 => 80,  205 => 79,  197 => 77,  195 => 76,  188 => 75,  185 => 74,  183 => 73,  177 => 70,  161 => 56,  155 => 52,  143 => 48,  139 => 47,  136 => 46,  132 => 45,  125 => 40,  114 => 37,  111 => 36,  107 => 35,  102 => 32,  100 => 31,  80 => 14,  76 => 13,  64 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Get product item #}
{% set obProduct = ProductPage.get() %}


<!-- BREADCRUMB AREA START -->
<div class=\"herboil__breadcrumb-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"breadcrumb-inner\">
                    <div class=\"breadcrumb-list\">
                        <ul>
                            <!-- <li><a href=\"{{ 'home' | page }}\">Home</a></li> -->
                            <li><a href=\"{{ 'all-product' | page }}\">Sản phẩm</a></li>
                            <li><span>Chi tiết sản phẩm</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- SHOP AREA START -->
<div class=\"product-details-area padding-top-60 mobile-pt-30 mobile-pb-40\">
    <div class=\"container\">
        <div class=\"product-details-inner\">
            <div class=\"row\">
                <div class=\"col-xl-7 col-lg-6 col-md-12\">
                    {% if obProduct.images is not empty %}
                    <div class=\"product-details-img-gallery\">
                        <div class=\"product-details-small-img \">
                            <div class=\"product-details-small-img-active slick-arrow-style-1 slick-dots-style-1\">
                                {% for img in obProduct.images %}
                                <div class=\"single-img\">
                                    <img src=\"{{img.path}}\" alt=\"{{obProduct.preview_image.description }}\">
                                </div>
                                {% endfor %}
                            </div>

                        </div>
                        <div class=\"product-details-large-img\">
                            <div class=\"product-details-large-img-active slick-arrow-style-1 slick-dots-style-1\">
                                {% for img in obProduct.images %}
                                <div class=\"single-img\">
                                    <a href=\"{{img.path}}\" data-rel=\"lightcase:myCollection\">
                                        <img src=\"{{img.path}}\" alt=\"{{img.description}}\">
                                    </a>
                                </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                    {% endif %}
                </div>
                <div class=\"col-xl-5 col-lg-6 col-md-12\">
                    <div class=\"product-details-content\">
                        <div class=\"customer-review\">
                            <ul>
                                <li><i class=\"fa fa-star\"></i></li>
                                <li><i class=\"fa fa-star\"></i></li>
                                <li><i class=\"fa fa-star\"></i></li>
                                <li><i class=\"fa fa-star-half-o\"></i></li>
                                <li><i class=\"fa fa-star-o\"></i></li>
                            </ul>
                            <span class=\"review-count\"><a href=\"#\">(5 Customer review)</a></span>

                        </div>
                        <h4 class=\"product-title\">{{ obProduct.name }}</h4>
                        <p class=\"product-bmi\">(50mg/ml)</p>
                        <div class=\"product-price\">
                            {% set obOffer = obProduct.offer.first() %}
                            {% if obOffer.isNotEmpty()%}
                            <span class=\"regular-price\"> {{ obOffer.price }} {{ obOffer.currency }}</span>
                            {% if obOffer.old_price > 0 %}
                            <del class=\"price price-sale\"> {{ obOffer.old_price }} {{ obOffer.currency }}</del>
                            {% endif %}
                            {% endif %}
                        </div>
                        <div class=\"product-excerpt\">
                            <p>{{ obProduct.preview_text }}</p>
                        </div>

                        <div class=\"single-product-info\">
                            <div class=\"cart-plus-minus\">
                                <div class=\"buttons_added\">
                                    <input class=\"minus is-form\" type=\"button\" value=\"-\">
                                    <input aria-label=\"quantity\" class=\"input-qty\" id=\"input-qty\" max=\"10\" min=\"1\"
                                        name=\"\" type=\"number\" value=\"1\">
                                    <input class=\"plus is-form\" type=\"button\" value=\"+\">
                                </div>
                                <!-- <input type=\"text\" value=\"02\" name=\"qtybutton\" class=\"cart-plus-minus-box\"> -->
                            </div>
                            <div class=\"product-details-cart-btn btn-wrapper\">
                                <a class=\"boxed-btn reverse-color\" href=\"#\"
                                    onclick=\"addCart('{{obOffer.id}}', document.getElementById('input-qty').value)\">Thêm
                                    vào
                                    giỏ</a>
                            </div>
                            <div class=\"product-details-buy-btn btn-wrapper\">
                                <a class=\"boxed-btn reverse-color\"
                                    onclick=\"addCart('{{obOffer.id}}', document.getElementById('input-qty').value)\"
                                    href=\"#\">Mua
                                    ngay</a>
                            </div>
                            <!-- <div class=\"product-share social-media\">
                                <span class=\"pro-meta-title\">Share: </span>
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                </ul>
                            </div> -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOP AREA END -->

<!-- TAB AREA START -->
<div class=\"product-details-tab-area padding-bottom-40 mobile-pt-30 mobile-pb-30\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"product-details-tab-inner\">
                    <div class=\"product-details-tab-menu nav\">
                        <a class=\"active\" data-toggle=\"tab\" href=\"#tab-1-1\">Mô tả</a>
                        <!-- <a data-toggle=\"tab\" href=\"#tab-1-2\">Chương trình khuyến mãi</a> -->
                        <a data-toggle=\"tab\" href=\"#tab-1-3\">Cảm nhận Khách hàng</a>
                    </div>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane fade show active\" id=\"tab-1-1\">
                            <div class=\"product-details-tab-content\">
                                {{obProduct.description | raw}}
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"tab-1-2\">
                            <div class=\"product-details-tab-content\">


                                <p>{{obProduct.sale}}</p>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"tab-1-3\">
                            <div class=\"product-details-tab-content comments-area\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <!-- review-area -->
                                        <div class=\"review-area\">
                                            <div class=\"review-header\">
                                                <h4>Bình luận</h4>
                                                <div class=\"customer-review\">
                                                    <ul>
                                                        <li><i class=\"fa fa-star\"></i></li>
                                                        <li><i class=\"fa fa-star\"></i></li>
                                                        <li><i class=\"fa fa-star\"></i></li>
                                                        <li><i class=\"fa fa-star-half-o\"></i></li>
                                                        <li><i class=\"fa fa-star-o\"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"review-item\">
                                                <div class=\"reviewer-info\">
                                                    <h6>Mai</h6>
                                                    <span class=\"review-date\">Ngày 4 tháng 2 năm 2020</span>
                                                    <div class=\"customer-review\">
                                                        <ul>
                                                            <li><i class=\"fa fa-star\"></i></li>
                                                            <li><i class=\"fa fa-star\"></i></li>
                                                            <li><i class=\"fa fa-star\"></i></li>
                                                            <li><i class=\"fa fa-star-half-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class=\"reviewer-comment\">
                                                    <p>Sản phẩm tôi đã mua nhiều lần, rất thơm.</p>
                                                </div>
                                            </div>
                                            <div class=\"review-item\">
                                                <div class=\"reviewer-info\">
                                                    <h6>Phong</h6>
                                                    <span class=\"review-date\">Ngày 3 tháng 2 năm 2021</span>
                                                    <div class=\"customer-review\">
                                                        <ul>
                                                            <li><i class=\"fa fa-star\"></i></li>
                                                            <li><i class=\"fa fa-star\"></i></li>
                                                            <li><i class=\"fa fa-star\"></i></li>
                                                            <li><i class=\"fa fa-star-half-o\"></i></li>
                                                            <li><i class=\"fa fa-star-o\"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class=\"reviewer-comment\">
                                                    <p>Lần đầu tiên tôi mua tinh dầu tại đây, rất thơm và hiệu quả diệt
                                                        côn trùng. Tôi sẽ ủng hộ.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <!-- comments-form-area -->
                                        <div class=\"comments-form-area\">
                                            <h4 class=\"title-1\">Viết bình luận</h4>
                                            <p><small>Bạn nhập vào email để bình luận được hiển thị và nhập đầy đủ các
                                                    trường *</small></p>
                                            <form action=\"#\" class=\"comments-from\">
                                                <input type=\"text\" name=\"name\" placeholder=\"Họ tên*\">
                                                <input type=\"text\" name=\"email\" placeholder=\"Email*\">
                                                <textarea name=\"message\" placeholder=\"Bình luận\"></textarea>
                                                <div class=\"btn-wrapper\">
                                                    <button class=\"boxed-btn black-btn fullwidth-btn\"
                                                        type=\"submit\">Gửi</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- TAB AREA END -->

<!-- Button Shopping -->
<div class=\"product-details-buy-btn btn-wrapper text-center padding-bottom-60\">
    <a class=\"boxed-btn reverse-color\" onclick=\"addCart('{{obOffer.id}}')\" href=\"#\">Mua ngay</a>
</div>
<!-- Button Shopping End -->", "C:\\xampp\\htdocs\\arome/themes/aroma/pages/product-page.htm", "");
    }
}
