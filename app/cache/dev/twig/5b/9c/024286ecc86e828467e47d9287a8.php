<?php

/* DawDietaBundle:Default:quebeber.html.twig */
class __TwigTemplate_5b9c024286ecc86e828467e47d9287a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DawDietaBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dawdieta/css/cleanSlider.css"), "html", null, true);
        echo "\" />
<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dawdieta/js/jquery-1.4.2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dawdieta/js/jquery.cleanSlider.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
<script>
\$(document).ready(function(){
\tvar config={};
\tconfig.width =650;  //pixels
\tconfig.height=350;  //pixels 
\tconfig.intervalTime  =7000; //mili-seconds   
\t\$('.slider').cleanSlider(config);
})
</script>

<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \"//connect.facebook.net/es_LA/all.js#xfbml=1&appId=197345677113250\";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class=\"slider\" id=\"slide\">
\t<ul>
\t\t";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "articulos"));
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 33
            echo "\t\t\t";
            if (($this->getAttribute($this->getContext($context, "articulo"), "tipo") == 3)) {
                // line 34
                echo "\t\t\t\t<li class=\"prueba\">
\t\t\t\t\t<a rel=\"no-follow\" target=\"blank_\" title=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "titulo"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "fuente"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<img src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/dawdieta/images/" . $this->getAttribute($this->getContext($context, "articulo"), "img"))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "descripcion"), "html", null, true);
                echo "\"/>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 40
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t</ul>
</div>
<div class=\"fb-comments\" data-href=\"http://dawFitness.com\" data-width=\"470\"></div>
";
    }

    public function getTemplateName()
    {
        return "DawDietaBundle:Default:quebeber.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 41,  103 => 40,  94 => 36,  88 => 35,  85 => 34,  82 => 33,  78 => 32,  53 => 9,  50 => 8,  44 => 6,  40 => 5,  36 => 4,  32 => 3,  29 => 2,);
    }
}
