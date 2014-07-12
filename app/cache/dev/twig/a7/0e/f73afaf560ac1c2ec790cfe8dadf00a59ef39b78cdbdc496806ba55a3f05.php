<?php

/* SMASMABundle:Users:new.html.twig */
class __TwigTemplate_a70ef73afaf560ac1c2ec790cfe8dadf00a59ef39b78cdbdc496806ba55a3f05 extends Twig_Template
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
        echo "<div class=\"judul-halaman\">Data User</div>

    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("page_simpanusers");
        echo "\" method=\"post\">
        <table cellspacing=10>
            <tr><td width=120>Username</td><td><input type=\"text\" name=\"username\" required=\"required\" class=\"text-input\"></td></tr>        
            <tr><td valign=top>Password</td><td><input type=\"text\" name=\"password\" required=\"required\" class=\"text-input\"></td></tr>
            <tr><td valign=top>Email</td><td><input type=\"text\" name=\"email\" required=\"required\" class=\"text-input\"></td></tr>
            <tr><td>&nbsp;</td><td><input type=\"submit\" name=\"submit\" value=\"Simpan\" class=\"button\"></td></tr>
        </table>

    </form>  
";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Users:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,);
    }
}
