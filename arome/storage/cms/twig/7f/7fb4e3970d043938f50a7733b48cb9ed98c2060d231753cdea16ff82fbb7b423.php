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

/* C:\xampp\htdocs\arome/themes/aroma/pages/home.htm */
class __TwigTemplate_9180739b9d46be82e34b9386fdb0c75ea3ca210a67bfd2dddeb41bd676491c8a extends \Twig\Template
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
        $tags = array("set" => 1, "component" => 31, "for" => 38, "if" => 402);
        $filters = array("media" => 40, "escape" => 40, "raw" => 55, "theme" => 75, "page" => 224, "slice" => 404, "date" => 413);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'component', 'for', 'if'],
                ['media', 'escape', 'raw', 'theme', 'page', 'slice', 'date'],
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
        $context["obCategory"] = twig_get_attribute($this->env, $this->source, ($context["CategoryPage"] ?? null), "get", [], "any", false, false, true, 1);
        // line 3
        $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "make", [], "method", false, false, true, 3), "sort", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "getSorting", [], "method", false, false, true, 3), "active", [], "any", false, false, true, 3), "category", [], "method", false, false, true, 3), "obCatagory", [], "any", false, false, true, 3), "id", [], "any", false, false, true, 3)], "method", false, false, true, 3);
        // line 4
        echo "
";
        // line 6
        $context["iPage"] = twig_get_attribute($this->env, $this->source, ($context["Panigation"] ?? null), "getPageFromRequest", [], "method", false, false, true, 6);
        // line 7
        $context["arPanigationList"] = twig_get_attribute($this->env, $this->source, ($context["Panigation"] ?? null), "get", [0 => ($context["iPage"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "count", [], "method", false, false, true, 7)], "method", false, false, true, 7);
        // line 8
        echo "
";
        // line 10
        $context["arProductList"] = twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "page", [0 => ($context["iPage"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["Panigation"] ?? null), "getCountPerPage", [], "method", false, false, true, 10)], "method", false, false, true, 10);
        // line 11
        echo "

";
        // line 13
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 13);
        // line 14
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 14);
        // line 15
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 15);
        // line 16
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 16);
        // line 17
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 17);
        // line 18
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 18);
        // line 19
        echo "

";
        // line 21
        $context["recordsstatus"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "records", [], "any", false, false, true, 21);
        // line 22
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "displayColumn", [], "any", false, false, true, 22);
        // line 23
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "noRecordsMessage", [], "any", false, false, true, 23);
        // line 24
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "detailsPage", [], "any", false, false, true, 24);
        // line 25
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 25);
        // line 26
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 26);
        // line 27
        echo "
<style>
    @media (max-width: 767px) {}
</style>
";
        // line 31
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Movie"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 32
        echo "<!-- SLIDER AREA START -->
<!-- <div class=\"herboil__slider-area\">
    <div class=\"herboil__slider-active slick-arrow-style-1 slick-dots-style-1\">
        <div id=\"wowslider-container1\" style=\"margin:0 auto; padding: 40px 0;\">
            <div class=\"ws_images\">
                <ul>
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 39
            echo "                    <li>
                        <img src=\"";
            // line 40
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "image", [], "any", false, false, true, 40), 40, $this->source));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "name", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "name", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "\" id=\"wows1_0\" />
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </ul>
            </div>
        </div>
    </div> 
    <div class=\"herboil__slide-item\">
        <div class=\"herboil__slide-item-inner bg-image\" data-bg=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "filename", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "\">
            <div class=\"herboil__slide-background left-layer\"
                style=\"background-image: url('";
        // line 50
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "image", [], "any", false, false, true, 50), 50, $this->source));
        echo "');\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-12 align-self-center herboil__slide-content-main\">
                        <div class=\"herboil__slide-content\">
                            <div class=\"herboil__slide-content-inner\">
                                <p>";
        // line 55
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "description", [], "any", false, false, true, 55), 55, $this->source);
        echo "</p>
                                <h1>";
        // line 56
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "name", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "</h1>
                                <div class=\"btn-wrapper product-llist\">
                                    <a class=\"pro boxed-btn\" data-pro=";
        // line 58
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "product_id", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "
                                        data-toggle=\"modal";
        // line 59
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "product_id", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "\"
                                        data-target=\"#modal";
        // line 60
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "product_id", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "\">Mua ngay</a>
                                    <a data-pro=";
        // line 61
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "product_id", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo " class=\"see-more-ls boxed-btn\">Tìm hiểu thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Slider area start -->
<!-- <div class=\"slider-area home-three\">
    <div class=\"slider-inner\">
        <div id=\"mainSlider\" class=\"nivoSlider nevo-slider\">
            <img src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/slider/slide4.jpg");
        echo "\" alt=\"main slider\" title=\"#htmlcaption1\" />
            <img src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/slider/slide2.jpg");
        echo "\" alt=\"main slider\" title=\"#htmlcaption2\" />
        </div>
        <div id=\"htmlcaption1\" class=\"nivo-html-caption slider-caption\">
            <div class=\"slider-progress\"></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"col-sm-12\">
                            <div class=\"slider-content slider-content-1 slider-animated-1 pull-left\">
                                <h1 class=\"hone\">Tinh dầu sả nguyên chất 100%</h1>
                                <h2 class=\"htwo\">Giá chỉ 210.000 đồng / <span class=\"hp1\">50ml</span> </h2>
                                <div class=\"button-1 hover-btn-2\">
                                    <a class=\"pro boxed-btn\" data-pro=";
        // line 88
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "product_id", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
        echo "
                                        data-toggle=\"modal";
        // line 89
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "product_id", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
        echo "\"
                                        data-target=\"#modal";
        // line 90
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "product_id", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
        echo "\">Mua ngay</a>
                                    <a data-pro=";
        // line 91
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "product_id", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
        echo " class=\"see-more-ls boxed-btn\">Tìm hiểu thêm</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"htmlcaption2\" class=\"nivo-html-caption slider-caption\">
            <div class=\"slider-progress\"></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"slider-content slider-content-2 slider-animated-2 pull-left\">
                            <p class=\"hp1\">Soothing Iritated Skin</p>
                            <h1 class=\"hone\">up to 20% off</h1>
                            <h2 class=\"htwo\">Lanbio Oil</h2>
                            <div class=\"button-1 hover-btn-2\">
                                <a class=\"pro boxed-btn\" data-pro=";
        // line 110
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "product_id", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
        echo "
                                    data-toggle=\"modal";
        // line 111
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "product_id", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
        echo "\" data-target=\"#modal";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "product_id", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
        echo "\">Mua
                                    ngay</a>
                                <a data-pro=";
        // line 113
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "product_id", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
        echo " class=\"see-more-ls boxed-btn\">Tìm hiểu thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Slider area end -->


