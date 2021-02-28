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

/* C:\xampp\htdocs\arome/themes/aroma/pages/blog.htm */
class __TwigTemplate_1933727dde840c15a0bddaf02c6c1bcbbf48f95174a84e0d4298a969cab73cf0 extends \Twig\Template
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
        $tags = array("for" => 16, "if" => 21);
        $filters = array("escape" => 24, "date" => 34, "theme" => 58, "page" => 185);
        $functions = array("range" => 191);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'date', 'theme', 'page'],
                ['range']
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
<div class=\"banner-header banner-blog-top\">
    <div class=\"container text-center\">
        <h1>Blog</h1>
    </div>
</div>
<!-- END BANNER HEADER -->

<!-- SHOP AREA START -->
<div class=\"blog-area padding-top-70 padding-bottom-70 mobile-pt-75 mobile-pb-75\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"blog-inner\">
                    <div class=\"row\">
                        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 17
            echo "                        <div class=\"col-lg-12\">
                            <div class=\"herboil__blog-item\">
                                <div class=\"row\">
                                    <div class=\"col-lg-4\">
                                        ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 21), "count", [], "any", false, false, true, 21)) {
                // line 22
                echo "                                        <div class=\"blog-img\">
                                            ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 24
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                    echo "\"><img data-src=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                    echo "\"
                                                    src=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                    echo "\"></a>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                                        </div>
                                        ";
            }
            // line 29
            echo "                                    </div>
                                    <div class=\"col-lg-8\">
                                        <div class=\"blog-content\">
                                            <div class=\"blog-meta\">
                                                <ul>
                                                    <li>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 34), 34, $this->source), "d/m/Y"), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 35
