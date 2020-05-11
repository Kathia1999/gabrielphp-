<?php

/*
Faça um algoritmo que receba duas strings por URL 
e exiba em tela o total de similaridade entre as duas em porcentagem.
*/

$string1 = $_GET['string1'];
$string2 = $_GET['string2'];
similar_text($string1,$string2,$porcentagem);
echo "<b>$string1</b> é <b>$porcentagem%</b> parecida com <b>$string2</b>";