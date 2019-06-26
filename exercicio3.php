<?php

if (isset ($_POST['cidade'])) {
    $cidade = utf8_decode($_POST['cidade']);
}

function checaCapital($cidade) {
    switch($cidade) {
        case 'curitiba': 
            return 'É capital';
            break;
        case 'porto alegre': 
            return 'É capital';
            break;
        case 'florianópolis': 
            return 'É capital';
            break;
        default:
            return 'Não é capital';
            break;
    }
}

function checaEstado($cidade){
    var_dump($cidade);

    switch($cidade){
        case 'curitiba':
            return 'Pertence ao PR';
            break;
        case 'maringá':
            return 'Pertence ao PR';
            break;
        case 'maringa':
            return 'Pertence ao PR';
            break;
        case 'londrina':
            return 'Pertence ao PR';
            break;
        case 'pinhais':
            return 'Pertence ao PR';
            break;
        case 'chapecó':
            return 'Pertence a SC';
            break;
        case 'chapecó':
            return 'Pertence a SC';
            break;
        case 'joinville':
            return 'Pertence a SC';
            break;
        case 'blumenau':
            return 'Pertence a SC';
            break;
        case 'florianópolis':
            return 'Pertence a SC';
            break;
        case 'florianopolis':
            return 'Pertence a SC';
            break;
        case 'porto alegre':
            return 'Pertence ao RS';
            break;
        case 'gramado':
            return 'Pertence ao RS';
            break;
        default:
            break;
    }

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 3</title>
</head>
<body>

<?php 
    if (!isset($cidade)) {
        echo 'Insira um nome de cidade podendo ser as seguintes: Curitiba, Maringá, Londrina, Pinhais, Chapecó, Joinvile, Blumenau, Florianópolis, Porto Alegre, Gramado'. '<br><br>';
        echo 'Digite uma cidade  <br><br>';
    } else {
        echo checaCapital($cidade) . '<br>';
        echo checaEstado($cidade) . '<br><br>';
    }
?>
    <form action="exercicio3.php" method="post">
        <input type="text" name="cidade" placeholder="Digite aqui ..." required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>