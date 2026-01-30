<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
echo fullStackPHPClassName("02.05 - Operadores na prática");

/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
fullStackPHPClassSession("atribuição", __LINE__);

$operatorA = 5;
$operators = [
    "a += 5" => ($operatorA += 5),
    "a -= 5" => ($operatorA -= 5),
    "a *- 5" => ($operatorA *= 5),
    "a /= 5" => ($operatorA /= 5)
];
var_dump($operators);


$incrementA = 5;
$incrementB = 5;
$increment = [
    "pós-incremento" => $incrementA++, // Soma mais um 
    "res-incremento" => $incrementA, // Resultado
    "pré-incremento" => ++$incrementA, // Soma mais um no resultado do último incremento
    "pós-decremento" => $incrementB--, // Diminui um
    "res-decremento" => $incrementB, // Resultado do decremento
    "pré-decremento" => --$incrementB, // Diminui mais um
];
var_dump($increment);

/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */
fullStackPHPClassSession("comparação", __LINE__);

// Cada comparação aqui é como se estivéssemos perguntando ao PHP se a informação é verdadeira. Por exemplo: $relatedA = 5; $relatedB = "5"; $relatedA == $relatedB são diferentes por causa do tipo de dado passado, mas ainda irá retornar true por analisar somente o valor e não o tipo de dado. Se fosse $relatedA === $relatedB retornaria falso por ser diferente os tipos de dados.

$relatedA = 5;
$relatedB = "5";
$relatedC = 10;
$related = [
    "a == b" => ($relatedA == $relatedB),
    "a === b" => ($relatedA === $relatedB),
    "a != b" => ($relatedA != $relatedB),
    "a !== b" => ($relatedA !== $relatedB),
    "a > c" => ($relatedA > $relatedC),
    "a < c" => ($relatedA < $relatedC),
    "a >= b" => ($relatedA >= $relatedB),
    "a >= c" => ($relatedA >= $relatedC),
    "a <= c" => ($relatedA <= $relatedC),
];
var_dump($related);

/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("lógicos", __LINE__);

$logicA = true;
$logicB = false;
$logic = [
    "a && b" => ($logicA && $logicB),
    "a || b" => ($logicA || $logicB),
    "a" => ($logicA),
    "! a" => (!$logicA), // Esse ! antes de $logicA pergunta se ela *NÃO* existe. Retorna false pois o $logicA existe
    "! b" => (!$logicB),
];
var_dump($logic);

/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);

$calcA = 5;
$calcB = 10;
$calc = [
    "a + b" => ($calcA + $calcB),
    "a - b" => ($calcA - $calcB),
    "a * b" => ($calcA * $calcB),
    "a / b" => ($calcA / $calcB),
    "a % b" => ($calcA % $calcB),
];
var_dump($calc);
