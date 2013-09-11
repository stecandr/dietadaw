<?php

/* DawDietaBundle::layout.html.twig */
class __TwigTemplate_fc7d77323bd123cf948221a52f098263 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'sideinicio' => array($this, 'block_sideinicio'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sideinicio($context, array $blocks = array())
    {
        // line 4
        echo "\t<header>Usuario</header>
\t</p>¡Hola
\t";
        // line 6
        if ($this->getAttribute($this->getContext($context, "app"), "user")) {
            // line 7
            echo "\t\t<strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "nombre"), "html", null, true);
            echo "</strong>!<br />
\t\t";
            // line 8
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("administrador"), "html", null, true);
                echo "\">Página de administrador</a>";
            } else {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario"), "html", null, true);
                echo "\">Página de usuario</a>";
            }
            echo " | <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
            echo "\">Cerrar sesión</a>
\t";
        } else {
            // line 10
            echo "\t\t<strong>Invitado</strong>!<br />
\t\t<a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login"), "html", null, true);
            echo "\">Inicie sesión</a> o <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_new"), "html", null, true);
            echo "\">Regístrese</a>\t\t
\t";
        }
        // line 12
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "DawDietaBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  60 => 11,  42 => 8,  37 => 7,  31 => 4,  28 => 3,  77 => 31,  74 => 30,  68 => 28,  66 => 27,  57 => 10,  46 => 7,  40 => 4,  35 => 6,  29 => 2,);
    }
}
