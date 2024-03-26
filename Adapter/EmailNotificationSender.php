<?php

namespace Adapter;

use Adapter\NotificationSenderInterface;

require_once 'NotificationSenderInterface.php';
class EmailNotificationSender implements NotificationSenderInterface
{

    public function sendNotification(string $message, string $recipient): bool
    {
        echo "Email notification sent to $recipient: $message\n";
        return true;
    }
}