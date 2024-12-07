<?php

class PdoConnect {
    private const HOST = 'MySQL-8.0';
    private const DB = 'happynewyear';
    private const USER = 'root';
    private const PASS = '';
    private const CHARSET = 'utf8mb4';
    
    private static ?PdoConnect $instance = null;
    private PDO $pdo;

    private function __construct() {
        $dsn = "mysql:host=" . self::HOST . ";dbname=" . self::DB . ";charset=" . self::CHARSET;
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        try {
            $this->pdo = new PDO($dsn, self::USER, self::PASS, $options);
        } catch (PDOException $e) {
            die("Ошибка подключения к базе данных: " . $e->getMessage());
        }
    }

    private function __clone() {}

    // Исправляем __wakeup
    public function __wakeup() {
        throw new Exception("Сериализация запрещена для Singleton.");
    }

    public static function getInstance(): PdoConnect {
        if (self::$instance === null) {
            self::$instance = new PdoConnect();
        }
        return self::$instance;
    }

    public function getConnection(): PDO {
        return $this->pdo;
    }
}
