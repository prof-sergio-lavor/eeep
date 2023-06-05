<?php 
    $meupc="localhost";
    $usuario="root";
    $senha="";
    $banco="eeep";

    $conexao = mysqli_connect($meupc,$usuario,$senha,$banco);
        if(!$conexao){
            echo"erro ao conectar".mysqli_connect_error();
        }
        else{
            echo"sucesso";
        }

?>