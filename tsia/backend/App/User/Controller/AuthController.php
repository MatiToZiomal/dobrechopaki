<?php


namespace App\User\Controller;

use App\Router\RestBodyReader;
use App\Serializer\JsonSerializer;
use App\User\Model\UserRequest;
use App\User\Repository\UserRepository;
use App\User\Service\AuthService;

/**
 * @Controller(path="/auth")
 */
class AuthController {

    private $authService;

    /**
     * AuthController constructor.
     */
    public function __construct() {
        $this->authService = new AuthService();
    }

    /**
     * @Action(method="POST", path="/login")
     */
    public function loginAction() {
        /** @var UserRequest $requestBody */
        $requestBody = RestBodyReader::readRequestBody(UserRequest::class);

        $tokenObject = $this->authService->login($requestBody->getUsername(), $requestBody->getPassword());

        if (empty($tokenObject)) {
            http_response_code(401);
            die();
        }

        echo JsonSerializer::getInstance()->serialize($tokenObject, 'json');
    }
}