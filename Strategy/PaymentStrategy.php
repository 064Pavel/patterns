<?php

namespace Strategy;
interface PaymentStrategy
{
    public function pay(int $money): bool;
}