$context["post"], "categories", [], "any", false, false, true, 35), "count", [], "any", false, false, true, 35)) {
                echo " ";
            }
            echo "</li>
                                                    <li>Bởi: <a href=\"#\"></a>Admin</li>
                                                </ul>
                                            </div>
                                            <h3 class=\"blog-title\"><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "</a></h3>
                                            <p>
                                                ";
            // line 41
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "
                                            </p>
                                            <div class=\"blog-btn\">
                                                <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "\" class=\"boxed-btn\">Xem Thêm <i
                                                        class=\"fa fa-angle-double-righ\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                        <!-- <div class=\"col-lg-12\">
                            <div class=\"herboil__blog-item\">
                                <div class=\"row\">
                                    <div class=\"col-lg-5\">
                                        <div class=\"blog-img\">
                                            <a href=\"blog-details.html\"><img src=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/2.jpg");
        echo "\"
                                                    alt=\"#\"></a>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-7\">
                                        <div class=\"blog-content\">
                                            <div class=\"blog-meta\">
                                                <ul>
                                                    <li>4 November 2019</li>
                                                    <li>By: <a href=\"#\">Admin</a></li>
                                                </ul>
                                            </div>
                                            <h3 class=\"blog-title\"><a href=\"blog-details.html\">Neckbeards: Everything
                                                    You Wanted</a></h3>
                                            <p>Integer at faucibus urna. Nullam condimentum leo id elit sagittis auctor.
                                                Curabitur elementum nunc a leo imperdiet, nec elementum diam elementum.
                                            </p>
                                            <div class=\"blog-btn\">
                                                <a href=\"blog-details.html\" class=\"boxed-btn\">Read More <i
                                                        class=\"icon-Group-6823\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"herboil__blog-item\">
                                <div class=\"row\">
                                    <div class=\"col-lg-5\">
                                        <div class=\"blog-img\">
                                            <a href=\"blog-details.html\"><img src=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/3.jpg");
        echo "\"
                                                    alt=\"#\"></a>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-7\">
                                        <div class=\"blog-content\">
                                            <div class=\"blog-meta\">
                                                <ul>
                                                    <li>4 November 2019</li>
                                                    <li>By: <a href=\"#\">Admin</a></li>
                                                </ul>
                                            </div>
                                            <h3 class=\"blog-title\"><a href=\"blog-details.html\">How Long Does It Take To
                                                    Grow A Beard?</a></h3>
                                            <p>Integer at faucibus urna. Nullam condimentum leo id elit sagittis auctor.
                                                Curabitur elementum nunc a leo imperdiet, nec elementum diam elementum.
                                            </p>
                                            <div class=\"blog-btn\">
                                                <a href=\"blog-details.html\" class=\"boxed-btn\">Read More <i
                                                        class=\"icon-Group-6823\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"herboil__blog-item\">
                                <div class=\"row\">
                                    <div class=\"col-lg-5\">
                                        <div class=\"blog-img\">
                                            <a href=\"blog-details.html\"><img src=\"";
        // line 120
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/4.jpg");
        echo "\"
                                                    alt=\"#\"></a>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-7\">
                                        <div class=\"blog-content\">
                                            <div class=\"blog-meta\">
                                                <ul>
                                                    <li>4 November 2019</li>
                                                    <li>By: <a href=\"#\">Admin</a></li>
                                                </ul>
                                            </div>
                                            <h3 class=\"blog-title\"><a href=\"blog-details.html\">When You Grow, Others
                                                    Will Follow</a></h3>
                                            <p>Integer at faucibus urna. Nullam condimentum leo id elit sagittis auctor.
                                                Curabitur elementum nunc a leo imperdiet, nec elementum diam elementum.
                                            </p>
                                            <div class=\"blog-btn\">
                                                <a href=\"blog-details.html\" class=\"boxed-btn\">Read More <i
                                                        class=\"icon-Group-6823\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"herboil__blog-item\">
                                <div class=\"row\">
                                    <div class=\"col-lg-5\">
                                        <div class=\"blog-img\">
                                            <a href=\"blog-details.html\"><img src=\"";
        // line 151
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/5.jpg");
        echo "\"
                                                    alt=\"#\"></a>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-7\">
                                        <div class=\"blog-content\">
                                            <div class=\"blog-meta\">
                                                <ul>
                                                    <li>4 November 2019</li>
                                                    <li>By: <a href=\"#\">Admin</a></li>
                                                </ul>
                                            </div>
                                            <h3 class=\"blog-title\"><a href=\"blog-details.html\">How To Properly Shampoo &
                                                    Condition...</a></h3>
                                            <p>Integer at faucibus urna. Nullam condimentum leo id elit sagittis auctor.
                                                Curabitur elementum nunc a leo imperdiet, nec elementum diam elementum.
                                            </p>
                                            <div class=\"blog-btn\">
                                                <a href=\"blog-details.html\" class=\"boxed-btn\">Read More <i
                                                        class=\"icon-Group-6823\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-center\">
                            <div class=\"pagination-list margin-top-30\">
                                ";
        // line 181
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 181) > 1)) {
            // line 182
            echo "                                <ul>
                                    ";
            // line 183
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 183) > 1)) {
                // line 184
                echo "                                    <li class=\"pagination-prev\" rel=\"prev\">
                                        <a href=\"";
                // line 185
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 185), "baseFileName", [], "any", false, false, true, 185), 185, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 185) - 1)]);
                echo "\"
                                            class=\"pagination-prev\" rel=\"prev\">
                                            « </a>
                                    </li>
                                    ";
            }
            // line 190
            echo "
                                    ";
            // line 191
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 191)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 192
                echo "                                    <li class=\"\">
                                        <a href=\"";
                // line 193
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 193), "baseFileName", [], "any", false, false, true, 193), 193, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\"
                                            class=\"pagination-num\">";
                // line 194
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 194, $this->source), "html", null, true);
                echo "</a>
                                    </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "
                                    ";
            // line 198
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 198) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 198))) {
                // line 199
                echo "                                    <li class=\"pagination-arrow\">
                                        <a href=\"";
                // line 200
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 200), "baseFileName", [], "any", false, false, true, 200), 200, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 200) + 1)]);
                echo "\"
                                            class=\"pagination-first\" rel=\"next\"> » </a>
                                    </li>
                                    ";
            }
            // line 204
            echo "                                </ul>
                                ";
        }
        // line 206
        echo "                            </div>
                        </div>
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
        return "C:\\xampp\\htdocs\\arome/themes/aroma/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 206,  364 => 204,  357 => 200,  354 => 199,  352 => 198,  349 => 197,  340 => 194,  336 => 193,  333 => 192,  329 => 191,  326 => 190,  318 => 185,  315 => 184,  313 => 183,  310 => 182,  308 => 181,  275 => 151,  241 => 120,  207 => 89,  173 => 58,  166 => 53,  151 => 44,  145 => 41,  138 => 39,  129 => 35,  126 => 34,  119 => 29,  115 => 27,  105 => 25,  98 => 24,  94 => 23,  91 => 22,  89 => 21,  83 => 17,  79 => 16,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- BANNER HEADER -->
