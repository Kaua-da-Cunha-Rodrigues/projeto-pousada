<?php
    include_once '../logica/conexao.php';

    $nome = $_POST['nome'];
    $tel = $_POST['tel'];
    $data = $_POST['data'];
    $data2 = $_POST['data2'];
    $sexo = $_POST['sexo'];
    $email = $_POST['email'];

    //funçãp de formatar data date("d/m/Y")
   
// Montar a instrução de gravar
$sql = "insert into admin values(null,'".$nome."','".$data."','".$data2."','".$quartos."')";
$sql = "insert into cliente values(null,'".$nome."','".$quartos."','".$tel."','".$sexo."')";


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
 location.href='../../index.html';
 </script>"

?>

