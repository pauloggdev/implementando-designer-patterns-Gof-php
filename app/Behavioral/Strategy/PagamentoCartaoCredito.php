<?php

namespace App\Behavioral\Strategy;

use App\Behavioral\Strategy\PagamentoStrategy;

class PagamentoCartaoCredito implements PagamentoStrategy
{

    public function pagar(Pagavel $compra): void
    {
        echo "Pagou com cartão de crédito no valor de : " . $compra->getValor();
    }
}
