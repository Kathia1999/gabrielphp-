<?php

/*
Faça um algoritmo que receba por URL um texto e uma letra:
a.	verifique se essa letra existe no texto, caso contrário exiba um erro
b.	exiba em tela qual é a posição da letra dentro do texto

*/

$letra = $_GET['letra'];
$frase = $_GET['frase'];

echo 'Letra: '.$letra;
echo '<br>';
echo 'Frase: '.$frase;
echo '<br>';
$buscaLetra = strpos($frase,$letra);
if($buscaLetra===false){
    echo 'Letra não encontrada na frase.';
}else{
    echo 'Letra encontrada na posição:'.$buscaLetra;
}