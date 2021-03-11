<?php


namespace App\User\Model;


class Token {
    private $token;

    /**
     * Token constructor.
     * @param $token
     */
    public function __construct($token = null) {
        $this->token = $token;
    }

    /**
     * @return mixed
     */
    public function getToken() {
        return $this->token;
    }

    /**
     * @param string|null $token
     * @return Token
     */
    public function setToken(string $token): Token {
        $this->token = $token;
        return $this;
    }
}