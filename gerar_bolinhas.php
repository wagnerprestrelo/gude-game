<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "gude_game");

$result = mysqli_query($link, "UPDATE usuarios SET qtd_bolinhas = 5 WHERE id = '{$_SESSION["usuario_id"]}'");
header('Location: usuario.php');