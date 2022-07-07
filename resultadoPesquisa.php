<?php
include('../formularios/conexao/connect.php');
SESSION_START();

if(!isset($_SESSION["user_portal"])){
    header("Location:../formularios/login.php");
}

$clientes = "SELECT * ";
$clientes .= " FROM cadastro_clientes ";
    if(isset($_POST['pesquisa'])){
        $nome_cliente = $_POST['pesquisa'];
        $clientes .= " WHERE nome LIKE '%{$nome_cliente}%' ";
    }
$resultado =mysqli_query($connect,$clientes);
    if(!$resultado){
        die("Erro na Pesquisa!");

    }
?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../formularios/estilos/style.css">
        <title>Resultado Pesquisa</title>
    </head>
    <body>
    <div class="container">
    <?php
        //iniciando a saudacao
            include_once('../formularios/incluir/topo.php');
        ?>

        <div class="form-image">
            <img src="../formularios/imagens/resultado.png">
        </div>
        <div class="form">
        <div class="form-header">
                <div class="title">
                <h1>Resultado Pesquisa</h1>
                </div>
            <div class="login-button">
            <button class="btnvoltar"><a href="../formularios/pesquisar.php">Voltar</a></button>
            </div>

           
        
        
        </div>
        <div class="clientes">
        <?php 
                while($linha=mysqli_fetch_assoc($resultado)){

            ?>
            
                    <ul>
                        <li><strong>Nome:</strong> <?php echo $linha['nome']; ?></li>
                        <li><strong>Data de Aniversário:</strong> <?php echo $linha['dataAni']; ?></li>
                        <li><strong>E-mail:</strong> <?php echo $linha['email']; ?></li>
                        <li><strong>Fone:</strong> <?php echo $linha['fone']; ?></li>
                        <li><strong>Veículo:</strong> <?php echo $linha['veiculo']; ?></li>
                        <li><strong>Placa:</strong> <?php echo $linha['placa']; ?></li>
                    </ul>
                    <div class="alter">
                    <a href="../formularios/alterarCliente.php?codigo=<?php echo $linha['id']; ?>"><img src="../formularios/icones/alterar1.png" alt="Alterar"></a>
                    </div>
                    <div class="excluir">
                    <a href="../formularios/excluirCliente.php?codigo=<?php echo $linha['id']; ?>"><img src="../formularios/icones/excluir1.png" alt="Excluir"></a>
                    </div>
                    <hr>
            
            <?php
                }
            ?>
    
    
    </div>
    </div>
    </body>


</html>