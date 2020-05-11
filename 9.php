<?php
/*Faça um algoritmo em PHP que receba por URL uma string, encontre o número total de caracteres desta e imprima todos os números que existem entre 0 e o número total de letras, exemplo:
•	string = “Gil Eduardo de Andrade”
•	total_caracter = 22
•	Imprime: 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21
*/

$string = $_GET['string'];
if(!empty($string)){
    $totalChars = strlen($string);
    echo "Total de letras: ".$totalChars;
    echo "<br>";
    for($x=1;$x<$totalChars;$x++) {
        echo $x;
        echo ' ';
    }
}else{
    echo 'Digite um nome.';
}