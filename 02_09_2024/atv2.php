<?php
// Oi, professor! Nesse programa, fiz 3 funções bastante simples que implementam o conceito de cookie!
// A primeira delas permite que o usuário adicione itens ao carrinho (e consequentemente aos cookies)
// A segunda permite que o usuário remove um item do carrinho (e consequentemente dos cookies)
// A terceira exibe o carrinho com os elementos presentes nos cookies.

// Ao final, essas funções são chamadas para demonstrar que funcionam.

$carrinho = array();

function adicionarItem($descricao,$quantidade, $valorUnitario) {
    global $carrinho;
    if (isset($carrinho[$descricao])) {
        $carrinho[$descricao]['quantidade'] += $quantidade;
    } else {
        $carrinho[$descricao] = array(
            'quantidade' => $quantidade,
            'valorUnitario' => $valorUnitario
        );
    }
    setcookie('carrinho', serialize($carrinho), time() + 3600);
}

function removerItem($descricao) {
    global $carrinho;
    if (isset($carrinho[$descricao])) {
        unset($carrinho[$descricao]);
    }
    setcookie('carrinho', serialize($carrinho), time() + 3600);
}

function exibirCarrinho() {
    global $carrinho;
    if (isset($_COOKIE['carrinho'])) {
        $carrinho = unserialize($_COOKIE['carrinho']);
    }
    echo "Carrinho:<br>";
    foreach ($carrinho as $item) {
        echo $item['quantidade'] . " x " . $item['valorUnitario'] . " = " . ($item['quantidade'] * $item['valorUnitario']) . "<br>";
    }
}

// Demonstrando que o carrinho funciona!
adicionarItem('Produto 1', 2, 10.99);
adicionarItem('Produto 2', 3, 5.99);
adicionarItem('Produto 3', 8, 5.99);

removerItem('Produto 2');

exibirCarrinho();
?>