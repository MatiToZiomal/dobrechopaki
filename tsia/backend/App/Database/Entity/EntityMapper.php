<?php


namespace App\Database\Entity;


use App\Serializer\JsonSerializer;

class EntityMapper {

    const DATA_FORMAT = 'json';

    /**
     * @param Entity $entity
     * @param $classReference
     * @return object
     */
    public static function mapEntityToResponse(Entity $entity, $classReference) {

        $serializer = JsonSerializer::getInstance();

        $serializedEntity = $serializer->serialize($entity, self::DATA_FORMAT);

        return $serializer->deserialize($serializedEntity, $classReference, self::DATA_FORMAT);
    }
}