<?php
include('../formularios/conexao/connect.php');
SESSION_START();

if(isset($_POST['nome'])){
    $usuario = $_POST['nome'];
    $senha = $_POST['senha'];
    //busca no banco e dados
    $login="SELECT * FROM usuario WHERE nome='{$usuario}' AND senha='{$senha}'";
    $acesso=mysqli_query($connect,$login);
    if(!$acesso){
        die("Error de usuário ou senha!");
    }

    $info = mysqli_fetch_assoc($acesso);
if(empty($info)){
    $mensagem = "Login sem sucesso!";
}else{
    $_SESSION['user_portal'] = $info['id'];
    header("Location:../formularios/home.php");
}

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../formularios/estilos/style.css">
    <title>Tela Login XSYSTEM</title>
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="../formularios/imagens/login.png">
        </div>
    
    <div class="form">
        <form action="../formularios/login.php" method="post">
            <div class="form-header">
                <div class="title">
                <h1>Login</h1>
                </div>
           
            </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Usuário</label>
                        <input type="text" name="nome" id="nome" placeholder="usuario" required>
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input type="text" name="senha" id="senha"  placeholder="Senha" required>
                    </div>
                    </div>

                     <div class="login-button">
                        <input type="submit" class="btn" value="Login">
                    </div>
                    
        </form>
    </div>

</body>
</html>