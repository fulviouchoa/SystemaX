<?php
include_once('../formularios/conexao/connect.php');

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
        
    

            //objeto de alteração
        $alterar ="UPDATE cadastro_clientes ";
        $alterar .= " SET ";
        $alterar .=" nome ='{$nome}', ";
        $alterar .=" dataAni ='{$dataAni}', ";
        $alterar .=" email ='{$email}', ";
        $alterar .=" fone ='{$fone}', ";
        $alterar .=" veiculo ='{$veiculo}', ";
        $alterar .=" placa ='{$placa}' ";
        $alterar .=" WHERE id = {$id}";
        
        $operacao_alteracao=mysqli_query($connect,$alterar);
        if(!$operacao_alteracao){
            die("Erro na Alteração!");
        }else{
             header("Location:../formularios/resultadoPesquisa.php");
        }
        }



//consulta a tabela cadastro_cliente
    $cliente ="SELECT * FROM cadastro_clientes ";

    if(isset($_GET["codigo"])){
        $id = $_GET["codigo"];
        $cliente .= " WHERE id = {$id} ";
    }else{
        $cliente .=" WHERE id = 1 ";
    }

    $con_nome = mysqli_query($connect,$cliente);
    if(!$con_nome){
        die("Erro no Banco de Dados!");
    }else{
        $info_nome = mysqli_fetch_assoc($con_nome);
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../formularios/estilos/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Alterar Clientes</title>
    </head>
<body>
<a href="../formularios/home.php"><img src="../formularios/icones/alterar.png">Voltar</a>
    <div class="form">
      <form method="POST" action="../formularios/alterarCliente.php">
      <div class="form-header">
                <div class="title">
                <h1>Alterar Dados do Cliente</h1>
                </div>
                <div class="login-button">
            <button class="btnvoltar"><a href="../formularios/home.php">Voltar</a></button>
            </div>
            </div>
                <div class="input-group">
                <div class="input-box">
      <label class="texto" >Nome</label>
          <input type="text" class="textform" value="<?php echo $info_nome['nome'] ?>" name="nome">
        </div>

        <div class="input-box">
      <label class="texto" >Data de Aniversário</label>
          <input type="date" class="textform" value="<?php echo $info_nome['dataAni'] ?>" name="dataAni">
        </div>

        <div class="input-box">
        <label class="texto" >Email</label>
          <input type="email" class="textform" value="<?php echo $info_nome['email'] ?>" name="email">
        </div>

        <div class="input-box">
      <label class="texto"  >Telefone</label>
          <input type="tel" class="textform" value="<?php echo $info_nome['fone'] ?>" name="fone">
        </div>

        <div class="input-box">
      <label class="texto"  >Veículo</label>
          <input type="text" class="textform" value="<?php echo $info_nome['veiculo'] ?>" name="veiculo">
        </div>

        <div class="input-box">
      <label class="texto"  >Placa</label>
          <input type="text" class="textform" value="<?php echo $info_nome['placa'] ?>" name="placa">
        </div>
        <div class="input-box">
        <input type="hidden" name="id" value="<?php echo $info_nome['id'] ?>">
        </div>
        <div class="continue-button">
          <input type="submit" class="btn" name="login" value="Alterar">
        </div>  
        
      </form>
      </div>
      </div>
</body>
</html>
