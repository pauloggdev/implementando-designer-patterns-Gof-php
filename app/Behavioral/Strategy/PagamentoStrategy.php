<?php
namespace App\Behavioral\Strategy;

interface PagamentoStrategy{
    public function pagar(Pagavel $compra):void;
}