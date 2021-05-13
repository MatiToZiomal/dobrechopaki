<?php

namespace App\Lokalizacja\Entity;

use App\Database\Entity\Entity;

class LokalizacjaEntity extends Entity {

    private $id_lokalizacji;
    private $panstwo;
    private $miasto;
    private $wojewodztwo;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id_lokalizacji;
    }

    /**
     * @return mixed
     */
    public function getPanstwo()
    {
        return $this->panstwo;
    }

    /**
     * @param mixed $panstwo
     */
    public function setPanstwo($panstwo)
    {
        $this->panstwo = $panstwo;
    }

    /**
     * @return mixed
     */
    public function getMiasto()
    {
        return $this->miasto;
    }

    /**
     * @param mixed $miasto
     */
    public function setMiasto($miasto)
    {
        $this->miasto = $miasto;
    }

    /**
     * @return mixed
     */
    public function getWojewodztwo()
    {
        return $this->wojewodztwo;
    }

    /**
     * @param mixed $wojewodztwo
     */
    public function setWojewodztwo($wojewodztwo)
    {
        $this->wojewodztwo = $wojewodztwo;
    }







}