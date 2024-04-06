<?php

// Подсистема для работы с базой данных
class Database {
    public function query(string $sql) {
        echo "Выполнение SQL запроса: $sql\n";
        // Здесь должна быть реализация выполнения запроса к базе данных
    }
}

// Подсистема для аутентификации пользователей
class Authenticator {
    public function login(string $username, string $password) {
        echo "Попытка входа пользователя: $username\n";
        // Здесь должна быть реализация аутентификации пользователя
    }
}

// Фасад для упрощенного взаимодействия с базой данных и аутентификацией
class AppFacade {
    private $database;
    private $authenticator;

    public function __construct() {
        $this->database = new Database();
        $this->authenticator = new Authenticator();
    }

    // Метод для выполнения SQL запроса к базе данных
    public function queryDatabase(string $sql) {
        $this->database->query($sql);
    }

    // Метод для аутентификации пользователя
    public function login(string $username, string $password) {
        $this->authenticator->login($username, $password);
    }
}

// Использование фасада для выполнения запроса к базе данных и аутентификации пользователя
$app = new AppFacade();
$app->queryDatabase("SELECT * FROM users");
$app->login("username", "password");