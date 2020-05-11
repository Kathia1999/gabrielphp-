<?php

/*
Faça um algoritmo em PHP que receba por URL dois números, inicial e final, 
exiba todos os números pares que estão no intervalo dos dois números. Os dois campos devem ser de preenchimento
 obrigatório e numérico, caso contrário exiba um erro.
 */

 
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

if(is_numeric($numero1) && is_numeric($numero2)){
   for($x=$numero1;$x<=$numero2;$x++) {
       if ($x % 2 == 0){
           echo $x;
           echo '<br>';
       }
   }
}else{
    echo 'Números inválidos';
}