<?php
session_start();
require_once 'conexao.php';

    $id = $_GET['id'];
    $sql1 = "SELECT d.nome as nomeDest, du.situacao as situacao, u.nome as nomeUsu FROM destinos d INNER JOIN destinosUsuarios du ON du.idDestino = d.id
    INNER JOIN usuarios u on u.id = du.idUsuario where d.id = '$id'";

    $resultado1 = mysqli_query($connect, $sql1);
    
    while($row = mysqli_fetch_assoc($resultado1)){
        $new_array[] = $row; // Inside while loop
    }
    
    echo json_encode($new_array);

 ?>