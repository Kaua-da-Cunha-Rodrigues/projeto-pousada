<html>
    <?php include_once 'cabecalho.php'?>
    <head>
        <title>Editar Dados</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styleA.css" type="text/css">
    </head>
    <body>
        
    <?php

        /* Verificar se foi enviado o pedido para eliminar  */
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $id = filter_input(INPUT_GET, 'id');
        $operacao = filter_input(INPUT_GET, 'operacao');

        /* validar os dados recebidos através do pedido */
        if (empty($id) || $operacao!="editar"){
            echo "  Erro, pedido inválido ";
            exit();
        }    
    }
    else{
       echo " Erro, pedido inválido ";
       exit();
    }

   
    /* estabelece a ligação à base de dados */
    //$ligacao = new mysqli("localhost", "root", "1234", "empresa");
    include("../logica/conexao.php");

    /* verifica se ocorreu algum erro na ligação */
    if ($con->connect_errno) {
        echo "Falha na ligação: " . $con->connect_error; 
        exit();
    }

    /* definir o charset utilizado na ligação */
    $con->set_charset("utf8");

    /* texto sql da consulta*/
    $consulta = "SELECT * FROM cliente  WHERE idCliente = '$id' ";

    /* executar a consulta e testar se ocorreu erro */
    if (!$resultado = $con->query($consulta)) {
        echo ' Falha na consulta: '. $con->error;
        $con->close();  /* fechar a ligação */
    }
    else{
        /* obter os dados do registo */
        $dado = $resultado->fetch_assoc();
        ?>

            <h1 class="meio">Editar Cliente</h1><br>
            <hr>
        <form method="POST" action="atualizaCliente.php">
            <input type="hidden" name="id" id="id" value="<?=$dado['idCliente']?>">

            <strong>Nome:</strong> <br>
            <input type="text" name="nome" id="nome" value="<?=$dado['nome']?>"><br>

            <strong>Email:</strong> <br>
            <input type="text" name="email" id="email" value="<?=$dado['email']?>"><br>

            <strong>Telefone:</strong> <br>
            <input type="number" name="telefone" id="telefone" value="<?=$dado['telefone']?>"><br>

            <strong> Informe o seu sexo:</strong> <br>               
            <p>Masculino</p><input type="radio" name="sexo" value="m">
            <p>Feminino</p><input type="radio" name="sexo" value="f">       
            <p>Prefiro não declarar</p><input type="radio" name="sexo" value="naodeclarado"> <br>

            <strong>Data do Check-In:</strong> <br>
            <input type="date" name="data" id="data" value="<?=$dado['dtentrada']?>"><br>

            <strong>Data do Check-Out</strong> <br>
            <input type="date" name="data2" id="data2" value="<?=$dado['dtsaida']?>"><br>

            <strong>Quarto:</strong> <br>
            <input type="number" name="quarto" id="quarto" value="<?=$dado['idquarto']?>"><br>

            <input type="submit" value="Editar">
        </form>
        <?php
            }
        ?>
    <a href="consultaCliente.php">Voltar</a>   
    </body>
</html>