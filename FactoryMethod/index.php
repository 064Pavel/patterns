<?php

use FactoryMethod\TextFileFactory;

require_once 'TextFileFactory.php';

$textFileFactory = new TextFileFactory();
$textFile = $textFileFactory->createFile();
$textFileContent = $textFile->getContent();
print $textFileContent;
