<?php

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    include_once'../logica/conexao.php';


    $consulta = "SELECT * FROM admin WHERE nome = '$nome' LIMIT 1";
    $verifica = $con->query($consulta) or die($con->error); 
    $user = $verifica->fetch_assoc();
    
    
    if(password_verify($senha, $user['senha'])){

        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION['nome'] = $nome;
        
        header("Location: index.php");
    }else{
        echo "
            <script>
            if (confirm('Senha Ou Usuario Incorreto!')) {
                window.location.replace('login.php');
            }
            </script>
        ";
    }


?>