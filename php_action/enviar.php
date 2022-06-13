
<?php
session_start();
require_once 'conexao.php';

if(isset($_POST['nome'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $valor = mysqli_escape_string($connect, $_POST['valor']);
    $dias = mysqli_escape_string($connect, $_POST['dias']);
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);
    $imagem = mysqli_escape_string($connect, $_POST['imagem']);

    $sql = "INSERT INTO destinos (nome, valor, dias, descricao, imagem) VALUES ('$nome', '$valor', '$dias', '$descricao', '$imagem')";

    if(mysqli_query($connect, $sql)):
        header('Location: ../indexAdm.php');
    else:
        header('Location: ../indexAdm.php');
    endif;
endif;

