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

/* C:\xampp\htdocs\arome/themes/aroma/pages/about.htm */
class __TwigTemplate_b61e0ad456bbc62bee0ebf55b680d518800127d6f2f8d426807ec794d7d5ace0 extends \Twig\Template
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
        $tags = array();
        $filters = array("theme" => 196);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
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
        echo "<!-- BANNER HEADER -->
<div class=\"banner-header banner-about-top\">
    <div class=\"container text-center\">
        <h1>Về chúng tôi</h1>
    </div>
</div>
<!-- END BANNER HEADER -->

<!-- FEATURE AREA START -->
";
        // line 64
        echo "<!-- FEATURE AREA END -->

<!-- TESTIMONIAL AREA START -->
";
        // line 131
        echo "<!-- TESTIMONIAL AREA END -->

<!-- FEATURE AREA START -->
<!-- <div class=\"herboil__feature-area padding-top-120 margin-bottom-70 mobile-pt-50 mobile-mb-20\">
    <div class=\"container\">
        <div class=\"herboil__feature-item\">
            <h4>Ba đặc điểm nổi bật mà Khách hàng và Đối tác kinh doanh sẽ nhận thấy khi hợp tác với chúng tôi:</h4>
        </div>
        <div class=\"row\">
            <div class=\"col-xl-4 col-sm-6 col-12\">
                <div class=\"herboil__feature-item clearfix\">
                    <div class=\"feature-icon\">
                        <i class=\"fa fa-sort\"></i>
                    </div>
                    <div class=\"feature-content\">
                        <h4> TINH GỌN </h4>
                        <p class=\"text-justify\">Đội ngũ thành viên công ty tinh nhuệ, đa năng và nhiều kinh nghiệm
                            thương trường, có niềm khát khao mang sản phẩm, thương hiệu Việt chất lượng cao, an toàn đến
                            với người tiêu dùng trong nước và thế giới.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 col-sm-6 col-12\">
                <div class=\"herboil__feature-item clearfix\">
                    <div class=\"feature-icon\">
                        <i class=\"fa fa-shield\"></i>
                    </div>
                    <div class=\"feature-content\">
                        <h4> HIỆU QUẢ </h4>
                        <p class=\"text-justify\">Tiêu chí hiệu quả luôn đặt vị trí hàng đầu trong mọi quyết định, luôn
                            tìm các giải pháp nhằm tối ưu mọi nguồn lực bên trong và bên ngoài, hướng đến lợi ích cho
                            tất cả các bên cùng hợp tác: Công ty – Đối tác – Khách hàng.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 col-sm-6 col-12\">
                <div class=\"herboil__feature-item clearfix\">
                    <div class=\"feature-icon\">
                        <i class=\"fa fa-gift\"></i>
                    </div>
                    <div class=\"feature-content\">
                        <h4> THÍCH ỨNG</h4>
                        <p class=\"text-justify\">Cơ cấu linh hoạt dễ dàng thích ứng với sự thay đổi, nắm bắt kịp thời xu
                            hướng tiêu dùng cũng như những mong muốn tiềm ẩn của khách hàng, cung cấp cho khách hàng
                            những sản phẩm, dịch vụ chất lượng cao, thiết thực với nhu cầu.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"intro-company\">
            <strong>Arome</strong> là thương hiệu dòng sản phẩm có nguồn gốc thiên nhiên chất lượng cao của Công ty HQ.
            Với định hướng
            mang đến cho Khách hàng dòng sản phẩm xanh, sạch, nhiều công dụng trong cuộc sống hằng ngày, Công ty HQ sẽ
            phát triển các sản phẩm đa dạng khác để đáp ứng nhu cầu của thị trường.
        </div>
    </div>
</div> -->
<!-- FEATURE AREA END -->

