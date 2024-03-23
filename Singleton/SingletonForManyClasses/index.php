<?php

use Singleton\SingletonForManyClasses\Database;
use Singleton\SingletonForManyClasses\Logger;

require_once 'Logger.php';
require_once 'Singleton.php';
require_once 'Database.php';

$logger1 = Logger::getInstance();
$logger1->write();

$database1 = Database::getInstance();
$database2 = Database::getInstance();

$logger2 = Logger::getInstance();

$condition1 = spl_object_id($logger1) === spl_object_id($logger2);
$condition2 = spl_object_id($database1) === spl_object_id($database2);

if ($condition1 & $condition2) {
    print "this is singleton \n";
} else {
    print "this is not singleton \n";
}