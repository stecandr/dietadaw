<?php

/* DawDietaBundle:Receta:new.html.twig */
class __TwigTemplate_dd1f69c2424a4bd33c0820f0d9982f1c extends Twig_Template
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
        echo "Nueva receta";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <header>Nueva receta</header>

    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("receta_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
        <p>
            <button type=\"submit\">Crear</button>
        </p>
    </form>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("receta"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "DawDietaBundle:Receta:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  48 => 7,  42 => 6,  38 => 4,  35 => 3,  29 => 2,);
    }
}
