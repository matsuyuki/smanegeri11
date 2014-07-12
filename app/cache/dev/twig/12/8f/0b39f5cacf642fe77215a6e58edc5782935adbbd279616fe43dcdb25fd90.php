<?php

/* SMASMABundle:Public:pegawai1.html.twig */
class __TwigTemplate_128f0b39f5cacf642fe77215a6e58edc5782935adbbd279616fe43dcdb25fd90 extends Twig_Template
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
        echo "    <legend><center>Wali Kelas </center></legend>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Nip</th>
                <th>Nama</th>
                <th>alamat</th>
                <th>jabatan</th>
                <th>Bidang</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entity1"]) ? $context["entity1"] : $this->getContext($context, "entity1")));
        foreach ($context['_seq'] as $context["_key"] => $context["view"]) {
            // line 18
            echo "                <tr>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "nis"), "html", null, true);
            echo "</td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "nama"), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "alamat"), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "jabatan"), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "Bidang"), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "email"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Public:pegawai1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 27,  73 => 24,  69 => 23,  65 => 22,  61 => 21,  57 => 20,  53 => 19,  50 => 18,  46 => 17,  31 => 4,  28 => 3,);
    }
}
