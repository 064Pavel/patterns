<?php

namespace Singleton\SingletonForManyClasses;

require_once 'Singleton.php';

class Logger extends Singleton
{
    public function write(): void
    {
        $handle = fopen('log.txt', 'w');
        fwrite($handle, 'test');
        fclose($handle);
    }
}