<!-- Description Introduce -->
<div class=\"wrapper-introduct\">
    <div class=\"billboard-holder\">
        <div class=\"billboard-main-section\">
            <div class=\"billboard-image\">
                <img src=\"";
        // line 196
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/about/ve-chung-toi-1.jpg");
        echo "\" alt=\"\"
                    sizes=\"(max-width: 960px) 100vw, 960px\">
            </div>
        </div>

        <div class=\"billboard-additional-section\">
            <div class=\"billboard-image\">
                <img width=\"960\" height=\"640\" src=\"";
        // line 203
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/others/banner/banner-intro2.jpg");
        echo "\" alt=\"\"
                    sizes=\"(max-width: 960px) 100vw, 960px\">
            </div>

            <div class=\"billboard-text-holder\">
                <div class=\"billboard-text-inner\">
                    <!-- <span class=\"billboard-tagline\">Wellness</span>
                    <div class=\"billboard-title\">
                        Pricing & offers
                    </div> -->
                    <div class=\"billboard-description\">
                        Công ty TNHH Sản xuất Thương mại Dịch vụ Xuất nhập khẩu HQ được thành lập vào năm 2020 bởi các
                        thành viên nhiều kinh nghiệm, đã được trải nghiệm sống và học tập từ cả môi trường Việt Nam lẫn
                        quốc tế, tiếp thu sự tiến bộ và nhiều nền văn hóa khác nhau. Do đó, bên cạnh có thể thấu hiểu
                        người tiêu dùng trong nước, công ty còn mang đến cho khách hàng những sản phẩm, dịch vụ chất
                        lượng với phong cách làm việc chuyên nghiệp.
                    </div>
                    <!-- <span class=\"billboard-btn\">
                        <a href=\"\">view now</a>
                    </span> -->
                </div>
            </div>
        </div>
    </div>

    <div class=\"billboard-holder billboard-right-orientation\">
        <div class=\"billboard-main-section1\">
            <div class=\"billboard-image\">
                <img src=\"";
        // line 231
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/about/Ve-chung-toi-2.jpg");
        echo "\" alt=\"\"
                    sizes=\"(max-width: 960px) 100vw, 960px\">
            </div>
        </div>

        <div class=\"billboard-additional-section\">
            <div class=\"billboard-image\">
                <img width=\"960\" height=\"640\" src=\"";
        // line 238
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/others/banner/banner-intro2.jpg");
        echo "\" alt=\"\"
                    sizes=\"(max-width: 960px) 100vw, 960px\">
            </div>

            <div class=\"billboard-text-holder\">
                <div class=\"billboard-text-inner\">
                    <!-- <span class=\"billboard-tagline\">Wellness</span>
                    <div class=\"billboard-title\">
                        Pricing & offers
                    </div> -->
                    <div class=\"billboard-description\">
                        Với chức năng kinh doanh đa ngành nghề, Công ty HQ mong muốn mang sản phẩm, thương hiệu Việt
                        chất lượng cao đến với người tiêu dùng trong nước và thế giới, đặc biệt là các sản phẩm xanh,
                        sạch, có nguồn gốc thiên nhiên. Chúng tôi luôn giữ niềm tin rằng, dù cho cuộc sống có biến đổi,
                        phát triển thế nào, con người luôn có xu hướng trở về với những gì cơ bản và tự nhiên nhất.
                    </div>
                    <!-- <span class=\"billboard-btn\">
                        <a href=\"\">view now</a>
                    </span> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Description Introduce End -->

