<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

$userFirstName = "Luiz";
$userLastName = "Blume";
echo "<h3>{$userFirstName} {$userLastName}</h3>";
// Escolher apenas UM dos nomes
$user_first_name = $userFirstName;
$user_last_name = $userLastName;
echo "<h3>{$user_first_name} {$user_last_name}</h3>";

$userAge = "18";
echo "<h3>{$userFirstName} {$userLastName} <span class='age'>tem {$userAge} anos.</span></h3>";
// É de extrema importância a variável estar declarada antes de ser utilizada, se não apresentará um erro undefined. Essa anotação é importante para lembrar disso, pois no JS tanto faz a ordem, ele irá funcionar

// Variável variável (variável com valor variado)

$company = "UpInside";
$$company = "Treinamentos"; // Ele armazena o valor da primeira variável e já põe na segunda
echo "<h3>{$company} {$UpInside}</h3>"; // Quase não será usado em uma aplicação real

$calcA = 10;
$calcB = 20;
// $calcB = $calcA; // O Valor de calcB vai ser o mesmo de A
$calcB = &$calcA; // Estou referenciando esse valor para sempre, se o calcA mudar valor após essa linha, ambos vão mudar e vice versa
var_dump([
    "a" => $calcA,
    "b" => $calcB
]);


/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

$true = true;
$false = false;

var_dump($true, $false);
$bestAge = ($userAge > 50);
var_dump($bestAge);

$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;
var_dump($a, $b, $c, $d, $e);

if ($a || $b || $c || $d || $e) {
    var_dump(true);
}
else {
    var_dump(false);
}

/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = "<article><h1>Um Call User Function</h1></article>";
$codeClear = call_user_func("strip_tags", $code); // Função callback usada para limpar todas as tags que tem 
var_dump($code, $codeClear);

$codeMore = function ($code) {
    var_dump($code);
};
$codeMore("#BoraProgramar"); // Isso é como se fosse funções anônimas

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "Olá Mundo!";
$array = [$string];
$object = new StdClass();
$object->hello = $string;
$null = null;
$int = 10;
$float = 1.21213;
var_dump([
    $string,
    $array,
    $object,
    $null,
    $int,
    $float
]);