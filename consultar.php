<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Minha Biblioteca - Consultar Livros</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <style>
        table.striped > tbody > tr:nth-child(odd){
            background-color: #e8f5e9 ;
        }
        #voltar {
            margin-bottom:20px;
        }
    </style>
    
    <script>
        function confirmaExclusao(cod){
            if(confirm('Deseja realmente excluir este livro?')){
                location.href="delete.php?cod="+cod;
            }
        }
    </script>  
    <body>
        <div class="container">
            <h3>Consultar Livros</h3>
            <form action="consultar.php" method="get" autocomplete="off">
                <input type="text" autofocus name="valor" placeholder="Digite um titulo ou autor(a) para pesquisar ou clique em PESQUISAR para ver todos">
                <input type="submit" value="Pesquisar" class="btn green">
            </form>
            <br>
            
            <?php
            if(isset($_GET["valor"])){
            $valor = $_GET["valor"];
            
            include_once 'conexao.php';
            $sql = "select * from livros where (titulo like '".$valor."%') OR (autor like '".$valor."') order by autor, titulo";
            $result = mysqli_query($con,$sql);
            
            if(mysqli_num_rows($result) > 0) {
                ?>
        <table class="striped responsive-table">
            <tr>
                <th>Título</th>
                <th>Autor(a)</th>
                <th>Editora</th>
                <th>Tipo</th>
                <th>Gênero</th>
                <th>Emprestado?</th>
                <th>Ações</th>
            </tr>
            
            <?php 
                while($row = mysqli_fetch_array($result)){
            ?>
            
            <tr>
                <td><?php echo $row["titulo"];?></td>
                <td><?php echo $row["autor"];?></td>
                <td><?php echo $row["editora"];?></td>
                <td><?php echo $row["tipo"];?></td>
                <td><?php echo $row["genero"];?></td>
                <td>
                    <!-- form que atualiza o campo emprestado automaticamente  -->
                    <form action="update-field.php" method="post">
                        <input type="hidden" name="cod" id="cod" value="<?php echo $row["cod"]; ?>">
                        <div class="input-field">
                            <select class="browser-default" name="emprestado">
                                <option value="Nao" name="emprestado" <?php if($row["emprestado"] == "Nao"){echo "selected";} ?>>Não</option>
                                <option value="Sim" name="emprestado" <?php if($row["emprestado"] == "Sim"){echo "selected";} ?>>Sim</option>
                            </select>
                        </div>
                        <input type="submit" value="Atualizar" class="btn orange lighten-1 btn-small">
                    </form>
                </td>
                <td>
                    <a href="editar.php?cod=<?php echo base64_encode($row["cod"]);?>"><i class="material-icons">edit</i></a>
                    <a href="#" onclick="confirmaExclusao('<?php echo base64_encode($row["cod"]);?>')"><i class="material-icons red-text left">delete</i></a>
                </td>
            </tr>
            
            <?php 
                } 
            ?>
        </table>
        <?php    
        }else {
            echo "<h6>Nenhum livro encontrado!</h6>";
            }
        }
        ?>
        <br>
        <a href="index.php" id="voltar" class="btn green btn-small"><i class="material-icons">arrow_back</i></a>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            $(document).ready(function(){
                $('select').formSelect();
            });
        </script>
    </body>
</html>