<!-- CUSTOM CONTENT AREA START -->
<div class=\"herboil__custom-content-area margin-top-60 margin-bottom-70 mobile-mt-75\">
    <div class=\"container padding-lg-left-0\">
        <!-- <div class=\"row\">
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"herboil__custom-content-img\">
                    <img src=\"";
        // line 270
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/others/banner/banner-about.jpg");
        echo "\" alt=\"#\">
                </div>
            </div>
            <div class=\"col-lg-5 col-md-6\">
                <div class=\"herboil__custom-content-info\">
                    <div class=\"herboil__custom-content-infoe-inner\">
                        <p><strong>Công ty TNHH Sản xuất Thương mại Dịch vụ Xuất nhập khẩu HQ</strong> được thành lập
                            vào năm 2020 bởi
                            các thành viên nhiều kinh nghiệm, đã được trải nghiệm sống và học tập từ cả môi trường Việt
                            Nam lẫn quốc tế, tiếp thu sự tiến bộ và nhiều nền văn hóa khác nhau. Do đó, bên cạnh có thể
                            thấu hiểu người tiêu dùng trong nước, công ty còn mang đến cho khách hàng những sản phẩm,
                            dịch vụ chất lượng với phong cách làm việc chuyên nghiệp.</p>
                        <p>Với chức năng kinh doanh đa ngành nghề, <strong>Công ty HQ</strong> mong muốn mang sản phẩm,
                            thương hiệu Việt
                            chất lượng cao đến với người tiêu dùng trong nước và thế giới, đặc biệt là các sản phẩm
                            xanh, sạch, có nguồn gốc thiên nhiên. Chúng tôi luôn giữ niềm tin rằng, dù cho cuộc sống có
                            biến đổi, phát triển thế nào, con người luôn có xu hướng trở về với những gì cơ bản và tự
                            nhiên nhất.</p>

                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class=\"col-12 text-center\">
            <h3 class=\"t-about\">VỀ CHÚNG TÔI</h3>
            <h3 class=\"des-about\">Công ty TNHH Sản xuất Thương mại Dịch vụ Xuất nhập khẩu HQ</h3>
        </div> -->
    </div>
</div>
<!-- CUSTOM CONTENT AREA END -->

<!-- Title -->
<div class=\"title-timlineabout\">
    <div class=\"container\">
        <div class=\"title_brand heading-title text-center\">
            <h2 class=\"\">
                <a class=\"text_gradient\">
                    Phương châm của chúng tôi
                </a>
            </h2>
        </div>
    </div>
</div>

<!-- Title end -->

<!-- Timeline About Us -->
<div class=\"br-timeline\">
    <div class=\"container\">
        <div class=\"cab-about-history-timeline\">
            <div class=\"cab-about-timeline-box\">
                <div class=\"timeline-title\">
                    <!-- <span class=\"year\">2011</span>
                    <span class=\"title\">Started The restaurant</span> -->
                    <div class=\"cricle-rotate\">
                        <div class=\"crircle-title\">
                            <span class=\"title-timeline\">
                                Tinh gọn
                            </span>
                        </div>
                    </div>
                </div>

                <div class=\"timeline-line\"> </div>

                <div class=\"timeline-description\">
                    <div class=\"inner-des\">
                        Đội ngũ thành viên công ty tinh nhuệ, đa năng và nhiều kinh nghiệm thương trường, có niềm khát
                        khao mang sản phẩm, thương hiệu Việt chất lượng cao, an toàn đến với người tiêu dùng trong nước
                        và thế giới.
                    </div>
                </div>
            </div>

            <div class=\"cab-about-timeline-box\">
                <div class=\"timeline-title\">
                    <!-- <span class=\"year\">2011</span>
                    <span class=\"title\">Started The restaurant</span> -->
                    <div class=\"cricle-rotate\">
                        <div class=\"crircle-title\">
                            <span class=\"title-timeline\">
                                Hiệu quả
                            </span>
                        </div>
                    </div>
                </div>

                <div class=\"timeline-line\"> </div>

                <div class=\"timeline-description\">
                    <div class=\"inner-des\">
                        Tiêu chí hiệu quả luôn đặt vị trí hàng đầu trong mọi quyết định, luôn tìm các giải pháp nhằm tối
                        ưu mọi nguồn lực bên trong và bên ngoài, hướng đến lợi ích cho tất cả các bên cùng hợp tác: Công
                        ty – Đối tác – Khách hàng.
                    </div>
                </div>
            </div>

            <div class=\"cab-about-timeline-box\">
                <div class=\"timeline-title\">
                    <!-- <span class=\"year\">2011</span>
                    <span class=\"title\">Started The restaurant</span> -->
                    <div class=\"cricle-rotate\">
                        <div class=\"crircle-title\">
                            <span class=\"title-timeline\">
                                Thích ứng
                            </span>
                        </div>
                    </div>
                </div>

                <div class=\"timeline-line\"></div>

                <div class=\"timeline-description\">
                    <div class=\"inner-des\">

                        Cơ cấu linh hoạt dễ dàng thích ứng với sự thay đổi, nắm bắt kịp thời xu hướng tiêu dùng cũng như
                        những mong muốn tiềm ẩn của khách hàng, cung cấp cho khách hàng những sản phẩm, dịch vụ chất
                        lượng cao, thiết thực với nhu cầu.

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Timeline About Us End -->

