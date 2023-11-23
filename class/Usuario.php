<?php
include("db.php");

$email=$_POST['email'];
$senha=$_POST['senha'];

$sql="INSERT INTO usuarios(emailusuario, senhausuario) VALUES ('$email', '$senha')";

if(mysqli_query($conexao, $sql)){
    echo "Usuario cadastrado";
}


?>