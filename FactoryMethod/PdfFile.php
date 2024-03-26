<?php

namespace FactoryMethod;

class PdfFile implements FileInterface
{
    public function getContent(): string
    {
        return 'PdfFile' . PHP_EOL;
    }
}