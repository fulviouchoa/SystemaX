<?php

// inserir cliente no banco de dados//

if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
    $datanasc = $_POST['dataAni'];
    $email = $_POST['email'] ;
    $fone= $_POST['fone'];
    $veiculo= $_POST['veiculo'] ;
    $placa = $_POST['placa'];

    $inserir="INSERT INTO cadastro_clientes (nome,dataAni,email,fone,veiculo,placa) VALUES ('$nome','$datanasc','$email','$fone','$veiculo','$placa')";
    $operacao_inserir=mysqli_query($connect,$inserir);
        if(!$operacao_inserir){
            die("Erro no Cadastro");
            
        
        }

}

?>