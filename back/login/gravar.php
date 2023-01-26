<?php
    include_once '../logica/conexao.php';

    $nome = $_POST['nome'];
    $tel = $_POST['tel'];
    $data = $_POST['data'];
    $data2 = $_POST['data2'];
    $sexo = $_POST['sexo'];
    $email = $_POST['email'];   
    $quartos = $_POST['quartos'];
                                       

    //funçãp de formatar data date("d/m/Y")  insert into cliente values(null,'a','b',3,'m','0000-00-00','0000-00-00','"4);
   
    // Montar a instrução de gravar
    $sql = "insert into quartos values(null,'".$nome."','ocupado','".$data."','".$data2."','".$quartos."')";

    //Montar o comando para o sql de gravacao
    if (mysqli_query($con,$sql)) {
        $idQuarto= mysqli_insert_id($con);
        $sql2 = "insert into cliente values(null,'".$nome."','".$email."','".$tel."','".$sexo."','".$data."','".$data2."','".$idQuarto."')";
        if (mysqli_query($con,$sql2)) {
            $msg = "Gravado com sucesso";
        } else {
            $msg = "Erro ao gravar, tente novamente";
        }
    } else {
        $msg = "Erro ao gravar, tente novamente";
    }
        echo "<script>
                alert('".$msg."');
                location.href='../../paginaQuarto.html';
            </script>";

    
    // Fechar conexao com o banco
    mysqli_close($con);
?>

