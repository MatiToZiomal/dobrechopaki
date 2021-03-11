<?php

namespace App\User\Entity;

use App\Database\Entity\Entity;

class SilnikEntity extends Entity {

    private $id_silnika;
    private $naped;
    private $moc;
    private $pojemnosc;
    private $przebieg;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id_silnika;
    }

    /**
     * @return mixed
     */
    public function getNaped()
    {
        return $this->naped;
    }

    /**
     * @param mixed $naped
     */
    public function setNaped($naped)
    {
        $this->naped = $naped;
    }

    /**
     * @return mixed
     */
    public function getMoc()
    {
        return $this->moc;
    }

    /**
     * @param mixed $moc
     */
    public function setMoc($moc)
    {
        $this->moc = $moc;
    }

    /**
     * @return mixed
     */
    public function getPojemnosc()
    {
        return $this->pojemnosc;
    }

    /**
     * @param mixed $id_silnika
     */
    public function setIdSilnika($id_silnika)
    {
        $this->id_silnika = $id_silnika;
    }

    /**
     * @return mixed
     */
    public function getPrzebieg()
    {
        return $this->przebieg;
    }

    /**
     * @param mixed $pojemnosc
     */
    public function setPojemnosc($pojemnosc)
    {
        $this->pojemnosc = $pojemnosc;
    }


}