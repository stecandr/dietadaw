<?php

/* ::base.html.twig */
class __TwigTemplate_487a590ea649d6799d095f19c132cb3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'linkregistro' => array($this, 'block_linkregistro'),
            'body' => array($this, 'block_body'),
            'sideinicio' => array($this, 'block_sideinicio'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "﻿<!DOCTYPE html>
<html lang=\"es\">
\t<head>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"description\" content=\"fitness\" />
\t\t<meta name=\"keywords\" content=\"fitness, dieta, control de alimentación, salud\" />
        <!-- <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" /> -->
\t\t<title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " - Control de Alimentación</title>
\t\t";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "\t\t

\t</head>
\t<body>
\t\t<nav id=\"main_nav\">
\t\t\t<div id=\"main_inner_nav\">
\t\t\t\t";
        // line 16
        $this->displayBlock('nav', $context, $blocks);
        // line 24
        echo "\t\t\t</div>
\t\t</nav>
\t\t<div id=\"main_wrapper\">
\t\t\t<header id=\"main_header\">
\t\t\t\t<div id=\"main_title\">Salud + Alimentaci&oacute;n = Buena vida !</div>
\t\t\t</header>
\t\t\t<div id=\"section_wrapper\">
\t\t\t\t<section id=\"main_section\">
\t\t\t\t\t";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "\t\t\t\t</section>
\t\t\t\t<aside id=\"main_aside\">";
        // line 41
        $this->displayBlock('sideinicio', $context, $blocks);
        // line 42
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 43
        $this->displayBlock('sidebar', $context, $blocks);
        // line 57
        echo "\t\t\t\t</aside>
\t\t\t</div>
\t\t\t<footer id=\"main_footer\">";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        echo "</footer>
\t\t</div>
\t\t";
        // line 61
        $this->displayBlock('scripts', $context, $blocks);
        // line 62
        echo "\t</body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Inicio";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dawdieta/css/fitnessStyle.css"), "html", null, true);
        echo "\" />";
    }

    // line 16
    public function block_nav($context, array $blocks = array())
    {
        echo "<ul>
\t\t\t\t\t<li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("daw_dieta_homepage"), "html", null, true);
        echo "\"><span class=\"icon\"><span class=\"icon-menuhome\"> </span></span><span class=\"menu_text\">Inicio</span></a></li>
\t\t\t\t\t<li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("daw_dieta_quecomer"), "html", null, true);
        echo "\"><span class=\"icon\"><span class=\"icon-menufood\"> </span></span><span class=\"menu_text\">Qué comer</span></a></li>
\t\t\t\t\t<li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("daw_dieta_quebeber"), "html", null, true);
        echo "\"><span class=\"icon\"><span class=\"icon-menuglass\"> </span></span><span class=\"menu_text\">Qué beber</span></a></li>
\t\t\t\t\t<li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("daw_dieta_recetas"), "html", null, true);
        echo "\"><span class=\"icon\"><span class=\"icon-menubook\"> </span></span><span class=\"menu_text\">Recetas</span></a></li>
\t\t\t\t\t<li><a href=\"calendario.html\"><span class=\"icon\"><span class=\"icon-menucalendar\"> </span></span><span class=\"menu_text\">Calendario de dieta</span></a></li>
\t\t\t\t\t<li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_new"), "html", null, true);
        echo "\"><span class=\"icon\"><span class=\"icon-menuuser\"> </span></span><span class=\"menu_text\">";
        $this->displayBlock('linkregistro', $context, $blocks);
        echo "</span></a></li>
\t\t\t\t</ul>";
    }

    public function block_linkregistro($context, array $blocks = array())
    {
        echo "Registro";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        echo "<article id=\"main_article\">
\t\t\t\t\t</article>
\t\t\t\t\t<article id=\"botones\">
\t\t\t\t\t\t<div id=\"bot\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"atras\">Atras</button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"adelante\">Adelante</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>";
    }

    // line 41
    public function block_sideinicio($context, array $blocks = array())
    {
    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        echo "<header>Acerca de</header>
\t\t\t\t\t<br />Esta p&aacute;gina esta dedicada a proveer informaci&oacute;n acerca de h&aacute;bitos alimenticios y c&oacute;mo, a partir de una buena alimentaci&oacute;n, podemos ser capaces de mejorar nuestra salud y tener un mejor estilo de vida.<br /><br />
\t\t\t\t\tAqu&iacute; podr&aacute;n encontrar recetas y alimentos ideales para tener una buena alimentaci&oacute;n, a la vez de poder llevar control de su alimentaci&oacute;n y su dieta.
\t\t\t\t\t<br /><br />
\t\t\t\t\t<header>Men&uacute;</header>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("daw_dieta_homepage"), "html", null, true);
        echo "\">Inicio</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("daw_dieta_quecomer"), "html", null, true);
        echo "\">Qué comer</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("daw_dieta_quebeber"), "html", null, true);
        echo "\">Qué beber</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("daw_dieta_recetas"), "html", null, true);
        echo "\">Recetas</a></li>
\t\t\t\t\t\t<li><a href=\"calendario.html\">Calendario de dietas</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_new"), "html", null, true);
        echo "\">Registro</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login"), "html", null, true);
        echo "\">Iniciar sesión</a></li>
\t\t\t\t\t</ul>";
    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        echo "Control de Alimentación &copy; DAW <a href=\"https://daw-grupoproyecto.visualstudio.com/\">Grupo 9</a> 2013 - 2014";
    }

    // line 61
    public function block_scripts($context, array $blocks = array())
    {
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dawdieta/js/fitnessScript.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 61,  199 => 59,  193 => 55,  189 => 54,  184 => 52,  180 => 51,  176 => 50,  172 => 49,  162 => 43,  157 => 41,  144 => 32,  131 => 22,  126 => 20,  122 => 19,  118 => 18,  114 => 17,  109 => 16,  101 => 9,  95 => 8,  89 => 62,  87 => 61,  82 => 59,  78 => 57,  76 => 43,  73 => 42,  71 => 41,  68 => 40,  66 => 32,  56 => 24,  54 => 16,  46 => 10,  44 => 9,  40 => 8,  36 => 7,  28 => 1,);
    }
}
