<?php

namespace FactoryMethod;

class ImageFile implements FileInterface
{
    public function getContent(): string
    {
        return 'ImageFile' . PHP_EOL;
    }
}