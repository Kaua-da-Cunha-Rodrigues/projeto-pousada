<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina administração</title>
</head>
<body>
    <h1>Visualização dos quartos e reservas</h1>
    <?php
        include_once '../logica/conexao.php';
        $consulta = "SELECT * FROM quartos ORDER BY idquarto ASC;";
        $verifica = $con->query($consulta) or die($con->error); 

        echo"<table border='3'>";
        while($dado = $verifica->fetch_array()) {
            echo"<tr>";
            echo"<td>".$dado["idquarto"]."</td>";
            echo"<td>".$dado["nome"]."</td>";
            echo"<td>".$dado["estado"]."</td>";
            echo"<td>".$dado["dtreserva"]."</td>";
            echo"<td><a href='edita.php?id=".$dado["idquarto"]."&operacao=editar'>Editar</a></td>";
            echo"</tr>";
            
            
        }
        echo"</table>";
    ?>
</body>
</html>