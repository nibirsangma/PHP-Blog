<?php

class Connection {
    public static function make($conf){
        try {
            //connection
            return new \PDO("{$conf['connection']};dbname={$conf['name']}", $conf['user'], $conf['pass']);
        } catch ( \PDOException $error){
            die($error);
        }
    }
}