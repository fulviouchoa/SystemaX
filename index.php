<?php
include('../formularios/conexao/connect.php');
//iniciando variavel de sessão
session_start();
if(!isset($_SESSION["user_portal"])){
    header("Location:../formularios/login.php");
}

// inserir usuario no banco de dados//
if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'] ;
    $senha= $_POST['senha'];
    $conf_senha= $_POST['conf_senha'] ;
   

    $result= mysqli_query($connect,"INSERT INTO usuario (nome,email,fone,senha,conf_senha) VALUES ('$nome','$email','$fone','$senha','$conf_senha')");
     if(!$result){
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
    <title>Formulario de Cadastro de Usuario</title>
</head>
<body>
      
    <div class="container">
    
        <?php
        //iniciando a saudacao
            include_once('../formularios/incluir/topo.php');
        ?>

        <div class="form-image">
            <img src="../formularios/imagens/cadastro.png">
        </div>
      
     
    <div class="form">
        <form action="../formularios/index.php" method="POST">
            <div class="form-header">
                <div class="title">
                <h1>Usuário</h1>
                </div>
            <div class="login-button">
            <button class="btnvoltar"><a href="../formularios/home.php">Voltar</a></button>
            </div>
            </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Primeiro Nome</label>
                        <input type="text" name="nome" id="nome" placeholder="Digite o seu primeiro nome" autofocus required>
                    </div>


                     <div class="input-box">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="Digite o seu E-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="fone">Celular</label>
                        <input type="tel" name="fone" id="fone" placeholder="(xx) xxxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha"  placeholder="Digite sua Senha" required>
                    </div>

                    <div class="input-box">
                        <label for="conf_senha">Confirme sua Senha</label>
                        <input type="password" name="conf_senha" id="conf_senha"  placeholder="Confirme sua Senha" required>
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