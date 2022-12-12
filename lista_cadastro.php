<?php 
        $sql = $pdo->prepare("SELECT * FROM `agenda`");
        $sql->execute();
        $cadastros = $sql->fetchAll();
        echo "<table class='table table-striped-hover'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th scope='col' colspan='2' align='center'>Ações</th>";
        echo "<th scope='col' align='center'>ID</th>"; 
        echo "<th scope='col' align='center'>Nome</th>"; 
        echo "<th scope='col' align='center'>CPF</th>"; 
        echo "<th scope='col' align='center'>E-mail</th>"; 
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($cadastros as $cad) {
            echo "<tr>";
            echo '<td align="center"> <a href=?delete=' . $cad['ID'] . '"> (x)</a> </td>';
            echo '<td align="center"> <a href=alterar.php?ID=' . $cad['ID'] . '"> (Alterar)</a> </td>';
            echo "<td>" . $cad['ID'] . "</td>";
            echo "<td>" . $cad['nome'] . "</td>";
            echo "<td>" . $cad['cpf'] . "</td>";
            echo "<td>" . $cad['email'] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    
    ?>