<?php
 /* Faça um algoritmo em PHP que receba por URL um número e exiba o antecessor e o sucessor desse número.
 Verifique se o que está na URL é um número.*/ 
 

 $numero = $_GET ['numero'];
 
 if (is_numeric($numero)){
     echo $numero + 1;
     echo '<br>';
     echo $numero-1;
 }else{
     echo 'Não é um número válido';
 }