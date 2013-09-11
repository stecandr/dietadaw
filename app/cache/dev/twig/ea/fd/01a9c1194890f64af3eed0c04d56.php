<?php

/* DawDietaBundle:Default:recetas.html.twig */
class __TwigTemplate_eafd01a9c1194890f64af3eed0c04d56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DawDietaBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DawDietaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Recetas";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        if ($this->getAttribute($this->getContext($context, "app"), "user")) {
            echo "<div style=\"text-align:right;\"><form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("receta_new"), "html", null, true);
            echo "\" method=\"get\"><button type=\"submit\">Publica tu receta</button></form></div>";
        }
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "recetas"));
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 6
            echo "\t<article>
\t\t<header>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "receta"), "titulo"), "html", null, true);
            echo "</header>
\t\tPublicado por <em>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "receta"), "autor"), "nombre"), "html", null, true);
            echo "</em>
\t\t<h3>Calorías: ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "receta"), "calorias"), "html", null, true);
            echo " KCal</h3>
\t\t<h3>Ingredientes</h3>
\t\t<p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "receta"), "ingredientes"), "html", null, true);
            echo "</p>
\t\t<h3>Preparación</h3>
\t\t<p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "receta"), "preparacion"), "html", null, true);
            echo "</p>
\t</article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
";
    }

    public function getTemplateName()
    {
        return "DawDietaBundle:Default:recetas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  69 => 13,  64 => 11,  59 => 9,  55 => 8,  51 => 7,  48 => 6,  44 => 5,  38 => 4,  35 => 3,  29 => 2,);
    }
}
