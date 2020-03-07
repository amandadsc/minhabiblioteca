<?php

    $cod = $_POST["cod"];
    $emprestado = $_POST["emprestado"];

    include_once 'conexao.php';

    $sql = "UPDATE livros SET emprestado = '".$emprestado."' where cod = ".$cod;

    if(mysqli_query($con,$sql)){
        $msg = "Campo atualizado com sucesso!";
    } else {
        $msg = "Erro ao atualizar campo!";
    }
    mysqli_close($con);
?>
<script>
    alert('<?php echo $msg;?>');
    location.href="consultar.php";
</script>