<div class=\"banner-header banner-blog-top\">
    <div class=\"container text-center\">
        <h1>Blog</h1>
    </div>
</div>
<!-- END BANNER HEADER -->

<!-- SHOP AREA START -->
<div class=\"blog-area padding-top-70 padding-bottom-70 mobile-pt-75 mobile-pb-75\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"blog-inner\">
                    <div class=\"row\">
                        {% for post in posts%}
                        <div class=\"col-lg-12\">
                            <div class=\"herboil__blog-item\">
                                <div class=\"row\">
                                    <div class=\"col-lg-4\">
                                        {% if post.featured_images.count %}
                                        <div class=\"blog-img\">
                                            {% for image in post.featured_images %}
                                            <a href=\"{{ post.url }}\"><img data-src=\"{{image.filename}}\"
                                                    src=\"{{image.path}}\" alt=\"{{image.description}}\"></a>
                                            {% endfor %}
                                        </div>
                                        {% endif %}
                                    </div>
                                    <div class=\"col-lg-8\">
                                        <div class=\"blog-content\">
                                            <div class=\"blog-meta\">
                                                <ul>
                                                    <li>{{ post.published_at|date('d/m/Y') }} {% if
                                                        post.categories.count %} {% endif %}</li>
                                                    <li>Bởi: <a href=\"#\"></a>Admin</li>
                                                </ul>
                                            </div>
                                            <h3 class=\"blog-title\"><a href=\"{{post.url}}\">{{post.title}}</a></h3>
                                            <p>
                                                {{ post.summary }}
                                            </p>
                                            <div class=\"blog-btn\">
                                                <a href=\"{{post.url}}\" class=\"boxed-btn\">Xem Thêm <i
                                                        class=\"fa fa-angle-double-righ\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endfor %}
                        <!-- <div class=\"col-lg-12\">
                            <div class=\"herboil__blog-item\">
                                <div class=\"row\">
                                    <div class=\"col-lg-5\">
                                        <div class=\"blog-img\">
                                            <a href=\"blog-details.html\"><img src=\"{{'assets/img/blog/2.jpg'|theme}}\"
                                                    alt=\"#\"></a>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-7\">
                                        <div class=\"blog-content\">
                                            <div class=\"blog-meta\">
                                                <ul>
                                                    <li>4 November 2019</li>
                                                    <li>By: <a href=\"#\">Admin</a></li>
                                                </ul>
                                            </div>
                                            <h3 class=\"blog-title\"><a href=\"blog-details.html\">Neckbeards: Everything
                                                    You Wanted</a></h3>
                                            <p>Integer at faucibus urna. Nullam condimentum leo id elit sagittis auctor.
                                                Curabitur elementum nunc a leo imperdiet, nec elementum diam elementum.
                                            </p>
                                            <div class=\"blog-btn\">
                                                <a href=\"blog-details.html\" class=\"boxed-btn\">Read More <i
                                                        class=\"icon-Group-6823\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"herboil__blog-item\">
                                <div class=\"row\">
                                    <div class=\"col-lg-5\">
                                        <div class=\"blog-img\">
                                            <a href=\"blog-details.html\"><img src=\"{{'assets/img/blog/3.jpg'|theme}}\"
                                                    alt=\"#\"></a>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-7\">
                                        <div class=\"blog-content\">
                                            <div class=\"blog-meta\">
                                                <ul>
                                                    <li>4 November 2019</li>
                                                    <li>By: <a href=\"#\">Admin</a></li>
                                                </ul>
                                            </div>
                                            <h3 class=\"blog-title\"><a href=\"blog-details.html\">How Long Does It Take To
                                                    Grow A Beard?</a></h3>
                                            <p>Integer at faucibus urna. Nullam condimentum leo id elit sagittis auctor.
                                                Curabitur elementum nunc a leo imperdiet, nec elementum diam elementum.
                                            </p>
                                            <div class=\"blog-btn\">
                                                <a href=\"blog-details.html\" class=\"boxed-btn\">Read More <i
                                                        class=\"icon-Group-6823\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"herboil__blog-item\">
                                <div class=\"row\">
                                    <div class=\"col-lg-5\">
                                        <div class=\"blog-img\">
                                            <a href=\"blog-details.html\"><img src=\"{{'assets/img/blog/4.jpg'|theme}}\"
                                                    alt=\"#\"></a>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-7\">
                                        <div class=\"blog-content\">
                                            <div class=\"blog-meta\">
                                                <ul>
                                                    <li>4 November 2019</li>
                                                    <li>By: <a href=\"#\">Admin</a></li>
                                                </ul>
                                            </div>
                                            <h3 class=\"blog-title\"><a href=\"blog-details.html\">When You Grow, Others
                                                    Will Follow</a></h3>
                                            <p>Integer at faucibus urna. Nullam condimentum leo id elit sagittis auctor.
                                                Curabitur elementum nunc a leo imperdiet, nec elementum diam elementum.
                                            </p>
                                            <div class=\"blog-btn\">
                                                <a href=\"blog-details.html\" class=\"boxed-btn\">Read More <i
                                                        class=\"icon-Group-6823\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"herboil__blog-item\">
                                <div class=\"row\">
                                    <div class=\"col-lg-5\">
                                        <div class=\"blog-img\">
                                            <a href=\"blog-details.html\"><img src=\"{{'assets/img/blog/5.jpg'|theme}}\"
                                                    alt=\"#\"></a>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-7\">
                                        <div class=\"blog-content\">
                                            <div class=\"blog-meta\">
                                                <ul>
                                                    <li>4 November 2019</li>
                                                    <li>By: <a href=\"#\">Admin</a></li>
                                                </ul>
                                            </div>
                                            <h3 class=\"blog-title\"><a href=\"blog-details.html\">How To Properly Shampoo &
                                                    Condition...</a></h3>
                                            <p>Integer at faucibus urna. Nullam condimentum leo id elit sagittis auctor.
                                                Curabitur elementum nunc a leo imperdiet, nec elementum diam elementum.
                                            </p>
                                            <div class=\"blog-btn\">
                                                <a href=\"blog-details.html\" class=\"boxed-btn\">Read More <i
                                                        class=\"icon-Group-6823\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-center\">
                            <div class=\"pagination-list margin-top-30\">
                                {% if posts.lastPage > 1 %}
                                <ul>
                                    {% if posts.currentPage > 1 %}
                                    <li class=\"pagination-prev\" rel=\"prev\">
                                        <a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\"
                                            class=\"pagination-prev\" rel=\"prev\">
                                            « </a>
                                    </li>
                                    {% endif %}

                                    {% for page in 1..posts.lastPage %}
                                    <li class=\"\">
                                        <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\"
                                            class=\"pagination-num\">{{ page }}</a>
                                    </li>
                                    {% endfor %}

                                    {% if posts.lastPage > posts.currentPage %}
                                    <li class=\"pagination-arrow\">
                                        <a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\"
                                            class=\"pagination-first\" rel=\"next\"> » </a>
                                    </li>
                                    {% endif %}
                                </ul>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOP AREA END -->", "C:\\xampp\\htdocs\\arome/themes/aroma/pages/blog.htm", "");
    }
}
