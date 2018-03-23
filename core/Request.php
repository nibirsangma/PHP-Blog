<?php

class Request {
    public static function method(){
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function uri(){
        return trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH), '/');

    }

    public static function post($key) {
        return $_POST[$key];
    }

    public static function get($key) {
        return $_GET[$key];
    }
}