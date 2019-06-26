<?php

if (isset($_POST["numero"])) {
    $numero = $_POST["numero"];
}

function parOuImpar($numero) {
    if ($numero % 2 == 0) {
        return "É par";
    } else {
        return "É ímpar";
    }
}

function verificaMaiorQue10($numero) {
    if ($numero > 10) {
        return "Maior que 10";
    } else {
        return "Não é maior que 10";
    }
}

function dobroDoNumero($numero) {
    return "O dobro de $numero é " . $numero * 2;
}

function numeroPrimo($numero){
    $contador == 0;
    for($x=1; $x <= $numero; $x++){
        if($numero % $x == 0)
            $contador++;
    }
    if($contador == 2)
        return 'É primo';
    else
        return 'Não é primo';
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 1</title>
</head>
<body>

<?php 
    if ($numero == 0) {
        echo "Digite um número <br><br>";
    } else {
        echo 'Número digitado: ' . $numero . '<br><br>';
        echo parOuImpar($numero) . '<br>';
        echo verificaMaiorQue10($numero) . '<br>';
        echo dobroDoNumero($numero) . '<br>';
        echo numeroPrimo($numero) . '<br><br>';
    }
?>

<form action="exercicio1.php" method="post">
    <input type="number" name="numero" placeholder="Digite aqui" required>
    <button type="submit">Enviar</button>
</form>

</body>
</html>