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
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($_app_, "user")) {
            // line 7
            echo "\t\t<strong>";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "nombre"), "html", null, true);
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
        return array (  69 => 12,  62 => 11,  59 => 10,  38 => 7,  35 => 6,  31 => 4,  28 => 3,  115 => 41,  109 => 40,  98 => 36,  90 => 35,  87 => 34,  83 => 33,  78 => 32,  53 => 9,  50 => 8,  44 => 8,  40 => 5,  36 => 4,  32 => 3,  29 => 2,);
    }
}
