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

/* piloten.html.twig */
class __TwigTemplate_76b8795f1f94f101d7ca4fcf0dee9a5ad620f65fc110a96fb29799ecc201a9b7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "piloten.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "<section class=\"container grid-lg\" style=\"padding-top: 0;\">
    <div class=\"piloten-lijst\">
        ";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "

        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "piloten", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["piloot"]) {
            // line 9
            echo "            ";
            $context["is_even"] = ($this->getAttribute($context["loop"], "index", []) % 2 == 0);
            // line 10
            echo "            
            <div class=\"columns\" style=\"display: flex; align-items: center; margin-bottom: 4rem; flex-direction: ";
            // line 11
            echo ((($context["is_even"] ?? null)) ? ("row-reverse") : ("row"));
            echo ";\">
                
                ";
            // line 14
            echo "                <div class=\"column col-5\">
                    ";
            // line 16
            echo "                    ";
            $context["image"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["piloot"], "foto", []), [], "array")) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["piloot"], "foto", []), [], "array")) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($context["piloot"], "foto", []), [], "array")));
            // line 17
            echo "                    
                    ";
            // line 18
            if (($context["image"] ?? null)) {
                // line 19
                echo "                        <div class=\"img-container\">
                            ";
                // line 20
                echo $this->getAttribute(($context["image"] ?? null), "html", [0 => "", 1 => $this->getAttribute($context["piloot"], "naam", []), 2 => "img-responsive s-rounded shadow-lg"], "method");
                echo "
                        </div>
                    ";
            } else {
                // line 23
                echo "                        ";
                // line 24
                echo "                        <div style=\"background: #f0f0f0; border: 1px dashed #ccc; padding: 20px; border-radius: 8px; text-align: center;\">
                            <p style=\"color: #666; font-size: 0.9rem;\">
                                <strong>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["piloot"], "naam", []), "html", null, true);
                echo "</strong><br>
                                Zoekt naar: <code>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["piloot"], "foto", []), "html", null, true);
                echo "</code><br>
                                <small>Kijkt in: <code>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "relative_path", []), "html", null, true);
                echo "</code></small>
                            </p>
                        </div>
                    ";
            }
            // line 32
            echo "                </div>

                ";
            // line 35
            echo "                <div class=\"column col-7\" style=\"text-align: ";
            echo ((($context["is_even"] ?? null)) ? ("right") : ("left"));
            echo "; padding: 0 3rem;\">
                    <h2 style=\"margin-top: 0; font-weight: 800; color: #333;\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["piloot"], "naam", []), "html", null, true);
            echo "</h2>
                    <div style=\"font-size: 1.1rem; line-height: 1.6; color: #555;\">
                        ";
            // line 38
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($context["piloot"], "tekst", []));
            echo "
                    </div>
                </div>

            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['piloot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </div>
</section>

<style>
    /* Kleine extra touch voor de foto's */
    .img-responsive.s-rounded {
        transition: transform 0.3s ease;
    }
    .img-responsive.s-rounded:hover {
        transform: scale(1.02);
    }
    .shadow-lg {
        box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
    }
</style>
";
    }

    public function getTemplateName()
    {
        return "piloten.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 44,  134 => 38,  129 => 36,  124 => 35,  120 => 32,  113 => 28,  109 => 27,  105 => 26,  101 => 24,  99 => 23,  93 => 20,  90 => 19,  88 => 18,  85 => 17,  82 => 16,  79 => 14,  74 => 11,  71 => 10,  68 => 9,  51 => 8,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
<section class=\"container grid-lg\" style=\"padding-top: 0;\">
    <div class=\"piloten-lijst\">
        {{ page.content|raw }}

        {% for piloot in page.header.piloten %}
            {% set is_even = loop.index is even %}
            
            <div class=\"columns\" style=\"display: flex; align-items: center; margin-bottom: 4rem; flex-direction: {{ is_even ? 'row-reverse' : 'row' }};\">
                
                {# Foto Kolom #}
                <div class=\"column col-5\">
                    {# We proberen de afbeelding op twee manieren te vinden #}
                    {% set image = page.media[piloot.foto] ?: page.media.images[piloot.foto] %}
                    
                    {% if image %}
                        <div class=\"img-container\">
                            {{ image.html('', piloot.naam, 'img-responsive s-rounded shadow-lg')|raw }}
                        </div>
                    {% else %}
                        {# Als hij nog steeds niets vindt, tonen we de exacte mapnaam ter controle #}
                        <div style=\"background: #f0f0f0; border: 1px dashed #ccc; padding: 20px; border-radius: 8px; text-align: center;\">
                            <p style=\"color: #666; font-size: 0.9rem;\">
                                <strong>{{ piloot.naam }}</strong><br>
                                Zoekt naar: <code>{{ piloot.foto }}</code><br>
                                <small>Kijkt in: <code>{{ page.relative_path }}</code></small>
                            </p>
                        </div>
                    {% endif %}
                </div>

                {# Tekst Kolom #}
                <div class=\"column col-7\" style=\"text-align: {{ is_even ? 'right' : 'left' }}; padding: 0 3rem;\">
                    <h2 style=\"margin-top: 0; font-weight: 800; color: #333;\">{{ piloot.naam }}</h2>
                    <div style=\"font-size: 1.1rem; line-height: 1.6; color: #555;\">
                        {{ piloot.tekst|markdown }}
                    </div>
                </div>

            </div>
        {% endfor %}
    </div>
</section>

<style>
    /* Kleine extra touch voor de foto's */
    .img-responsive.s-rounded {
        transition: transform 0.3s ease;
    }
    .img-responsive.s-rounded:hover {
        transform: scale(1.02);
    }
    .shadow-lg {
        box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
    }
</style>
{% endblock %}", "piloten.html.twig", "/home/user/decordtferre/www/user/themes/quark/templates/piloten.html.twig");
    }
}
