<?php
    if(isset($_SESSION['user_portal'])) {
            $user = $_SESSION['user_portal'];

        //buscando usuario no Banco de Dados
    $saudacao = "SELECT nome FROM usuario WHERE id = {$user}";
    $saudacao_login = mysqli_query($connect,$saudacao);
        // teste de consulta
        if(!$saudacao_login){
            die("Falha no banco de dados");
        }

        $saudacao_login = mysqli_fetch_assoc($saudacao_login);
        $nome = $saudacao_login["nome"];
?>

        <div id="header_saudacao">
            <h5>Seja bem Vindo, <?php echo $nome ?> | <a href="../formularios/logout.php">Sair</a></h5>
        </div>

<?php

    }

?>