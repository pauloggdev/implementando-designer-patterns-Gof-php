<?php
namespace App\Creational\factory_method;

class PaymentCartDebit implements PaymentStrategy{
    public function pay(){
        echo "MAKE PAYMENT CART DEBIT";
    }
}