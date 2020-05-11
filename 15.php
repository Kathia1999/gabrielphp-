<?php

/*
Faça um algoritmo que receba por URL uma string e:
a.	exiba a string em texto plano;
b.	exiba a string em forma de HASH 512
*/

$string = $_GET['string'];
echo 'Digitado:'.$string;
echo '<br>';
echo 'Hash:'.hash('sha512',$string.'-968574732343ddddsss*');