<?php
include('../formularios/conexao/connect.php');

SESSION_START();

if(!isset($_SESSION["user_portal"])){
    header("Location:../formularios/login.php");
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../formularios/estilos/style.css">
    <title>Home</title>
</head>
<body>

    <div class="container">
        <?php
        //iniciando a saudacao
            include_once('../formularios/incluir/topo.php');
        ?>
        <div class="form-image">
            <img src="../formularios/imagens/logo.png">
        </div>
       
       
    

        <div class="form">
       
        <div class="menu">
            <nav>
                <ul>
                    <li><a href=""><img src="../formularios/icones/home.png">&nbsp;Home</a></li>
                    <li><a href="../formularios/index.php"><img src="../formularios/icones/usuariopeq.png">&nbsp;Cadastro de Usuários</a></li>
                    <li><a href="../formularios/index2.php"><img src="../formularios/icones/cliente.png">&nbsp;Cadastro de Clientes</a></li>
                    <li><a href="../formularios/servico.php"><img src="../formularios/icones/os.png">&nbsp;Serviços</a></li>
                    <li><a href="../formularios/pesquisar.php"><img src="../formularios/icones/pesquisar.png">&nbsp;Pesquisar Clientes</a></li>
                    <li><a href="">Contatos</a></li>
                </ul>
            </nav>
        </div>
        </div>
       
        
        
    </div>
    

</body>
</html>