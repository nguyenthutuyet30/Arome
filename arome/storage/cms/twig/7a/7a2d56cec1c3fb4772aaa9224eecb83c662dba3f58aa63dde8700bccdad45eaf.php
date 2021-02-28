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

/* C:\xampp\htdocs\arome/plugins/watchlearn/movies/components/movie/default.htm */
class __TwigTemplate_9f9a1c8edc266ce9af0c82d301522254c3305a0b001475253ed494c27edb735a extends \Twig\Template
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
        $tags = array("for" => 6, "if" => 19);
        $filters = array("media" => 7, "escape" => 7, "raw" => 31);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['media', 'escape', 'raw'],
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
        echo "<!-- Slider area -->
<div class=\"slider-area home-three\">
    <!-- slider start -->
    <div class=\"slider-inner\">
        <div id=\"mainSlider\" class=\"nivoSlider nevo-slider\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Movie"] ?? null), "getDataSlide", [], "any", false, false, true, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 7
            echo "            <img src=\"";
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "image", [], "any", false, false, true, 7), 7, $this->source));
            echo "\" alt=\"main slider\" title=\"#htmlcaption";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "\" />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
        </div>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Movie"] ?? null), "getDataSlide", [], "any", false, false, true, 11));
        foreach ($context['_seq'] as $context["key"] => $context["movie"]) {
            // line 12
            echo "        <div id=\"htmlcaption";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\" class=\"nivo-html-caption slider-caption\">
            <div class=\"slider-progress\"></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"col-sm-12\">
                            <div class=\"slider-content pull-left 
                            ";
            // line 19
            if ((($context["key"] % 2) == 0)) {
                // line 20
                echo "                                slider-content-1 slider-animated-1
                            ";
            } else {
                // line 22
                echo "                                slider-content-2 slider-animated-2
                            ";
            }
            // line 24
            echo "                            \">
                                <h2 class=\"htwo\" style=\"font-size:";
            // line 25
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "name_size", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "px; color:";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "name_color", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "\">
                                    ";
            // line 26
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "name", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "</h2>
                                <h1 class=\"hone\" style=\"font-size:";
            // line 27
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "sale_size", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "px; color:";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "sale_color", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "\">
                                    ";
            // line 28
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "sale", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "</h1>
                                <p class=\"hp1\"
                                    style=\"font-size:";
            // line 30
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "description_size", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "px; color:";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "description_color", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "\">
                                    ";
            // line 31
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "description", [], "any", false, false, true, 31), 31, $this->source);
            echo "</p>
                                <div class=\"button-1 hover-btn-2\">
                                    ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, $context["movie"], "btn1_status", [], "any", false, false, true, 33) != 0)) {
                // line 34
                echo "                                    <a class=\"pro boxed-btn\" data-pro=";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "product_id", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                echo " style=\"
                                            color        :  ";
                // line 35
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "btn1_color", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "; 
                                            border-color :  ";
                // line 36
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "btn1_color", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo ";\"
                                        data-toggle=\"modal";
                // line 37
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "product_id", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "\" data-target=\"#modal";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "product_id", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "\"
                                        onclick=\"buyNow('";
                // line 38
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movie"], "product", [], "any", false, false, true, 38), "offer", [], "any", false, false, true, 38)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "id", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["amount"] ?? null), 38, $this->source), "html", null, true);
                echo "')\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "btn1_name", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 40
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["movie"], "btn2_status", [], "any", false, false, true, 40) != 0)) {
                // line 41
                echo "                                    <a href=\"";
                if (twig_get_attribute($this->env, $this->source, $context["movie"], "btn2_link", [], "any", false, false, true, 41)) {
                    echo "./";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "btn2_link", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                } else {
                    echo "./product/";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movie"], "product", [], "any", false, false, true, 41), "slug", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                }
                echo "\"
                                        class=\"see-more-ls boxed-btn\" style=\" color        :  ";
                // line 42
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "btn2_color", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "; 
                                            border-color :  ";
                // line 43
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "btn2_color", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo ";\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "btn2_name", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 45
            echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        <!-- <div id=\"htmlcaption2\" class=\"nivo-html-caption slider-caption\">
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
        // line 63
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "product_id", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
                                    data-toggle=\"modal";
        // line 64
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "product_id", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "\" data-target=\"#modal";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "product_id", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "\">Mua
                                    ngay</a>
                                <a data-pro=";
        // line 66
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "product_id", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo " class=\"see-more-ls boxed-btn\">Tìm hiểu thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
        <!-- slider end -->
    </div>
    <!-- Slider area end -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/plugins/watchlearn/movies/components/movie/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 66,  232 => 64,  228 => 63,  216 => 53,  203 => 45,  196 => 43,  192 => 42,  181 => 41,  178 => 40,  169 => 38,  163 => 37,  159 => 36,  155 => 35,  150 => 34,  148 => 33,  143 => 31,  137 => 30,  132 => 28,  126 => 27,  122 => 26,  116 => 25,  113 => 24,  109 => 22,  105 => 20,  103 => 19,  92 => 12,  88 => 11,  84 => 9,  73 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Slider area -->
<div class=\"slider-area home-three\">
    <!-- slider start -->
    <div class=\"slider-inner\">
        <div id=\"mainSlider\" class=\"nivoSlider nevo-slider\">
            {% for movie in Movie.getDataSlide %}
            <img src=\"{{ movie.image | media }}\" alt=\"main slider\" title=\"#htmlcaption{{movie.id}}\" />
            {% endfor %}

        </div>
        {% for key, movie in Movie.getDataSlide %}
        <div id=\"htmlcaption{{movie.id}}\" class=\"nivo-html-caption slider-caption\">
            <div class=\"slider-progress\"></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"col-sm-12\">
                            <div class=\"slider-content pull-left 
                            {% if key % 2 == 0 %}
                                slider-content-1 slider-animated-1
                            {% else %}
                                slider-content-2 slider-animated-2
                            {% endif %}
                            \">
                                <h2 class=\"htwo\" style=\"font-size:{{movie.name_size}}px; color:{{movie.name_color}}\">
                                    {{movie.name}}</h2>
                                <h1 class=\"hone\" style=\"font-size:{{movie.sale_size}}px; color:{{movie.sale_color}}\">
                                    {{movie.sale}}</h1>
                                <p class=\"hp1\"
                                    style=\"font-size:{{movie.description_size}}px; color:{{movie.description_color}}\">
                                    {{movie.description | raw}}</p>
                                <div class=\"button-1 hover-btn-2\">
                                    {% if movie.btn1_status != 0 %}
                                    <a class=\"pro boxed-btn\" data-pro={{movie.product_id}} style=\"
                                            color        :  {{movie.btn1_color}}; 
                                            border-color :  {{movie.btn1_color}};\"
                                        data-toggle=\"modal{{movie.product_id}}\" data-target=\"#modal{{movie.product_id}}\"
                                        onclick=\"buyNow('{{movie.product.offer[0].id}}', '{{amount}}')\">{{movie.btn1_name}}</a>
                                    {% endif %}
                                    {% if movie.btn2_status != 0 %}
                                    <a href=\"{% if movie.btn2_link %}./{{movie.btn2_link}}{% else %}./product/{{movie.product.slug}}{% endif %}\"
                                        class=\"see-more-ls boxed-btn\" style=\" color        :  {{movie.btn2_color}}; 
                                            border-color :  {{movie.btn2_color}};\">{{movie.btn2_name}}</a>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endfor %}
        <!-- <div id=\"htmlcaption2\" class=\"nivo-html-caption slider-caption\">
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
    </div> -->
        <!-- slider end -->
    </div>
    <!-- Slider area end -->", "C:\\xampp\\htdocs\\arome/plugins/watchlearn/movies/components/movie/default.htm", "");
    }
}
