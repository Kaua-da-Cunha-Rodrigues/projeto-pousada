<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>projetointegrador</title>
</head>
<body>
 <h1>Bem vindo a </h1>
 <h3>Por favor, digite seu email e senha nos campos abaixo:</h3>
 <form action="gravar.php" method="post">
    Digite seu email: <br>
    <input type="hidden" name="tipoCadastro" value="1">
    <input type="text" name="nome" id="nome">
    <br>
    Digite sua senha: <br>
    <input type="password" name="senha" id="senha">
    <br>
    <input type="submit" value="Cadastrar">
 </form>


</body>
</html>

