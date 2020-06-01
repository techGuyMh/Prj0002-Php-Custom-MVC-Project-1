<?php

namespace mhFramework\databases;
use \PDO;

class mysqlConnection {

    private static $conx = null;

    private function __construct() {
    }

    public static function dbConx() {
        global $config;
        $host = isset($config['database']['connection']['host']) ? $config['database']['connection']['host'] : 'localhost';
        $port = isset($config['database']['connection']['port']) ? $config['database']['connection']['port'] : '3306';
        $user = isset($config['database']['connection']['user']) ? $config['database']['connection']['user'] : 'root';
        $password = isset($config['database']['connection']['password']) ? $config['database']['connection']['password'] : '';
        $dbName = isset($config['database']['connection']['dbName']) ? $config['database']['connection']['dbName'] : 'mhTest';
       
        if(is_null(self::$conx)) {
            $host = self::$conx = new PDO("mysql:host=".$host.";dbname=".$dbName, $user, $password);
        }
        return self::$conx;
    }
}
?>