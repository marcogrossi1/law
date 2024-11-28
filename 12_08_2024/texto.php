<?php
    if ($_FILES["arquivo"]["error"] > 0 && $_FILES['arquivo']['type'] == 'txt')
        echo "Codigo de Erro: " . $_FILES["arquivoarquivo"]["error"] . "<br />";
    else {
        if (file_exists("C:/wamp64/www/12_08_2024/" . $_FILES["arquivo"]["name"]))
            echo 'O arquivo '.$_FILES["arquivo"]["name"] . " já existe!<br>";
        else {
            move_uploaded_file($_FILES["arquivo"]["tmp_name"], 'C:/wamp64/www/12_08_2024/'.$_FILES["arquivo"]["name"]);
            echo "Armazenado em: " . "C:/wamp64/www/12_08_2024/" . $_FILES["arquivo"]["name"].'<br>';
        }
    }

    $file = fopen("C:/wamp64/www/12_08_2024/".$_FILES["arquivo"]["name"], "r");
    $string = $_POST['string'];

    echo "Conteúdo original do arquivo ".$_FILES["arquivo"]["name"].'<br>';
    while(!feof($file)) {
        echo fgets($file).'<br>';
    }

    fclose($file);
    
    $file = fopen("C:/wamp64/www/12_08_2024/".$_FILES["arquivo"]["name"], "r");

    echo "Arquivo: ".$_FILES["arquivo"]["name"].'com a(s) marca(s) da string '.'<mark>'.$string.'</mark><br>    ';
    while(!feof( $file)) {
        $linha = fgets($file);
        
        $novo = str_replace($string, "<mark>$string</mark>", $linha);

        echo $novo.'<br>';
    }

    fclose($file);
?>