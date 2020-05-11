<?php 

/*
12.	Faça um algoritmo em PHP que receba por URL uma string e:
a.	verifique se foi recebido algo, ou seja, diferente de vazio.
b.	verifique se a string possui mais que dois caracteres
c.	converta essa string para minusculo;
d.	remova qualquer tipo de espaço;
e.	verifique se existe um diretório com o mesmo nome da string:
i.	caso exista remova o diretório e apresente uma mensagem de sucesso
ii.	caso não exista apenas exiba uma mensagem de erro.

*/

$diretorio = $_GET['diretorio'];
if(!empty($diretorio)){
    $totalChars = strlen($diretorio);
    if($totalChars>2){
        $diretorio = strtolower($diretorio);//convertendo para minusculo;
        $diretorio = str_replace(' ','',$diretorio);//removendo espços da string;
        if(is_dir($diretorio)){
            $delete = rmdir($diretorio);
            if($delete){
                echo 'O diretório <b>'.$diretorio.'</b> foi apagado com sucesso.';
            }else{
                echo 'O diretório <b>'.$diretorio.'</b> não foi apagado.';
            }
        }else{
            echo 'O diretório <b>'.$diretorio.'</b> não existe.';
        }
    }else{
        echo 'O diretório deve ter pelo menos 3 letras';
    }
}else{
    echo 'Digite um nome para o diretório.';
}
