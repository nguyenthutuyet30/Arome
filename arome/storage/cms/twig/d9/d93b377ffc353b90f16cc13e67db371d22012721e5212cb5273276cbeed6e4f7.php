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

/* C:\xampp\htdocs\arome/themes/aroma/pages/quanlytaikhoan.htm */
class __TwigTemplate_e214a6c73039a0ecd574a6025c1a8c6cdbe2d0c77bf986d775bf03d5c9339d18 extends \Twig\Template
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
        $tags = array("if" => 12);
        $filters = array("raw" => 24, "escape" => 54);
        $functions = array("form_ajax" => 1, "form_close" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw', 'escape'],
                ['form_ajax', 'form_close']
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onUpdate"]);
        echo "
<div class=\"form-group\">
    <label for=\"accountPassword\">New Password</label>
    <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
</div>

<div class=\"form-group\">
    <label for=\"accountPasswordConfirm\">Confirm New Password</label>
    <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
</div>

";
        // line 12
        if (($context["updateRequiresPassword"] ?? null)) {
            // line 13
            echo "<p>To change these details, please confirm your current password.</p>
<div class=\"form-group\">
    <label for=\"accountPasswordCurrent\">Current Password <small class=\"text-danger\">* required</small></label>
    <input name=\"password_current\" type=\"password\" class=\"form-control\" id=\"accountPasswordCurrent\">
</div>
";
        }
        // line 19
        echo "
<button type=\"submit\" class=\"btn btn-default\">Save</button>

";
        // line 22
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "

<script>console.log( (";
        // line 24
        echo $this->sandbox->ensureToStringAllowed(($context["user"] ?? null), 24, $this->source);
        echo "))</script>

<div class=\"records-management\">
    <div class=\"banner-header banner-management\">
        <div class=\"container text-center\">
            <h1>Tài khoản</h1>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"cover-account\">
            <div class=\"my-account-session\">
                <div class=\"my-account-title\">
                    Hồ Sơ Của Tôi
                </div>
                <div class=\"my-account-subtitle\">
                    Quản lý hồ sơ để bảo mật
                </div>
            </div>

            <div class=\"my-account-profile\">
                <div class=\"my-account-profile__left\">
                    <div class=\"input-width-label\">
                        <div class=\"input-width-label_wrapper\">
                            <div class=\"input-with-label__label\">
                                <label for=\"\">Tên đăng nhập</label>
                            </div>

                            <div class=\"input-with-label__content\">
                                <div class=\"my-account__inline-container\">
                                    <div class=\"my-account__input-text\">
                                        ";
        // line 54
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"input-width-label\">
                        <div class=\"input-width-label_wrapper\">
                            <div class=\"input-with-label__label\">
                                <label for=\"\">Tên</label>
                            </div>

                            <div class=\"input-with-label__content\">
                                <div class=\"my-account__inline-container\">
                                    <div class=\"input-with-validator\">
                                        <input type=\"text\" maxlength=\"255\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"input-width-label\">
                        <div class=\"input-width-label_wrapper\">
                            <div class=\"input-with-label__label\">
                                <label for=\"\">Email</label>
                            </div>

                            <div class=\"input-with-label__content\">
                                <div class=\"my-account__inline-container\">
                                    <div class=\"my-account__input-text\">
                                        ";
        // line 86
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
        echo "
                                    </div>
                                    <div class=\"my-account-profile__change-button\">

                                        <a href=\"\" data-toggle=\"modal\" data-target=\"#modalchangeemail\">Thay đổi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"input-width-label\">
                        <div class=\"input-width-label_wrapper\">
                            <div class=\"input-with-label__label\">
                                <label for=\"\">Số điện thoại</label>
                            </div>

                            <div class=\"input-with-label__content\">
                                <div class=\"my-account__inline-container\">
                                    <div class=\"my-account__input-text\">
                                        ";
        // line 106
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
        echo "
                                    </div>
                                    <div class=\"my-account-profile__change-button\">
                                        <a href=\"\" data-toggle=\"modal\" data-target=\"#modalchangephone\">Thay đổi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"input-width-label\">
                        <div class=\"input-width-label_wrapper\">
                            <div class=\"input-with-label__label\">
                                <label for=\"\">Giới tính</label>
                            </div>

                            <div class=\"input-with-label__content\">
                                <div class=\"my-account-profile__gender\">
                                    <div class=\"stardust-radio-group\">
                                        <div class=\"stardust-radio\">
                                            <div class=\"stardust-radio-button\">
                                                <div class=\"stardust-radio-button__outer-circle\">
                                                    <div class=\"stardust-radio-button__inner-circle\">

                                                    </div>
                                                    <input ";
        // line 131
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "sex", [], "any", false, false, true, 131) == "male")) {
            echo " checked ";
        }
        echo " type=\"radio\" id=\"male\" name=\"gender\" value=\"male\">
                                                </div>
                                            </div>

                                            <div class=\"stardust-radio__content\">
                                                <div class=\"stardust-radio__label\">
                                                    Nam
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"stardust-radio\">
                                            <div class=\"stardust-radio-button\">
                                                <div class=\"stardust-radio-button__outer-circle\">
                                                    <div class=\"stardust-radio-button__inner-circle\" onclick=\"\">

                                                    </div>
                                                    <input ";
        // line 148
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "sex", [], "any", false, false, true, 148) == "female")) {
            echo " checked ";
        }
        echo " type=\"radio\" id=\"female\" name=\"gender\" value=\"female\">
                                                </div>
                                            </div>

                                            <div class=\"stardust-radio__content\">
                                                <div class=\"stardust-radio__label\">
                                                    Nữ
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"stardust-radio\">
                                            <div class=\"stardust-radio-button\">
                                                <div class=\"stardust-radio-button__outer-circle\">
                                                    <div class=\"stardust-radio-button__inner-circle\">

                                                    </div>
                                                    <input ";
        // line 165
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "sex", [], "any", false, false, true, 165) == "other")) {
            echo " checked ";
        }
        echo " type=\"radio\" id=\"other\" name=\"gender\" value=\"other\">
                                                </div>
                                            </div>

                                            <div class=\"stardust-radio__content\">
                                                <div class=\"stardust-radio__label\">
                                                    Khác
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class=\"input-width-label\">
                        <div class=\"input-width-label_wrapper\">
                            <div class=\"input-with-label__label\">
                                <label for=\"\">Ngày sinh</label>
                            </div>

                            <div class=\"input-with-label__content\">
                                <div class=\"my-account__inline-container\" style=\"width:180px\">
                                    <div class=\"input-with-validator\">
                                        <input type=\"date\" name=\"birthday\" value=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "birthday", [], "any", false, false, true, 191), 191, $this->source), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                            </div>

                            <!-- <div class=\"input-with-label__content\">
                                <div class=\"my-account__inline-container\">
                                    <div class=\"date\">
                                        <select id=\"selectbox1\">
                                            <option value=\"\">Ngày sinh</option>
                                            <option value=\"so1\">1</option>
                                            <option value=\"so2\">2</option>
                                            <option value=\"so3\">3</option>
                                            <option value=\"so4\">4</option>
                                        </select>
                                    </div>

                                    <div class=\"month\">
                                        <select id=\"selectbox2\">
                                            <option value=\"\">Tháng sinh</option>
                                            <option value=\"so1\">1</option>
                                            <option value=\"so2\">2</option>
                                            <option value=\"so3\">3</option>
                                            <option value=\"so4\">4</option>
                                        </select>
                                    </div>

                                    <div class=\"year\">
                                        <select id=\"selectbox3\">
                                            <option value=\"\">Năm sinh</option>
                                            <option value=\"so1\">1999</option>
                                            <option value=\"so2\">2000</option>
                                            <option value=\"so3\">2001</option>
                                            <option value=\"so4\">2002</option>
                                        </select>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>

                    <div class=\"my-account-page__submit\">
                        <button type=\"button\" class=\"button-save\">Lưu</button>
                    </div>
                </div>

                <div class=\"my-account-profile__right\">
                    <div class=\"avatar-uploader\">
                        <div class=\"avatar-uploader__avatar\">
                            <div class=\"avatar-uploader__avatar-image\">

                            </div>
                        </div>
                        <input type=\"file\" id=\"selectedFile\" class=\"avatar-uploader__file-input\"
                            accept=\".jpg,.jpeg,.png\">
                        <button type=\"button\" class=\"btn-ligh\"
                            onclick=\"document.getElementById('selectedFile').click();\">Chọn ảnh</button>
                        <div class=\"avatar-uploader__text-container\">
                            <div class=\"avatar-uploader__text\">Dụng lượng file tối đa 1 MB</div>
                            <div class=\"avatar-uploader__text\">Định dạng:.JPEG, .PNG</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Popup change email, phone -->
