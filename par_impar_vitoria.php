<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "gude_game");

$result = mysqli_query($link, "UPDATE usuarios SET qtd_bolinhas = qtd_bolinhas + 1 WHERE id = '{$_SESSION["usuario_id"]}'");
header('Location: par_impar.php?vitoria=1');