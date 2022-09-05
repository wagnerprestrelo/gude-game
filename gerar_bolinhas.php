<?php
session_start();
include "funcoes.php";
$link = conectarBancoDeDados();
gerarBolinhas($link, $_SESSION["usuario_id"], 5);
header('Location: usuario.php');