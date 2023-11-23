<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>

<?php
$servidor = "localhost";
$usuario = "root";
$senha = "nova_senha";
$dbname = "integridade";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$conexao) {
    die("Houve um erro: " . mysqli_connect_error());
} else {
    echo 'Conexão bem-sucedida ao banco de dados';
    // Aqui você pode adicionar o restante do seu código, consultas SQL, etc.
}

// Lembre-se de fechar a conexão quando não precisar mais dela
mysqli_close($conexao);
?>

</body>
</html>
