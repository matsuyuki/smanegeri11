<?php

namespace SMA\SMABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Absensi
 */
class Absensi
{
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
    private $absen;

    /**
     * @var \DateTime
     */
    private $tanggal;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nama
     *
     * @param string $nama
     * @return Absensi
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
     * @return Absensi
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
     * @return Absensi
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
     * Set absen
     *
     * @param string $absen
     * @return Absensi
     */
    public function setAbsen($absen)
    {
        $this->absen = $absen;

        return $this;
    }

    /**
     * Get absen
     *
     * @return string 
     */
    public function getAbsen()
    {
        return $this->absen;
    }

    /**
     * Set tanggal
     *
     * @param \DateTime $tanggal
     * @return Absensi
     */
    public function setTanggal($tanggal)
    {
        $this->tanggal = $tanggal;

        return $this;
    }

    /**
     * Get tanggal
     *
     * @return \DateTime 
     */
    public function getTanggal()
    {
        return $this->tanggal;
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
