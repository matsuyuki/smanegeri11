<?php

/* SMASMABundle:Public:kelas.html.twig */
class __TwigTemplate_31f5c4405e19a9823c713e8ddde5e14911e7d3a1639e9458fd86b4837b9fe42a extends Twig_Template
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
        echo " 
    <dl class=\"dl-horizontal\">
        <dt>Daftar Kelas</dt> 
        <dd><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("check_pegawai_satu");
        echo "\">Kelas 10</a> </dd>
        <dd><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("check_pegawai_dua");
        echo "\">Kelas 11</a> </dd>
        <dd><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("check_pegawai_tiga");
        echo "\">Kelas 12</a> </dd>
    </dl>

";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Public:kelas.html.twig";
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
