<?php
namespace App\Creational\factory_method;

class PaymentCartCredit implements PaymentStrategy{
    public function pay(){
        echo "MAKE PAYMENT CART CREDIT";
    }
}