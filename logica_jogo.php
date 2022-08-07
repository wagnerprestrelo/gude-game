<?php 
$numjogador = $_GET["num-jogador"];
$numadversario = rand(0, 9);
$resultadofinal = $numjogador + $numadversario;
if ($resultadofinal % 2 == 0) {
  $resultadosoma = "par";
} else {
  $resultadosoma = "impar";
}
echo $numjogador;
echo $numadversario;
if ($_GET["par-impar"] == $resultadosoma) {
  echo "Você venceu!";
  session_start();
  $link = mysqli_connect("localhost", "root", "", "gude_game");

  $result = mysqli_query($link, "UPDATE usuarios SET qtd_bolinhas = qtd_bolinhas + 1 WHERE id = '{$_SESSION["usuario_id"]}'");
  header("Location: par_impar.php?vitoria=1&resultado={$_GET["resultado"]}");
} else {
  echo "Você perdeu.";
  session_start();
  $link = mysqli_connect("localhost", "root", "", "gude_game");

  $result = mysqli_query($link, "UPDATE usuarios SET qtd_bolinhas = qtd_bolinhas - 1 WHERE id = '{$_SESSION["usuario_id"]}'");
  header("Location: par_impar.php?vitoria=0&resultado={$_GET["resultado"]}");
}