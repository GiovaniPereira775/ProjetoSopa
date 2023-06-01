<?php 
  session_start(); 
  include "./conexao.php";

  if (isset($_POST["login"]) && isset($_POST["senha"])) {
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $query = 'SELECT * from cadastro where login = "'.$login.'" and senha = "'.$senha.'" ';

    $_SESSION["login"] = $login;
    $_SESSION["logado"] = true;

    header("Location: index.php");

  } else {
    // Se os índices "login" e "senha" não existirem no array $_POST,
    // redirecione o usuário para a página de login
    header("Location: login.php");
    exit;
  }
?>
