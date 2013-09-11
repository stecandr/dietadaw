<?php

/* DawDietaBundle:Usuario:index.html.twig */
class __TwigTemplate_d12774a9f756dc52fdc072849b3d9f1e extends Twig_Template
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
        echo "    <h1>Usuario list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha Nacimiento</th>
                <th>Correo</th>
                <th>Altura</th>
                <th>Peso</th>
                <th>BMI</th>
                <th>Fecha Registro</th>
                <th>Activo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombre"), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "apellido"), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($this->getContext($context, "entity"), "fechanac")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fechanac"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "correo"), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "altura"), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "peso"), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "bmi"), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($this->getContext($context, "entity"), "fecharegistro")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fecharegistro"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "estaactivo"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">Ver</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 42
            if (($this->getAttribute($this->getContext($context, "entity"), "estaactivo") == 1)) {
                echo "Inactivar";
            } else {
                echo "Activar";
            }
            echo "</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_new"), "html", null, true);
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "DawDietaBundle:Usuario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 53,  134 => 48,  118 => 42,  114 => 41,  108 => 38,  101 => 34,  95 => 33,  91 => 32,  87 => 31,  83 => 30,  79 => 29,  73 => 28,  69 => 27,  65 => 26,  59 => 25,  56 => 24,  52 => 23,  31 => 4,  28 => 3,);
    }
}
