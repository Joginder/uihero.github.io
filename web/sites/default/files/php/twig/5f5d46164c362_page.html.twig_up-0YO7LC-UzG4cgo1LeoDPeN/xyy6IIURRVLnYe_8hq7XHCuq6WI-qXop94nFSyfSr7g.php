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

/* themes/custom/uihero/templates/layout/page.html.twig */
class __TwigTemplate_9791395d62307cb7b771bfa9df1e5cb4449c16b1f57c7ecb05f02614d7563fb4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 85];
        $filters = ["escape" => 56];
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
        echo "<div id=\"page\" class=\"layout-container\">

  <div id=\"navbar\">
    <div class=\"navbar-item\">
      <div id=\"navbar-menu-toggle\">
        <a href=\"#\">
          <i class=\"material-icons navbar-icon\">menu</i>
        </a>
      </div>
    </div>
    ";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar", [])), "html", null, true);
        echo "
    <!--
    \t\t    ";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
    \t\t    ";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
        echo "
    \t\t    -->
  </div>

  <div id=\"drawer-overlay\"></div>
  <div id=\"drawer\">
    <div class=\"drawer-item divider-bottom\">
      <div id=\"drawer-menu-close\">
        <a href=\"#\">
          <i class=\"material-icons drawer-icon\">arrow_back</i>
        </a>
      </div>
      <div id=\"drawer-title\">Main menu</div>
    </div>
    ";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "drawer", [])), "html", null, true);
        echo "
  </div>

  <header id=\"header\" role=\"banner\">
    <div id=\"header-content\">
      ";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
    </div>
    <div id=\"header-bg\">
      ";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_bg", [])), "html", null, true);
        echo "
    </div>
  </header>

  ";
        // line 85
        if ($this->getAttribute(($context["page"] ?? null), "actions", [])) {
            // line 86
            echo "    <div id=\"actions\">
      ";
            // line 87
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "actions", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 90
        echo "
  <div id=\"content\">
    ";
        // line 92
        if ($this->getAttribute(($context["page"] ?? null), "before_main", [])) {
            // line 93
            echo "      <div id=\"before-main\">
        ";
            // line 94
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "before_main", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 97
        echo "
    <main role=\"main\" id=\"main\" class=\"container\">
      <div
        id=\"main-content\" tabindex=\"-1\">
        ";
        // line 102
        echo "
        <div class=\"card-holder\">
          ";
        // line 104
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
          ";
        // line 105
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
          ";
        // line 106
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "

          <div class=\"layout-content\">
            ";
        // line 109
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
          </div>
          ";
        // line 112
        echo "
        </div>
        ";
        // line 115
        echo "
        ";
        // line 116
        if ($this->getAttribute(($context["page"] ?? null), "content_secondary", [])) {
            // line 117
            echo "          <div id=\"content-secondary\">
            ";
            // line 118
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_secondary", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 121
        echo "      </div>
      ";
        // line 123
        echo "
      ";
        // line 124
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 125
            echo "        <aside id=\"sidebar-first\" class=\"sidebar layout-sidebar-first\" role=\"complementary\">
          ";
            // line 126
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
        </aside>
      ";
        }
        // line 129
        echo "
      ";
        // line 130
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 131
            echo "        <aside id=\"sidebar-second\" class=\"sidebar layout-sidebar-second\" role=\"complementary\">
          ";
            // line 132
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
        </aside>
      ";
        }
        // line 135
        echo "
    </main>
    ";
        // line 138
        echo "
    ";
        // line 139
        if ($this->getAttribute(($context["page"] ?? null), "after_main", [])) {
            // line 140
            echo "      <div id=\"after-main\">
        ";
            // line 141
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "after_main", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 144
        echo "
  </div>
  ";
        // line 147
        echo "
  <footer id=\"footer\" role=\"contentinfo\">
    ";
        // line 149
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
    <div id=\"footer-content\">
      ";
        // line 151
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_content", [])), "html", null, true);
        echo "
    </div>
  </footer>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/uihero/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 151,  244 => 149,  240 => 147,  236 => 144,  230 => 141,  227 => 140,  225 => 139,  222 => 138,  218 => 135,  212 => 132,  209 => 131,  207 => 130,  204 => 129,  198 => 126,  195 => 125,  193 => 124,  190 => 123,  187 => 121,  181 => 118,  178 => 117,  176 => 116,  173 => 115,  169 => 112,  164 => 109,  158 => 106,  154 => 105,  150 => 104,  146 => 102,  140 => 97,  134 => 94,  131 => 93,  129 => 92,  125 => 90,  119 => 87,  116 => 86,  114 => 85,  107 => 81,  101 => 78,  93 => 73,  76 => 59,  72 => 58,  67 => 56,  55 => 46,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/uihero/templates/layout/page.html.twig", "/Users/jogindar.singh/Sites/uihero.github.io/web/themes/custom/uihero/templates/layout/page.html.twig");
    }
}
