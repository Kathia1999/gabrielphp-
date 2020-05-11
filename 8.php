<?php

/*Faça um algoritmo em PHP que receba por URL o seu nome e o sistema conte quantas letras tem seu nome e exibe em tela, 
exiba também o nome em ordem inversa e converta todas as letras para maiúsculas.Obrigue o nome possuir no mínimo 5 letras.
 */

$nome = $_GET['nome'];
if(!empty($nome)){
    $totalChars = strlen($nome);
    if($totalChars>=5){
        echo "Nome: $nome";
        echo "<br>";
        echo "Nome inverso: ".strrev($nome);
        echo "<br>";
        echo "Nome em maiúsculo: ".strtoupper($nome);
        echo "<br>";
        echo "Total de letras: ".$totalChars;
    }else{
        echo 'O nome deve ter pelo menos 5 letras';
    }
}else{
    echo 'Digite um nome.';
}