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

/* C:\xampp\htdocs\arome/themes/aroma/pages/404.htm */
class __TwigTemplate_598d1b35252d21634396d9c8d7eb45ab7c7b66bab37a56c80ddb238597808e7c extends \Twig\Template
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
        $filters = array("escape" => 3, "theme" => 5);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Arome - ";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 3), "title", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "</title>
<!-- Favicon -->
<!-- <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo-company/favicon.png");
        echo "\"> -->
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/404.css");
        echo "\">
<link href=\"https://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\">
<!-- Bootstrap CSS -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.1/css/bootstrap.min.css\">


<body class=\"bg-page-found\">
    <div class=\"container\">
        <div class=\"error-shape text-center\">
            <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                viewBox=\"0 0 200 82.7\" style=\"enable-background:new 0 0 200 82.7;\" xml:space=\"preserve\">
                <g id=\"Calque_1\">
                    <text id=\"XMLID_3_\" transform=\"matrix(1.2187 0 0 1 13 75.6393)\" class=\"st0 st1\">4</text>
                    <text id=\"XMLID_4_\" transform=\"matrix(1.2187 0 0 1 133.0003 73.6393)\" class=\"st0 st1\">4</text>
                </g>
                <g id=\"Calque_2\">
                    <g>
                        <path id=\"XMLID_11_\" d=\"M81.8,29.2c4.1-5.7,10.7-9.4,18.3-9.4c6.3,0,12.1,2.7,16.1,6.9c0.6-0.4,1.1-0.7,1.7-1.1
                c-4.4-4.8-10.8-7.9-17.8-7.9c-8.3,0-15.6,4.2-20,10.6C80.7,28.5,81.3,28.8,81.8,29.2z\" />
                        <path id=\"XMLID_2_\" d=\"M118.1,53.7c-4,5.7-10.7,9.5-18.2,9.5c-6.3,0-12.1-2.6-16.2-6.8c-0.6,0.4-1.1,0.7-1.7,1.1
                c4.4,4.8,10.8,7.8,17.9,7.8c8.3,0,15.6-4.3,19.9-10.7C119.2,54.5,118.6,54.1,118.1,53.7z\" />
                        <animateTransform attributeName=\"transform\" type=\"rotate\" from=\"360 100 41.3\" to=\"0 100 41.3\"
                            dur=\"10s\" repeatCount=\"indefinite\" />
                    </g>
                    <g id=\"XMLID_6_\">
                        <g id=\"XMLID_18_\">
                            <circle class=\"circle\" cx=\"100\" cy=\"41\" r=\"1\"></circle>
                        </g>
                    </g>
                    <defs>
                        <filter id=\"blurFilter4\" x=\"-20\" y=\"-20\" width=\"200\" height=\"200\">
                            <feGaussianBlur in=\"SourceGraphic\" stdDeviation=\"2\" />
                        </filter>
                    </defs>
                    <path id=\"XMLID_5_\" class=\"st2\" d=\"M103.8,16.7c0.1,0.3,0.1,0.6,0.1,0.9c11.6,1.9,20.4,11.9,20.4,24.1c0,13.5-10.9,24.4-24.4,24.4
          S75.6,55.1,75.6,41.7c0-3.2,0.6-6.3,1.7-9.1c-0.3-0.2-0.5-0.3-0.7-0.5c-1.2,3-1.9,6.2-1.9,9.6c0,14,11.3,25.3,25.3,25.3
          s25.3-11.3,25.3-25.3C125.3,29,115.9,18.5,103.8,16.7z\" />
                </g>
            </svg>
            <div class=\"message\">
                <h2>Không tìm thấy trang bạn chọn !</h2>
                <p>Trang bạn tìm kiếm đã xoá hoặc đã được thay đổi lại đường dẫn.</p>
                <a class=\"custom-btn btn-15\" href=\"./\">Quay về trang chủ</a>
            </div>
            <div class=\"template-shape\">
                <div class=\"shape1\">
                    <img width=\"40\" src=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg/leaves.png");
        echo "\" alt=\"Images\">
                </div>
    
                <div class=\"shape2\">
                    <img width=\"40\" src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg/leaves.png");
        echo "\" alt=\"Images\">
                </div>
    
                <div class=\"shape3\">
                    <img width=\"40\" src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg/leaves.png");
        echo "\" alt=\"Images\">
                </div>
    
                <div class=\"shape4\">
                    <img width=\"40\" src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg/leaves.png");
        echo "\" alt=\"Images\">
                </div>
    
                <div class=\"shape5\">
                    <img width=\"40\" src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg/leaves.png");
        echo "\" alt=\"Images\">
                </div>
    
                <div class=\"shape6\">
                    <img width=\"40\" src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg/leaves.png");
        echo "\" alt=\"Images\">
                </div>
    
                <div class=\"shape7\">
                    <img width=\"40\" src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg/leaves.png");
        echo "\" alt=\"Images\">
                </div>
            </div>
        </div>
    </div>
