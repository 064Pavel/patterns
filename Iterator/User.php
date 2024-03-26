<?php

namespace Iterator;

class User
{
    public function __construct(private string $username,
                                private array $friends = [], )
    {
    }

    public function getFriends(): array
    {
        return $this->friends;
    }

    public function addFriend(string $friendName): void
    {
        $this->friends[] = $friendName;
    }

}