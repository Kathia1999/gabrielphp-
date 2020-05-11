<?php
/* Faça um algoritmo em PHP que receba por URL um número e o sistema sorteia outro,
verifique se o número sorteado é igual ao da URL, se sim exiba "Você acertou o número". Exiba também o número digitado
e o número sorteado. Utilize a função rand (). Verifique se o que está na URL é um número. 
*/

 $numero = $_GET ['numero'];
 
 if (is_numeric($numero)) {
     $sorteio = rand(1,10); 
     if ($sorteio==$numero) {
         echo 'Você acertou o número. Sorteado '.$sorteio.'; Digitado: ' .$numero; 
     }else{
        echo 'Você errou o número. Sorteado ' .$sorteio.'; Digitado: ' .$numero; 
     }
 }else{
     echo 'Não é um número válido';
 }