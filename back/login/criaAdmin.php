<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Perfil Funcionário</title>
</head>
<body>
    <?php include_once 'cabecalho.php'?>
    <h1>Cadastro de Funcionário</h1>
    <hr>
    <form action="usuarioAdmin.php" method="post">
        Nome do Funcionário Admin <br>
        <input type="text" name="nome"> <br>
        Senha <br>
        <input type="password" name="senha"> <br>
        <input type="submit" value="Cadastrar">
    </form> 
    <a href="index.php">Voltar</a>   
</body>
</html>