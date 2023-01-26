<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Quarto</title>
</head>
<body>
    <?php include_once 'cabecalho.php' ?>
    <h1>Registro de Quartos</h1>
    <hr>
    <form action="gravar.php">
        <input type="hidden" name="">
        Estado <br>
        <select name="estado" id="">
            <option value="livre">Livre</option>
            <option value="ocupado">Ocupado</option>
        </select> <br>
        <input type="hidden" name="0000-00-00">
        <input type="hidden" name="0000-00-00">
        Tipo de Quarto: <br>
        <select name="quarto" id="">
            <option name="Suite" id="">Suite</option>
            <option name="Suite de Luxo" id="">Suite de Luxo</option>
            <option name="Quarto Duplo Standard" id="">Quarto Duplo Standard</option>
            </option> <br>
    </select> <br>
        <input type="submit" value="Registrar">    
    </form>    
    <a href="index.php">Voltar</a>
</body>
</html>