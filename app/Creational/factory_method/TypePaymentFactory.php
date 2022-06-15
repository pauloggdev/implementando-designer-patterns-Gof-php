<?php

namespace App\Creational\factory_method;

use App\Creational\factory_method\PaymentCartCredit;
use App\Creational\factory_method\PaymentCartDebit;
use App\Creational\factory_method\TypePayment;
use InvalidArgumentException;

class TypePaymentFactory
{

    public static function createTypePayment(string $typePayment)
    {
        switch ($typePayment) {
            case TypePayment::CREDIT:
                return new PaymentCartCredit();
                break;
            case TypePayment::DEBIT:
                return new PaymentCartDebit();
                break;
            default:
                throw new InvalidArgumentException("error type payment: {$typePayment}");
                break;
        }
    }
}
