<?php

include("../logica/conexao.php");
$modo = $_GET['modo'];
$id = intval($_GET['id']);
if($modo == 'quarto'){
    $sql_code = "DELETE FROM quartos WHERE idquarto = '$id'";
    $local = 'admin.php';
}elseif($modo == 'cliente'){
    $sql_code = "DELETE FROM cliente WHERE idCliente = '$id'";
    $local = 'consultaCliente.php';
}else{
    $sql_code = "DELETE FROM admin WHERE idAdmin = '$id'";    
    $local = 'consultaAdmin.php';
};
$sql_query = $con->query($sql_code) or die($con->error);

if($sql_query){
    echo "<script>
        location.href ='".$local."';
    </script>";
    }else{
        echo "<script>
            alert('Nao foi possivel deletar.');location.href ='".$local."';
        </script>";
    }
?>