<!-- KHONG DUOC XOA NUA -->
<div id=\"modal\">

</div>
</div>
<!-- SLIDER AREA END -->

<!-- CUSTOM CONTENT AREA START -->
<div class=\"herboil__custom-content-area mobile-mt-20\">
    <div class=\"description-us\">
        <div class=\"container\">
            <div class=\"title_brand heading-title text-center\">
                <h2 class=\"\">
                    <a class=\"text_gradient\">
                        3 đặc điểm về chúng tôi
                    </a>
                </h2>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 col-sm-6 col-ms-12 col-xs-12\">
                    <div class=\"item-image-wrapper\">
                        <div class=\"item-image-des\"
                            style=\"background-image: url('/arome/themes/aroma/assets/img/others/banner/tinhgon.jpg');\">
                        </div>
                        <div class=\"item-count-label\">Tinh Gọn</div>
                    </div>
                    <!-- <h6 class=\"item-header\">Arabica Green</h6> -->
                    <span class=\"item-excerpt\">Đội ngũ thành viên công ty tinh nhuệ, đa năng và nhiều kinh nghiệm thương
                        trường, được trải
                        nghiệm sống và học tập từ môi trường quốc tế, nhưng vẫn giữ niềm khát khao mang sản phẩm,
                        thương hiệu Việt chất lượng cao, an toàn đến với người tiêu dùng trong nước và thế giới.</span>
                </div>

                <div class=\"col-lg-4 col-md-6 col-sm-6 col-ms-12 col-xs-12\">
                    <span class=\"item-image-wrapper\">
                        <span class=\"item-image-des\"
                            style=\"background-image: url('/arome/themes/aroma/assets/img/others/banner/hieuqua.jpeg');\"></span>
                        <span class=\"item-count-label\">Hiệu Quả</span>
                    </span>
                    <!-- <h6 class=\"item-header\">Arabica Green</h6> -->
                    <span class=\"item-excerpt\">Tiêu chí hiệu quả luôn đặt vị trí hàng đầu trong mọi quyết định, luôn tìm
                        các giải pháp nhằm
                        tối ưu mọi nguồn lực bên trong và bên ngoài, hướng đến lợi ích cho tất cả các bên cùng hợp
                        tác: Công ty – Đối tác – Khách hàng.</span>
                </div>

                <div class=\"col-lg-4 col-md-6 col-sm-6 col-ms-12 col-xs-12\">
                    <span class=\"item-image-wrapper\">
                        <span class=\"item-image-des\"
                            style=\"background-image: url('/arome/themes/aroma/assets/img/others/banner/thichung.jpg');\"></span>
                        <span class=\"item-count-label\">Thích Ứng</span>
                    </span>
                    <!-- <h6 class=\"item-header\">Arabica Green</h6> -->
                    <span class=\"item-excerpt\">Cơ cấu linh hoạt dễ dàng thích ứng với sự thay đổi, nắm bắt kịp thời xu
                        hướng tiêu dùng cũng
                        như những mong muốn tiềm ẩn của khách hàng, cung cấp cho khách hàng những sản phẩm, dịch vụ
                        chất lượng cao, thiết thực với nhu cầu.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class=\"container padding-lg-left-0\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"herboil__custom-content-img box-image\">
                    <a href=\"\">
                        <img src=\"";
        // line 192
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hinhanh/h1.jpg");
        echo "\" alt=\"#\">
                    </a>

                </div>

                <div class=\"herboil__custom-content-img box-image bannerleft-tablet \">
                    <img src=\"";
        // line 198
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hinhanh/h2.jpg");
        echo "\" alt=\"#\">
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"herboil__custom-content-info\">
                    <div class=\"herboil__custom-content-info-inner\">
                        <h3 class=\"title-info\">3 đặc điểm miêu tả về chúng tôi: </h3>
                        <h3 class=\"title-info\">Tinh Gọn</h3>
                        <p class=\"style-info\">
                            Đội ngũ thành viên công ty tinh nhuệ, đa năng và nhiều kinh nghiệm thương trường, được trải
                            nghiệm sống và học tập từ môi trường quốc tế, nhưng vẫn giữ niềm khát khao mang sản phẩm,
                            thương hiệu Việt chất lượng cao, an toàn đến với người tiêu dùng trong nước và thế giới.
                        </p>
                        <h3 class=\"title-info\">Hiệu Quả</h3>
                        <p class=\"style-info\">
                            Tiêu chí hiệu quả luôn đặt vị trí hàng đầu trong mọi quyết định, luôn tìm các giải pháp nhằm
                            tối ưu mọi nguồn lực bên trong và bên ngoài, hướng đến lợi ích cho tất cả các bên cùng hợp
                            tác: Công ty – Đối tác – Khách hàng.
                        </p>
                        <h3 class=\"title-info\">Thích Ứng</h3>
                        <p class=\"style-info\">
                            Cơ cấu linh hoạt dễ dàng thích ứng với sự thay đổi, nắm bắt kịp thời xu hướng tiêu dùng cũng
                            như những mong muốn tiềm ẩn của khách hàng, cung cấp cho khách hàng những sản phẩm, dịch vụ
                            chất lượng cao, thiết thực với nhu cầu.
                        </p>
                        <div class=\"btn-wrapper\">
                            <a href=\"";
        // line 224
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\" class=\"boxed-btn\">Tìm Hiểu Thêm</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
<!-- CUSTOM CONTENT AREA END -->

