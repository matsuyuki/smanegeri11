<?php

/* SMASMABundle:Public:memberedit.html.twig */
class __TwigTemplate_d530c266529974bccce7cfcb84a60236bf4dd7c4955eae75242cb4f1b1c1d4bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMASMABundle:Public:template.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMASMABundle:Public:template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  <h2>Ubah Profil</h2>
    <form class=\"well\" id=\"form\" method=\"POST\" action=\"#\">
        <table cellspacing=10>
            <tr>
                <td>Username</td>
                <td><input type=\"text\" name=\"nis\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "username"), "html", null, true);
        echo "\" disabled></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type=\"text\" name=\"nis\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "password"), "html", null, true);
        echo "\"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type=\"text\" name=\"nama\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "nama"), "html", null, true);
        echo "\"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type=\"text\" name=\"email\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "email"), "html", null, true);
        echo "\"></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type=\"text\" name=\"alamat\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "alamat"), "html", null, true);
        echo "\"></td>
            </tr>
                      
            <tr><td>&nbsp;</td><td><input type=\"submit\" name=\"submit\" value=\"Simpan\" class=\"button\"></td></tr>
        </table>
    </form>
";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Public:memberedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 25,  59 => 21,  52 => 17,  45 => 13,  38 => 9,  31 => 4,  28 => 3,);
    }
}
