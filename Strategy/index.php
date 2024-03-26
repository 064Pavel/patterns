<?php

use Strategy\CreditCardPayment;
use Strategy\PaymentContext;
use Strategy\PayPalPayment;

require_once 'CreditCardPayment.php';
require_once 'PaymentContext.php';
require_once 'PayPalPayment.php';

$creditCardPayment = new CreditCardPayment();
$payPalPayment = new PayPalPayment();

$paymentContext = new PaymentContext($creditCardPayment);
$paymentContext->execute(100);