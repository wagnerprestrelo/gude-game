<?php
include "funcoes.php";
$link = conectarBancoDeDados();
$resultado = logarUsuario($link);
if ($resultado == true) {
  header('Location: usuario.php');
} else {
  echo "<p>Informações incorretas.</p>";
}