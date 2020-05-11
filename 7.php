<?php
/* Faça um algoritmo PHP que receba por URL dois valores quaisquer e imprime todos os valores intermediários a ele, veja exemplo:
•Primeiro Valor = 5
•Segundo Valor = 15
•Imprime: 6 7 8 9 10 11 12 13 14
*/

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
if(is_numeric($numero1) && is_numeric($numero2)){
    for($x=$numero1;$x<=$numero2;$x++) {
        echo $x;
        echo '<Br>';
    }
}else{
    echo 'Números inválidos';
}