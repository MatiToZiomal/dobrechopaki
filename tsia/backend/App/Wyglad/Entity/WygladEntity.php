<?php

namespace App\Samochod\Entity;

use App\Database\Entity\Entity;

class WygladEntity extends Entity {

    private $id_wygladu;
    private $felgi;
    private $typ_nadwozia;
    private $czy_odyfikowany;
    private $kolor;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id_wygladu;
    }

    /**
     * @return mixed
     */
    public function getFelgi()
    {
        return $this->felgi;
    }

    /**
     * @param mixed $felgi
     */
    public function setFelgi($felgi)
    {
        $this->felgi = $felgi;
    }

    /**
     * @return mixed
     */
    public function getTypNadwozia()
    {
        return $this->typ_nadwozia;
    }

    /**
     * @param mixed $typ_nadwozia
     */
    public function setTypNadwozia($typ_nadwozia)
    {
        $this->typ_nadwozia = $typ_nadwozia;
    }

    /**
     * @return mixed
     */
    public function getCzyOdyfikowany()
    {
        return $this->czy_odyfikowany;
    }

    /**
     * @param mixed $czy_odyfikowany
     */
    public function setCzyOdyfikowany($czy_odyfikowany)
    {
        $this->czy_odyfikowany = $czy_odyfikowany;
    }

    /**
     * @return mixed
     */
    public function getKolor()
    {
        return $this->kolor;
    }

    /**
     * @param mixed $kolor
     */
    public function setKolor($kolor)
    {
        $this->kolor = $kolor;
    }
}