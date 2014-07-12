<?php

/* SMASMABundle:Public:kelas11.html.twig */
class __TwigTemplate_f2b3afcd7aaa73f9c6031e3bb5fed68e26f51e287474d3b9620eacd4e5e12df0 extends Twig_Template
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
        echo "    <legend><center>Kelas 10 </center></legend>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Nis</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entity1"]) ? $context["entity1"] : $this->getContext($context, "entity1")));
        foreach ($context['_seq'] as $context["_key"] => $context["view"]) {
            // line 16
            echo "                <tr>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "nis"), "html", null, true);
            echo "</td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "nama"), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "kelas"), "html", null, true);
            echo "</td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "email"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Public:kelas11.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  63 => 20,  59 => 19,  55 => 18,  51 => 17,  48 => 16,  44 => 15,  31 => 4,  28 => 3,);
    }
}
