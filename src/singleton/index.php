<?php

    require_once __DIR__.'/../../vendor/autoload.php';

    $user = new App\Singleton\User();

    echo $user->getName();