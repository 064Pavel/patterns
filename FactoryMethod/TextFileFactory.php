<?php

namespace FactoryMethod;

require_once 'FileFactory.php';
require_once 'FileInterface.php';
require_once 'TextFile.php';
class TextFileFactory extends FileFactory
{

    public function createFile(): FileInterface
    {
        return new TextFile();
    }
}