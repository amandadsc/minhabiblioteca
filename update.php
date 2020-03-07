<?php
    $cod = $_POST["cod"];
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $editora = $_POST["editora"];
    $tipo = $_POST["tipo"];
    $genero = $_POST["genero"];
    $emprestado = $_POST["emprestado"];
            
    include_once 'conexao.php';
            
    $sql = "update livros set titulo = '".$titulo."', autor = '".$autor."', editora = '".$editora."', tipo = '".$tipo."', genero = '".$genero."', emprestado = '".$emprestado."' where cod = ".$cod;
            
    if (mysqli_query($con, $sql)){
        $msg = "Dados atualizados com sucesso!";
    } else {
        $msg = "Erro ao atualizar!";
    }
            
    mysqli_close($con);
?>  
        
<script>
    alert('<?php echo $msg; ?>');
    location.href="consultar.php";
</script>
