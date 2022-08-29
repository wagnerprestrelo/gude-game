<?php
session_start();
include "funcoes.php";
$link = conectarBancoDeDados();
removerBolinhas($link, 1);
header("Location: par_impar.php?vitoria=0&resultado={$_GET["resultado"]}");