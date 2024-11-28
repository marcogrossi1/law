<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section id="mdc">
        <h2 id="calculation1">Calcula Máximo Divisor Comum (MDC)</h2>
    </section>
    <section id="mmc" class="oculto">
        <h2 id="calculation2">Calcula Mínimo Múltiplo Comum (MDC)</h2>
    </section>

    <form action="index.php" method="post">
        <input type="radio" id="contactChoice1" name="contact" value="mdc" checked />
        <label for="contactChoice1">MDC</label>
        <br>
        <input type="radio" id="contactChoice2" name="contact" value="mmc" />
        <label for="contactChoice2">MMC</label>
        <br>
        <br>
        <label>No.1<input type="number" name="no1"></label>
        <br>
        <label>No.2<input type="number" name="no2"></label>
        <br>
        <br>
        <input type="submit">
    </form>
    <?php
    $No1 = $_POST['no1'];
    $No2 = $_POST['no2'];

    $radio = $_POST['contact'];

    echo $radio;

    function calcula_mdc($x, $y) {
        return gmp_gcd($x, $y);
    }

    function calcula_mmc($x, $y) {
        return $x*$y/(gmp_gcd($x, $y));
    }

    if($radio == 'mdc') {
        echo calcula_mdc($No1, $No2);
    }   

    elseif($radio == 'mmc') {
        echo calcula_mmc($No1, $No2);
    }

    else {
        echo 'Houve um problema!';
    }
    
?>

    <script src="script.js"></script>
</body>
</html>