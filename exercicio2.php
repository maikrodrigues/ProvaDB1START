<?php

if (isset($_POST['frase'])) {
    $frase = $_POST['frase'];
}

function checaQuantidadeDeCaracteres($frase) {
    //$frase_sem_espaco = str_replace(' ', '', $frase);
    $num_caracteres = strlen($frase);
    return "$num_caracteres caracteres";
}

function contaQuantidadeDeEspaco($frase) {
    $num_espacos = substr_count($frase, ' ');
    return "$num_espacos espaços em branco";
}

function contaQuantidadeDeVogais($frase) {
    $num_vogais = 0;
    $vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

    foreach ($vogais as $vogal) {
        $num_vogais += substr_count($frase, $vogal);
    }
    
    return "$num_vogais vogais";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 2</title>
</head>
<body>

<?php
    if (strlen($frase) == 0) {
        echo "Digite uma palavra ou frase <br><br>";
    } else {
        echo 'Palavra ou frase digitada: ' . $frase . '<br><br>';
        echo checaQuantidadeDeCaracteres($frase) . '<br>';
        echo contaQuantidadeDeEspaco($frase) . '<br>';
        echo contaQuantidadeDeVogais($frase) . '<br><br>';
    }
?>

    <form action="exercicio2.php" method="post">
        <input type="text" name="frase" placeholder="Digite o texto aqui..." required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>