</body>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 76,  159 => 72,  152 => 68,  145 => 64,  138 => 60,  131 => 56,  124 => 52,  75 => 6,  71 => 5,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Arome - {{ this.page.title }}</title>
<!-- Favicon -->
<!-- <link rel=\"icon\" type=\"image/png\" href=\"{{'assets/img/logo-company/favicon.png'|theme}}\"> -->
<link rel=\"stylesheet\" href=\"{{ 'assets/css/404.css'|theme }}\">
<link href=\"https://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\">
<!-- Bootstrap CSS -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.1/css/bootstrap.min.css\">


<body class=\"bg-page-found\">
    <div class=\"container\">
        <div class=\"error-shape text-center\">
            <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                viewBox=\"0 0 200 82.7\" style=\"enable-background:new 0 0 200 82.7;\" xml:space=\"preserve\">
                <g id=\"Calque_1\">
                    <text id=\"XMLID_3_\" transform=\"matrix(1.2187 0 0 1 13 75.6393)\" class=\"st0 st1\">4</text>
                    <text id=\"XMLID_4_\" transform=\"matrix(1.2187 0 0 1 133.0003 73.6393)\" class=\"st0 st1\">4</text>
                </g>
                <g id=\"Calque_2\">
                    <g>
                        <path id=\"XMLID_11_\" d=\"M81.8,29.2c4.1-5.7,10.7-9.4,18.3-9.4c6.3,0,12.1,2.7,16.1,6.9c0.6-0.4,1.1-0.7,1.7-1.1
                c-4.4-4.8-10.8-7.9-17.8-7.9c-8.3,0-15.6,4.2-20,10.6C80.7,28.5,81.3,28.8,81.8,29.2z\" />
                        <path id=\"XMLID_2_\" d=\"M118.1,53.7c-4,5.7-10.7,9.5-18.2,9.5c-6.3,0-12.1-2.6-16.2-6.8c-0.6,0.4-1.1,0.7-1.7,1.1
                c4.4,4.8,10.8,7.8,17.9,7.8c8.3,0,15.6-4.3,19.9-10.7C119.2,54.5,118.6,54.1,118.1,53.7z\" />
                        <animateTransform attributeName=\"transform\" type=\"rotate\" from=\"360 100 41.3\" to=\"0 100 41.3\"
                            dur=\"10s\" repeatCount=\"indefinite\" />
                    </g>
                    <g id=\"XMLID_6_\">
                        <g id=\"XMLID_18_\">
                            <circle class=\"circle\" cx=\"100\" cy=\"41\" r=\"1\"></circle>
                        </g>
                    </g>
                    <defs>
                        <filter id=\"blurFilter4\" x=\"-20\" y=\"-20\" width=\"200\" height=\"200\">
                            <feGaussianBlur in=\"SourceGraphic\" stdDeviation=\"2\" />
                        </filter>
                    </defs>
                    <path id=\"XMLID_5_\" class=\"st2\" d=\"M103.8,16.7c0.1,0.3,0.1,0.6,0.1,0.9c11.6,1.9,20.4,11.9,20.4,24.1c0,13.5-10.9,24.4-24.4,24.4
          S75.6,55.1,75.6,41.7c0-3.2,0.6-6.3,1.7-9.1c-0.3-0.2-0.5-0.3-0.7-0.5c-1.2,3-1.9,6.2-1.9,9.6c0,14,11.3,25.3,25.3,25.3
          s25.3-11.3,25.3-25.3C125.3,29,115.9,18.5,103.8,16.7z\" />
                </g>
            </svg>
            <div class=\"message\">
                <h2>Không tìm thấy trang bạn chọn !</h2>
                <p>Trang bạn tìm kiếm đã xoá hoặc đã được thay đổi lại đường dẫn.</p>
                <a class=\"custom-btn btn-15\" href=\"./\">Quay về trang chủ</a>
            </div>
            <div class=\"template-shape\">
                <div class=\"shape1\">
                    <img width=\"40\" src=\"{{ 'assets/img/bg/leaves.png'|theme }}\" alt=\"Images\">
                </div>
    
                <div class=\"shape2\">
                    <img width=\"40\" src=\"{{ 'assets/img/bg/leaves.png'|theme }}\" alt=\"Images\">
                </div>
    
                <div class=\"shape3\">
                    <img width=\"40\" src=\"{{ 'assets/img/bg/leaves.png'|theme }}\" alt=\"Images\">
                </div>
    
                <div class=\"shape4\">
                    <img width=\"40\" src=\"{{ 'assets/img/bg/leaves.png'|theme }}\" alt=\"Images\">
                </div>
    
                <div class=\"shape5\">
                    <img width=\"40\" src=\"{{ 'assets/img/bg/leaves.png'|theme }}\" alt=\"Images\">
                </div>
    
                <div class=\"shape6\">
                    <img width=\"40\" src=\"{{ 'assets/img/bg/leaves.png'|theme }}\" alt=\"Images\">
                </div>
    
                <div class=\"shape7\">
                    <img width=\"40\" src=\"{{ 'assets/img/bg/leaves.png'|theme }}\" alt=\"Images\">
                </div>
            </div>
        </div>
    </div>
</body>", "C:\\xampp\\htdocs\\arome/themes/aroma/pages/404.htm", "");
    }
}
