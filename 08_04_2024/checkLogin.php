<?php

class RequestResponse
{
  public $success;
  public $detail;

  function __construct($success, $detail)
  {
    $this->success = $success;
    $this->detail = $detail;
  }
}

$email = $_GET['email'] ?? '';
$senha = $_GET['senha'] ?? '';

// Validação simplificada para fins didáticos. Não faça isso!
if ($email == 'teste@mail.com' && $senha == '123456'){
  $response = "sucesso.html";
}else{
  $response = "erro.html";
}

//$response = 'erro.html';

echo $response;
