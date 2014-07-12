<?php

/* SMASMABundle:Berita:edit.html.twig */
class __TwigTemplate_46c81879af7f6d411b47d0751b1d7978e1bff4b2162848bf06837d706d72625f extends Twig_Template
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
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasma/js/tinymce/tiny_mce.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            tinyMCE.init({
            // General options
            mode : \"textareas\",
            theme : \"advanced\",
            width : \"600\",
            height : \"500\",
            });
        </script>
    <h2>Input Berita</h2>
    <form class=\"well\" id=\"form\" method=\"POST\" action=\"#\">
    <table>
        <tr>
            <td>Judul</td>
            <td><input type=\"text\" name=\"judul\" size=\"100\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["berita"]) ? $context["berita"] : $this->getContext($context, "berita")), "judul"), "html", null, true);
        echo "\"></td>
        </tr>
        <tr>
            <td>Isi</td>
            <td><textarea name=\"isi\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["berita"]) ? $context["berita"] : $this->getContext($context, "berita")), "isi"), "html", null, true);
        echo "</textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><button type=\"submit\">Post</button></td>
        </tr>
    </table>
        
    </form>
";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Berita:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 23,  50 => 19,  31 => 4,  28 => 3,);
    }
}
