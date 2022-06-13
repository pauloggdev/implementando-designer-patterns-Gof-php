<?php
namespace App\Structural\Decorator;

class Endereco{

    private $logradouro;
    private $bairro;
    private $cidade;
    private $uf;
    private $cep;


    public function __construct(string $logradouro, string $bairro, string $cidade, string $uf, string $cep)
    {
        $this->logradouro = $logradouro;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->uf = $uf;
        $this->cep = $cep;
    }

    /**
     * Get the value of logradouro
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * Get the value of bairro
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Get the value of cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Get the value of uf
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Get the value of cep
     */
    public function getCep()
    {
        return $this->cep;
    }
}