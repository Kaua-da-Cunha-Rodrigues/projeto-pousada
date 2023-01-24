<?php
    include_once '../logica/conexao.php';

    $nome = $_POST['nome'];
    $senha = password_hash($_POST['senha'],PASSWORD_DEFAULT);

// Montar a instrução de gravar
$sql = "insert into admin values(null,'".$nome."','".$senha."')";

//Montar o comando para o sql de gravacao
if (mysqli_query($con,$sql)) {
 $msg = "Gravado com sucesso";
} else {
 $msg = "Erro ao gravar, tente novamente";
}
// Fechar conexao com o banco
mysqli_close($con);
echo "<script>
 alert('".$msg."');
 location.href='login.php';
 </script>"

?>