<!-- Introduct Company -->
<div class=\"des-shortcompany\">
    <div class=\"container\">
        <span><strong class=\"style-animation\">Arome</strong> là thương hiệu dòng sản phẩm có nguồn gốc thiên
            nhiên chất lượng cao của
            <strong class=\"style-animation\">Công ty HQ</strong>. Với
            định hướng mang đến cho Khách hàng dòng sản phẩm xanh, sạch, nhiều công dụng trong cuộc sống hằng
            ngày, <strong class=\"style-animation\">Công ty HQ</strong> sẽ phát triển các sản phẩm đa dạng khác để
            đáp ứng nhu cầu của thị
            trường.</span>
    </div>
</div>
<!-- Introduct Company End -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 270,  196 => 238,  186 => 231,  155 => 203,  145 => 196,  78 => 131,  73 => 64,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- BANNER HEADER -->
<div class=\"banner-header banner-about-top\">
    <div class=\"container text-center\">
        <h1>Về chúng tôi</h1>
    </div>
</div>
<!-- END BANNER HEADER -->

<!-- FEATURE AREA START -->
{# <div class=\"herboil__feature-area-2 padding-top-120 padding-bottom-55 mobile-pt-75 mobile-pb-20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-3 col-12\">
                <div class=\"row\">
                    <div class=\"col-xl-12 col-md-6\">
                        <div class=\"herboil__feature-item-2\">
                            <i class=\"fa fa-tint\"></i>
                            <h4>Hỗ trợ trị mụn</h4>
                            <p class=\"text-justify\">Do tinh dầu sả có chất kháng khuẩn cao hỗ trợ việc trị mụn đầu đen
                                và
                                mụn bọc, kết hợp với lá tía tô giúp làm trắng da.</p>
                        </div>

                    </div>
                    <div class=\"col-xl-12 col-md-6\">
                        <div class=\"herboil__feature-item-2\">
                            <i class=\"fa fa-refresh\"></i>
                            <h4>Đuổi muỗi, kiến, côn trùng </h4>
                            <p class=\"text-justify\">Mùi hương của sả có khả năng đuổi muỗi, kiến, và các loại côn trùng
                                khác.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-6 col-12\">
                <div class=\"herboil__feature-item-2\">
                    <img src=\"{{'assets/img/others/banner/banner-arome.jpg'|theme}}\" alt=\"#\">
                </div>

            </div>
            <div class=\"col-xl-3 col-12\">
                <div class=\"row\">
                    <div class=\"col-xl-12 col-md-6\">
                        <div class=\"herboil__feature-item-2\">
                            <i class=\"fa fa-flask\"></i>
                            <h4>Khử mùi hôi, ẩm mốc</h4>
                            <p class=\"text-justify\">Khử mùi thức ăn, mùi ẩm mốc trong phòng. Hạn chế say xe. Khử mùi hôi
                                từ ống cống, hoặc treo trong tủ giày</p>
                        </div>
                    </div>
                    <div class=\"col-xl-12 col-md-6\">
                        <div class=\"herboil__feature-item-2\">
                            <i class=\"fa fa-pagelines\"></i>
                            <h4>Thanh tẩy không khí</h4>
                            <p class=\"text-justify\">Thanh tẩy không khí, loại bỏ những chất độc hại lơ lửng trong không
                                khí </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> #}
<!-- FEATURE AREA END -->

<!-- TESTIMONIAL AREA START -->
{# <div class=\"herboil__testimonial-area margin-bottom-112 mobile-mb-100\">
    <div class=\"container\">
        <div class=\"testimonial-inner\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"testimonial-image-area\">
                        <div class=\"testimonial-image-active\">
                            <div class=\"testimonial-image-item\">
                                <div class=\"testimonial-image-item-inner\">
                                    <img src=\"{{ 'assets/img/others/testimonial/A.Huu Loc.jpg' | theme }}\" alt=\"#\">
                                </div>
                            </div>
                            <div class=\"testimonial-image-item\">
                                <div class=\"testimonial-image-item-inner\">
                                    <img src=\"{{ 'assets/img/others/testimonial/A.Huu Loc.jpg' | theme }}\" alt=\"#\">
                                </div>
                            </div>
                            <div class=\"testimonial-image-item\">
                                <div class=\"testimonial-image-item-inner\">
                                    <img src=\"{{ 'assets/img/others/testimonial/A.Huu Loc.jpg' | theme }}\" alt=\"#\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"testimonial-info-area\">
                        <div class=\"testimonial-info-active slick-arrow-style-2\">
                            <div class=\"testimonial-info-item\">
                                <p>
                                    “Mùi hương của tinh dầu sả của Arome đúng chất, không lẫn mùi pha tạp. Tôi đang sử
                                    dụng sản phẩm cho phòng khách và phòng ngủ để luôn có cảm giác dễ chịu và đuổi muỗi
                                    cũng rất hiệu quả.”
                                </p>
                                <h4>Nguyễn Trần Hữu Lộc </h4>
                                <label>Giáo viên dạy thiết kế đồ họa</label>
                            </div>

                            <div class=\"testimonial-info-item\">
                                <p>
                                    “Mùi hương của tinh dầu sả của Arome đúng chất, không lẫn mùi pha tạp. Tôi đang sử
                                    dụng sản phẩm cho phòng khách và phòng ngủ để luôn có cảm giác dễ chịu và đuổi muỗi
                                    cũng rất hiệu quả.”
                                </p>
                                <h4>Nguyễn Trần Hữu Lộc </h4>
                                <label>Giáo viên dạy thiết kế đồ họa</label>
                            </div>

                            <div class=\"testimonial-info-item\">
                                <p>
                                    “Mùi hương của tinh dầu sả của Arome đúng chất, không lẫn mùi pha tạp. Tôi đang sử
                                    dụng sản phẩm cho phòng khách và phòng ngủ để luôn có cảm giác dễ chịu và đuổi muỗi
                                    cũng rất hiệu quả.”
                                </p>
                                <h4>Nguyễn Trần Hữu Lộc </h4>
                                <label>Giáo viên dạy thiết kế đồ họa</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> #}
<!-- TESTIMONIAL AREA END -->

<!-- FEATURE AREA START -->
<!-- <div class=\"herboil__feature-area padding-top-120 margin-bottom-70 mobile-pt-50 mobile-mb-20\">
    <div class=\"container\">
        <div class=\"herboil__feature-item\">
            <h4>Ba đặc điểm nổi bật mà Khách hàng và Đối tác kinh doanh sẽ nhận thấy khi hợp tác với chúng tôi:</h4>
        </div>
        <div class=\"row\">
            <div class=\"col-xl-4 col-sm-6 col-12\">
                <div class=\"herboil__feature-item clearfix\">
                    <div class=\"feature-icon\">
                        <i class=\"fa fa-sort\"></i>
                    </div>
                    <div class=\"feature-content\">
                        <h4> TINH GỌN </h4>
                        <p class=\"text-justify\">Đội ngũ thành viên công ty tinh nhuệ, đa năng và nhiều kinh nghiệm
                            thương trường, có niềm khát khao mang sản phẩm, thương hiệu Việt chất lượng cao, an toàn đến
                            với người tiêu dùng trong nước và thế giới.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 col-sm-6 col-12\">
                <div class=\"herboil__feature-item clearfix\">
                    <div class=\"feature-icon\">
                        <i class=\"fa fa-shield\"></i>
                    </div>
                    <div class=\"feature-content\">
                        <h4> HIỆU QUẢ </h4>
                        <p class=\"text-justify\">Tiêu chí hiệu quả luôn đặt vị trí hàng đầu trong mọi quyết định, luôn
                            tìm các giải pháp nhằm tối ưu mọi nguồn lực bên trong và bên ngoài, hướng đến lợi ích cho
                            tất cả các bên cùng hợp tác: Công ty – Đối tác – Khách hàng.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 col-sm-6 col-12\">
                <div class=\"herboil__feature-item clearfix\">
                    <div class=\"feature-icon\">
                        <i class=\"fa fa-gift\"></i>
                    </div>
                    <div class=\"feature-content\">
                        <h4> THÍCH ỨNG</h4>
                        <p class=\"text-justify\">Cơ cấu linh hoạt dễ dàng thích ứng với sự thay đổi, nắm bắt kịp thời xu
                            hướng tiêu dùng cũng như những mong muốn tiềm ẩn của khách hàng, cung cấp cho khách hàng
                            những sản phẩm, dịch vụ chất lượng cao, thiết thực với nhu cầu.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"intro-company\">
            <strong>Arome</strong> là thương hiệu dòng sản phẩm có nguồn gốc thiên nhiên chất lượng cao của Công ty HQ.
            Với định hướng
            mang đến cho Khách hàng dòng sản phẩm xanh, sạch, nhiều công dụng trong cuộc sống hằng ngày, Công ty HQ sẽ
            phát triển các sản phẩm đa dạng khác để đáp ứng nhu cầu của thị trường.
        </div>
    </div>
</div> -->
<!-- FEATURE AREA END -->

<!-- Description Introduce -->
<div class=\"wrapper-introduct\">
    <div class=\"billboard-holder\">
        <div class=\"billboard-main-section\">
            <div class=\"billboard-image\">
                <img src=\"{{'assets/img/about/ve-chung-toi-1.jpg' | theme}}\" alt=\"\"
                    sizes=\"(max-width: 960px) 100vw, 960px\">
            </div>
        </div>

        <div class=\"billboard-additional-section\">
            <div class=\"billboard-image\">
                <img width=\"960\" height=\"640\" src=\"{{'assets/img/others/banner/banner-intro2.jpg' | theme}}\" alt=\"\"
                    sizes=\"(max-width: 960px) 100vw, 960px\">
            </div>

            <div class=\"billboard-text-holder\">
                <div class=\"billboard-text-inner\">
                    <!-- <span class=\"billboard-tagline\">Wellness</span>
                    <div class=\"billboard-title\">
                        Pricing & offers
                    </div> -->
                    <div class=\"billboard-description\">
                        Công ty TNHH Sản xuất Thương mại Dịch vụ Xuất nhập khẩu HQ được thành lập vào năm 2020 bởi các
                        thành viên nhiều kinh nghiệm, đã được trải nghiệm sống và học tập từ cả môi trường Việt Nam lẫn
                        quốc tế, tiếp thu sự tiến bộ và nhiều nền văn hóa khác nhau. Do đó, bên cạnh có thể thấu hiểu
                        người tiêu dùng trong nước, công ty còn mang đến cho khách hàng những sản phẩm, dịch vụ chất
                        lượng với phong cách làm việc chuyên nghiệp.
                    </div>
                    <!-- <span class=\"billboard-btn\">
                        <a href=\"\">view now</a>
                    </span> -->
                </div>
            </div>
        </div>
    </div>

    <div class=\"billboard-holder billboard-right-orientation\">
        <div class=\"billboard-main-section1\">
            <div class=\"billboard-image\">
                <img src=\"{{'assets/img/about/Ve-chung-toi-2.jpg' | theme}}\" alt=\"\"
                    sizes=\"(max-width: 960px) 100vw, 960px\">
            </div>
        </div>

        <div class=\"billboard-additional-section\">
            <div class=\"billboard-image\">
                <img width=\"960\" height=\"640\" src=\"{{'assets/img/others/banner/banner-intro2.jpg' | theme}}\" alt=\"\"
                    sizes=\"(max-width: 960px) 100vw, 960px\">
            </div>

            <div class=\"billboard-text-holder\">
                <div class=\"billboard-text-inner\">
                    <!-- <span class=\"billboard-tagline\">Wellness</span>
                    <div class=\"billboard-title\">
                        Pricing & offers
                    </div> -->
                    <div class=\"billboard-description\">
                        Với chức năng kinh doanh đa ngành nghề, Công ty HQ mong muốn mang sản phẩm, thương hiệu Việt
                        chất lượng cao đến với người tiêu dùng trong nước và thế giới, đặc biệt là các sản phẩm xanh,
                        sạch, có nguồn gốc thiên nhiên. Chúng tôi luôn giữ niềm tin rằng, dù cho cuộc sống có biến đổi,
                        phát triển thế nào, con người luôn có xu hướng trở về với những gì cơ bản và tự nhiên nhất.
                    </div>
                    <!-- <span class=\"billboard-btn\">
                        <a href=\"\">view now</a>
                    </span> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Description Introduce End -->

<!-- CUSTOM CONTENT AREA START -->
<div class=\"herboil__custom-content-area margin-top-60 margin-bottom-70 mobile-mt-75\">
    <div class=\"container padding-lg-left-0\">
        <!-- <div class=\"row\">
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"herboil__custom-content-img\">
                    <img src=\"{{'assets/img/others/banner/banner-about.jpg'|theme}}\" alt=\"#\">
                </div>
            </div>
            <div class=\"col-lg-5 col-md-6\">
                <div class=\"herboil__custom-content-info\">
                    <div class=\"herboil__custom-content-infoe-inner\">
                        <p><strong>Công ty TNHH Sản xuất Thương mại Dịch vụ Xuất nhập khẩu HQ</strong> được thành lập
                            vào năm 2020 bởi
                            các thành viên nhiều kinh nghiệm, đã được trải nghiệm sống và học tập từ cả môi trường Việt
                            Nam lẫn quốc tế, tiếp thu sự tiến bộ và nhiều nền văn hóa khác nhau. Do đó, bên cạnh có thể
                            thấu hiểu người tiêu dùng trong nước, công ty còn mang đến cho khách hàng những sản phẩm,
                            dịch vụ chất lượng với phong cách làm việc chuyên nghiệp.</p>
                        <p>Với chức năng kinh doanh đa ngành nghề, <strong>Công ty HQ</strong> mong muốn mang sản phẩm,
                            thương hiệu Việt
                            chất lượng cao đến với người tiêu dùng trong nước và thế giới, đặc biệt là các sản phẩm
                            xanh, sạch, có nguồn gốc thiên nhiên. Chúng tôi luôn giữ niềm tin rằng, dù cho cuộc sống có
                            biến đổi, phát triển thế nào, con người luôn có xu hướng trở về với những gì cơ bản và tự
                            nhiên nhất.</p>

                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class=\"col-12 text-center\">
            <h3 class=\"t-about\">VỀ CHÚNG TÔI</h3>
            <h3 class=\"des-about\">Công ty TNHH Sản xuất Thương mại Dịch vụ Xuất nhập khẩu HQ</h3>
        </div> -->
    </div>
</div>
<!-- CUSTOM CONTENT AREA END -->

<!-- Title -->
<div class=\"title-timlineabout\">
    <div class=\"container\">
        <div class=\"title_brand heading-title text-center\">
            <h2 class=\"\">
                <a class=\"text_gradient\">
                    Phương châm của chúng tôi
                </a>
            </h2>
        </div>
    </div>
</div>

<!-- Title end -->

<!-- Timeline About Us -->
<div class=\"br-timeline\">
    <div class=\"container\">
        <div class=\"cab-about-history-timeline\">
            <div class=\"cab-about-timeline-box\">
                <div class=\"timeline-title\">
                    <!-- <span class=\"year\">2011</span>
                    <span class=\"title\">Started The restaurant</span> -->
                    <div class=\"cricle-rotate\">
                        <div class=\"crircle-title\">
                            <span class=\"title-timeline\">
                                Tinh gọn
                            </span>
                        </div>
                    </div>
                </div>

                <div class=\"timeline-line\"> </div>

                <div class=\"timeline-description\">
                    <div class=\"inner-des\">
                        Đội ngũ thành viên công ty tinh nhuệ, đa năng và nhiều kinh nghiệm thương trường, có niềm khát
                        khao mang sản phẩm, thương hiệu Việt chất lượng cao, an toàn đến với người tiêu dùng trong nước
                        và thế giới.
                    </div>
                </div>
            </div>

            <div class=\"cab-about-timeline-box\">
                <div class=\"timeline-title\">
                    <!-- <span class=\"year\">2011</span>
                    <span class=\"title\">Started The restaurant</span> -->
                    <div class=\"cricle-rotate\">
                        <div class=\"crircle-title\">
                            <span class=\"title-timeline\">
                                Hiệu quả
                            </span>
                        </div>
                    </div>
                </div>

                <div class=\"timeline-line\"> </div>

                <div class=\"timeline-description\">
                    <div class=\"inner-des\">
                        Tiêu chí hiệu quả luôn đặt vị trí hàng đầu trong mọi quyết định, luôn tìm các giải pháp nhằm tối
                        ưu mọi nguồn lực bên trong và bên ngoài, hướng đến lợi ích cho tất cả các bên cùng hợp tác: Công
                        ty – Đối tác – Khách hàng.
                    </div>
                </div>
            </div>

            <div class=\"cab-about-timeline-box\">
                <div class=\"timeline-title\">
                    <!-- <span class=\"year\">2011</span>
                    <span class=\"title\">Started The restaurant</span> -->
                    <div class=\"cricle-rotate\">
                        <div class=\"crircle-title\">
                            <span class=\"title-timeline\">
                                Thích ứng
                            </span>
                        </div>
                    </div>
                </div>

                <div class=\"timeline-line\"></div>

                <div class=\"timeline-description\">
                    <div class=\"inner-des\">

                        Cơ cấu linh hoạt dễ dàng thích ứng với sự thay đổi, nắm bắt kịp thời xu hướng tiêu dùng cũng như
                        những mong muốn tiềm ẩn của khách hàng, cung cấp cho khách hàng những sản phẩm, dịch vụ chất
                        lượng cao, thiết thực với nhu cầu.

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Timeline About Us End -->

<!-- Introduct Company -->
<div class=\"des-shortcompany\">
    <div class=\"container\">
        <span><strong class=\"style-animation\">Arome</strong> là thương hiệu dòng sản phẩm có nguồn gốc thiên
            nhiên chất lượng cao của
            <strong class=\"style-animation\">Công ty HQ</strong>. Với
            định hướng mang đến cho Khách hàng dòng sản phẩm xanh, sạch, nhiều công dụng trong cuộc sống hằng
            ngày, <strong class=\"style-animation\">Công ty HQ</strong> sẽ phát triển các sản phẩm đa dạng khác để
            đáp ứng nhu cầu của thị
            trường.</span>
    </div>
</div>
<!-- Introduct Company End -->", "C:\\xampp\\htdocs\\arome/themes/aroma/pages/about.htm", "");
    }
}
