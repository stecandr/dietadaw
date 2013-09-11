<?php

/* DawDietaBundle:Administrador:index.html.twig */
class __TwigTemplate_2cf0a6b2dd34d08e80facf05a91bc416 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DawDietaBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<header>Administrador</header>
Seleccione una opción a realizar:
<ul>
\t<li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_usuarios"), "html", null, true);
        echo "\">Ver la lista de usuarios</a></li>
\t<li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articulo"), "html", null, true);
        echo "\">Ver la lista de artículos</a></li>
\t<li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articulo_new"), "html", null, true);
        echo "\">Crear un nuevo artículo</a></li>
</ul>
    ";
    }

    public function getTemplateName()
    {
        return "DawDietaBundle:Administrador:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
