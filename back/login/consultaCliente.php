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
    <h1>Consulta dos Clientes</h1>
    <hr>
    <?php
        include_once '../logica/conexao.php';
        $consulta = "SELECT * FROM cliente ORDER BY idCliente ASC;";
        $verifica = $con->query($consulta) or die($con->error); 

        echo"<table class='table table-striped'>";
    ?>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Sexo</th>
            <th>Check-In</th>
            <th>Check-Out</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
       
        <?php
        while($dado = $verifica->fetch_array()) {
            echo"<tr>";
            echo"<td>".$dado["idCliente"]."</td>";
            echo"<td>".$dado["nome"]."</td>";
            echo"<td>".$dado["email"]."</td>";
            echo"<td>".$dado["telefone"]."</td>";
            echo"<td>".$dado["sexo"]."</td>";
            echo"<td>".$dado["dtentrada"]."</td>";
            echo"<td>".$dado["dtsaida"]."</td>";
          
            echo"<td><a href='editaCliente.php?id=".$dado["idCliente"]."&operacao=editar'><button class='btn btn-success'>Editar</button></a></td>";
            echo"<td><a href='excluir.php?id=".$dado["idCliente"]."&operacao=excluir&modo=cliente'><button class='btn btn-danger'>Excluir</button></a></td>";
            
            echo"</tr>";
            
        }
        //funçao p formatar a data date("d/m/Y")
        
        
        echo"</table>";
        
    ?>
    <a href="index.php">Voltar</a>
</body>
</html>