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

/* C:\xampp\htdocs\arome/themes/aroma/pages/contact.htm */
class __TwigTemplate_10ab5dbf54fcea98c21daa4d80588ae7e4faf024f201f121be3fa11829a40b5b extends \Twig\Template
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
        $tags = array("component" => 10);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
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
        echo "<!-- BANNER HEADER -->
<div class=\"banner-header banner-contact-top\">
    <div class=\"container text-center\">
        <h1>Liên hệ</h1>
    </div>
</div>
<!-- END BANNER HEADER -->

<div class=\"map\">
    ";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("googleMap"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "</div>

<!-- SHOP AREA START -->
<div class=\"contact-area padding-top-115 padding-bottom-115 mobile-pt-70 mobile-pb-75\">
    <div class=\"container\">
        <div class=\"contact-inner\">
            <div class=\"row\">
                <div class=\"col-xl-5 col-md-7\">
                    <div class=\"contact-form-area\">
                        <h4>Hãy để lại lời nhắn của bạn chúng tôi sẽ phản hồi trong thời gian sớm nhất</h4>
                        ";
        // line 21
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 22
        echo "                    </div>
                </div>
                <div class=\"col-xl-6 offset-xl-1 col-md-5\">
                    <div class=\"content-contact\">
                        <h4 class=\"contact-title\">
                            Công ty TNHH SX-TM-DV-Xuất Nhập khẩu HQ
                        </h4>
                        <!-- <p>
                            Chúng tôi chăm sóc khách hàng như người thân, trò chuyện như những người bạn. Từ đó tạo ra
                            niềm tin, sự hài lòng trên từng sản phẩm trao đến tay. Và đó, là lời hứa chân thành nhất
                            dành cho bạn!
                        </p> -->
                        <ul>
                            <li><i class=\"far fa-map-marker-alt\"></i> 17/3/11, đường Gò Dầu, phường Tân Quý, quận Tân
                                Phú, Tp.
                                Hồ Chí Minh, Việt Nam </li>
                            <li><i class=\"fal fa-building\"></i> VP giao dịch: Kho A75, Bạch Đằng, Phường 2, Quận Tân
                                Bình, TP. Hồ Chí Minh</li>
                            <li><i class=\"fal fa-envelope\"
                                    style=\"margin-right:-2px;font-size:18px\"></i>contact@hqvietnam.com</li>
                            <li><i class=\"far fa-phone-alt\" style=\"font-size: 18px;\"></i>036 63 69 830</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- SHOP AREA END -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 22,  89 => 21,  77 => 11,  73 => 10,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- BANNER HEADER -->
<div class=\"banner-header banner-contact-top\">
    <div class=\"container text-center\">
        <h1>Liên hệ</h1>
    </div>
</div>
<!-- END BANNER HEADER -->

<div class=\"map\">
    {% component 'googleMap' %}
</div>

<!-- SHOP AREA START -->
<div class=\"contact-area padding-top-115 padding-bottom-115 mobile-pt-70 mobile-pb-75\">
    <div class=\"container\">
        <div class=\"contact-inner\">
            <div class=\"row\">
                <div class=\"col-xl-5 col-md-7\">
                    <div class=\"contact-form-area\">
                        <h4>Hãy để lại lời nhắn của bạn chúng tôi sẽ phản hồi trong thời gian sớm nhất</h4>
                        {% component 'contactForm' %}
                    </div>
                </div>
                <div class=\"col-xl-6 offset-xl-1 col-md-5\">
                    <div class=\"content-contact\">
                        <h4 class=\"contact-title\">
                            Công ty TNHH SX-TM-DV-Xuất Nhập khẩu HQ
                        </h4>
                        <!-- <p>
                            Chúng tôi chăm sóc khách hàng như người thân, trò chuyện như những người bạn. Từ đó tạo ra
                            niềm tin, sự hài lòng trên từng sản phẩm trao đến tay. Và đó, là lời hứa chân thành nhất
                            dành cho bạn!
                        </p> -->
                        <ul>
                            <li><i class=\"far fa-map-marker-alt\"></i> 17/3/11, đường Gò Dầu, phường Tân Quý, quận Tân
                                Phú, Tp.
                                Hồ Chí Minh, Việt Nam </li>
                            <li><i class=\"fal fa-building\"></i> VP giao dịch: Kho A75, Bạch Đằng, Phường 2, Quận Tân
                                Bình, TP. Hồ Chí Minh</li>
                            <li><i class=\"fal fa-envelope\"
                                    style=\"margin-right:-2px;font-size:18px\"></i>contact@hqvietnam.com</li>
                            <li><i class=\"far fa-phone-alt\" style=\"font-size: 18px;\"></i>036 63 69 830</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- SHOP AREA END -->", "C:\\xampp\\htdocs\\arome/themes/aroma/pages/contact.htm", "");
    }
}
