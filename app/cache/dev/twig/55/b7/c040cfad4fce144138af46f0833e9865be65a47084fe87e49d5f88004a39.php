<?php

/* SMASMABundle:Siswa:show.html.twig */
class __TwigTemplate_55b7c040cfad4fce144138af46f0833e9865be65a47084fe87e49d5f88004a39 extends Twig_Template
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
        echo "<h1>Siswa</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th align=\"center\">Nis</th>
                <td align=\"center\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nis"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th align=\"center\">Nama</th>
                <td align=\"center\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nama"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th align=\"center\">Kelas</th>
                <td align=\"center\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "kelas"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th align=\"center\">Jurusan</th>
                <td align=\"center\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jurusan"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th align=\"center\">Telp</th>
                <td align=\"center\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telp"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th align=\"center\">Email</th>
                <td align=\"center\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th align=\"center\">Alamat</th>
                <td align=\"center\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "alamat"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th align=\"center\">Tgllahir</th>
                <td align=\"center\">";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tglLahir"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th align=\"center\">Agama</th>
                <td align=\"center\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agama"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th align=\"center\">Jk</th>
                <td align=\"center\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jk"), "html", null, true);
        echo "</td>
            </tr>

        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("siswa");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("siswa_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Siswa:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 63,  121 => 59,  113 => 54,  102 => 46,  95 => 42,  88 => 38,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,);
    }
}
