<?php

namespace App\Factory;

use App\Factory\User;

class UserFactory{

    public static function make(): User 
    {
        return new User();
    }
}
