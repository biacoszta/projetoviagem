<?php
session_start();
require_once 'conexao.php';

    $id = mysqli_escape_string($connect, $_POST['id']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $valor = mysqli_escape_string($connect, $_POST['valor']);
    $dias = mysqli_escape_string($connect, $_POST['dias']);
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);
    $imagem = mysqli_escape_string($connect, $_POST['imagem']);

    $sql = "UPDATE destinos SET nome = '$nome', valor = '$valor', dias = '$dias', descricao = '$descricao', imagem = '$imagem' WHERE id= '$id'";

    if(mysqli_query($connect, $sql)):
        header('Location: ../indexAdm.php');
    else:
        header('Location: ../indexAdm.php');
    endif;

   