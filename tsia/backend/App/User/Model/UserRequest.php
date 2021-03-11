<?php


namespace App\User\Model;


class UserRequest {

    private $username;
    private $password;

    /**
     * @return mixed
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * @param mixed $username
     * @return UserRequest
     */
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * @param mixed $password
     * @return UserRequest
     */
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }
}