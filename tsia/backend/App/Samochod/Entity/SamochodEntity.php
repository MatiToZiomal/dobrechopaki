<?php

namespace App\Samochod\Entity;

use App\Database\Entity\Entity;

class SamochodEntity extends Entity {

    private $id_samochodu;
    private $rocznik;
    private $skrzynia_biegow;
    private $marka;
    private $model;
    private $id_silnika;
    private $id_wygladu;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id_samochodu;
    }

    /**
     * @return mixed
     */
    public function getRocznik()
    {
        return $this->rocznik;
    }

    /**
     * @param mixed $rocznik
     */
    public function setRocznik($rocznik)
    {
        $this->rocznik = $rocznik;
    }

    /**
     * @return mixed
     */
    public function getSkrzyniaBiegow()
    {
        return $this->skrzynia_biegow;
    }

    /**
     * @param mixed $skrzynia_biegow
     */
    public function setSkrzyniaBiegow($skrzynia_biegow)
    {
        $this->skrzynia_biegow = $skrzynia_biegow;
    }

    /**
     * @return mixed
     */
    public function getMarka()
    {
        return $this->marka;
    }

    /**
     * @param mixed $marka
     */
    public function setMarka($marka)
    {
        $this->marka = $marka;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getIdSilnika()
    {
        return $this->id_silnika;
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
    public function getIdWygladu()
    {
        return $this->id_wygladu;
    }

    /**
     * @param mixed $id_wygladu
     */
    public function setIdWygladu($id_wygladu)
    {
        $this->id_wygladu = $id_wygladu;
    }


}