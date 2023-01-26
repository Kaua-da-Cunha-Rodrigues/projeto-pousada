<?php
/* Verificar se o formulário foi submetido */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = filter_input(INPUT_POST, 'id');
    $nome = filter_input(INPUT_POST, 'nome');
    $estado = filter_input(INPUT_POST, 'estado');
    $data = filter_input(INPUT_POST, 'data');
    $data2 = filter_input(INPUT_POST, 'data2');
    //$data = filter_input(INPUT_POST, 'data');

    /* validar os dados recebidos do formulario */
    if (empty($id) || empty($nome) || empty($estado) || empty($data) || empty($data2)){
        //||  empty($data2
        echo "Todos os campos do formulário devem conter valores ";
        exit();
    }    
}
else{
   echo " ERRO - Não foi possível executar a operação editar. ";
   exit();
}

/* estabelece a ligação à base de dados */

include("../logica/conexao.php");

/* verifica se ocorreu algum erro na ligação */
if ($con->connect_errno) {
    echo "Falha na ligação: " . $con->connect_error; 
    exit();
}
    
    /* texto sql da consulta*/
    $consulta = "UPDATE quartos SET idquarto='$id', nome='$nome', dtentrada='$data', dtsaida='$data2', estado='$estado' WHERE idquarto='$id' ";

    /* executar a consulta e testar se ocorreu erro */
    if (!$con->query($consulta)) {
        echo " ERRO - Falha ao executar a consulta: \"$consulta\" <br>" . $con->error;
        $con->close();  /* fechar a ligação */
    }
    else{
        echo "
            <script>
            if (confirm('Atualizado com Sucesso!')) {
                window.location.replace('admin.php');
            }
            </script>
        ";
    }
    $con->close();       /* fechar a ligação */
