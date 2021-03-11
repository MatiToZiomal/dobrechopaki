<?php


namespace App\User\Controller;

use App\Router\RestBodyReader;
use App\Serializer\JsonSerializer;
use App\User\Model\UserRequest;
use App\User\Service\UserService;

/**
 * @Controller(path="/user")
 */
class UserController {

    private $userService;

    /**
     * UserController constructor.
     */
    public function __construct() {
        $this->userService = new UserService();
    }


    /**
     * @Authorized(permission="GET_USER_PERMISSION")
     * @Action(method="GET")
     */
    public function getUsers() {
        echo json_encode(array("test" => "test"));
    }

    /**
     * @Action(method="POST")
     */
    public
    function addUser() {
        /** @var UserRequest $userRequest */
        $userRequest = RestBodyReader::readRequestBody(UserRequest::class);

        $createdUser = $this->userService->addUser($userRequest->getUsername(), $userRequest->getPassword());

        echo JsonSerializer::getInstance()->serialize($createdUser, 'json');
    }

    /**
     * @Action(method="GET", path="/{id}")
     */
    public
    function getUser($id) {
        echo JsonSerializer::getInstance()->serialize($this->userService->getUser($id), 'json');
    }

    /**
     * @Action(method="PUT", path="/{id}")
     */
    public
    function updateUser($id) {
        echo sprintf("Updated user with id: %s", $id);
    }

    /**
     * @Action(method="DELETE", path="/{id}")
     */
    public
    function deleteUser($id) {
        echo sprintf("Deleted user with id: %s", $id);
    }
}