<?php

namespace Adapter;

use Adapter\NotificationSenderInterface;

require_once 'NotificationSenderInterface.php';
require_once 'SmsService.php';
class SmsSenderAdapter implements NotificationSenderInterface
{
    public function __construct(private SmsService $smsService)
    {
    }

    public function sendNotification(string $message, string $recipient): bool
    {
        $this->smsService->sendSms($recipient, $message);
        return true;
    }
}