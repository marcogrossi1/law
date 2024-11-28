<?php
// Nesse caso, é iniciada uma sessão e, a cada acesso nessa seção, a variável global $_SESSION['acessos'] é incrementada

session_start();

if (!isset($_SESSION['acessos'])) {
    $_SESSION['acessos'] = 0;
}

$_SESSION['acessos']++;

echo "Número de acessos: " . $_SESSION['acessos'];
?>