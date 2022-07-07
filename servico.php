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
        <form action="#">
            <div class="form-header">
                <div class="title">
                <h1>Serviço</h1>
                </div>
            <div class="login-button">
            <button class="btnvoltar"><a href="../formularios/home.php">Voltar</a></button>
            </div>
            </div>
                <div class="input-group">

                     <div class="input-box">
                        <label for="fistname">Cliente</label>
                        <input type="text" name="fistname" id="fistname" placeholder="Digite o nome do cliente" maxlength="80" autofocus required>
                    </div>

                    <div class="input-box">
                        <label for="data">Data do serviço</label>
                        <input type="date" name="data" id="data" required>
                    </div>

                     <div class="input-box">
                        <label for="veiculo">Modelo do Veículo</label>
                        <input type="text" name="veiculo" id="veiculo" placeholder="Digite o modelo do veículo" required>
                    </div>

                    <div class="input-box">
                        <label for="ano">Ano do Veículo</label>
                        <input type="text" name="ano" id="ano" placeholder="ex: 1990"  maxlength="4" required>
                    </div>

                     <div class="input-box">
                        <label for="placa">Placa do Veículo</label>
                        <input type="text" name="placa" id="placa" placeholder="placa do veículo"  maxlength="7" required>
                    </div>

                    <div class="input-box">
                        <label for="telefone">Celular</label>
                        <input type="tel" name="number" id="number" placeholder="(xx) xxxxx-xxxx" maxlength="15" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-Mail</label>
                        <input type="email" name="email" id="email"  placeholder="e-mail do cliente" required>
                    </div>

                    <div class="input-box">
                        <label for="servico">Orçamento</label>
                        <textarea  name="servico" id="servico" row="5" placeholder="  Descreva o serviço" required></textarea>
                    </div>

                     <div class="input-box">
                        <label for="valor">Valor do Orçamento</label>
                      <input type="text" name="valor" id="valor"  placeholder="R$:" required>
                    </div>

                    
                </div>
            

                    
                        
                

                        <div class="continue-button">
                        <input type="submit" value="Salvar Orçamento" name="cadastrar" onclick="document.getElementById('mens').style.display='block'">
                        <p id="mens" style="display: none">Cadastrado com Sucesso!</p>
                        </div>
        
       
        </form>
    </div>
    </div>
   
</body>
</html>