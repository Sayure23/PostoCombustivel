<?php
$servidor="localhost";
$usuario="root";
$senha= "root"; 
$dbname="integridade";

$conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
if(!$conexao){
    die("houve um erro".mysqli_connect_error());
}else{
    echo 'banco';
}

?>