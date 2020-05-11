<?php

/*
Faça um algoritmo em PHP que receba por URL um valor qualquer e imprima os valores de 0 até o valor recebido,exemplo:
•Valor recebido = 9
•Impressão do programa – 0 1 2 3 4 5 6 7 8 9
 */

$numero = $_GET['numero'];
for($x=0;$x<=$numero;$x++){
	echo $x;	
}