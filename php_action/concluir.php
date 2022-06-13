<?php
// echo "entrou";
// exit();
session_start();
require_once 'conexao.php';

if(isset($_POST['id'])):
    $idUsuario = $_COOKIE['idUser'];
    $idDestino = $_POST['id'];

    $sql = "INSERT INTO destinosusuarios (idUsuario, idDestino, situacao) VALUES ('$idUsuario', '$idDestino', 'concluido')";

    if(mysqli_query($connect, $sql)):
        echo "ok";
        exit();
    else:
        echo "error";
        exit();
    endif;
endif;
?>
