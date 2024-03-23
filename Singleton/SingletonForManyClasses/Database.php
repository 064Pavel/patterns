<?php

namespace Singleton\SingletonForManyClasses;

require_once 'Singleton.php';
class Database extends Singleton
{
    public function connect(): void
    {
        print 'connect';
    }
}