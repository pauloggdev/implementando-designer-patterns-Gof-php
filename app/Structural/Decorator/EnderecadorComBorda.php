<?php

namespace App\Structural\Decorator;

use App\Structural\Decorator\Endereco;
use App\Structural\Decorator\IEnderecador;

class EnderecadorComBorda implements IEnderecador
{

    private IEnderecador $enderecador;


    public function __construct(IEnderecador $enderecador)
    {
        $this->enderecador = $enderecador;
    }
    public function preparaEndereco(Endereco $endereco)
    {
        $enderecador = $this->enderecador->preparaEndereco($endereco);
        $enderecador = str_replace("\n", "|", $enderecador);
        return $enderecador;
    }
}
