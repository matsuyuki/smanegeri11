<?php

namespace SMA\SMABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pegawai
 */
class Pegawai
{
    /**
     * @var integer
     */
    private $nis;

    /**
     * @var string
     */
    private $nama;

    /**
     * @var string
     */
    private $jabatan;

    /**
     * @var integer
     */
    private $telp;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $alamat;

    /**
     * @var \DateTime
     */
    private $tglLahir;

    /**
     * @var string
     */
    private $agama;

    /**
     * @var string
     */
    private $jk;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nis
     *
     * @param integer $nis
     * @return Pegawai
     */
    public function setNis($nis)
    {
        $this->nis = $nis;

        return $this;
    }

    /**
     * Get nis
     *
     * @return integer 
     */
    public function getNis()
    {
        return $this->nis;
    }

    /**
     * Set nama
     *
     * @param string $nama
     * @return Pegawai
     */
    public function setNama($nama)
    {
        $this->nama = $nama;

        return $this;
    }

    /**
     * Get nama
     *
     * @return string 
     */
    public function getNama()
    {
        return $this->nama;
    }

    /**
     * Set jabatan
     *
     * @param string $jabatan
     * @return Pegawai
     */
    public function setJabatan($jabatan)
    {
        $this->jabatan = $jabatan;

        return $this;
    }

    /**
     * Get jabatan
     *
     * @return string 
     */
    public function getJabatan()
    {
        return $this->jabatan;
    }

    /**
     * Set telp
     *
     * @param integer $telp
     * @return Pegawai
     */
    public function setTelp($telp)
    {
        $this->telp = $telp;

        return $this;
    }

    /**
     * Get telp
     *
     * @return integer 
     */
    public function getTelp()
    {
        return $this->telp;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Pegawai
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set alamat
     *
     * @param string $alamat
     * @return Pegawai
     */
    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;

        return $this;
    }

    /**
     * Get alamat
     *
     * @return string 
     */
    public function getAlamat()
    {
        return $this->alamat;
    }

    /**
     * Set tglLahir
     *
     * @param \DateTime $tglLahir
     * @return Pegawai
     */
    public function setTglLahir($tglLahir)
    {
        $this->tglLahir = $tglLahir;

        return $this;
    }

    /**
     * Get tglLahir
     *
     * @return \DateTime 
     */
    public function getTglLahir()
    {
        return $this->tglLahir;
    }

    /**
     * Set agama
     *
     * @param string $agama
     * @return Pegawai
     */
    public function setAgama($agama)
    {
        $this->agama = $agama;

        return $this;
    }

    /**
     * Get agama
     *
     * @return string 
     */
    public function getAgama()
    {
        return $this->agama;
    }

    /**
     * Set jk
     *
     * @param string $jk
     * @return Pegawai
     */
    public function setJk($jk)
    {
        $this->jk = $jk;

        return $this;
    }

    /**
     * Get jk
     *
     * @return string 
     */
    public function getJk()
    {
        return $this->jk;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
