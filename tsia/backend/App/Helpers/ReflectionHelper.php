<?php


namespace App\Helpers;


use ReflectionClass;
use ReflectionProperty;

class ReflectionHelper {

    /**
     * @param $object
     * @param $className
     * @return array
     * @throws \ReflectionException
     */
    public static function getObjectPrivateFields($object) {

        $result = array();

        $reflect = new ReflectionClass($object);
        $props = $reflect->getProperties(ReflectionProperty::IS_PRIVATE);

        foreach ($props as $property) {
            $property->setAccessible(true);
            $result[$property->getName()] = $property->getValue($object);
            $property->setAccessible(false);
        }

        return $result;
    }

    public static function getFullMethodIdentifier(\ReflectionMethod $methodReflector) {
        $declaringClass = $methodReflector->getDeclaringClass();
        return "\\" . $declaringClass->getNamespaceName() . "\\" . $declaringClass->getShortName() . "@" . $methodReflector->getName();
    }
}