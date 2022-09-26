<?php 
session_start();
include "funcoes.php";
$link = conectarBancoDeDados();
//pegar quantidade de bolinhas do jogador
$dados = pegarDadosUsuario($link, $_SESSION["usuario_id"]);

if ($dados["qtd_bolinhas"] == 0) {
  exit("Você não possui mais bolinhas para jogar.");
}

$numjogador = $_GET["num-jogador"];
$numaposta = $_GET["num-bolinhas"];
$numadversario = rand(0, 9);
$resultadofinal = $numjogador + $numadversario;
if ($resultadofinal % 2 == 0) {
  $resultadosoma = "par";
} else {
  $resultadosoma = "impar";
}
//echo $numjogador;
//echo $numadversario;

if ($_GET["par-impar"] == $resultadosoma) {
  //echo "Você venceu!";
  adicionarBolinhas($link, $_SESSION["usuario_id"], $numaposta);
  header("Location: par_impar.php?vitoria=1&resultado=$resultadosoma&numero=$resultadofinal");
} else {
  //echo "Você perdeu.";
  removerBolinhas($link, $_SESSION["usuario_id"], $numaposta);
  header("Location: par_impar.php?vitoria=0&resultado=$resultadosoma&numero=$resultadofinal");
}