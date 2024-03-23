<?php

namespace Singleton\SingletonForManyClasses;
use Exception;
class Singleton
{
    private static array $instances = [];

    public static function getInstance(): static
    {
        $subclass = static::class;
        if (!isset(self::$instances[$subclass])) {
            // Обратите внимание, что здесь мы используем ключевое слово
            // "static"  вместо фактического имени класса. В этом контексте
            // ключевое слово "static" означает «имя текущего класса». Эта
            // особенность важна, потому что, когда метод вызывается в
            // подклассе, мы хотим, чтобы экземпляр этого подкласса был создан
            // здесь.
            self::$instances[$subclass] = new static();
        }

        return self::$instances[$subclass];
    }

    protected function __construct()
    {
    }

    private function __clone(): void
    {
    }

    public function __wakeup(): void
    {
        throw new Exception('Cannot deserialize');
    }
}