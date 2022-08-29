<?php 
function conectarBancoDeDados() {
  $link = mysqli_connect("localhost", "root", "", "gude_game");
  return $link;
}

function logarUsuario($link) {
  $result = mysqli_query($link, "SELECT id, login, senha FROM usuarios WHERE login = '{$_POST['login']}' AND senha = '{$_POST['senha']}'");

  if ($result->num_rows > 0) {
    session_start();
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $_SESSION["usuario_id"] = $row['id'];
    return true;
  } else {
    return false;
  }
}

function inserirUsuario($link) {
  $result = mysqli_query($link, "SELECT login, email FROM usuarios WHERE login = '{$_POST['login']}' OR email = '{$_POST['email']}'");

  if ($result->num_rows > 0) {
    echo "<p>Usuário e/ou email já cadastrado(s).</p>";
  } else {
    $result = mysqli_query($link, "INSERT INTO usuarios (login, senha, email) VALUES ('{$_POST['login']}', '{$_POST['senha']}', '{$_POST['email']}')");
    header('Location: cadastro.html');
  }
}

function deslogarUsuario() {
  session_start();
  unset($_SESSION["usuario_id"]);
}

function gerarBolinhas($link, $id, $qtd=5) {
  $result = mysqli_query($link, "UPDATE usuarios SET qtd_bolinhas = $qtd WHERE id = $id");
}

function adicionarBolinhas($link, $qtd) {
  $result = mysqli_query($link, "UPDATE usuarios SET qtd_bolinhas = qtd_bolinhas + $qtd WHERE id = '{$_SESSION["usuario_id"]}'"); 
}

function removerBolinhas($link, $qtd) {
  $result = mysqli_query($link, "UPDATE usuarios SET qtd_bolinhas = qtd_bolinhas - $qtd WHERE id = '{$_SESSION["usuario_id"]}'");
}