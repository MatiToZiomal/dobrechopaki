<?php


namespace App\User\Model;

class UserModel {

    private $id;
    private $group_id;
    private $username;
    private $last_login;
    private $created_at;

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return UserModel
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGroupId() {
        return $this->group_id;
    }

    /**
     * @param mixed $group_id
     * @return UserModel
     */
    public function setGroupId($group_id) {
        $this->group_id = $group_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * @param mixed $username
     * @return UserModel
     */
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastLogin() {
        return $this->last_login;
    }

    /**
     * @param mixed $last_login
     * @return UserModel
     */
    public function setLastLogin($last_login) {
        $this->last_login = $last_login;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt() {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     * @return UserModel
     */
    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
        return $this;
    }
}