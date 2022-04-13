<?php

namespace App\Service;

final class DatabaseConnection
{
    private static $instance;

    private const HOST = 'host.docker.internal';
    private const DB = 'donner_database';
    private const USER = 'admin';
    private const PASSWORD = 'admin';

    public static function getInstance()
    {
        if (static::$instance === null) {
            try {
                $pdo = new \PDO(
                    "mysql:host=".self::HOST.";port=3306;dbname=".self::DB.";charset=UTF8",
                    self::USER,
                    self::PASSWORD
                );
                if ($pdo) {
                    static::$instance = $pdo;
                }
            } catch (\PDOException $e) {
                $fp = fopen('app.log', 'a');
                fwrite($fp, __CLASS__.' : Cannot connect to database ! ');
            }
        }

        return static::$instance;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }
}
