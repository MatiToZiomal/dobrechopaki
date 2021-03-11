<?php


namespace App\User\Service;

use App\Helpers\JwtHelper;
use App\User\Model\Token;

class AuthService {

    private $userService;

    /**
     * AuthService constructor.
     */
    public function __construct() {
        $this->userService = new UserService();
    }

    public function login($username, $password) {

        $isUserExists = $this->userService->isUserWithPasswordExists($username, $password);

        if ($isUserExists) {
            return new Token(JwtHelper::generateUserToken($username));
        }

        return null;
    }
}