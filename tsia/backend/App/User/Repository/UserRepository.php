<?php


namespace App\User\Repository;


use App\Database\Repository\Repository;
use App\User\Entity\UserEntity;

class UserRepository extends Repository {

    protected function getEntityName() {
        return "App\User\Entity\UserEntity";
    }

    protected function getTableName() {
        return "user";
    }

    public function isUserWithPasswordExists($username, $password) {
        $query = $this->prepare("Select * from " . $this->getTableName() . " where username=:username");

        $query->execute(array(
            ":username" => $username
        ));

        /** @var UserEntity $userEntity */
        $userEntity = $query->fetch();

        if (empty($userEntity)) {
            return false;
        }

        $encodedUserPassword = sha1($password . $userEntity->getSalt());

        return $encodedUserPassword == $userEntity->getPassword();
    }
}
