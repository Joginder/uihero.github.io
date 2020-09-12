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

/* modules/contrib/better_social_sharing_buttons/theme/better-social-sharing-buttons.html.twig */
class __TwigTemplate_e20a567f99306a89e2d41cf1bb9c4757401e4a598060b7c52bd3ef3f5d458250 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3, "set" => 4, "include" => 13];
        $filters = ["escape" => 1, "t" => 18];
        $functions = ["attach_library" => 1, "url" => 45];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
                ['escape', 't'],
                ['attach_library', 'url']
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
        // line 1
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("better_social_sharing_buttons/styling"), "html", null, true);
        echo "

";
        // line 3
        if ($this->getAttribute(($context["items"] ?? null), "width", [])) {
            // line 4
            echo "  ";
            $context["width"] = (($this->getAttribute(($context["items"] ?? null), "width", [])) ? ((("width=" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "width", []))) . "")) : (""));
            // line 5
            echo "  ";
            $context["height"] = (($this->getAttribute(($context["items"] ?? null), "width", [])) ? ((("height=" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "width", []))) . "")) : (""));
        }
        // line 7
        echo "
";
        // line 8
        if ($this->getAttribute(($context["items"] ?? null), "radius", [])) {
            // line 9
            echo "    ";
            $context["radius"] = (($this->getAttribute(($context["items"] ?? null), "radius", [])) ? ((("style=border-radius:" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "radius", []))) . ";")) : (""));
        }
        // line 11
        echo "
";
        // line 13
        echo "<div style=\"display: none\">";
        $this->loadTemplate(($context["social_buttons_sprite"] ?? null), "modules/contrib/better_social_sharing_buttons/theme/better-social-sharing-buttons.html.twig", 13)->display($context);
        echo "</div>

