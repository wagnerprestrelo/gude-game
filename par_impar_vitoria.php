<?php
session_start();
include "funcoes.php";
$link = conectarBancoDeDados();
adicionarBolinhas($link, 1);
header("Location: par_impar.php?vitoria=1&resultado={$_GET["resultado"]}");
