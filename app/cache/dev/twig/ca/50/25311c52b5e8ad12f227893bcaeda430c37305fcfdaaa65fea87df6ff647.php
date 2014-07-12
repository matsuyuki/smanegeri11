<?php

/* SMASMABundle:Public:index.html.twig */
class __TwigTemplate_ca5025311c52b5e8ad12f227893bcaeda430c37305fcfdaaa65fea87df6ff647 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMASMABundle:Public:templatedetail.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMASMABundle:Public:templatedetail.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 style=\"margin:0; padding: 0; color:#003B99\">News Update</h1>
    <br>
    <div class=\"berita\">
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["berita"]) ? $context["berita"] : $this->getContext($context, "berita")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showberita", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "Id"))), "html", null, true);
            echo "\" target=\"_blank\"><center><div class=\"title-news\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "judul"), "html", null, true);
            echo "</div></center>  </a>      
            <div class=\"form\">        
                <p> ";
            // line 10
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "isi");
            echo "</p>
            </div>

     
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo " 
    </div>


";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Public:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  48 => 10,  40 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
