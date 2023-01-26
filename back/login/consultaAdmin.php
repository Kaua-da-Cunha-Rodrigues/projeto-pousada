<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Administração</title>
</head>
<body>
    <?php include_once 'cabecalho.php'?>
    <h1>Consulta dos Funcionários (Admin)</h1>
    <hr>
    <?php
        include_once '../logica/conexao.php';
        $consulta = "SELECT * FROM admin ORDER BY idAdmin ASC;";
        $verifica = $con->query($consulta) or die($con->error); 

        echo"<table class='table table-striped'>";
    ?>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Senha</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
            <!--Tentar esconder a senha da tabela depois -->
        <?php
        while($dado = $verifica->fetch_array()) {
            echo"<tr>";
            echo"<td>".$dado["idAdmin"]."</td>";
            echo"<td>".$dado["nome"]."</td>";
            echo"<td>".$dado["senha"]."</td>";
          
            echo"<td><a href='edita.php?id=".$dado["idAdmin"]."&operacao=editar'><button class='btn btn-success'>Editar</button></a></td>";
            echo"<td><a href='excluir.php?id=".$dado["idAdmin"]."&operacao=excluir'><button class='btn btn-danger'>Excluir</button></a></td>";
            
            echo"</tr>";
            
        }
        //funçao p formatar a data date("d/m/Y")
        
        
        echo"</table>";
        
    ?>
    <a href="index.php">Voltar</a>
</body>
</html>