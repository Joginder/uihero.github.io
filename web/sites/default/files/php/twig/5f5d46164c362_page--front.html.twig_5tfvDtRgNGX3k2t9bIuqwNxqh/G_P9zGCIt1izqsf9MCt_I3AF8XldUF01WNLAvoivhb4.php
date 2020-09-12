<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/uihero/templates/layout/page--front.html.twig */
class __TwigTemplate_668ce14273c226cbfb28ca6c5ecbf54491cb2a34d029f10d059f824a0224f437 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 81];
        $filters = ["escape" => 55];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
        // line 46
        echo "
";
        // line 48
        echo "
<div id=\"page\" class=\"layout-container\">
  <div class=\"top-wrapper\">
    <div id=\"navbar\">
      <div class=\"navbar-item\">
        <div id=\"navbar-menu-toggle\" ><a href=\"#\"><i class=\"material-icons navbar-icon\">menu</i></a></div>
      </div>
      ";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar", [])), "html", null, true);
        echo "
      <!--
      ";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
      ";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
        echo "
      -->
    </div>

    <div id=\"drawer-overlay\"></div>
    <div id=\"drawer\">
      <div class=\"drawer-item divider-bottom\">
        <div id=\"drawer-menu-close\"><a href=\"#\"><i class=\"material-icons drawer-icon\">arrow_back</i></a></div>
        <div id=\"drawer-title\">Main menu</div>
      </div>
      ";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "drawer", [])), "html", null, true);
        echo "
    </div>

    <header id=\"header\" role=\"banner\">
      <div id=\"header-content\">
        ";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
      </div>
      <div id=\"header-bg\">
        ";
        // line 76
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_bg", [])), "html", null, true);
        echo "
      </div>
    </header>
  </div>

  ";
        // line 81
        if ($this->getAttribute(($context["page"] ?? null), "actions", [])) {
            // line 82
            echo "    <div id=\"actions\">
      ";
            // line 83
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "actions", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 86
        echo "
  <div id=\"content\">
    ";
        // line 88
        if ($this->getAttribute(($context["page"] ?? null), "before_main", [])) {
            // line 89
            echo "      <div id=\"before-main\">
        ";
            // line 90
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "before_main", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 93
        echo "
    <main role=\"main\" id=\"main\" class=\"container\">
      <div id=\"main-content\" tabindex=\"-1\">";
        // line 96
        echo "
        <div class=\"card-holder\">
          ";
        // line 98
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
          ";
        // line 99
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
          ";
        // line 100
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "

          <div class=\"layout-content\">
            ";
        // line 103
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
          </div>";
        // line 105
        echo "
        </div>";
        // line 107
        echo "
        ";
        // line 108
        if ($this->getAttribute(($context["page"] ?? null), "content_secondary", [])) {
            // line 109
            echo "          <div id=\"content-secondary\">
            ";
            // line 110
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_secondary", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 113
        echo "      </div>";
        // line 114
        echo "
      ";
        // line 115
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 116
            echo "        <aside id=\"sidebar-first\" class=\"sidebar layout-sidebar-first\" role=\"complementary\">
          ";
            // line 117
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
        </aside>
      ";
        }
        // line 120
        echo "
      ";
        // line 121
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 122
            echo "        <aside id=\"sidebar-second\" class=\"sidebar layout-sidebar-second\" role=\"complementary\">
          ";
            // line 123
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
        </aside>
      ";
        }
        // line 126
        echo "
    </main>";
        // line 128
        echo "
    ";
        // line 129
        if ($this->getAttribute(($context["page"] ?? null), "after_main", [])) {
            // line 130
            echo "      <div id=\"after-main\">
        ";
            // line 131
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "after_main", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 134
        echo "
  </div>";
        // line 136
        echo "
  <footer id=\"footer\" role=\"contentinfo\">
    ";
        // line 138
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
    <div id=\"footer-content\">
      ";
        // line 140
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_content", [])), "html", null, true);
        echo "
    </div>
  </footer>

</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/uihero/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 140,  234 => 138,  230 => 136,  227 => 134,  221 => 131,  218 => 130,  216 => 129,  213 => 128,  210 => 126,  204 => 123,  201 => 122,  199 => 121,  196 => 120,  190 => 117,  187 => 116,  185 => 115,  182 => 114,  180 => 113,  174 => 110,  171 => 109,  169 => 108,  166 => 107,  163 => 105,  159 => 103,  153 => 100,  149 => 99,  145 => 98,  141 => 96,  137 => 93,  131 => 90,  128 => 89,  126 => 88,  122 => 86,  116 => 83,  113 => 82,  111 => 81,  103 => 76,  97 => 73,  89 => 68,  76 => 58,  72 => 57,  67 => 55,  58 => 48,  55 => 46,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/uihero/templates/layout/page--front.html.twig", "/Users/jogindar.singh/Sites/uihero.github.io/web/themes/custom/uihero/templates/layout/page--front.html.twig");
    }
}
