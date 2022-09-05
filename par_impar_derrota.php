<?php
session_start();
include "funcoes.php";
$link = conectarBancoDeDados();
removerBolinhas($link, $_SESSION["usuario_id"], 1);
header("Location: par_impar.php?vitoria=0&resultado={$_GET["resultado"]}");