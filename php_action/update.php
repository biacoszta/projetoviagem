<?php
session_start();
require_once 'conexao.php';

if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    
    $sql = "SELECT id,nome,valor,dias,descricao,imagem FROM destinos WHERE id = '$id'";
   
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
    echo json_encode($dados);
endif;
?>-