<?php

/*
17.	Faça um algoritmo que receba um valor por URL e exiba em tela um tamanho fixo de 10 caracteres:
a.	caso o valor seja numérico, preencha a sua esquerda com zeros:
i.	ex: número 432 irá exibir em tela 0000000432
b.	caso o valor seja alfabético, preencha a sua direita com Z:
i.	ex: número Gabriel irá exibir em tela GabrielZZZ

*/

$value = $_GET['valor'];
if(is_numeric($value)){
    echo str_pad($value,10,'0',STR_PAD_LEFT);
}else{
    echo str_pad($value,10,'Z',STR_PAD_RIGHT);
}