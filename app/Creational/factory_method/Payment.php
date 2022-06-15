<?php

namespace App\Creational\factory_method;

class Payment
{

    public function processPayment(PaymentStrategy $paymentStrategy)
    {
        $paymentStrategy->pay($this);
    }
}
