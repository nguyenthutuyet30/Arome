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

/* C:\xampp\htdocs\arome/themes/aroma/layouts/default.htm */
class __TwigTemplate_4b402c911f93fa3fbc1473113b06d575481d530366bde2c7e5c75c73c56846c8 extends \Twig\Template
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
        $tags = array("styles" => 35, "partial" => 42, "page" => 48, "framework" => 76, "scripts" => 77);
        $filters = array("escape" => 6, "theme" => 14);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'partial', 'page', 'framework', 'scripts'],
                ['escape', 'theme'],
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
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title> Công ty TNHH Hq - ";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "meta_description", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "meta_title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"Polina Soft\">
    <meta name=\"user\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"OctoberCMS\">

    <link rel=\"icon\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon.png");
        echo "\" sizes=\"20x20\" type=\"image/png\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/popup.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/testimonial.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animation.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/checkout.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/blog.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slide.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/callnow.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/timeline.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/topfooter.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive1.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/nivo-slider.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fontawesome/css/all.css");
        echo "\">


    ";
        // line 35
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 36
        echo "</head>

<body>

    <!-- Header -->
    <header class=\"header-area\">
        ";
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("top-header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 44
        echo "    </header>

    <!-- Content -->
    <section id=\"layout-content\">
        ";
        // line 48
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 49
        echo "    </section>

    <!-- Footer -->
    <footer class=\"footer-area\">
        ";
        // line 53
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("callnow"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 54
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("top-footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 55
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 56
        echo "    </footer>

    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
        integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
    <script src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor.js");
        echo "\"></script>

    <!-- main js -->
    <script src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
    <script src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/add-cart.js");
        echo "\" defer></script>
    <script src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/popup.js");
        echo "\"></script>
    <!--  -->
    <script src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.min.js");
        echo "\"></script>
    <script src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/testimonial.js");
        echo "\"></script>
    <script src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/add-coupon.js");
        echo "\"></script>
    <script src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.nivo.slider.pack.js");
        echo "\"></script>

    <script src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/sticky-menu.js");
        echo "\"></script>
    <script src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/slide.js");
        echo "\"></script>
    <script  type=\"module\"  src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/calc-ship.js");
        echo "\"></script>  
    <script src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/checkout.js");
        echo "\"></script>  
    ";
        // line 76
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 77
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 78
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 78,  284 => 77,  273 => 76,  269 => 75,  265 => 74,  261 => 73,  257 => 72,  252 => 70,  248 => 69,  244 => 68,  240 => 67,  235 => 65,  231 => 64,  227 => 63,  221 => 60,  215 => 56,  210 => 55,  205 => 54,  201 => 53,  195 => 49,  193 => 48,  187 => 44,  182 => 43,  178 => 42,  170 => 36,  167 => 35,  161 => 32,  157 => 31,  153 => 30,  149 => 29,  145 => 28,  141 => 27,  137 => 26,  133 => 25,  129 => 24,  125 => 23,  121 => 22,  117 => 21,  113 => 20,  109 => 19,  105 => 18,  101 => 17,  97 => 16,  93 => 15,  89 => 14,  82 => 10,  77 => 8,  73 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title> Công ty TNHH Hq - {{ this.page.title }}</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"author\" content=\"Polina Soft\">
    <meta name=\"user\" content=\"{{user.id}}\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"OctoberCMS\">

    <link rel=\"icon\" href=\"{{'assets/img/favicon.png'| theme}}\" sizes=\"20x20\" type=\"image/png\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/vendor.css'| theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css'| theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/responsive.css'| theme }}\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/popup.css'| theme }}\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/testimonial.css'| theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/animation.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/checkout.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/blog.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/slide.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/callnow.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/main.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/timeline.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/topfooter.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/responsive1.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/nivo-slider.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/fontawesome/css/all.css' | theme }}\">


    {% styles %}
</head>

<body>

    <!-- Header -->
    <header class=\"header-area\">
        {% partial \"top-header\" %}
        {% partial \"header\" %}
    </header>

    <!-- Content -->
    <section id=\"layout-content\">
        {% page %}
    </section>

    <!-- Footer -->
    <footer class=\"footer-area\">
        {% partial \"callnow\" %}
        {% partial \"top-footer\" %}
        {% partial \"footer\" %}
    </footer>

    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
        integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
    <script src=\"{{'assets/js/vendor.js'|theme}}\"></script>

    <!-- main js -->
    <script src=\"{{'assets/js/main.js'|theme}}\"></script>
    <script src=\"{{'assets/js/add-cart.js'|theme}}\" defer></script>
    <script src=\"{{'assets/js/popup.js'|theme}}\"></script>
    <!--  -->
    <script src=\"{{ 'assets/OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.min.js' | theme}}\"></script>
    <script src=\"{{ 'assets/js/testimonial.js' | theme }}\"></script>
    <script src=\"{{ 'assets/js/add-coupon.js' | theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery.nivo.slider.pack.js'|theme }}\"></script>

    <script src=\"{{ 'assets/js/sticky-menu.js' | theme }}\"></script>
    <script src=\"{{ 'assets/js/slide.js' | theme }}\"></script>
    <script  type=\"module\"  src=\"{{ 'assets/js/calc-ship.js' | theme }}\"></script>  
    <script src=\"{{ 'assets/js/checkout.js' | theme }}\"></script>  
    {% framework extras %}
    {% scripts %}

</body>

</html>", "C:\\xampp\\htdocs\\arome/themes/aroma/layouts/default.htm", "");
    }
}