<div id=\"modalchangeemail\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Đổi email</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>

            </div>
            <div class=\"modal-body\">
                <div class=\"input-width-label\">
                    <div class=\"input-width-label_wrapper\">
                        <div class=\"input-with-label__label\">
                            <label for=\"\">Tên đăng nhập</label>
                        </div>

                        <div class=\"input-with-label__content\">
                            <div class=\"my-account__inline-container\">
                                <div class=\"my-account__input-text\">
                                    nthutuyet98
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"input-width-label\">
                    <div class=\"input-width-label_wrapper\">
                        <div class=\"input-with-label__label\">
                            <label for=\"\">Mật khẩu</label>
                        </div>

                        <div class=\"input-with-label__content\">
                            <div class=\"my-account__inline-container\">
                                <div class=\"input-with-validator inputchange\">
                                    <input type=\"password\" maxlength=\"255\" name=\"password\" id=\"password\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"my-account-page__submit\">
                    <button type=\"button\" class=\"btn btnsubmit\">Xác nhận</button>
                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>

        </div>
    </div>
</div>

<div id=\"modalchangephone\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Đổi số điện thoại</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>

            </div>
            <div class=\"modal-body\">
                <div class=\"input-width-label\">
                    <div class=\"input-width-label_wrapper\">
                        <div class=\"input-with-label__label\">
                            <label for=\"\">Tên đăng nhập</label>
                        </div>

                        <div class=\"input-with-label__content\">
                            <div class=\"my-account__inline-container\">
                                <div class=\"my-account__input-text\">
                                    nthutuyet98
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"input-width-label\">
                    <div class=\"input-width-label_wrapper\">
                        <div class=\"input-with-label__label\">
                            <label for=\"\">Số điện thoại</label>
                        </div>

                        <div class=\"input-with-label__content\">
                            <div class=\"my-account__inline-container\">
                                <div class=\"input-with-validator inputchange\">
                                    <input type=\"text\" maxlength=\"255\" name=\"\" id=\"password\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"my-account-page__submit\">
                    <button type=\"button\" class=\"btn btnsubmit\">Xác nhận</button>
                </div>
            </div>

            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/pages/quanlytaikhoan.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 191,  262 => 165,  240 => 148,  218 => 131,  190 => 106,  167 => 86,  148 => 70,  129 => 54,  96 => 24,  91 => 22,  86 => 19,  78 => 13,  76 => 12,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_ajax('onUpdate') }}
