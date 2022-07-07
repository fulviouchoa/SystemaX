<?php
include('../formularios/conexao/connect.php');

SESSION_START();

if(!isset($_SESSION["user_portal"])){
    header("Location:../formularios/login.php");
}

if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
    $dataAni = $_POST['dataAni'];
    $email = $_POST['email'] ;
    $fone= $_POST['fone'];
    $veiculo= $_POST['veiculo'] ;
    $placa = $_POST['placa'];

    $result= mysqli_query($connect, "INSERT INTO cadastro_clientes(nome,dataAni,email,fone,veiculo,placa) VALUES ('$nome','$dataAni','$email','$fone','$veiculo','$placa')");
    if(!$result) {
   die("Erro no Cadastro");
    }else{
        $certo="Cadastrado com Sucesso!";
    }

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
            <img src="../formularios/imagens/cliente.php">
        </div>
    
    <div class="form">
        <form action="../formularios/index2.php" method="post">
            <div class="form-header">
                <div class="title">
                <h1>Cliente</h1>
                </div>
            <div class="login-button">
            <button class="btnvoltar"><a href="../formularios/home.php">Voltar</a></button>
            </div>
            </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Cliente</label>
                        <input type="text" name="nome" id="nome" placeholder="Digite o nome do cliente" autofocus required>
                    </div>

                    <div class="input-box">
                        <label for="dataAni">Data de Nascimento</label>
                        <input type="date" name="dataAni" id="dataAni" required>
                    </div>

                     <div class="input-box">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="Digite o E-mail do cliente" required>
                    </div>

                    <div class="input-box">
                        <label for="fone">Celular</label>
                        <input type="tel" name="fone" id="fone" placeholder="(xx) xxxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="veiculo">Veículo</label>
                        <input type="text" name="veiculo" id="veículo"  placeholder="Digite o modelo do veículo" required>
                    </div>

                    <div class="input-box">
                        <label for="placa">Placa</label>
                        <input type="text" name="placa" id="placa"  placeholder="Digite a placa do veículo" required>
                    </div>
                    
                </div>
                
        
                    

                        <div class="continue-button">
                        <input type="submit" value="Cadastrar">
                        </div>

                        <div>
<?php
    if(isset($certo)){
?>
    <p class="certo"><?php echo $certo ?></p>
<?php
    }
?>   

                        </div>
        
       
        </form>
    </div>
    </div>
</body>
</html>