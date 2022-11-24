<?php
echo 'Olá Barnabé.... o ano está acabando .......';
echo '<br>';
echo '<h1>Higor Muniz</h1>';
/*
http://localhost/php/php/index.php
*/

print('<h2> Quinta-Feira</h2>');
print_r('<h2> Sexta-Feira</h2>');


/* Comando que exibe mensagem na tela:
echo
print
print_r
*/

$nome = 'Higor'; // Tipo Variável: text
$idade = 17;     // Tipo Variável: number
$altura = 1.78;   // Tipo Variável: number
$fumante = false;   // Tipo Variável: boolean
// true - verdadeiro
// false - falso

echo '<br>';
echo $nome . '<br>';
echo $idade . '<br>';
echo $altura . '<br>';
echo $fumante . '<br>';
echo 'Olá ' . $nome . ' você tem ' . $idade . ' anos';


echo '<br>';
echo gettype($nome) . '<br>';
echo gettype($idade) . '<br>';
echo gettype($altura) . '<br>';
echo gettype($fumante) . '<br>';

// o comando gettype mostra o tipo de dados usado na variável.


echo '<br>';
echo '<h1> Operações </h1>';

$n1 = 10;
$n2 = 2;

echo $n1 + $n2 . '<br>';
echo $n1 - $n2 . '<br>';
echo $n1 * $n2 . '<br>';
echo $n1 / $n2 . '<br>'; 
echo $n1 % $n2 . '<br>';   //sobra de valor
echo $n1 ** $n2 . '<br>';  //exponensiação
?>