<?php

/*
Faça um algoritmo PHP que receba por URL uma string, exiba essa string quebrando linha a cada 5 caracteres, veja exemplo:
•	Entrada = O SENAC é a melhor escola técnica.
•	Saída: O SEN
AC é a mel
*/

$string = $_GET['string'];
echo 'Digitado:'.$string.'<br>';
echo implode('<br>',str_split($string,5));
