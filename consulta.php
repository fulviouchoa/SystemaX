<?php
include('../formularios/conexao/connect.php');

//Consulta a banco de dados//
$consulta_cliente = "SELECT * FROM cadastro_clientes";
    if(isset($_GET['nome'])){
        $nome_cliente=$_GET['nome'];
        $consulta_cliente .=" WHERE nome LIKE '%{$nome_cliente}%'";
    

    $cliente = mysqli_query($consulta_cliente,$connect);
    if(!$consulta_cliente){
        die("Erro na consulta");
    }else{
    
       
    }
  
        while($linha=mysqli_fetch_assoc($clientes)){
 
 
             ?>
             <ul>
                 <li class="listacli"><?php echo $linha['nome'] ?><a href="../formularios/alterar.php?codigo=<?php echo $linha['id']?>"><img class="menu" src="../formularios/icones/alterar.png">Alterar</a></li>
                 <li class="listacli"><?php echo $linha['dataAniv'] ?><a href="../formularios/excluir.php?codigo=<?php echo $linha['id']?>"><img class="menu" src="../formularios/icones/delete.png">Excluir</a></li>
                 <li class="listacli"><?php echo $linha['email'] ?></li>
                 <li class="listacli"><?php echo $linha['fone'] ?></li>
                 
             </ul>
             <?php
    }

    }

?>