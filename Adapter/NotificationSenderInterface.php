<?php

namespace Adapter;

interface NotificationSenderInterface
{
    public function sendNotification(string $message, string $recipient): bool;
}