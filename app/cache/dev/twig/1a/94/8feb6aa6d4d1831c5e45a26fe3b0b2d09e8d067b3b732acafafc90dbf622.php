<?php

/* SMASMABundle:Public:download.html.twig */
class __TwigTemplate_1a948feb6aa6d4d1831c5e45a26fe3b0b2d09e8d067b3b732acafafc90dbf622 extends Twig_Template
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
        echo "    <h2>Daftar Link Download File Sekolah</h2>
        <p></p>
    <dl class=\"dl-horizontal\">
        <p></p>
        <dt>Kalender Pendidikan</dt> 
          <p></p>
        <dd font-colour=\"blue\"><a href=\"\">Download Here</a></dd>
        <p></p>
        <dt>Jadwal Sekolah</dt>
          <p></p>
        <dd font-colour=\"blue\"><a href=\"\">Download here</a></dd>
        
    </dl>

";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Public:download.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
