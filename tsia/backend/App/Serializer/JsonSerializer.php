<?php


namespace App\Serializer;


use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class JsonSerializer {

    private static $serializer;

    public static function getInstance(): Serializer {

        if (empty(self::$serializer)) {

            $encoders = [new JsonEncoder()];
            $normalizers = [new ObjectNormalizer()];

            self::$serializer = new Serializer($normalizers, $encoders);
        }

        return self::$serializer;
    }
}