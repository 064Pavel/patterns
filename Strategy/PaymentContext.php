<?php

namespace Strategy;

require_once 'PaymentStrategy.php';
class PaymentContext
{
    public function __construct(private PaymentStrategy $paymentStrategy)
    {
    }

    public function setPaymentStrategy(PaymentStrategy $paymentStrategy): void
    {
        $this->paymentStrategy = $paymentStrategy;
    }

    public function execute(int $money): PaymentStrategy
    {
        $this->paymentStrategy->pay($money);
        return $this->paymentStrategy;
    }
}