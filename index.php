<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <?php
    require_once "pdo.php";
    incluirCadastro();
    ?>
    <div class="container">
    <form method="POST">
        <legend>
            <h1 align="center">Cadastro de Alunos e Notas</h1>
            <fieldset>
                <div>
                    Nome: <input type="text" class="form-control" name="nome">
                </div>
                <div>
                    CPF: <input type="text" class="form-control" name="cpf">
                </div>
                <div>
                    E-mail: <input type="text" class="form-control" name="email">
                </div>
                <div>
                    <input type="submit" class="btn btn-success" value="Enviar">

                    <input type="reset" class="btn btn-danger" value="Limpar Dados">
                </div>
            </fieldset>
        </legend>
    </form>
    </div>
    <?php 
        include_once "lista_cadastro.php";
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>