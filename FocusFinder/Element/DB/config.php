<?php
    class Database {
        
        private static $dbHost = "Host";
        private static $dbName = "Name";
        private static $dbUser = "User";
        private static $dbUserPassword = "Password";
        private static $connection = null;

        // https://phpmyadmin.alwaysdata.com/phpmyadmin/index.php
            
        public static function connect(): PDO {
            $dsn = "mysql:host=".self::$dbHost.";dbname=".self::$dbName.";charset=utf8mb4";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
        
            try {
                self::$connection = new PDO($dsn, self::$dbUser, self::$dbUserPassword, $options);
                return self::$connection;
            } catch(PDOException $e) {
                throw new PDOException($e->getMessage(), (int)$e->getCode());
            }
        }
        
        public static function disconnect() {
            self::$connection = null;
        }    
    }
?>
