<?php

use Singleton\EmailSender;

require_once 'EmailSender.php';

$emailSender1 = EmailSender::getInstance();
$emailSender2 = EmailSender::getInstance();

if (spl_object_id($emailSender1) === spl_object_id($emailSender2)) {
    print "this is singleton \n";
} else {
    print "this is not singleton";
}

