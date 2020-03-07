<?php
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $editora = $_POST["editora"];
    $tipo = $_POST["tipo"];
    $genero = $_POST["genero"];
    $emprestado = $_POST["emprestado"];
            
    include_once 'conexao.php';
            
    $sql = "insert into livros values(null, '".$titulo."', '".$autor."', '".$editora."', '".$tipo."', '".$genero."', '".$emprestado."')";
            
    if (mysqli_query($con, $sql)){
        $msg = "Dados gravados com sucesso!";
    } else {
        $msg = "Erro ao gravar!";
    }
            
    mysqli_close($con);
?>  
        
<script>
    alert('<?php echo $msg; ?>');
    location.href="index.php";
</script>



