<?php

class App {
    private static $data = [];

    public static function bind($key,$values) {
        self::$data[$key] = $values;
    }

    public static function get($key) {
        return self::$data[$key];
    }

}

// App::bind("key","values");
// App::get("key");
