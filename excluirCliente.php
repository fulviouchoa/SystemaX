<?php
    include('../formularios/conexao/connect.php');

    //iniciar variavel de sessao
SESSION_START();

if(!isset($_SESSION["user_portal"])){
    header("Location:../formularios/login.php");
}
?>
<?php

if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
    $dataAni = $_POST['dataAni'];
    $email = $_POST['email'] ;
    $fone= $_POST['fone'];
    $veiculo= $_POST['veiculo'] ;
    $placa = $_POST['placa'];
    $id = $_POST['id'];
//excluir o cliente 


    $exclusao = "DELETE FROM cadastro_clientes WHERE id = {$id}";
    $con_exclusao = mysqli_query($connect,$exclusao);
        if(!$con_exclusao){
            die("Erro ao excluir!");
        }else{
            header("Location:../formularios/resultadoPesquisa.php");
        }

    }


// Consulta ao Banco de dados
    if (isset($_GET['codigo'])){
        $id = $_GET['codigo'];
    $cliente ="SELECT * FROM cadastro_clientes WHERE id = {$id}";
    $con_cliente = mysqli_query($connect, $cliente);
        if(!$con_cliente){
            die("Erro no Banco de Dados!");
        }
    }else{
    header("Location:../formularios/resultadoPesquisa.php");
    }

    $info_cliente = mysqli_fetch_assoc($con_cliente);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../formularios/estilos/style.css">
        <title>Tela de Exclusão</title>
    </head>
    <body>
    <a href="../formularios/home.php"><img src="../formularios/icones/alterar.png">Voltar</a>
    <div class="form">
      <form method="POST" action="../formularios/excluirCliente.php">
      <div class="form-header">
                <div class="title">
                <h1>Excluir Dados do Cliente</h1>
                </div>
                <div class="login-button">
            <button class="btnvoltar"><a href="../formularios/home.php">Voltar</a></button>
            </div>
            </div>
                <div class="input-group">
                <div class="input-box">
      <label class="texto" >Nome</label>
          <input type="text" class="textform" value="<?php echo $info_cliente['nome'] ?>" name="nome">
        </div>

        <div class="input-box">
      <label class="texto" >Data de Aniversário</label>
          <input type="date" class="textform" value="<?php echo $info_cliente['dataAni'] ?>" name="dataAni">
        </div>

        <div class="input-box">
        <label class="texto" >Email</label>
          <input type="email" class="textform" value="<?php echo $info_cliente['email'] ?>" name="email">
        </div>

        <div class="input-box">
      <label class="texto"  >Telefone</label>
          <input type="tel" class="textform" value="<?php echo $info_cliente['fone'] ?>" name="fone">
        </div>

        <div class="input-box">
      <label class="texto"  >Veículo</label>
          <input type="text" class="textform" value="<?php echo $info_cliente['veiculo'] ?>" name="veiculo">
        </div>

        <div class="input-box">
      <label class="texto"  >Placa</label>
          <input type="text" class="textform" value="<?php echo $info_cliente['placa'] ?>" name="placa">
        </div>
        <div class="input-box">
        <input type="hidden" name="id" value="<?php echo $info_cliente['id'] ?>">
        </div>
        <div class="continue-button">
          <input type="submit" class="btn" name="login" value="Excluir">
        </div>  
        
      </form>
      </div>
      </div>




    </body>
</html>