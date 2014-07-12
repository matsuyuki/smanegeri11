<?php

/* SMASMABundle:Public:pegawai.html.twig */
class __TwigTemplate_4d70b1817ff3d9c82ddc57b20ba094cac9c7877ab47b653d774b57f74b66e6e0 extends Twig_Template
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
        <dt>Daftar Pegawai</dt> 
        <dd><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("check_kuis_kelas_satu");
        echo "\">Wali Kelas</a> </dd>
        <dd><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("check_kuis_kelas_dua");
        echo "\">Guru</a> </dd>
        <dd><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("check_kuis_kelas_tiga");
        echo "\">Pegawai</a> </dd>
    </dl>

";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Public:pegawai.html.twig";
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
