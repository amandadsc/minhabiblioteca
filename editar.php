<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Minha Biblioteca - Editar Livro</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <?php
            $cod = base64_decode($_GET["cod"]);
            include_once 'conexao.php';
            $sql = "SELECT * FROM livros WHERE cod = ".$cod;
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($result);
        ?>
        <div class="container">
            <h3>Editar Livro</h3>
            <form action="update.php" method="post">
                <input type="hidden" name="cod" value="<?php echo $row["cod"];?>">
                 <div class="input-field">
                    <input type="text" id="titulo" name="titulo" required class="validate" value="<?php echo $row["titulo"];?>">
                    <label for="titulo">Título</label>
                </div>
                
                <div class="input-field">
                    <input type="text" id="autor" name="autor" required class="validate" value="<?php echo $row["autor"];?>">
                    <label for="autor">Autor(a)</label>
                </div>
                
                <div class="input-field">
                    <input type="text" id="editora" name="editora" required class="validate" value="<?php echo $row["editora"];?>">
                    <label for="editora">Editora</label>
                </div>

                
                <p>Tipo</p>
                <p>
                    <label>
                        <input type="radio" name="tipo" value="Fisico" class="with-gap validate" required <?php if($row["tipo"] == "Fisico"){echo "checked";} ?>>
                        <span>Físico</span>
                    </label> &emsp;
                    
                    <label>
                        <input type="radio" name="tipo" value="Digital" class="with-gap validate" required <?php if($row["tipo"] == "Digital"){echo "checked";} ?>>
                        <span>Digital</span>
                    </label> &emsp;
                </p>
                
                <div class="input-field">
                    <select class="browser-default" name="genero">
                        <option value="" name="genero" disabled selected>Gênero</option>
                        <option value="Biografia" name="genero" <?php if($row["genero"] == "Biografia"){echo "selected";} ?>>Biografia</option>
                        <option value="Chick-Lit" name="genero" <?php if($row["genero"] == "Chick-Lit"){echo "selected";} ?>>Chick-Lit</option>
                        <option value="Distopia" name="genero" <?php if($row["genero"] == "Chick-Lit"){echo "selected";} ?>>Distopia</option>
                        <option value="Drama" name="genero" <?php if($row["genero"] == "Drama"){echo "selected";} ?>>Drama</option>
                        <option value="Fantasia" name="genero" <?php if($row["genero"] == "Fantasia"){echo "selected";} ?>>Fantasia</option>
                        <option value="Ficcao" name="genero" <?php if($row["genero"] == "Ficcao"){echo "selected";} ?>>Ficção</option>
                        <option value="Ficcao-Cientifica" name="genero" <?php if($row["genero"] == "Ficcao-Cientifica"){echo "selected";} ?>>Ficção Científica</option>
                        <option value="Infanto-Juvenil" name="genero" <?php if($row["genero"] == "Infanto-Juvenil"){echo "selected";} ?>>Infanto-Juvenil</option>
                        <option value="Jovem-Adulto" name="genero" <?php if($row["genero"] == "Jovem-Adulto"){echo "selected";} ?>>Jovem Adulto</option>
                        <option value="Policial" name="genero" <?php if($row["genero"] == "Policial"){echo "selected";} ?>>Policial</option>
                        <option value="Romance" name="genero" <?php if($row["genero"] == "Romance"){echo "selected";} ?>>Romance</option>
                        <option value="Sobrenatural" name="genero" <?php if($row["genero"] == "Sobrenatural"){echo "selected";} ?>>Sobrenatural</option>
                        <option value="Suspense" name="genero" <?php if($row["genero"] == "Suspense"){echo "selected";} ?>>Suspense</option>
                        <option value="Terror" name="genero" <?php if($row["genero"] == "Terror"){echo "selected";} ?>>Terror</option>
                    </select>
                </div>
                
                <div class="input-field">
                    <p>Emprestado?</p>
                    <p>
                    <label>
                        <input type="radio" name="emprestado" value="Nao" class="with-gap validate" checked required <?php if($row["emprestado"] == "Nao"){echo "checked";} ?>>
                        <span>Não</span>
                    </label> &emsp;
                    
                    <label>
                        <input type="radio" name="emprestado" value="Sim" class="with-gap validate" disabled required <?php if($row["emprestado"] == "Sim"){echo "checked";} ?>>
                        <span>Sim</span>
                    </label>
                    </p>
                </div>
                
                <input type="submit" value="Atualizar" class="btn green">
            </form>
            <br>
            <a href="index.php" id="voltar" class="btn green btn-small"><i class="material-icons">arrow_back</i></a>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            $(document).ready(function(){
                $('select').formSelect();
            });
        </script>
        <?php
        // put your code here
        ?>
    </body>
</html>
