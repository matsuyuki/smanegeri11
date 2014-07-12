<?php

/* SMASMABundle:Berita:new.html.twig */
class __TwigTemplate_80080d77d3c87510ef3c97b71703df143af44ba1abc37f63c24cd3a6f3057f47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMASMABundle:Admin:template.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMASMABundle:Admin:template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Tambah Berita</h1>


<form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("page_simpanberita");
        echo "\" method=\"post\">
    <table cellspacing=10>
        <tr>
            <td width=120>Judul</td>
            <td><input type=\"text\" name=\"judul\" required=\"required\" class=\"text-input\" size=\"130\"></td>
        </tr>
        
        <tr>
            <td valign=top>Berita</td>
            <td><textarea name=\"berita\" cols=\"98\" rows=\"10\" required=\"required\" class=\"text-input\"></textarea></td>
        </tr>
        
        <tr><td>&nbsp;</td><td><input type=\"submit\" name=\"submit\" value=\"Simpan\" class=\"button\"></td></tr>
    </table>
    
</form>  
";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Berita:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 4,  28 => 3,);
    }
}
