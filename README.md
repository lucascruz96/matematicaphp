# MatematicaPHP

Biblioteca de funções matemáticas.


## Especificações

### Requisitos

- [PHP >= 7.0](https://www.php.net/releases/7_0_0.php) ou superior.
- [Composer](https://getcomposer.org/) (caso queira executar os testes automáticos).

### Dependências

 - [PHPUnit 6](https://phpunit.de/getting-started/phpunit-6.html) (para execução dos testes).

### Execução

1. Faça o clone do projeto com `git clone https://github.com/lucascruz96/matematicaphp`.
2. Acesse a pasta do projeto e execute o comando `composer install` para instalar as dependências.

### Testes

Para execução dos testes, acesse a raiz do projeto e execute um dos comandos:

- Modo simplificado: `./vendor/bin/phpunit tests `
- Modo detalhado: `./vendor/bin/phpunit tests --color --stop-on-failure --debug -v`

## Modulos

### Equações

Modulo responsável pelas equações matemáticas.

#### public static function resolverEquacaoSegundoGrau(float $a, float $b, float $c)

Função para calcular as raízes de uma equação de segundo grau.
Recebe os coeficientes da equação por parametro e retorna um array contendo o resultado das raizes.

Array de retorno `['+' => $raizPositiva, '-' => $raizNegativa]`.