<!-- CUSTOM CONTENT AREA START -->
<div class=\"herboil__custom-content-area mobile-mt-20\">
    <div class=\"container padding-lg-left-0\">
        <div class=\"row space\">
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"herboil__custom-content-img\">
                    <img src=\"";
        // line 241
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/others/banner/banner-home-product.jpg");
        echo "\" alt=\"#\">
                </div>
            </div>
            <div class=\"col-lg-5 col-md-6\">
                <div class=\"herboil__custom-content-info\">
                    <div class=\"herboil__custom-content-info-inner\">
                        <h1 class=\"nameproduct\">Combo 2 lọ tinh dầu sả (Tặng 1 lọ treo)</h1>
                        <h2 class=\"numberproduct\">30ml</h2>
                        <div class=\"moneyproduct\">300.000</div>
                        <p><i class=\"fas fa-tint\" id=\"icon-drop\"></i>&nbsp;Trị cảm mạo</p>
                        <p><i class=\"fas fa-tint\" id=\"icon-drop\"></i>&nbsp;Hỗ trợ trị mụn</p>
                        <p><i class=\"fas fa-tint\" id=\"icon-drop\"></i>&nbsp;Khử mùi hôi, ẩm mốc</p>
                        <p><i class=\"fas fa-tint\" id=\"icon-drop\"></i>&nbsp;Đuổi muỗi, kiến, côn trùng</p>
                        <p><i class=\"fas fa-tint\" id=\"icon-drop\"></i>&nbsp;Thư giản với liệu pháp hương mới</p>

                        <div class=\"btn-wrapper\">
                            <a href=\"";
        // line 257
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("all-product");
        echo "\" class=\"boxed-btn\">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CUSTOM CONTENT AREA END -->

<!-- TESTIMONIAL  -->
<div
    class=\"herboil__banner-area margin-bottom-85 margin-top-85 padding-top-105 padding-bottom-60 section-bg-1 mobile-pt-70 mobile-pb-40\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"herboil__section-title text-center\">
                    <h1 class=\"section-title\">Khách Hàng</h1>
                    <!-- <div class=\"home-subtitle\">
                        <h2 class=\"section-subtitle\">Cảm nhận về Arome</h2>
                    </div> -->
                    <div class=\"title_brand heading-title text-center\">
                        <h2 class=\"\">
                            <a class=\"text_gradient text-customer\">
                                Cảm nhận về Arome
                            </a>

                        </h2>
                    </div>

                    <!-- <p class=\"section-subtitle\">Nói Về Tinh Dầu Arome</p> -->
                </div>
            </div>
        </div>
        ";
        // line 321
        echo "
        <div class=\"owl-carousel testimonial\">
            <div class=\"col-12 item\">
                <div class=\"item-testi profile text-center\">
                    <img src=\"";
        // line 325
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/others/testimonial/A.Huu Loc.jpg");
        echo "\" alt=\"\">
                    <h4>Nguyễn Trần Hữu Lộc </h4>
                    <label for=\"\">Giáo viên dạy thiết kế đồ họa</label>
                    <!-- <br>
                    <label for=\"\" class=\"address-customer\"></label> -->
                    <p>
                        <i class=\"fa fa-quote-left\"></i>
                        Mùi hương của tinh dầu sả của Arome đúng chất, không lẫn mùi pha tạp. Tôi đang sử dụng sản
                        phẩm cho phòng khách và phòng ngủ để luôn có cảm giác dễ chịu và đuổi muỗi cũng rất hiệu quả
                        <i class=\"fa fa-quote-right\"></i>
                    </p>
                </div>
            </div>

            <div class=\"col-12 item\">
                <div class=\"item-testi profile text-center\">
                    <img src=\"";
        // line 341
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/others/testimonial/C.Chau.jpg");
        echo "\" alt=\"\">
                    <h4>Nguyễn Ngọc Minh Châu</h4>
                    <label for=\"\">Chủ tiệm CHÂU HAIR SALON, đường Hòa Hưng, Q.3, Tp.HCM</label>
                    <p>
                        <i class=\"fa fa-quote-left\"></i>
                        Tôi hay dùng Tinh dầu sả Arome để xông hương cho tiệm làm đẹp của mình, khách đến đây cảm thấy
                        rất thư giãn khi được massage, gội đầu trong căn phòng thơm mùi sả dịu nhẹ, và đến với tiệm của
                        chúng tôi thường xuyên hơn
                        <i class=\"fa fa-quote-right\"></i>
                    </p>
                </div>
            </div>

            <!-- <div class=\"col-12 item\">
                <div class=\"item-testi profile text-center\">
                    <img src=\"";
        // line 356
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/others/testimonial/A.Huu Loc.jpg");
        echo "\" alt=\"\">
                    <h4>Nguyễn Trần Hữu Lộc </h4>
                    <label for=\"\">Giáo viên dạy thiết kế đồ họa</label>
                    <p>
                        <i class=\"fa fa-quote-left\"></i>
                        Mùi hương của tinh dầu sả của Arome đúng chất, không lẫn mùi pha tạp. Tôi đang sử dụng sản
                        phẩm cho phòng khách và phòng ngủ để luôn có cảm giác dễ chịu và đuổi muỗi cũng rất hiệu quả
                        <i class=\"fa fa-quote-right\"></i>
                    </p>
                </div>
            </div> -->

            <!-- <div class=\"col-12 item\">
                <div class=\"item-testi profile text-center\">
                    <img src=\"";
        // line 370
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/others/testimonial/C.Chau.jpg");
        echo "\" alt=\"\">
                    <h4>Nguyễn Ngọc Minh Châu</h4>
                    <label for=\"\">Chủ tiệm CHÂU HAIR SALON, đường Hòa Hưng, Q.3, Tp.HCM</label>
                    <p>
                        <i class=\"fa fa-quote-left\"></i>
                        Tôi hay dùng Tinh dầu sả Arome để xông hương cho tiệm làm đẹp của mình, khách đến đây cảm thấy
                        rất thư giãn khi được massage, gội đầu trong căn phòng thơm mùi sả dịu nhẹ, và đến với tiệm của
                        chúng tôi thường xuyên hơn
                        <i class=\"fa fa-quote-right\"></i>
                    </p>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- TESTIMONIAL END -->

