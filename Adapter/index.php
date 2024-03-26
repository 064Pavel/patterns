<?php

use Adapter\EmailNotificationSender;
use Adapter\SmsSenderAdapter;
use Adapter\SmsService;

require_once 'EmailNotificationSender.php';
require_once 'SmsSenderAdapter.php';
require_once 'SmsService.php';

$emailSender = new EmailNotificationSender();
$smsSender = new SmsService();
$smsSenderAdapter = new SmsSenderAdapter($smsSender);
$smsSenderAdapter->sendNotification("Test SMS notification", "+123456789");