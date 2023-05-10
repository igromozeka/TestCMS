<?php


class DBConnect
{
    // свойства для подключения к бд
    private static $dbName = dbname;
    private static $dbHost = dbhost;
    private static $dbLogin = dblogin;
    private static $dbPassword = dbpassword;

    // приватный метод для формирования DSN
    private static function getDSN(){
        return "mysql:host=".self::$dbHost.";dbname=".self::$dbName;
    }

    // метод для получения доступа к БД
    public static function getConnection(){
        try {
            $pdo = new PDO(self::getDSN(), self::$dbLogin, self::$dbPassword,
                [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        } catch (PDOException $e) {
            die("Ошибка!: " . $e->getMessage() . "<br/>");
        }
        return $pdo;
    }
}