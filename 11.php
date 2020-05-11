<?php

/*
Faça um algoritmo em PHP que receba por URL uma string e:
a.	verifique se foi recebido algo, ou seja, diferente de vazio.
b.	verifique se a string possui mais que dois caracteres
c.	converta essa string para minusculo;
d.	remova qualquer tipo de espaço;
e.	crie um diretório com o nome dessa string;
f.	defina as permissões desse novo diretório para 0777
*/

$diretorio = $_GET['diretorio'];
if(!empty($diretorio)){
    $totalChars = strlen($diretorio);
    if($totalChars>2){
        $diretorio = strtolower($diretorio);//convertendo para minusculo;
        $diretorio = str_replace(' ','',$diretorio);//removendo espços da string;
        if(is_dir($diretorio)){
            echo 'O diretório <b>'.$diretorio.'</b> já existe.';
        }else{
            $create = mkdir($diretorio,0777);
            if($create==true){
                echo 'Diretório criado com sucesso: <b>'.$diretorio.'</b>';
            }else{
                echo 'Falha ao criar o diretório';
            }
        }
    }else{
        echo 'O diretório deve ter pelo menos 3 letras';
    }
}else{
    echo 'Digite um nome para o diretório.';
}