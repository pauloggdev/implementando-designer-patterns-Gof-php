<?php

namespace App\Behavioral\Strategy;

use App\Behavioral\Strategy\PagamentoStrategy;

class PagamentoCartaoDebito implements PagamentoStrategy
{

    public function pagar(Pagavel $compra): void
    {
        echo "Pagou com cartão de débito no valor de : ".$compra->getValor();
    }
}