<!-- LATEST BLOG AREA START -->
<div class=\"herboil__latest-blog-area margin-bottom-20 mobile-mb-20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"herboil__section-title text-center\">
                    <h1 class=\"section-title\">BLOG</h1>
                    <!-- <p class=\"section-subtitle\">Bài viết mới nhất của chúng tôi</p> -->
                </div>
            </div>
        </div>
        <div class=\"row latest-blog-active slick-arrow-style-1 slick-dots-style-1\">
            ";
        // line 399
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 400
            echo "            <div class=\"col-lg-12\">
                <div class=\"herboil__blog-item text-center\">
                    ";
            // line 402
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 402), "count", [], "any", false, false, true, 402)) {
                // line 403
                echo "                    <div class=\"blog-img\">
                        ";
                // line 404
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 404), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 405
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 405), 405, $this->source), "html", null, true);
                    echo "\">
                            <img data-src=\"";
                    // line 406
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 406), 406, $this->source), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 406), 406, $this->source), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 406), 406, $this->source), "html", null, true);
                    echo "\">
                        </a>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 409
                echo "                    </div>
                    <div class=\"blog-content\">
                        <div class=\"blog-meta\">
                            <ul style=\"justify-content: center;\">
                                <li>";
                // line 413
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 413), 413, $this->source), "d/m/Y"), "html", null, true);
                echo "</li>
                                <li>Bởi: <a href=\"#\">Admin</a></li>
                            </ul>
                        </div>
                        <h3 class=\"blog-title\">
                            <strong><a href=\"";
                // line 418
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 418), 418, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 418), 418, $this->source), "html", null, true);
                echo "</a></strong>
                        </h3>
                        <p>";
                // line 420
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, true, 420), 420, $this->source), "html", null, true);
                echo "</p>
                        <div class=\"blog-btn\">
                            <a href=\"";
                // line 422
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 422), 422, $this->source), "html", null, true);
                echo "\" class=\"boxed-btn\">Xem Thêm <i
                                    class=\"fa fa-angle-double-right\"></i></a>
                        </div>
                    </div>
                    ";
            }
            // line 427
            echo "                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 430
        echo "            ";
        // line 494
        echo "        </div>
    </div>
</div>
<!-- BLOG AREA END -->

