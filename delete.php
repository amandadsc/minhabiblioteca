<?php
    $cod = base64_decode($_GET["cod"]);

    include_once 'conexao.php';

    $sql = "DELETE FROM livros WHERE cod =" . $cod;

    if (mysqli_query($con, $sql)) {
        $msg = "Livro excluído com sucesso!";
    } else {
        $msg = "Erro ao excluir livro!";
    }
    mysqli_close($con);
?>
<script>
    alert('<?php echo $msg; ?>');
    location.href = "consultar.php";
</script>

