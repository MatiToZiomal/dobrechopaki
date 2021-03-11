<?php


namespace App\User\Service;


use App\Database\Entity\EntityMapper;
use App\User\Entity\UserEntity;
use App\User\Model\UserModel;
use App\User\Repository\UserRepository;

class UserService {

    const USER_GROUP_ID = 1;
    private $userRepository;

    /**
     * UserService constructor.
     */
    public function __construct() {
        $this->userRepository = new UserRepository();
    }


    public function getUser($id) {
        $userEntity = $this->userRepository->getById($id);

        return EntityMapper::mapEntityToResponse($userEntity, UserModel::class);
    }

    public function addUser($username, $password) {
        $userEntity = new UserEntity();

        $salt = uniqid("", true);

        $userEntity->setUsername($username)
            ->setPassword(sha1($password . $salt))
            ->setGroupId(self::USER_GROUP_ID)
            ->setSalt($salt);

        $createdUser = $this->userRepository->save($userEntity);

        return EntityMapper::mapEntityToResponse($createdUser, UserModel::class);
    }

    public function isUserWithPasswordExists($username, $password) {
        return $this->userRepository->isUserWithPasswordExists($username, $password);
    }
}