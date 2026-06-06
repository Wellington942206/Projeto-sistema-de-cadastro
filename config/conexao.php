<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "crm_palestrante";

$conexao = mysqli_connect(
    $host,
    $usuario,
    $senha,
    $banco
);

if(!$conexao){
    die("Erro ao conectar");
}
?>