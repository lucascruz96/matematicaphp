<?php

use PHPUnit\Framework\TestCase;
use MatematicaPHP\Equacoes;

final class EquacoesSegundoGrauTest extends TestCase
{
    public function testResolverEquacaoSegundoGrauFloat()
    {
        $a = 0.25;
        $b = 1;
        $c = -3;
        $resultadoEsperado = ['+' => 2.0, '-' => -6.0];

        $resultado = Equacoes::resolverEquacaoSegundoGrau($a, $b, $c);

        $this->assertEquals($resultadoEsperado, $resultado);
    }

    public function testResolverEquacaoSegundoGrauInt()
    {
        $a = 2;
        $b = 8;
        $c = -24;
        $resultadoEsperado = ['+' => 2, '-' => -6];

        $resultado = Equacoes::resolverEquacaoSegundoGrau($a, $b, $c);

        $this->assertEquals($resultadoEsperado, $resultado);
    }
}
