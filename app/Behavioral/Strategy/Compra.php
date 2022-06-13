<?php
namespace App\Behavioral\Strategy;

class Compra implements Pagavel{


    private float $valor;


    public function __construct(float $valor)
    {
        $this->valor = $valor; 
    }

    public function processarCompra(PagamentoStrategy $pagamentoStrategy){
        $pagamentoStrategy->pagar($this);
    }

    /**
     * Get the value of valor
     *
     * @return float
     */
    public function getValor(): float
    {
        return $this->valor;
    }
}