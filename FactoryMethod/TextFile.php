<?php

namespace FactoryMethod;

class TextFile implements FileInterface
{
    public function getContent(): string
    {
        return 'TextFile' . PHP_EOL;
    }
}