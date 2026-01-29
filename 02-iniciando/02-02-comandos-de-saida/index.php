<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

echo "<p>Olá mundo!", " ", "<span class='tag'>#BoraProgramar</span>", "</p>";
$hello = "Olá mundo!";
$code = "<span class='tag'>#BoraProgramar</span>";
echo "<p>$hello</p>";
echo '$hello'; // Usar aspas duplas para passar o valor da variavel

$day = "dia";
echo "<p>Faltam 1 $day para a apresentação</p>"; // Variavel não segura
echo "<p>Faltam 2 {$day}s para a apresentação</p>"; // Variavel protegida usando {}

echo "<h3>{$hello}</h3>";
echo "<h4>{$hello} {$code}</h4>";

echo "<h3>" . $hello . " " . $code . "</h3>";
?>
<h4><?= $hello; ?> <?= $code; ?></h4> // ?= é uma tag para diminuir o comando que antes seria < ?php echo e é usada no HTML para não misturar com o PHP

<?php
/**
* [ print ] https://php.net/manual/pt_BR/function.print.php
*/
fullStackPHPClassSession("print", __LINE__);

// Aqui vão alguns exemplos onde podemos usar o print no PHP

// print $hello, $code; O print não é permitido usar ,
print $hello;
print $code;
print "<h3>{$hello} {$code}</h3>"; 

/**
* [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
*/
fullStackPHPClassSession("print_r", __LINE__);

$array = [
    "company" => "UpInside",
    "course" => "FSPHP",
    "class" => "Comandos de saída" // Essa porra toda é um vetor, parece um array comum, mas não é. Nas próximas aulas ele irá ensinar exatamente o que é.
];

print_r($array); // Para dar um print, precisa ser o print_r que é para vetor/array
echo "<pre>", print_r($array, true), "</pre>"; // Esse <pre></pre> é uma tag HTML para formatação

/**
* [ printf ] https://php.net/manual/pt_BR/function.printf.php
*/
fullStackPHPClassSession("printf", __LINE__);

// Isso vai ser usado para dar saída a uma variável formatada

$article = "<article><h1>%s</h1><p>%s</p></article>"; // O %s serve para demarcar onde vai ser formatado
$title = "{$hello} {$code}";
$subtitle = "Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor";
printf($article, $title, $subtitle);

/**
* [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
*/
fullStackPHPClassSession("vprintf", __LINE__);

// Serve para formatar saídas de array/vetor
$company = "<article><h1>Escola %s</h1><p>Curso <b>%s</b></p><p>Aula <b>%s</b></p></article>";
vprintf($company, $array);

/**
* [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
*/
fullStackPHPClassSession("var_dump", __LINE__);

// Serve para debugar nosso código
var_dump($array); // Pode ser usado com mais valores colocando apenas uma , e o nome da próxima variavel