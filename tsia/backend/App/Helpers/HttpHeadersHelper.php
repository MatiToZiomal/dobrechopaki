<?php


namespace App\Helpers;


class HttpHeadersHelper {

    public static function getHttpHeader($name) {
        $headers = array();

        foreach (getallheaders() as $key => $value) {
            $headers[strtolower($key)] = $value;
        }

        return isset($headers[strtolower($name)]) ? $headers[strtolower($name)] : null;
    }

    public static function getTokenForRequest() {
        $authorizationValue = self::getHttpHeader("Authorization");

        $authorizationParts = explode(" ", $authorizationValue);

        return isset($authorizationParts[1]) ? $authorizationParts[1] : null;
    }

}