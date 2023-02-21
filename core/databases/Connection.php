<?php

abstract class Connection {
    public static function make($conf) {
        try {
            return $pdo = new PDO("{$conf['host']};dbname={$conf['dbName']}",$conf['username'], $conf['password']);
        } catch(PDOException $err) {
            echo $err->getMessage();
            die();
        }
    }
}
