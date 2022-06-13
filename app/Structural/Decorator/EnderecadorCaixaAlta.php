<?php

namespace App\Structural\Decorator;

class EnderecadorCaixaAlta implements IEnderecador
{

    private IEnderecador $enderecador;

    public function __construct(IEnderecador $enderecador)
    {
        $this->enderecador = $enderecador;
    }
    public function preparaEndereco(Endereco $endereco)
    {
        return strtoupper($this->enderecador->preparaEndereco($endereco));
    }
}
