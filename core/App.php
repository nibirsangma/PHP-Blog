<?php

class App {
    protected static $properties = [];

    public static function bind($key, $value){
        static::$properties[$key] = $value;
    }

    public static function get($key){
        return static::$properties[$key];
    }
}