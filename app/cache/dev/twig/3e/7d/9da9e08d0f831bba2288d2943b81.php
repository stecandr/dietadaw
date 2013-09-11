<?php

/* DawDietaBundle:Usuario:new.html.twig */
class __TwigTemplate_3e7d9da9e08d0f831bba2288d2943b81 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Registro";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <header>Registro de Usuario</header>

    <div id=\"registro_table\"><form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
        <div class=\"registro_row\">
            <div class=\"registro_cell\"></div><div class=\"registro_cell\"><button type=\"submit\">Registrar</button></div>
        </div>
    </form></div>

        <br />¿Ya tienes una cuenta? ¡<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login"), "html", null, true);
        echo "\">Inicia sesión</a>!
";
    }

    public function getTemplateName()
    {
        return "DawDietaBundle:Usuario:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  48 => 8,  42 => 7,  38 => 5,  35 => 4,  29 => 3,);
    }
}