<div class=\"form-group\">
    <label for=\"accountPassword\">New Password</label>
    <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
</div>

<div class=\"form-group\">
    <label for=\"accountPasswordConfirm\">Confirm New Password</label>
    <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
</div>

{% if updateRequiresPassword %}
<p>To change these details, please confirm your current password.</p>
<div class=\"form-group\">
    <label for=\"accountPasswordCurrent\">Current Password <small class=\"text-danger\">* required</small></label>
    <input name=\"password_current\" type=\"password\" class=\"form-control\" id=\"accountPasswordCurrent\">
</div>
{% endif %}

<button type=\"submit\" class=\"btn btn-default\">Save</button>

{{ form_close() }}

<script>console.log( ({{ user|raw }}))</script>

<div class=\"records-management\">
    <div class=\"banner-header banner-management\">
        <div class=\"container text-center\">
            <h1>Tài khoản</h1>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"cover-account\">
            <div class=\"my-account-session\">
                <div class=\"my-account-title\">
                    Hồ Sơ Của Tôi
                </div>
                <div class=\"my-account-subtitle\">
                    Quản lý hồ sơ để bảo mật
                </div>
            </div>

            <div class=\"my-account-profile\">
                <div class=\"my-account-profile__left\">
                    <div class=\"input-width-label\">
                        <div class=\"input-width-label_wrapper\">
                            <div class=\"input-with-label__label\">
                                <label for=\"\">Tên đăng nhập</label>
                            </div>

                            <div class=\"input-with-label__content\">
                                <div class=\"my-account__inline-container\">
                                    <div class=\"my-account__input-text\">
                                        {{user.username}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"input-width-label\">
                        <div class=\"input-width-label_wrapper\">
                            <div class=\"input-with-label__label\">
                                <label for=\"\">Tên</label>
                            </div>

                            <div class=\"input-with-label__content\">
                                <div class=\"my-account__inline-container\">
                                    <div class=\"input-with-validator\">
                                        <input type=\"text\" maxlength=\"255\" value=\"{{user.name}}\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"input-width-label\">
                        <div class=\"input-width-label_wrapper\">
                            <div class=\"input-with-label__label\">
                                <label for=\"\">Email</label>
                            </div>

                            <div class=\"input-with-label__content\">
                                <div class=\"my-account__inline-container\">
                                    <div class=\"my-account__input-text\">
                                        {{user.email}}
                                    </div>
                                    <div class=\"my-account-profile__change-button\">

                                        <a href=\"\" data-toggle=\"modal\" data-target=\"#modalchangeemail\">Thay đổi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"input-width-label\">
                        <div class=\"input-width-label_wrapper\">
                            <div class=\"input-with-label__label\">
                                <label for=\"\">Số điện thoại</label>
                            </div>

                            <div class=\"input-with-label__content\">
                                <div class=\"my-account__inline-container\">
                                    <div class=\"my-account__input-text\">
                                        {{user.phone}}
                                    </div>
                                    <div class=\"my-account-profile__change-button\">
                                        <a href=\"\" data-toggle=\"modal\" data-target=\"#modalchangephone\">Thay đổi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"input-width-label\">
                        <div class=\"input-width-label_wrapper\">
                            <div class=\"input-with-label__label\">
                                <label for=\"\">Giới tính</label>
                            </div>

                            <div class=\"input-with-label__content\">
                                <div class=\"my-account-profile__gender\">
                                    <div class=\"stardust-radio-group\">
                                        <div class=\"stardust-radio\">
                                            <div class=\"stardust-radio-button\">
                                                <div class=\"stardust-radio-button__outer-circle\">
                                                    <div class=\"stardust-radio-button__inner-circle\">

                                                    </div>
                                                    <input {% if user.sex == 'male' %} checked {%endif%} type=\"radio\" id=\"male\" name=\"gender\" value=\"male\">
                                                </div>
                                            </div>

                                            <div class=\"stardust-radio__content\">
                                                <div class=\"stardust-radio__label\">
                                                    Nam
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"stardust-radio\">
                                            <div class=\"stardust-radio-button\">
                                                <div class=\"stardust-radio-button__outer-circle\">
                                                    <div class=\"stardust-radio-button__inner-circle\" onclick=\"\">

                                                    </div>
                                                    <input {% if user.sex == 'female' %} checked {%endif%} type=\"radio\" id=\"female\" name=\"gender\" value=\"female\">
                                                </div>
                                            </div>

                                            <div class=\"stardust-radio__content\">
                                                <div class=\"stardust-radio__label\">
                                                    Nữ
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"stardust-radio\">
                                            <div class=\"stardust-radio-button\">
                                                <div class=\"stardust-radio-button__outer-circle\">
                                                    <div class=\"stardust-radio-button__inner-circle\">

                                                    </div>
                                                    <input {% if user.sex == 'other' %} checked {%endif%} type=\"radio\" id=\"other\" name=\"gender\" value=\"other\">
                                                </div>
                                            </div>

                                            <div class=\"stardust-radio__content\">
                                                <div class=\"stardust-radio__label\">
                                                    Khác
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class=\"input-width-label\">
                        <div class=\"input-width-label_wrapper\">
                            <div class=\"input-with-label__label\">
                                <label for=\"\">Ngày sinh</label>
                            </div>

                            <div class=\"input-with-label__content\">
                                <div class=\"my-account__inline-container\" style=\"width:180px\">
                                    <div class=\"input-with-validator\">
                                        <input type=\"date\" name=\"birthday\" value=\"{{user.birthday}}\">
                                    </div>
                                </div>
                            </div>

                            <!-- <div class=\"input-with-label__content\">
                                <div class=\"my-account__inline-container\">
                                    <div class=\"date\">
                                        <select id=\"selectbox1\">
                                            <option value=\"\">Ngày sinh</option>
                                            <option value=\"so1\">1</option>
                                            <option value=\"so2\">2</option>
                                            <option value=\"so3\">3</option>
                                            <option value=\"so4\">4</option>
                                        </select>
                                    </div>

                                    <div class=\"month\">
                                        <select id=\"selectbox2\">
                                            <option value=\"\">Tháng sinh</option>
                                            <option value=\"so1\">1</option>
                                            <option value=\"so2\">2</option>
                                            <option value=\"so3\">3</option>
                                            <option value=\"so4\">4</option>
                                        </select>
                                    </div>

                                    <div class=\"year\">
                                        <select id=\"selectbox3\">
                                            <option value=\"\">Năm sinh</option>
                                            <option value=\"so1\">1999</option>
                                            <option value=\"so2\">2000</option>
                                            <option value=\"so3\">2001</option>
                                            <option value=\"so4\">2002</option>
                                        </select>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>

                    <div class=\"my-account-page__submit\">
                        <button type=\"button\" class=\"button-save\">Lưu</button>
                    </div>
                </div>

                <div class=\"my-account-profile__right\">
                    <div class=\"avatar-uploader\">
                        <div class=\"avatar-uploader__avatar\">
                            <div class=\"avatar-uploader__avatar-image\">

                            </div>
                        </div>
                        <input type=\"file\" id=\"selectedFile\" class=\"avatar-uploader__file-input\"
                            accept=\".jpg,.jpeg,.png\">
                        <button type=\"button\" class=\"btn-ligh\"
                            onclick=\"document.getElementById('selectedFile').click();\">Chọn ảnh</button>
                        <div class=\"avatar-uploader__text-container\">
                            <div class=\"avatar-uploader__text\">Dụng lượng file tối đa 1 MB</div>
                            <div class=\"avatar-uploader__text\">Định dạng:.JPEG, .PNG</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Popup change email, phone -->
<div id=\"modalchangeemail\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Đổi email</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>

            </div>
            <div class=\"modal-body\">
                <div class=\"input-width-label\">
                    <div class=\"input-width-label_wrapper\">
                        <div class=\"input-with-label__label\">
                            <label for=\"\">Tên đăng nhập</label>
                        </div>

                        <div class=\"input-with-label__content\">
                            <div class=\"my-account__inline-container\">
                                <div class=\"my-account__input-text\">
                                    nthutuyet98
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"input-width-label\">
                    <div class=\"input-width-label_wrapper\">
                        <div class=\"input-with-label__label\">
                            <label for=\"\">Mật khẩu</label>
                        </div>

                        <div class=\"input-with-label__content\">
                            <div class=\"my-account__inline-container\">
                                <div class=\"input-with-validator inputchange\">
                                    <input type=\"password\" maxlength=\"255\" name=\"password\" id=\"password\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"my-account-page__submit\">
                    <button type=\"button\" class=\"btn btnsubmit\">Xác nhận</button>
                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>

        </div>
    </div>
</div>

<div id=\"modalchangephone\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Đổi số điện thoại</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>

            </div>
            <div class=\"modal-body\">
                <div class=\"input-width-label\">
                    <div class=\"input-width-label_wrapper\">
                        <div class=\"input-with-label__label\">
                            <label for=\"\">Tên đăng nhập</label>
                        </div>

                        <div class=\"input-with-label__content\">
                            <div class=\"my-account__inline-container\">
                                <div class=\"my-account__input-text\">
                                    nthutuyet98
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"input-width-label\">
                    <div class=\"input-width-label_wrapper\">
                        <div class=\"input-with-label__label\">
                            <label for=\"\">Số điện thoại</label>
                        </div>

                        <div class=\"input-with-label__content\">
                            <div class=\"my-account__inline-container\">
                                <div class=\"input-with-validator inputchange\">
                                    <input type=\"text\" maxlength=\"255\" name=\"\" id=\"password\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"my-account-page__submit\">
                    <button type=\"button\" class=\"btn btnsubmit\">Xác nhận</button>
                </div>
            </div>

            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>

        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\arome/themes/aroma/pages/quanlytaikhoan.htm", "");
    }
}
