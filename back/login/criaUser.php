<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>projetointegrador</title>
</head>
<body>
 <h1>Bem vindo ao hotel Ilhas de Angra</h1>
 <h3>Por favor, digite seu email e senha nos campos abaixo:</h3>
 
 <form action="gravar.php" method="post">
    Digite seu nome completo: <br>
    <input type="text" name="nome" id="nome">
    <br>
    Digite sua telefone: <br>
    <input type="number" name="tel" id="tel">
    <br>
    Digite o email: <br>
    <input type="email" name="email" id="email">
    Digite o seu sexo:
    <br>
    <input type="radio" name="sexo" value="masculino"> Masculino
    <input type="radio" name="sexo" value="feminino"> Feminino
    <input type="radio" name="sexo" value="naodeclarado"> Prefiro nao declarar
    <br>
    Data de check-in:
    <br>
    <input type="date" name="data" id="data">
    <br>
    Data de check-out:
    <br>
    <input type="date" name="data2" id="data2">
    <br>
    Escolha o tipo de acomodação:
    <br>
    <select name="quartos" id="quartos">
      <option value="quartos">Selecione</option>
      <option value="quartos1">Suite</option>
      <option value="quartos2">Quarto Duplo Standard</option>
      <option value="quartos3">Suite de luxo</option>
    </select>
    <input type="submit" value="Cadastrar">
 </form>


</body>
</html>

