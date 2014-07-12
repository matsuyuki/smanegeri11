<?php

/* SMASMABundle:Public:about.html.twig */
class __TwigTemplate_a4b6533ae2257f9691063bca4690685fa5a83f40dec406b368ab9855d8fb0ba5 extends Twig_Template
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
        echo "    <h2>Tentang Kami</h2>
    <p>
        SMA Negeri (SMAN) 11 Medan, merupakan salah satu Sekolah Menengah Atas Negeri yang ada di Provinsi Sumatera Utara, Indonesia. Sama dengan SMA pada umumnya di Indonesia masa pendidikan sekolah di SMAN 11 Medan ditempuh dalam waktu tiga tahun pelajaran, mulai dari Kelas X sampai Kelas XII.
        Pada tahun 2007, sekolah ini menggunakan Kurikulum Tingkat Satuan Pendidikan sebelumnya dengan KBK.
    <dl class=\"dl-horizontal\">
        <dt>Akreditasi :<dt>
        <dd> Nilai Akreditasi : 82</dd> 
        <dd>Peringkat Akreditasi : B</dd>
        <dd>Tanggal Penetapan : 05-Oct-2009.</dd>

        <dt>Fasilitas</dt>
        <dd>Kelas</dd>    
        <dd>Perpustakaan</dd>
        <dd>Laboratorium Biologi</dd>
        <dd>Laboratorium Fisika</dd>
        <dd>Laboratorium Kimia</dd>
        <dd>Laboratorium Komputer</dd>
        <dd>Laboratorium Bahasa.</dd>

        <dt>ekstrakurikuler</dt>
        <dd>PASSDAN</dd>
        <dd>BSC (Bio Sains Community)</dd>
        <dd>BKM</dd>
        <dd>PA</dd>
        <dd>IT Community</dd>
        <dd>LNC (Eleven English Club)</dd>
        <dd>PRAMUKA</dd>
        <dd>FAMOUS-T.</dd>


    </dl>
</p>

<p>
<dl class=\"dl-horizontal\">
    <dt>Alamat :</dt>
    <dd>Jl. Pertiwi No.93 Medan Tembung (20236)</dd>
    <dt>Email :</dt>
    <dd>sman11medan81@yahoo.com</dd>
    <dt>Telpon :</dt>
    <dd>(061) 7382448</dd>
    <dt>NSS :</dt>
    <dd>301076009010</dd>
    <dt>NPSN :</dt>
    <dd>10210875</dd>
</dl>
</p>
";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Public:about.html.twig";
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
