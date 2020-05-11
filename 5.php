<?php

/*Faça um algoritmo em PHP que receba por URL quatro notas de um aluno, 
calcule e imprima a média aritmética das notas e a mensagem de aprovado para média superior ou igual a 7.0 
ou a mensagem de Exame para média inferior a 7.0 
e maior ou igual a 5.0 ou a mensagem de Reprovado para média menor que 5.0.
Todas as notas repassadas por URL devem ser numéricas entre ZERO e DEZ. */

$nota1 = $_GET ['nota1'];
$nota2 = $_GET ['nota2'];
$nota3 = $_GET ['nota3'];
$nota4 = $_GET ['nota4'];

//criamos uma função para não precisar escrever todos os testes da nota para cada variável

function isValidNote($nota){
    if($nota!=""){
        if(is_numeric($nota)){
            if($nota>=0	&& $nota<=10){
                return true;
            }
        }
    }
	return false;
}

if(isValidNote($nota1) && isValidNote($nota2) && isValidNote($nota3) && isValidNote($nota4)){
	$media = ($nota1+$nota2+$nota3+$nota4)/4;
	echo "Média: $media <br>";
	if($media>=7){
		echo 'Aprovado';
	}elseif($media>=5){
		echo 'Em exame';
	}else{
		echo 'Reprovado';
	}
}else{
	echo 'Uma das notas digitadas é inválida.';
}