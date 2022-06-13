<?php

namespace App\Structural\Decorator;

class EnderecadorSimples implements IEnderecador
{

    public function preparaEndereco(Endereco $endereco)
    {

        return sprintf(
            "%s\n%s\n%s\n%s\n%s",
            $endereco->getLogradouro(),
            $endereco->getBairro(),
            $endereco->getCidade(),
            $endereco->getUf(),
            $endereco->getCep(),
        );
    }
}
