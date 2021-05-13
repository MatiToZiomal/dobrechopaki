<?php

namespace App\Samochod\Entity;

use App\Database\Entity\Entity;

class WygladEntity extends Entity {

    private $id_serwisu;
    private $id_uzytkownika;
    private $id_samochodu;
    private $zdjecie_samochodu;
    private $ilosc_punktow;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id_serwisu;
    }

    /**
     * @return mixed
     */
    public function getIdUzytkownika()
    {
        return $this->id_uzytkownika;
    }

    /**
     * @param mixed $id_uzytkownika
     */
    public function setIdUzytkownika($id_uzytkownika)
    {
        $this->id_uzytkownika = $id_uzytkownika;
    }

    /**
     * @return mixed
     */
    public function getIdSamochodu()
    {
        return $this->id_samochodu;
    }

    /**
     * @param mixed $id_samochodu
     */
    public function setIdSamochodu($id_samochodu)
    {
        $this->id_samochodu = $id_samochodu;
    }

    /**
     * @return mixed
     */
    public function getZdjecieSamochodu()
    {
        return $this->zdjecie_samochodu;
    }

    /**
     * @param mixed $zdjecie_samochodu
     */
    public function setZdjecieSamochodu($zdjecie_samochodu)
    {
        $this->zdjecie_samochodu = $zdjecie_samochodu;
    }

    /**
     * @return mixed
     */
    public function getIloscPunktow()
    {
        return $this->ilosc_punktow;
    }

    /**
     * @param mixed $ilosc_punktow
     */
    public function setIloscPunktow($ilosc_punktow)
    {
        $this->ilosc_punktow = $ilosc_punktow;
    }

}