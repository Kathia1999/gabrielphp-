<?php

/*
13.	Faça um algoritmo que receba por URL um número com ponto flutuante(2.333):
a.	exiba o número aredondado para o valor maior mais próximo:
i.	caso o número seja 2.333 deve exibir 3
b.	exiba o número aredondado para o valor menor mais próximo:
i.	caso o número seja 2.333 deve exibir 2

*/

$numero = $_GET['numero'];
if(is_numeric($numero)){
    echo 'Maior inteiro mais próximo:'.ceil($numero);
    echo '<br>';
    echo 'Menor inteiro mais próximo:'.floor($numero);
}