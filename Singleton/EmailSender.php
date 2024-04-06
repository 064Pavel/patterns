<?php

namespace Singleton;
use Exception;

class EmailSender
{
    private static EmailSender|null $instance = null;

    public static function getInstance(): self
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct()
    {
    }

    private function __clone(): void
    {
    }

    public function __wakeup(): never
    {
        throw new Exception('Cannot deserialize');
    }
}