<!-- POPUP PRODUCT -->
<div class=\"modal fade\" id=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 500), 500, $this->source), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-xs-12\">
                    <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                        <div class=\"carousel-inner\">
                            ";
        // line 508
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 508))) {
            // line 509
            echo "                            <div class=\"carousel-item active\">
                                <img class=\"d-block w-100\" src=\"";
            // line 510
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 510), "path", [], "any", false, false, true, 510), 510, $this->source), "html", null, true);
            echo "\"
                                    alt=\"";
            // line 511
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 511), "description", [], "any", false, false, true, 511), 511, $this->source), "html", null, true);
            echo "\"
                                    title=\"";
            // line 512
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 512), "title", [], "any", false, false, true, 512), 512, $this->source), "html", null, true);
            echo "\">
                            </div>
                            ";
        }
        // line 515
        echo "                            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, true, 515))) {
            // line 516
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, true, 516));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 517
                echo "                            <div class=\"carousel-item\">
                                <img class=\"d-block w-100\" src=\"";
                // line 518
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, true, 518), 518, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, true, 518), 518, $this->source), "html", null, true);
                echo "\"
                                    alt=\"Second slide\">
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 522
            echo "                            ";
        }
        // line 523
        echo "                        </div>
                        <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\"
                            data-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Previous</span>
                        </a>
                        <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\"
                            data-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Next</span>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-6 col-xs-12\">
                    <div class=\"info-product\">
                        <h3> ";
        // line 538
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, true, 538), 538, $this->source), "html", null, true);
        echo "</h3>
                        <p>
                            ";
        // line 540
        $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "offer", [], "any", false, false, true, 540), "first", [], "method", false, false, true, 540);
        // line 541
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "isNotEmpty", [], "method", false, false, true, 541)) {
            // line 542
            echo "                            <span class=\"regular-price\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, true, 542), 542, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, true, 542), 542, $this->source), "html", null, true);
            echo "</span>
                            ";
            // line 543
            if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price", [], "any", false, false, true, 543) > 0)) {
                // line 544
                echo "                            <del class=\"price price-sale\"> ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price", [], "any", false, false, true, 544), 544, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, true, 544), 544, $this->source), "html", null, true);
                echo "</del>
                            ";
            }
            // line 546
            echo "                            ";
        }
        // line 547
        echo "                        </p>
                        <div class=\"product-short-des\">
                            <p>";
        // line 549
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_text", [], "any", false, false, true, 549), 549, $this->source), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"button-add\">
                            <span class=\"input-number-decrement\">–</span>
                            <input class=\"input-number\" type=\"text\" value=\"1\" min=\"0\" max=\"10\">
                            <span class=\"input-number-increment\">+</span>
                        </div>

                        <div class=\"btn-cart\" onclick=\"addCart('";
        // line 557
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, true, 557), 557, $this->source), "html", null, true);
        echo "')\">
                            <span>Mua Hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- POPUP PRODUCT END -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  763 => 557,  752 => 549,  748 => 547,  745 => 546,  737 => 544,  735 => 543,  728 => 542,  725 => 541,  723 => 540,  718 => 538,  701 => 523,  698 => 522,  686 => 518,  683 => 517,  678 => 516,  675 => 515,  669 => 512,  665 => 511,  661 => 510,  658 => 509,  656 => 508,  645 => 500,  637 => 494,  635 => 430,  627 => 427,  619 => 422,  614 => 420,  607 => 418,  599 => 413,  593 => 409,  580 => 406,  575 => 405,  571 => 404,  568 => 403,  566 => 402,  562 => 400,  558 => 399,  526 => 370,  509 => 356,  491 => 341,  472 => 325,  466 => 321,  429 => 257,  410 => 241,  390 => 224,  361 => 198,  352 => 192,  270 => 113,  263 => 111,  259 => 110,  237 => 91,  233 => 90,  229 => 89,  225 => 88,  210 => 76,  206 => 75,  189 => 61,  185 => 60,  181 => 59,  177 => 58,  172 => 56,  168 => 55,  160 => 50,  155 => 48,  148 => 43,  135 => 40,  132 => 39,  128 => 38,  120 => 32,  116 => 31,  110 => 27,  108 => 26,  106 => 25,  104 => 24,  102 => 23,  100 => 22,  98 => 21,  94 => 19,  92 => 18,  90 => 17,  88 => 16,  86 => 15,  84 => 14,  82 => 13,  78 => 11,  76 => 10,  73 => 8,  71 => 7,  69 => 6,  66 => 4,  64 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set obCategory = CategoryPage.get %}
{# Get product collection #}
{% set obProductList = productList.make().sort(productList.getSorting().active.category().obCatagory.id) %}

{# Get array with panigation button #}
{% set iPage = Panigation.getPageFromRequest() %}
{% set arPanigationList = Panigation.get(iPage, obProductList.count() ) %}

{# Apply panigation to product collection and get array with product items #}
{% set arProductList = obProductList.page(iPage, Panigation.getCountPerPage() )%}


{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}


{% set recordsstatus = builderList2.records %}
{% set displayColumn = builderList2.displayColumn %}
{% set noRecordsMessage = builderList2.noRecordsMessage %}
{% set detailsPage = builderList2.detailsPage %}
{% set detailsKeyColumn = builderList2.detailsKeyColumn %}
{% set detailsUrlParameter = builderList2.detailsUrlParameter %}

<style>
    @media (max-width: 767px) {}
</style>
{% component 'Movie' %}
<!-- SLIDER AREA START -->
<!-- <div class=\"herboil__slider-area\">
    <div class=\"herboil__slider-active slick-arrow-style-1 slick-dots-style-1\">
        <div id=\"wowslider-container1\" style=\"margin:0 auto; padding: 40px 0;\">
            <div class=\"ws_images\">
                <ul>
                    {% for movie in movies %}
                    <li>
                        <img src=\"{{ movie.image | media }}\" alt=\"{{movie.name}}\" title=\"{{movie.name}}\" id=\"wows1_0\" />
                    </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div> 
    <div class=\"herboil__slide-item\">
        <div class=\"herboil__slide-item-inner bg-image\" data-bg=\"{{ movie.filename }}\">
            <div class=\"herboil__slide-background left-layer\"
                style=\"background-image: url('{{ movie.image | media }}');\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-12 align-self-center herboil__slide-content-main\">
                        <div class=\"herboil__slide-content\">
                            <div class=\"herboil__slide-content-inner\">
                                <p>{{movie.description | raw}}</p>
                                <h1>{{movie.name}}</h1>
                                <div class=\"btn-wrapper product-llist\">
                                    <a class=\"pro boxed-btn\" data-pro={{movie.product_id}}
                                        data-toggle=\"modal{{movie.product_id}}\"
                                        data-target=\"#modal{{movie.product_id}}\">Mua ngay</a>
                                    <a data-pro={{movie.product_id}} class=\"see-more-ls boxed-btn\">Tìm hiểu thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Slider area start -->
<!-- <div class=\"slider-area home-three\">
    <div class=\"slider-inner\">
        <div id=\"mainSlider\" class=\"nivoSlider nevo-slider\">
            <img src=\"{{ 'assets/img/slider/slide4.jpg' |theme }}\" alt=\"main slider\" title=\"#htmlcaption1\" />
            <img src=\"{{ 'assets/img/slider/slide2.jpg' |theme }}\" alt=\"main slider\" title=\"#htmlcaption2\" />
        </div>
        <div id=\"htmlcaption1\" class=\"nivo-html-caption slider-caption\">
            <div class=\"slider-progress\"></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"col-sm-12\">
                            <div class=\"slider-content slider-content-1 slider-animated-1 pull-left\">
                                <h1 class=\"hone\">Tinh dầu sả nguyên chất 100%</h1>
                                <h2 class=\"htwo\">Giá chỉ 210.000 đồng / <span class=\"hp1\">50ml</span> </h2>
                                <div class=\"button-1 hover-btn-2\">
                                    <a class=\"pro boxed-btn\" data-pro={{movie.product_id}}
                                        data-toggle=\"modal{{movie.product_id}}\"
                                        data-target=\"#modal{{movie.product_id}}\">Mua ngay</a>
                                    <a data-pro={{movie.product_id}} class=\"see-more-ls boxed-btn\">Tìm hiểu thêm</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"htmlcaption2\" class=\"nivo-html-caption slider-caption\">
            <div class=\"slider-progress\"></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"slider-content slider-content-2 slider-animated-2 pull-left\">
                            <p class=\"hp1\">Soothing Iritated Skin</p>
                            <h1 class=\"hone\">up to 20% off</h1>
                            <h2 class=\"htwo\">Lanbio Oil</h2>
                            <div class=\"button-1 hover-btn-2\">
                                <a class=\"pro boxed-btn\" data-pro={{movie.product_id}}
                                    data-toggle=\"modal{{movie.product_id}}\" data-target=\"#modal{{movie.product_id}}\">Mua
                                    ngay</a>
                                <a data-pro={{movie.product_id}} class=\"see-more-ls boxed-btn\">Tìm hiểu thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Slider area end -->


<!-- KHONG DUOC XOA NUA -->
<div id=\"modal\">

</div>
</div>
<!-- SLIDER AREA END -->

<!-- CUSTOM CONTENT AREA START -->
<div class=\"herboil__custom-content-area mobile-mt-20\">
    <div class=\"description-us\">
        <div class=\"container\">
            <div class=\"title_brand heading-title text-center\">
                <h2 class=\"\">
                    <a class=\"text_gradient\">
                        3 đặc điểm về chúng tôi
                    </a>
                </h2>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 col-sm-6 col-ms-12 col-xs-12\">
                    <div class=\"item-image-wrapper\">
                        <div class=\"item-image-des\"
                            style=\"background-image: url('/arome/themes/aroma/assets/img/others/banner/tinhgon.jpg');\">
                        </div>
                        <div class=\"item-count-label\">Tinh Gọn</div>
                    </div>
                    <!-- <h6 class=\"item-header\">Arabica Green</h6> -->
                    <span class=\"item-excerpt\">Đội ngũ thành viên công ty tinh nhuệ, đa năng và nhiều kinh nghiệm thương
                        trường, được trải
                        nghiệm sống và học tập từ môi trường quốc tế, nhưng vẫn giữ niềm khát khao mang sản phẩm,
                        thương hiệu Việt chất lượng cao, an toàn đến với người tiêu dùng trong nước và thế giới.</span>
                </div>

                <div class=\"col-lg-4 col-md-6 col-sm-6 col-ms-12 col-xs-12\">
                    <span class=\"item-image-wrapper\">
                        <span class=\"item-image-des\"
                            style=\"background-image: url('/arome/themes/aroma/assets/img/others/banner/hieuqua.jpeg');\"></span>
                        <span class=\"item-count-label\">Hiệu Quả</span>
                    </span>
                    <!-- <h6 class=\"item-header\">Arabica Green</h6> -->
                    <span class=\"item-excerpt\">Tiêu chí hiệu quả luôn đặt vị trí hàng đầu trong mọi quyết định, luôn tìm
                        các giải pháp nhằm
                        tối ưu mọi nguồn lực bên trong và bên ngoài, hướng đến lợi ích cho tất cả các bên cùng hợp
                        tác: Công ty – Đối tác – Khách hàng.</span>
                </div>

                <div class=\"col-lg-4 col-md-6 col-sm-6 col-ms-12 col-xs-12\">
                    <span class=\"item-image-wrapper\">
                        <span class=\"item-image-des\"
                            style=\"background-image: url('/arome/themes/aroma/assets/img/others/banner/thichung.jpg');\"></span>
                        <span class=\"item-count-label\">Thích Ứng</span>
                    </span>
                    <!-- <h6 class=\"item-header\">Arabica Green</h6> -->
                    <span class=\"item-excerpt\">Cơ cấu linh hoạt dễ dàng thích ứng với sự thay đổi, nắm bắt kịp thời xu
                        hướng tiêu dùng cũng
                        như những mong muốn tiềm ẩn của khách hàng, cung cấp cho khách hàng những sản phẩm, dịch vụ
                        chất lượng cao, thiết thực với nhu cầu.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class=\"container padding-lg-left-0\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"herboil__custom-content-img box-image\">
                    <a href=\"\">
                        <img src=\"{{ 'assets/img/hinhanh/h1.jpg' | theme}}\" alt=\"#\">
                    </a>

                </div>

                <div class=\"herboil__custom-content-img box-image bannerleft-tablet \">
                    <img src=\"{{ 'assets/img/hinhanh/h2.jpg' | theme}}\" alt=\"#\">
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"herboil__custom-content-info\">
                    <div class=\"herboil__custom-content-info-inner\">
                        <h3 class=\"title-info\">3 đặc điểm miêu tả về chúng tôi: </h3>
                        <h3 class=\"title-info\">Tinh Gọn</h3>
                        <p class=\"style-info\">
                            Đội ngũ thành viên công ty tinh nhuệ, đa năng và nhiều kinh nghiệm thương trường, được trải
                            nghiệm sống và học tập từ môi trường quốc tế, nhưng vẫn giữ niềm khát khao mang sản phẩm,
                            thương hiệu Việt chất lượng cao, an toàn đến với người tiêu dùng trong nước và thế giới.
                        </p>
                        <h3 class=\"title-info\">Hiệu Quả</h3>
                        <p class=\"style-info\">
                            Tiêu chí hiệu quả luôn đặt vị trí hàng đầu trong mọi quyết định, luôn tìm các giải pháp nhằm
                            tối ưu mọi nguồn lực bên trong và bên ngoài, hướng đến lợi ích cho tất cả các bên cùng hợp
                            tác: Công ty – Đối tác – Khách hàng.
                        </p>
                        <h3 class=\"title-info\">Thích Ứng</h3>
                        <p class=\"style-info\">
                            Cơ cấu linh hoạt dễ dàng thích ứng với sự thay đổi, nắm bắt kịp thời xu hướng tiêu dùng cũng
                            như những mong muốn tiềm ẩn của khách hàng, cung cấp cho khách hàng những sản phẩm, dịch vụ
                            chất lượng cao, thiết thực với nhu cầu.
                        </p>
                        <div class=\"btn-wrapper\">
                            <a href=\"{{ 'about' | page }}\" class=\"boxed-btn\">Tìm Hiểu Thêm</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
<!-- CUSTOM CONTENT AREA END -->

<!-- CUSTOM CONTENT AREA START -->
<div class=\"herboil__custom-content-area mobile-mt-20\">
    <div class=\"container padding-lg-left-0\">
        <div class=\"row space\">
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"herboil__custom-content-img\">
                    <img src=\"{{'assets/img/others/banner/banner-home-product.jpg' | theme }}\" alt=\"#\">
                </div>
            </div>
            <div class=\"col-lg-5 col-md-6\">
                <div class=\"herboil__custom-content-info\">
                    <div class=\"herboil__custom-content-info-inner\">
                        <h1 class=\"nameproduct\">Combo 2 lọ tinh dầu sả (Tặng 1 lọ treo)</h1>
                        <h2 class=\"numberproduct\">30ml</h2>
                        <div class=\"moneyproduct\">300.000</div>
                        <p><i class=\"fas fa-tint\" id=\"icon-drop\"></i>&nbsp;Trị cảm mạo</p>
                        <p><i class=\"fas fa-tint\" id=\"icon-drop\"></i>&nbsp;Hỗ trợ trị mụn</p>
                        <p><i class=\"fas fa-tint\" id=\"icon-drop\"></i>&nbsp;Khử mùi hôi, ẩm mốc</p>
                        <p><i class=\"fas fa-tint\" id=\"icon-drop\"></i>&nbsp;Đuổi muỗi, kiến, côn trùng</p>
                        <p><i class=\"fas fa-tint\" id=\"icon-drop\"></i>&nbsp;Thư giản với liệu pháp hương mới</p>

                        <div class=\"btn-wrapper\">
                            <a href=\"{{'all-product' | page }}\" class=\"boxed-btn\">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CUSTOM CONTENT AREA END -->

<!-- TESTIMONIAL  -->
<div
    class=\"herboil__banner-area margin-bottom-85 margin-top-85 padding-top-105 padding-bottom-60 section-bg-1 mobile-pt-70 mobile-pb-40\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"herboil__section-title text-center\">
                    <h1 class=\"section-title\">Khách Hàng</h1>
                    <!-- <div class=\"home-subtitle\">
                        <h2 class=\"section-subtitle\">Cảm nhận về Arome</h2>
                    </div> -->
                    <div class=\"title_brand heading-title text-center\">
                        <h2 class=\"\">
                            <a class=\"text_gradient text-customer\">
                                Cảm nhận về Arome
                            </a>

                        </h2>
                    </div>

                    <!-- <p class=\"section-subtitle\">Nói Về Tinh Dầu Arome</p> -->
                </div>
            </div>
        </div>
        {# <div class=\"testimonial\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-12\">
                    <div class=\"item-testi profile text-center\">
                        <img src=\"{{'assets/img/others/testimonial/A.Huu Loc.jpg' | theme}}\" alt=\"\">
                        <h4>Nguyễn Trần Hữu Lộc </h4>
                        <label for=\"\">Nguyễn Trần Hữu Lộc </label>
                        <p>
                            <i class=\"fa fa-quote-left\"></i>
                            Mùi hương của tinh dầu sả của Arome đúng chất, không lẫn mùi pha tạp. Tôi đang sử dụng sản
                            phẩm cho phòng khách và phòng ngủ để luôn có cảm giác dễ chịu và đuổi muỗi cũng rất hiệu quả
                            <i class=\"fa fa-quote-right\"></i>
                        </p>
                    </div>
                </div>

                <div class=\"col-lg-6 col-md-6 col-12\">
                    <div class=\"item-testi profile text-center\">
                        <img src=\"{{'assets/img/others/testimonial/3.jpg' | theme}}\" alt=\"\">
                        <h4>Martin Alexa</h4>
                        <label for=\"\">Designer</label>
                        <p>
                            <i class=\"fa fa-quote-left\"></i>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            <i class=\"fa fa-quote-right\"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div> #}

        <div class=\"owl-carousel testimonial\">
            <div class=\"col-12 item\">
                <div class=\"item-testi profile text-center\">
                    <img src=\"{{'assets/img/others/testimonial/A.Huu Loc.jpg' | theme}}\" alt=\"\">
                    <h4>Nguyễn Trần Hữu Lộc </h4>
                    <label for=\"\">Giáo viên dạy thiết kế đồ họa</label>
                    <!-- <br>
                    <label for=\"\" class=\"address-customer\"></label> -->
                    <p>
                        <i class=\"fa fa-quote-left\"></i>
                        Mùi hương của tinh dầu sả của Arome đúng chất, không lẫn mùi pha tạp. Tôi đang sử dụng sản
                        phẩm cho phòng khách và phòng ngủ để luôn có cảm giác dễ chịu và đuổi muỗi cũng rất hiệu quả
                        <i class=\"fa fa-quote-right\"></i>
                    </p>
                </div>
            </div>

            <div class=\"col-12 item\">
                <div class=\"item-testi profile text-center\">
                    <img src=\"{{'assets/img/others/testimonial/C.Chau.jpg' | theme}}\" alt=\"\">
                    <h4>Nguyễn Ngọc Minh Châu</h4>
                    <label for=\"\">Chủ tiệm CHÂU HAIR SALON, đường Hòa Hưng, Q.3, Tp.HCM</label>
                    <p>
                        <i class=\"fa fa-quote-left\"></i>
                        Tôi hay dùng Tinh dầu sả Arome để xông hương cho tiệm làm đẹp của mình, khách đến đây cảm thấy
                        rất thư giãn khi được massage, gội đầu trong căn phòng thơm mùi sả dịu nhẹ, và đến với tiệm của
                        chúng tôi thường xuyên hơn
                        <i class=\"fa fa-quote-right\"></i>
                    </p>
                </div>
            </div>

            <!-- <div class=\"col-12 item\">
                <div class=\"item-testi profile text-center\">
                    <img src=\"{{'assets/img/others/testimonial/A.Huu Loc.jpg' | theme}}\" alt=\"\">
                    <h4>Nguyễn Trần Hữu Lộc </h4>
                    <label for=\"\">Giáo viên dạy thiết kế đồ họa</label>
                    <p>
                        <i class=\"fa fa-quote-left\"></i>
                        Mùi hương của tinh dầu sả của Arome đúng chất, không lẫn mùi pha tạp. Tôi đang sử dụng sản
                        phẩm cho phòng khách và phòng ngủ để luôn có cảm giác dễ chịu và đuổi muỗi cũng rất hiệu quả
                        <i class=\"fa fa-quote-right\"></i>
                    </p>
                </div>
            </div> -->

            <!-- <div class=\"col-12 item\">
                <div class=\"item-testi profile text-center\">
                    <img src=\"{{'assets/img/others/testimonial/C.Chau.jpg' | theme}}\" alt=\"\">
                    <h4>Nguyễn Ngọc Minh Châu</h4>
                    <label for=\"\">Chủ tiệm CHÂU HAIR SALON, đường Hòa Hưng, Q.3, Tp.HCM</label>
                    <p>
                        <i class=\"fa fa-quote-left\"></i>
                        Tôi hay dùng Tinh dầu sả Arome để xông hương cho tiệm làm đẹp của mình, khách đến đây cảm thấy
                        rất thư giãn khi được massage, gội đầu trong căn phòng thơm mùi sả dịu nhẹ, và đến với tiệm của
                        chúng tôi thường xuyên hơn
                        <i class=\"fa fa-quote-right\"></i>
                    </p>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- TESTIMONIAL END -->

<!-- LATEST BLOG AREA START -->
<div class=\"herboil__latest-blog-area margin-bottom-20 mobile-mb-20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"herboil__section-title text-center\">
                    <h1 class=\"section-title\">BLOG</h1>
                    <!-- <p class=\"section-subtitle\">Bài viết mới nhất của chúng tôi</p> -->
                </div>
            </div>
        </div>
        <div class=\"row latest-blog-active slick-arrow-style-1 slick-dots-style-1\">
            {% for post in posts %}
            <div class=\"col-lg-12\">
                <div class=\"herboil__blog-item text-center\">
                    {% if post.featured_images.count %}
                    <div class=\"blog-img\">
                        {% for image in post.featured_images | slice(0, 1) %}
                        <a href=\"{{ post.url }}\">
                            <img data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" alt=\"{{ image.description }}\">
                        </a>
                        {% endfor %}
                    </div>
                    <div class=\"blog-content\">
                        <div class=\"blog-meta\">
                            <ul style=\"justify-content: center;\">
                                <li>{{ post.published_at|date('d/m/Y')}}</li>
                                <li>Bởi: <a href=\"#\">Admin</a></li>
                            </ul>
                        </div>
                        <h3 class=\"blog-title\">
                            <strong><a href=\"{{ post.url }}\">{{ post.title }}</a></strong>
                        </h3>
                        <p>{{ post.summary }}</p>
                        <div class=\"blog-btn\">
                            <a href=\"{{ post.url }}\" class=\"boxed-btn\">Xem Thêm <i
                                    class=\"fa fa-angle-double-right\"></i></a>
                        </div>
                    </div>
                    {% endif %}
                </div>
            </div>
            {% endfor %}
            {# <div class=\"col-lg-12\">
                <div class=\"herboil__blog-item text-center\">
                    <div class=\"blog-img\">
                        <a href=\"blog-details.html\"><img src=\"{{ 'assets/img/blog/2.jpg' | theme }}\" alt=\"#\"></a>
                    </div>
                    <div class=\"blog-content\">
                        <div class=\"blog-meta\">
                            <ul>
                                <li>4 November 2019</li>
                                <li>By: <a href=\"#\">Admin</a></li>
                            </ul>
                        </div>
                        <h3 class=\"blog-title\"><a href=\"blog-details.html\">Mauris imperdiet orci dapibus</a></h3>
                        <p>Proin ac quam et lectus vestibulum blandit. Nunc maximu tincidunt. Nam sem lacus, ornare non
                            ante sed, ultricies fringilla massa. </p>
                        <div class=\"blog-btn\">
                            <a href=\"blog-details.html\" class=\"boxed-btn\">Read More <i class=\"icon-Group-6823\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"herboil__blog-item text-center\">
                    <div class=\"blog-img\">
                        <a href=\"blog-details.html\"><img src=\"{{ 'assets/img/blog/3.jpg'  | theme}}\" alt=\"#\"></a>
                    </div>
                    <div class=\"blog-content\">
                        <div class=\"blog-meta\">
                            <ul>
                                <li>4 November 2019</li>
                                <li>By: <a href=\"#\">Admin</a></li>
                            </ul>
                        </div>
                        <h3 class=\"blog-title\"><a href=\"blog-details.html\">When You Grow, Others Will</a></h3>
                        <p>When You Grow, Others Will Follow. Nunc maximu tincidunt. Nam sem lacus, ornare non ante sed,
                            ultricies fringilla massa. </p>
                        <div class=\"blog-btn\">
                            <a href=\"blog-details.html\" class=\"boxed-btn\">Read More <i class=\"icon-Group-6823\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"herboil__blog-item text-center\">
                    <div class=\"blog-img\">
                        <a href=\"blog-details.html\"><img src=\"{{ 'assets/img/blog/2.jpg' | theme }}\" alt=\"#\"></a>
                    </div>
                    <div class=\"blog-content\">
                        <div class=\"blog-meta\">
                            <ul>
                                <li>4 November 2019</li>
                                <li>By: <a href=\"#\">Admin</a></li>
                            </ul>
                        </div>
                        <h3 class=\"blog-title\"><a href=\"blog-details.html\">Mauris imperdiet orci dapibus</a></h3>
                        <p>Proin ac quam et lectus vestibulum blandit. Nunc maximu tincidunt. Nam sem lacus, ornare non
                            ante sed, ultricies fringilla massa. </p>
                        <div class=\"blog-btn\">
                            <a href=\"blog-details.html\" class=\"boxed-btn\">Xem Thêm <i class=\"icon-Group-6823\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            #}
        </div>
    </div>
</div>
<!-- BLOG AREA END -->

<!-- POPUP PRODUCT -->
<div class=\"modal fade\" id=\"{{obProduct.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-xs-12\">
                    <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                        <div class=\"carousel-inner\">
                            {% if obProduct.preview_image is not empty %}
                            <div class=\"carousel-item active\">
                                <img class=\"d-block w-100\" src=\"{{ obProduct.preview_image.path }}\"
                                    alt=\"{{ obProduct.preview_image.description }}\"
                                    title=\"{{ obProduct.preview_image.title }}\">
                            </div>
                            {% endif %}
                            {% if obProduct.images is not empty %}
                            {% for img in obProduct.images %}
                            <div class=\"carousel-item\">
                                <img class=\"d-block w-100\" src=\"{{img.path}}\" alt=\"{{obProduct.name}}\"
                                    alt=\"Second slide\">
                            </div>
                            {% endfor %}
                            {% endif %}
                        </div>
                        <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\"
                            data-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Previous</span>
                        </a>
                        <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\"
                            data-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Next</span>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-6 col-xs-12\">
                    <div class=\"info-product\">
                        <h3> {{ obProduct.name }}</h3>
                        <p>
                            {% set obOffer = obProduct.offer.first() %}
                            {% if obOffer.isNotEmpty()%}
                            <span class=\"regular-price\"> {{ obOffer.price }} {{ obOffer.currency }}</span>
                            {% if obOffer.old_price > 0 %}
                            <del class=\"price price-sale\"> {{ obOffer.old_price }} {{ obOffer.currency }}</del>
                            {% endif %}
                            {% endif %}
                        </p>
                        <div class=\"product-short-des\">
                            <p>{{ obProduct.preview_text }}</p>
                        </div>
                        <div class=\"button-add\">
                            <span class=\"input-number-decrement\">–</span>
                            <input class=\"input-number\" type=\"text\" value=\"1\" min=\"0\" max=\"10\">
                            <span class=\"input-number-increment\">+</span>
                        </div>

                        <div class=\"btn-cart\" onclick=\"addCart('{{obOffer.id}}')\">
                            <span>Mua Hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- POPUP PRODUCT END -->", "C:\\xampp\\htdocs\\arome/themes/aroma/pages/home.htm", "");
    }
}
