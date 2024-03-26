<?php

namespace FactoryMethod;

abstract class FileFactory
{
    abstract public function createFile(): FileInterface;
}