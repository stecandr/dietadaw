<?php

/* DawDietaBundle:Login:login.html.twig */
class __TwigTemplate_4af19aef30039b08bacb47e8db4bfea4 extends Twig_Template
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
        echo "Inicio sesión";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        echo "<header>Inicia sesión</header>
<div style=\"display:table;\"><form action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\">
\t<div style=\"display:table-row;\">
\t\t<div style=\"display:table-cell;\"><label for=\"username\">E-mail:</label></div>
\t\t<div style=\"display:table-cell;\"><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" /></div>
\t</div>

\t<div style=\"display:table-row;\">
\t\t\t<div style=\"display:table-cell;\"><label for=\"password\">Contraseña:</label></div>
    \t\t<div style=\"display:table-cell;\"><input type=\"password\" id=\"password\" name=\"_password\" /></div>
\t</div>

    ";
        // line 20
        echo "
    <div style=\"display:table-row;\">
\t\t<div style=\"display:table-cell;\"> </div>
\t\t<div style=\"display:table-cell;\"><button type=\"submit\">Iniciar Sesión</button></div>
\t</div>
</form></div>

";
        // line 27
        if ($this->getContext($context, "error")) {
            // line 28
            echo "    <div id=\"login_error\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 30
        echo "
<div>¿No tienes una cuenta? ¡Registrate <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_new"), "html", null, true);
        echo "\">aquí</a>!</div>
";
    }

    public function getTemplateName()
    {
        return "DawDietaBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 31,  74 => 30,  68 => 28,  66 => 27,  57 => 20,  46 => 7,  40 => 4,  35 => 3,  29 => 2,);
    }
}
