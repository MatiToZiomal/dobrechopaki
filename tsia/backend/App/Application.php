<?php


namespace App;


use App\Router\RestRouter;
use App\Router\TestClass;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class Application {

    public static function run() {
        RestRouter::run();
    }
}