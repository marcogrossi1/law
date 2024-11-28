<?php
    $cnx = mysqli_connect("localhost", "root", "") or die("Falha na conexão");

    $sql = "SHOW DATABASES LIKE 'computadores'";
    $result = $cnx->query($sql);

    if($result->num_rows != 0) {
        $sql = "DROP DATABASE computadores";
        $cnx->query($sql);
    }
    
    $sql = "CREATE DATABASE computadores";

    if($cnx->query($sql) == TRUE) echo("Database is created!");
    else echo("ERROR!");

    $db = mysqli_select_db($cnx, 'computadores');
    $sql = "SHOW TABLES LIKE 'Itens'";
    $result = $cnx->query($sql);

    if($result->num_rows != 0) {
        $sql = "DROP TABLE Itens";
        $cnx->query($sql);
    }
    
    $sql = "CREATE TABLE Itens(Produto varchar(255), Valor float, Quantidade int)";

    if($cnx->query($sql) == TRUE) 
        echo("The table is created!<br>");
    else 
        echo("ERROR!");

    $sql = "INSERT INTO Itens (Produto, Valor, Quantidade) VALUES ('Fonte', 50.00, 3)";
    $cnx->query($sql);
    $sql = "INSERT INTO Itens (Produto, Valor, Quantidade) VALUES ('Monitor', 250.00, 4)";
    $cnx->query($sql);
    $sql = "INSERT INTO Itens (Produto, Valor, Quantidade) VALUES ('HD', 180.00, 6)";
    $cnx->query($sql);

    $sql = "INSERT INTO Itens (Produto, Valor, Quantidade) VALUES ('Mouse', 8.00, 2)";
    $cnx->query($sql);
    $sql = "INSERT INTO Itens (Produto, Valor, Quantidade) VALUES ('Teclado', 20.00, 3)";
    $cnx->query($sql);
    $sql = "INSERT INTO Itens (Produto, Valor, Quantidade) VALUES ('Processador', 464.00, 5)";
    $cnx->query($sql);

    $sql = "SELECT Produto, Valor, Quantidade FROM Itens WHERE Valor > 30.00 AND Valor < 300.00";
    $resultado = $cnx->query($sql);
    
    while($row = $resultado->fetch_assoc()) {
        echo $row['Produto'].': R$'.$row['Valor'].'<br>';
    }

    $sql = "UPDATE Itens SET Valor = 12.00 WHERE Produto = 'Mouse'";
    $cnx->query($sql);

    $sql = "DELETE FROM Itens WHERE Produto = 'Teclado'";
    $cnx->query($sql);
?>