<?php 
    include('../formularios/conexao/connect.php');
    session_start();
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
    <title>Formulario de Cadastro de Clientes</title>
</head>
<body>
    <div class="container">
        <?php
        //iniciando a saudacao
            include_once('../formularios/incluir/topo.php');
        ?>

        <div class="form-image">
       
            <img src="../formularios/imagens/pesquisando.png">
        </div>

       
    
    <div class="form">
        <form action="../formularios/resultadoPesquisa.php" method="post">
            <div class="form-header">
                <div class="title">
                <h1>Pesquisar Cliente</h1>
                </div>
            <div class="login-button">
            <button class="btnvoltar"><a href="../formularios/home.php">Voltar</a></button>
            </div>
            </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="pesquisa">Pesquisar Cliente</label>
                        <input type="search" name="pesquisa" id="pesquisa"  placeholder="Digite o nome do cliente" autofocus>
                    </div>
                        <div class="pesquisa">
                        <input type="submit" value="Pesquisar">
                        </div>
                    
                </div>
                
                        
        
       
        </form>
        
        <?php //required('../formularios/consulta.php');?>
    
       <!-- <div class="resultado">
        <?php // echo $linha['fistname']; ?>
        <?php // echo $linha['lastname']; ?>
        <?php // echo $linha['email']; ?>
        <?php // echo $linha['number']; ?>//
        </div>-->
    </div>
    </div>
</body>
</html>