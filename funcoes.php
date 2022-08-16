<?php 
function conectarBancoDeDados() {
  $link = mysqli_connect("localhost", "root", "", "gude_game");
  return $link;
}

function logarUsuario($link) {
  $result = mysqli_query($link, "SELECT id, login, senha FROM usuarios WHERE login = '{$_POST['login']}' AND senha = '{$_POST['senha']}'");

  if ($result->num_rows > 0){
    session_start();
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $_SESSION["usuario_id"] = $row['id'];
    header('Location: usuario.php');
  } else {
    echo "<p>Informações incorretas.</p>";
  }
}

function inserirUsuario($link) {
  $result = mysqli_query($link, "SELECT login, email FROM usuarios WHERE login = '{$_POST['login']}' OR email = '{$_POST['email']}'");

  if ($result->num_rows > 0){
    echo "<p>Usuário e/ou email já cadastrado(s).</p>";
  } else {
    $result = mysqli_query($link, "INSERT INTO usuarios (login, senha, email) VALUES ('{$_POST['login']}', '{$_POST['senha']}', '{$_POST['email']}')");
    header('Location: cadastro.html');
  }
}