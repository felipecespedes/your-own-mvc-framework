<?php

class DB {

    private function __construct() {
    }

    public static function query($sql, $params = []) {
        $statement = static::connection()->prepare($sql);
        $statement->execute($params);
        $result = $statement->fetch();

        return $result;
    }

    private static function connection() {
        return new PDO("mysql:host=localhost;dbname=test", "root", "");
    }

}
