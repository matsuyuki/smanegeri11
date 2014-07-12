<?php

namespace SMA\SMABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Siswa2
 */
class Siswa2
{
    /**
     * @var string
     */
    private $nis;

    /**
     * @var string
     */
    private $nama;

    /**
     * @var string
     */
    private $kelas;

    /**
     * @var string
     */
    private $subkelas;

    /**
     * @var string
     */
    private $jurusan;

    /**
     * @var string
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
     * @var string
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
     * @param string $nis
     * @return Siswa2
     */
    public function setNis($nis)
    {
        $this->nis = $nis;

        return $this;
    }

    /**
     * Get nis
     *
     * @return string 
     */
    public function getNis()
    {
        return $this->nis;
    }

    /**
     * Set nama
     *
     * @param string $nama
     * @return Siswa2
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
     * Set kelas
     *
     * @param string $kelas
     * @return Siswa2
     */
    public function setKelas($kelas)
    {
        $this->kelas = $kelas;

        return $this;
    }

    /**
     * Get kelas
     *
     * @return string 
     */
    public function getKelas()
    {
        return $this->kelas;
    }

    /**
     * Set subkelas
     *
     * @param string $subkelas
     * @return Siswa2
     */
    public function setSubkelas($subkelas)
    {
        $this->subkelas = $subkelas;

        return $this;
    }

    /**
     * Get subkelas
     *
     * @return string 
     */
    public function getSubkelas()
    {
        return $this->subkelas;
    }

    /**
     * Set jurusan
     *
     * @param string $jurusan
     * @return Siswa2
     */
    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;

        return $this;
    }

    /**
     * Get jurusan
     *
     * @return string 
     */
    public function getJurusan()
    {
        return $this->jurusan;
    }

    /**
     * Set telp
     *
     * @param string $telp
     * @return Siswa2
     */
    public function setTelp($telp)
    {
        $this->telp = $telp;

        return $this;
    }

    /**
     * Get telp
     *
     * @return string 
     */
    public function getTelp()
    {
        return $this->telp;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Siswa2
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
     * @return Siswa2
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
     * @param string $tglLahir
     * @return Siswa2
     */
    public function setTglLahir($tglLahir)
    {
        $this->tglLahir = $tglLahir;

        return $this;
    }

    /**
     * Get tglLahir
     *
     * @return string 
     */
    public function getTglLahir()
    {
        return $this->tglLahir;
    }

    /**
     * Set agama
     *
     * @param string $agama
     * @return Siswa2
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
     * @return Siswa2
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
