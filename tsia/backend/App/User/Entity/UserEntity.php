<?php


namespace App\User\Entity;


use App\Database\Entity\Entity;

class UserEntity extends Entity {

    private $id_uzytkownika;
    private $imie;
    private $nazwisko;
    private $nazwa_uzytkownika;
    private $mail;
    private $haslo;
    private $id_lokalizacji;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id_uzytkownika;
    }

    /**
     * @return mixed
     */
    public function getImie()
    {
        return $this->imie;
    }

    /**
     * @param mixed $imie
     */
    public function setImie($imie)
    {
        $this->imie = $imie;
    }

    /**
     * @return mixed
     */
    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    /**
     * @param mixed $nazwisko
     */
    public function setNazwisko($nazwisko)
    {
        $this->nazwisko = $nazwisko;
    }

    /**
     * @return mixed
     */
    public function getNazwaUzytkownika()
    {
        return $this->nazwa_uzytkownika;
    }

    /**
     * @param mixed $nazwa_uzytkownika
     */
    public function setNazwaUzytkownika($nazwa_uzytkownika)
    {
        $this->nazwa_uzytkownika = $nazwa_uzytkownika;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getHaslo()
    {
        return $this->haslo;
    }

    /**
     * @param mixed $haslo
     */
    public function setHaslo($haslo)
    {
        $this->haslo = $haslo;
    }

    /**
     * @return mixed
     */
    public function getIdLokalizacji()
    {
        return $this->id_lokalizacji;
    }

    /**
     * @param mixed $id_lokalizacji
     */
    public function setIdLokalizacji($id_lokalizacji)
    {
        $this->id_lokalizacji = $id_lokalizacji;
    }


    public function getIdSilnika()
    {
        // TODO: Implement getIdSilnika() method.
    }
}