<div class=\"social-sharing-buttons\">
    <!-- Facebook share button -->
    ";
        // line 17
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "facebook", [])) {
            // line 18
            echo "        <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&title=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Facebook\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Facebook\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use href=\"";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#facebook\" />
            </svg>
        </a>
    ";
        }
        // line 24
        echo "
    <!-- Twitter share button -->
    ";
        // line 26
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "twitter", [])) {
            // line 27
            echo "        <a href=\"http://twitter.com/intent/tweet?text=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "+";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Twitter\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Twitter\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 28
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use href=\"";
            // line 29
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#twitter\" />
            </svg>
        </a>
    ";
        }
        // line 33
        echo "
    <!-- WhatsApp share button -->
    ";
        // line 35
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "whatsapp", [])) {
            // line 36
            echo "        <a href=\"https://wa.me/?text=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " WhatsApp\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " WhatsApp\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 37
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use href=\"";
            // line 38
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#whatsapp\" />
            </svg>
        </a>
    ";
        }
        // line 42
        echo "
    <!-- Facebook Messenger share button -->
    ";
        // line 44
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "facebook_messenger", [])) {
            // line 45
            echo "        <a href=\"http://www.facebook.com/dialog/send?app_id=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "facebook_app_id", [])), "html", null, true);
            echo "&link=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&redirect_uri=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<current>"));
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Facebook Messenger\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Facebook Messenger\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use href=\"";
            // line 47
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#messenger\" />
            </svg>
        </a>
    ";
        }
        // line 51
        echo "
    <!-- Pinterest share button -->
    ";
        // line 53
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "pinterest", [])) {
            // line 54
            echo "        <a href=\"http://pinterest.com/pin/create/link/?url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&description=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Pinterest\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Pinterest\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use href=\"";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#pinterest\" />
            </svg>
        </a>
    ";
        }
        // line 60
        echo "
    <!-- Linkedin share button -->
    ";
        // line 62
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "linkedin", [])) {
            // line 63
            echo "        <a href=\"http://www.linkedin.com/shareArticle?mini=true&url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&title=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "&source=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "base_url", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Linkedin\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Linkedin\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 64
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use href=\"";
            // line 65
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#linkedin\" />
            </svg>
        </a>
    ";
        }
        // line 69
        echo "
    <!-- Digg share button -->
    ";
        // line 71
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "digg", [])) {
            // line 72
            echo "        <a href=\"http://www.digg.com/submit?phase=2&url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&title=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Digg\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Digg\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 73
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use href=\"";
            // line 74
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#digg\" />
            </svg>
        </a>
    ";
        }
        // line 78
        echo "
    <!-- StumbleUpon share button -->
    ";
        // line 80
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "stumbleupon", [])) {
            // line 81
            echo "        <a href=\"http://www.stumbleupon.com/submit?url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&title=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " StumbleUpon\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " StumbleUpon\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 82
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use href=\"";
            // line 83
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#stumbleupon\" />
            </svg>
        </a>
    ";
        }
        // line 87
        echo "
    <!-- Slashdot share button -->
    ";
        // line 89
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "slashdot", [])) {
            // line 90
            echo "        <a href=\"http://slashdot.org/bookmark.pl?url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&title=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Slashdot\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Slashdot\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 91
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use href=\"";
            // line 92
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#slashdot\" />
            </svg>
        </a>
    ";
        }
        // line 96
        echo "
    <!-- Tumblr share button -->
    ";
        // line 98
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "tumblr", [])) {
            // line 99
            echo "        <a href=\"http://www.tumblr.com/share?v=3&u=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&t=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Tumblr\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Tumblr\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 100
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use href=\"";
            // line 101
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#tumblr\" />
            </svg>
        </a>
    ";
        }
        // line 105
        echo "
    <!-- Reddit share button -->
    ";
        // line 107
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "reddit", [])) {
            // line 108
            echo "        <a href=\"http://www.reddit.com/submit?url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&title=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Reddit\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Reddit\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 109
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use href=\"";
            // line 110
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#reddit\" />
            </svg>
        </a>
    ";
        }
        // line 114
        echo "
    <!-- Evernote share button -->
    ";
        // line 116
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "evernote", [])) {
            // line 117
            echo "        <a href=\"http://www.evernote.com/clip.action?url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&title=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Evernote\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Evernote\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg ";
            // line 118
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use href=\"";
            // line 119
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#evernote\" />
            </svg>
        </a>
    ";
        }
        // line 123
        echo "
    <!-- Email share button -->
    ";
        // line 125
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "email", [])) {
            // line 126
            echo "        <a href=\"mailto:?subject=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "&body=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " E-mail\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " E-mail\" class=\"social-sharing-buttons__button\" target=\"_blank\" rel=\"noopener\">
            <svg ";
            // line 127
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use href=\"";
            // line 128
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#email\" />
            </svg>
        </a>
    ";
        }
        // line 132
        echo "
    <!-- Copy link share button -->
    ";
        // line 134
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "copy", [])) {
            // line 135
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("better_social_sharing_buttons/copy-current-url"), "html", null, true);
            echo "
        <button class=\"btnCopy social-sharing-buttons__button\">
            <svg ";
            // line 137
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
                <use href=\"";
            // line 138
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#copy\" />
            </svg>
            <div class=\"social-sharing-buttons__popup\">";
            // line 140
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Copied to clipboard"));
            echo "</div>
        </button>
    ";
        }
        // line 143
        echo "
  <!-- Print share button -->
  ";
        // line 145
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "print", [])) {
            // line 146
            echo "    ";
            if ($this->getAttribute(($context["items"] ?? null), "print_css", [])) {
                // line 147
                echo "      ";
                $context["href"] = "#";
                // line 148
                echo "      ";
                $context["rel"] = $this->getAttribute(($context["items"] ?? null), "print_css", []);
                // line 149
                echo "      ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("better_social_sharing_buttons/print-css"), "html", null, true);
                echo "
    ";
            } else {
                // line 151
                echo "      ";
                $context["href"] = "javascript:window.print()";
                // line 152
                echo "    ";
            }
            // line 153
            echo "    <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["href"] ?? null)), "html", null, true);
            echo "\" rel=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rel"] ?? null)), "html", null, true);
            echo "\" id=\"printlink\">
      <svg ";
            // line 154
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null)), "html", null, true);
            echo ">
        <use href=\"";
            // line 155
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#print\" />
      </svg>
    </a>
  ";
        }
        // line 159
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/better_social_sharing_buttons/theme/better-social-sharing-buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  583 => 159,  576 => 155,  568 => 154,  561 => 153,  558 => 152,  555 => 151,  549 => 149,  546 => 148,  543 => 147,  540 => 146,  538 => 145,  534 => 143,  528 => 140,  523 => 138,  515 => 137,  509 => 135,  507 => 134,  503 => 132,  496 => 128,  488 => 127,  477 => 126,  475 => 125,  471 => 123,  464 => 119,  456 => 118,  445 => 117,  443 => 116,  439 => 114,  432 => 110,  424 => 109,  413 => 108,  411 => 107,  407 => 105,  400 => 101,  392 => 100,  381 => 99,  379 => 98,  375 => 96,  368 => 92,  360 => 91,  349 => 90,  347 => 89,  343 => 87,  336 => 83,  328 => 82,  317 => 81,  315 => 80,  311 => 78,  304 => 74,  296 => 73,  285 => 72,  283 => 71,  279 => 69,  272 => 65,  264 => 64,  251 => 63,  249 => 62,  245 => 60,  238 => 56,  230 => 55,  219 => 54,  217 => 53,  213 => 51,  206 => 47,  198 => 46,  185 => 45,  183 => 44,  179 => 42,  172 => 38,  164 => 37,  155 => 36,  153 => 35,  149 => 33,  142 => 29,  134 => 28,  123 => 27,  121 => 26,  117 => 24,  110 => 20,  102 => 19,  91 => 18,  89 => 17,  81 => 13,  78 => 11,  74 => 9,  72 => 8,  69 => 7,  65 => 5,  62 => 4,  60 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/better_social_sharing_buttons/theme/better-social-sharing-buttons.html.twig", "/Users/jogindar.singh/Sites/uihero.github.io/web/modules/contrib/better_social_sharing_buttons/theme/better-social-sharing-buttons.html.twig");
    }
}
