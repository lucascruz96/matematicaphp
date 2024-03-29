<?php

namespace MatematicaPHP;

use MatematicaPHP\Entidades\ResultadoEquacaoSegundoGrau;

class Equacoes
{
    /**
     * @param float $a Coeficiente a da equação.
     * @param float $b Coeficiente b da equação.
     * @param float $c Coeficiente c da equação.
     * 
     * @return MatematicaPHP\Entidades\ResultadoEquacaoSegundoGrau
     */
    public static function resolverEquacaoSegundoGrau(float $a, float $b, float $c)
    {
        $delta = pow($b, 2) + (-4 * $a * $c);

        $raizPositiva = (($b * -1) + sqrt($delta)) / (2 * $a);
        $raizNegativa = (($b * -1) - sqrt($delta)) / (2 * $a);

        return new ResultadoEquacaoSegundoGrau($raizPositiva, $raizNegativa);
    }
}
