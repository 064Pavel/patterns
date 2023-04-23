<?php

namespace App\Singleton;

final class DatabaseConnection{

    // При необходимости можно добавить конструктор, но он должен быть приватным, чтобы предотвратить создание экземпляров класса вне класса

    // Переменная, которая хранит ссылку на единственный экземпляр этого класса
    private static ?self $instance = null;

    private static string $name = 'singleton';
    private static string $host = 'localhost';
    private static int $port = 5432;
    private static string $user_name = 'root';
    private static string $password = '12345678';

    // Метод, который возвращает ссылку на существующий экземпляр класса, и создает новый экземпляр, если его еще нет
    public static function getInstance(): self
    {
        if(self::$instance === null){
            self::$instance = new self();
        }

        return self::$instance;
    }

    // Методы...

    public static function getName(): string
    {
        return self::$name;
    }

    public static function getHost(): string
    {
        return self::$host;
    }

    public static function getPort(): int
    {
        return self::$port;
    }

    public static function getUserName(): string
    {
        return self::$user_name;
    }

    public static function getPassword(): string
    {
        return self::$password;
    }

    public static function setName(string $name): self
    {
        self::$name = $name;
        return self::getInstance();
    }

    public static function setHost(string $host): self
    {
        self::$host = $host;
        return self::getInstance();
    }

    public static function setPort(int $port): self
    {
        self::$port = $port; 
        return self::getInstance();
    }

    public static function setUserName(string $user_name): self
    {
        self::$user_name = $user_name;
        return self::getInstance();
    }

    public static function setPassword(string $password): self 
    {
        self::$password = $password;
        return self::getInstance();
    }

}