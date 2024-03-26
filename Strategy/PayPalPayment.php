<?php

namespace Strategy;

require_once 'PaymentStrategy.php';
class PayPalPayment implements PaymentStrategy
{
    public function pay(int $money): bool
    {
        return true;
    }
}