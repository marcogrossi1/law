<?php
    $mysqli = mysqli_connect("localhost", "root", "") or die("Não foi possível estabelecer conexão");
    $db = mysqli_select_db($mysqli, "biblioteca");

    $sql = "SELECT * FROM livros ORDER BY id";
    $result = $mysqli -> query($sql);

    while($row = $result -> fetch_assoc()) {        
        $i = 1;
        $id = $row['id'];
        $sql2 = "SELECT * FROM autores WHERE id = $id";
        $result2 = $mysqli -> query($sql2);    

        while($linha = $result2 -> fetch_assoc()) {
            echo $id.' <strong>'.$linha['sobrenome'].'</strong>'.', '.$linha['nomes'].' ';
        }

        echo '<i>'.$row['titulo'].'</i>'.' '.$row['edicao'].' '.$row['editora'].' '.': '.$row['cidade'].' '.$row['ano'].'<br>';

        $i+=1;
    }
?>    