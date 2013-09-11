<?php

/* DawDietaBundle:Usuario:usuario.html.twig */
class __TwigTemplate_39f65f87d6556100a9c5397570f0717e extends Twig_Template
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
        echo "Usuario";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<header>Usuario</header>
<h2>Datos de usuario</h2>
\t<div id=\"registro_table\">
\t\t<div class=\"registro_row\">
\t\t\t<div class=\"registro_cell\"><b>Nombre</b></div>
\t\t\t<div class=\"registro_cell\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "nombre"), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"registro_row\">
\t\t\t<div class=\"registro_cell\"><b>Apellido</b></div>
\t\t\t<div class=\"registro_cell\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "apellido"), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"registro_row\">
\t\t\t<div class=\"registro_cell\"><b>Teléfono</b></div>
\t\t\t<div class=\"registro_cell\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "telefono"), "html", null, true);
        echo "</div>
        </div>
\t\t<div class=\"registro_row\">
\t\t\t<div class=\"registro_cell\"><b>Fecha de nacimiento</b></div>
\t\t\t<div class=\"registro_cell\">";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "fechanac"), "Y-m-d"), "html", null, true);
        echo "</div>
        </div>
\t\t<div class=\"registro_row\">
\t\t\t<div class=\"registro_cell\"><b>Correo</b></div>
\t\t\t<div class=\"registro_cell\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "correo"), "html", null, true);
        echo "</div>
        </div>
\t\t<div class=\"registro_row\">
\t\t\t<div class=\"registro_cell\"><b>Altura</b></div>
\t\t\t<div class=\"registro_cell\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "altura"), "html", null, true);
        echo "</div>
        </div>
\t\t<div class=\"registro_row\">
\t\t\t<div class=\"registro_cell\"><b>Peso</b></div>
\t\t\t<div class=\"registro_cell\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "peso"), "html", null, true);
        echo "</div>
        </div>
\t\t<div class=\"registro_row\">
\t\t\t<div class=\"registro_cell\"><b>Índice de Masa Corporal</b></div>
\t\t\t<div class=\"registro_cell\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "bmi"), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"registro_row\">
\t\t\t<div class=\"registro_cell\"></div>
\t\t\t<div class=\"registro_cell\">
\t\t\t\t";
        // line 42
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "bmi") < 15.9999)) {
            // line 43
            echo "\t\t\t\t\tUsted está en <b>infrapeso</b>
\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "bmi") < 24.9999)) {
            // line 45
            echo "\t\t\t\t\tUsted tiene un peso <b>normal</b>
\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "bmi") < 30)) {
            // line 47
            echo "\t\t\t\t\tUsted tiene <b>sobrepeso</b>
\t\t\t\t";
        } else {
            // line 49
            echo "\t\t\t\t\tUsted tiene <b>obesidad</b>
\t\t\t\t";
        }
        // line 51
        echo "\t\t\t</div>
\t\t</div>
\t</div>
<div>Seleccione una opción a realizar:
<ul>
\t<li>Ver las recetas</li>
</ul></div>
";
    }

    public function getTemplateName()
    {
        return "DawDietaBundle:Usuario:usuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 51,  116 => 49,  112 => 47,  108 => 45,  104 => 43,  102 => 42,  94 => 37,  87 => 33,  80 => 29,  73 => 25,  66 => 21,  59 => 17,  52 => 13,  45 => 9,  38 => 4,  35 => 3,  29 => 2,);
    }
}
