<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Minha Biblioteca - Cadastrar Livro</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <style>
        #voltar {
            margin-bottom:20px;
        }
    </style>
    <body>
        <div class="container">
            <h3>Cadastrar Livro</h3>
            <form action="store.php" method="post">
                 <div class="input-field">
                    <input type="text" id="titulo" name="titulo" required class="validate">
                    <label for="titulo">Título</label>
                </div>
                
                <div class="input-field">
                    <input type="text" id="autor" name="autor" required class="validate">
                    <label for="autor">Autor(a)</label>
                </div>
                
                <div class="input-field">
                    <input type="text" id="editora" name="editora" required class="validate">
                    <label for="editora">Editora</label>
                </div>

                
                <p>Tipo</p>
                <p>
                    <label>
                        <input type="radio" name="tipo" value="Fisico" class="with-gap validate" required>
                        <span>Físico</span>
                    </label> &emsp;
                    
                    <label>
                        <input type="radio" name="tipo" value="Digital" class="with-gap validate" required>
                        <span>Digital</span>
                    </label> &emsp;
                </p>
                
                <div class="input-field">
                    <select class="browser-default" name="genero">
                        <option value="" name="genero" disabled selected>Gênero</option>
                        <option value="Biografia" name="genero">Biografia</option>
                        <option value="Chick-Lit" name="genero">Chick-Lit</option>
                        <option value="Distopia" name="genero">Distopia</option>
                        <option value="Drama" name="genero">Drama</option>
                        <option value="Fantasia" name="genero">Fantasia</option>
                        <option value="Ficcao" name="genero">Ficção</option>
                        <option value="Ficcao-Cientifica" name="genero">Ficção Científica</option>
                        <option value="Infanto-Juvenil" name="genero">Infanto-Juvenil</option>
                        <option value="Jovem-Adulto" name="genero">Jovem Adulto</option>
                        <option value="Policial" name="genero">Policial</option>
                        <option value="Romance" name="genero">Romance</option>
                        <option value="Sobrenatural" name="genero">Sobrenatural</option>
                        <option value="Suspense" name="genero">Suspense</option>
                        <option value="Terror" name="genero">Terror</option>
                    </select>
                </div>
                
                <div class="input-field">
                    <p>Emprestado?</p>
                    <p>
                    <label>
                        <input type="radio" name="emprestado" value="Nao" class="with-gap validate" checked required>
                        <span>Não</span>
                    </label> &emsp;
                    
                    <label>
                        <input type="radio" name="emprestado" value="Sim" class="with-gap validate" disabled required>
                        <span>Sim</span>
                    </label>
                    </p>
                </div>
                <input type="submit" value="Cadastrar" class="btn green">
            </form>
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
        <?php
        // put your code here
        ?>
    </body>
</html>
