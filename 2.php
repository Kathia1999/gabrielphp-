<?php

/* Faça um algoritmo em PHP que receba por URL dois números, exiba a soma, a multiplicação 
e a divisão dos dois números. Verifique se o que está na URL é um número.
*/

$numero1 = $_GET ['numero1'];
$numero2 = $_GET ['numero2'];

if (is_numeric($numero1) && is_numeric($numero2) ) {
    echo $numero1+$numero2;
    echo '<br>';
    echo $numero1/$numero2;
    echo '<br>';
    echo $numero1*$numero2;

}else{
    echo 'Números inválidos';
}