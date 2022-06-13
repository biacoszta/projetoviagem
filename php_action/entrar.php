<?php
session_start();
include('conexao.php');
$_SESSION["idUsuario"] = 2;

if(isset($_POST['email'])):
  $_SESSION["idUsuario"] = 2;
    $email = mysqli_escape_string($connect, $_POST['email']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
  

    $sql = "SELECT * FROM usuarios where email = '$email' and senha = '$senha'";
    $query = mysqli_query($connect, $sql);

    if (mysqli_num_rows($query) != '1') {
        // Msg de erro quando usuario n foi encontrado
        echo "Login inválido!"; exit;
      } else {
        $resultado = mysqli_fetch_assoc($query);
        // Verifica se o usuário é adm ou usuario

        if ($resultado['tipo'] == '1'){
          //  header('Location: ../index.php');
          setcookie('idUser', $resultado['id'], time() + (86400 * 30), "/");
          echo "user";
          exit();
        }else {
          echo "admin";
          exit();
        }
  
        
      }

    if(mysqli_query($connect, $sql)):
        header('Location: ../login.php');
        
    else:
        header('Location: ../login.php');
        
    endif;
endif;
