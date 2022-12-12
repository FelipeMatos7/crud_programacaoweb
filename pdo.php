<?php 
        function incluirCadastro(){
        $pdo = new PDO("mysql:host=localhost;dbname=crudpw", "root", "root");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        if(isset($_GET['delete'])){
            $ID = (int) $_GET['delete'];
            $pdo->exec("DELETE FROM agenda WHERE ID = $ID");
            echo "<h2>Cadastro excluído com sucesso!</h2>";
        }
        if(isset($_POST['nome'])){
            $sql = $pdo->prepare("INSERT INTO `agenda` VALUES (null, ?, ?, ?)");
            $sql->execute(array($_POST['nome'], $_POST['cpf'], $_POST['email']));
            echo "<h2>Cadastrado efetuado com Sucesso!</h2>";
        }
    }
    
        function alterarCadastro(){
            $pdo = new PDO("mysql:host=localhost;dbname=crudpw", "root", "root");

            if (isset($_GET['ID'])) {
                $ID = (int)$_GET['ID'];
                //mount form whit data
                $sql = $pdo->prepare("SELECT * FROM agenda WHERE id = $ID");
                $sql->execute();
                $cadastros = $sql->fetchAll();

                //montar formulário com os dados dos alunos
                foreach ($cadastros as $cad) {
                    echo "<form method='POST'>";
                    echo "<legend>Insira os dados abaixo</legend>";
                    echo "<fieldset>";
                    echo "<div>";
                    echo "Nome: <input type='text' class='form-control' name='nome' value='" . $cad['ID'] . "' readonly>";
                    echo "</div>";
                    echo "<div>";
                    echo "Matrícula: <input type='text' class='form-control' name='cpf' value='" . $cad['cpf'] . "'>";
                    echo "</div>";
                    echo "<div>";
                    echo "Nota 1: <input type='text' class='form-control' name='email' value='" . $cad['email'] . "'>";
                    echo "</div>";
                    echo "<div>";
                    echo "<input type='submit' class='btn btn-primary' value='Enviar'>";
                    echo "<input type='reset' class='btn btn-primary' value='Limpar Dados'>";
                    echo "</div>";
                    echo "<br>";
                    echo "</fieldset>";
                    echo "</form>";
                }

            }

            if (isset($_POST['nome'])) {
                $sql = $pdo->prepare("UPDATE agenda SET nome = ?, cpf = ?, email = ? WHERE ID = $ID");
                $sql->execute(array($_POST['nome'], $_POST['cpf'], $_POST['email']));
                echo "<h1>Usuário com id = $ID alterado com sucesso!</h1>";
                //fazer botao para voltar para a pagina de listagem
                echo "<a href='index.php'>Voltar</a>";

                //echo "<h1>Alterado com sucesso!</h1>";
            }
        }

    ?>