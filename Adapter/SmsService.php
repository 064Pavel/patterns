<?php

namespace Adapter;

class SmsService
{
    public function sendSms(string $recipient, string $message): void
    {
        echo "SMS notification sent to $recipient: $message\n";
    }
}