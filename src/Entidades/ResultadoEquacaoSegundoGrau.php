<?php

namespace MatematicaPHP\Entidades;

class ResultadoEquacaoSegundoGrau
{
    private $raizPositiva;
    private $raizNegativa;

    public function __construct(float $raizPositiva, float $raizNegativa)
    {
        $this->raizPositiva = $raizPositiva;
        $this->raizNegativa = $raizNegativa;
    }

    public function getRaizPositiva()
    {
        return $this->raizPositiva;
    }

    public function getRaizNegativa()
    {
        return $this->raizNegativa;
    }
}
