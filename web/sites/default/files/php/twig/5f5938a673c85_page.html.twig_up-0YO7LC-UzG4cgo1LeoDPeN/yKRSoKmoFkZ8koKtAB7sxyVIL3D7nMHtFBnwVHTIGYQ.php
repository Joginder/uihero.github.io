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
        $tags = ["if" => 70];
        $filters = ["escape" => 49];
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
    ";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar", [])), "html", null, true);
        echo "
    ";
        // line 54
        echo "  </div>

  ";
        // line 60
        echo "
  <header id=\"header\" role=\"banner\">
    <div id=\"header-content\">
      ";
        // line 63
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
    </div>
    <div id=\"header-bg\">
      ";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_bg", [])), "html", null, true);
        echo "
    </div>
  </header>

  ";
        // line 70
        if ($this->getAttribute(($context["page"] ?? null), "actions", [])) {
            // line 71
            echo "    <div id=\"actions\">
      ";
            // line 72
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "actions", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 75
        echo "
  <div id=\"content\">
    ";
        // line 77
        if ($this->getAttribute(($context["page"] ?? null), "before_main", [])) {
            // line 78
            echo "      <div id=\"before-main\">
        ";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "before_main", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 82
        echo "
    <main role=\"main\" id=\"main\" class=\"container\">
      <div id=\"main-content\" tabindex=\"-1\">";
        // line 85
        echo "
        <div class=\"card-holder\">
          ";
        // line 87
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
          ";
        // line 88
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
          ";
        // line 89
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "

          <div class=\"layout-content\">
            ";
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
          </div>";
        // line 94
        echo "
        </div>";
        // line 96
        echo "
        ";
        // line 97
        if ($this->getAttribute(($context["page"] ?? null), "content_secondary", [])) {
            // line 98
            echo "          <div id=\"content-secondary\">
            ";
            // line 99
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_secondary", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 102
        echo "      </div>";
        // line 103
        echo "
      ";
        // line 104
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 105
            echo "        <aside id=\"sidebar-first\" class=\"sidebar layout-sidebar-first\" role=\"complementary\">
          ";
            // line 106
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
        </aside>
      ";
        }
        // line 109
        echo "
      ";
        // line 110
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 111
            echo "        <aside id=\"sidebar-second\" class=\"sidebar layout-sidebar-second\" role=\"complementary\">
          ";
            // line 112
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
        </aside>
      ";
        }
        // line 115
        echo "
    </main>";
        // line 117
        echo "
    ";
        // line 118
        if ($this->getAttribute(($context["page"] ?? null), "after_main", [])) {
            // line 119
            echo "      <div id=\"after-main\">
        ";
            // line 120
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "after_main", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 123
        echo "
  </div>";
        // line 125
        echo "
  <footer id=\"footer\" role=\"contentinfo\">
    ";
        // line 127
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
    <div id=\"footer-content\">
      ";
        // line 129
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_content", [])), "html", null, true);
        echo "
    </div>
  </footer>

</div>";
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
        return array (  214 => 129,  209 => 127,  205 => 125,  202 => 123,  196 => 120,  193 => 119,  191 => 118,  188 => 117,  185 => 115,  179 => 112,  176 => 111,  174 => 110,  171 => 109,  165 => 106,  162 => 105,  160 => 104,  157 => 103,  155 => 102,  149 => 99,  146 => 98,  144 => 97,  141 => 96,  138 => 94,  134 => 92,  128 => 89,  124 => 88,  120 => 87,  116 => 85,  112 => 82,  106 => 79,  103 => 78,  101 => 77,  97 => 75,  91 => 72,  88 => 71,  86 => 70,  79 => 66,  73 => 63,  68 => 60,  64 => 54,  60 => 49,  55 => 46,);
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
