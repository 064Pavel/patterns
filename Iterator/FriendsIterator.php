<?php

namespace Iterator;

use Iterator;

class FriendsIterator implements Iterator
{

    public function __construct(private array $friends = [],
                                private int $position = 0, )
    {
    }

    public function current(): mixed
    {
        return $this->friends[$this->position];
    }

    public function next(): void
    {
        $this->position++;
    }

    public function key(): mixed
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->friends[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

}