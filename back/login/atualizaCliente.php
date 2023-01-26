<?php
/* Verificar se o formulário foi submetido */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = filter_input(INPUT_POST, 'id');
    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email');
    $telefone = filter_input(INPUT_POST, 'telefone');
    $sexo = filter_input(INPUT_POST, 'sexo');
    $data = filter_input(INPUT_POST, 'data');
    $data2 = filter_input(INPUT_POST, 'data2');
    $quarto = filter_input(INPUT_POST, 'quarto');
    //$data = filter_input(INPUT_POST, 'data');

    /* validar os dados recebidos do formulario */
    if (empty($id) || empty($nome) || empty($email) || empty($telefone) || empty($sexo) || empty($data) || empty($data2) || empty($quarto)){
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
    $consulta = "UPDATE cliente SET idCliente='$id', nome='$nome', email='$email', telefone='$telefone', sexo='$sexo', dtentrada='$data', dtsaida='$data2', idquarto='$quarto' WHERE idCliente='$id' ";

    /* executar a consulta e testar se ocorreu erro */
    if (!$con->query($consulta)) {
        echo " ERRO - Falha ao executar a consulta: \"$consulta\" <br>" . $con->error;
        $con->close();  /* fechar a ligação */
    }
    else{
        echo "
            <script>
            if (confirm('Atualizado com Sucesso!')) {
                window.location.replace('consultaCliente.php');
            }
            </script>
        ";
    }
    