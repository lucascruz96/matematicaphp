<?php

use PHPUnit\Framework\TestCase;
use MatematicaPHP\Equacoes;
use MatematicaPHP\Entidades\ResultadoEquacaoSegundoGrau;

final class EquacoesSegundoGrauTest extends TestCase
{
    public function testResolverEquacaoSegundoGrauFloat()
    {
        $a = 0.25;
        $b = 1;
        $c = -3;
        $raizPositiva = 2.0;
        $raizNegativa = -6.0;


        $resultadoEsperado = new ResultadoEquacaoSegundoGrau($raizPositiva, $raizNegativa);

        $resultado = Equacoes::resolverEquacaoSegundoGrau($a, $b, $c);

        $this->assertEquals($resultadoEsperado, $resultado);
    }

    public function testResolverEquacaoSegundoGrauInt()
    {
        $a = 2;
        $b = 8;
        $c = -24;
        $raizPositiva = 2;
        $raizNegativa = -6;

        $resultadoEsperado = new ResultadoEquacaoSegundoGrau($raizPositiva, $raizNegativa);

        $resultado = Equacoes::resolverEquacaoSegundoGrau($a, $b, $c);

        $this->assertEquals($resultadoEsperado, $resultado);
    }
}
