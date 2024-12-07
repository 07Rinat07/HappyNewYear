<?php

class PdoConnect {
    private const HOST = 'MySQL-8.0'; // Хост MySQL  в моем случае это не локалхост

    private const DB = 'happynewyear'; // Имя базы данных
    private const USER = 'root'; // Пользователь MySQL
    private const PASS = ''; // Пароль MySQL (мой пустой)
    private const CHARSET = 'utf8mb4'; // Рекомендуемая кодировка


    protected static $_instance;

    protected $dsn;
    protected $options;
    protected $pdo;

    private function __construct() {
        $this->dsn = "mysql:host=" . self::HOST . ";port=" .  ";dbname=" . self::DB . ";charset=" . self::CHARSET;
        $this->options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Режим ошибок
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Ассоциативные массивы
            PDO::ATTR_EMULATE_PREPARES => false, // Отключение эмуляции запросов
        ];

        try {
            $this->pdo = new PDO($this->dsn, self::USER, self::PASS, $this->options);
        } catch (PDOException $e) {
            die('Ошибка подключения к базе данных: ' . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->pdo;
    }

    public static function getInstance() {
       if (self::$_instance === null) 
        self::$_instance = new self;
        return self::$_instance;
       }

       private function __clone() {}
  
}