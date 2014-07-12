<?php

/* SMASMABundle:Public:absensi.html.twig */
class __TwigTemplate_48df5fdb2c021eb88a64ee45805413ac549a2cb3a0e502ddbc533481701edb0c extends Twig_Template
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
        echo "    <legend><center>Daftar Absensi Siswa Kelas 10-2</center></legend>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Kehadiran</th>
                
            </tr>
        </thead>
        <tbody>
            ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entity1"]) ? $context["entity1"] : $this->getContext($context, "entity1")));
        foreach ($context['_seq'] as $context["_key"] => $context["view"]) {
            // line 16
            echo "                <tr><td align=\"center\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "tanggal"), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "nama"), "html", null, true);
            echo "</td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "absen"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Public:absensi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 21,  57 => 18,  53 => 17,  48 => 16,  44 => 15,  31 => 4,  28 => 3,);
    }
}
