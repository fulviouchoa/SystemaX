<?php
$servidor="localhost";
$usuario ="root";
$senha ="";
$banco ="xsystem";

$connect= mysqli_connect($servidor,$usuario,$senha,$banco);
    if(mysqli_connect_errno()){
        die("Erro do conexao!");
    }else{
    
    }


?>