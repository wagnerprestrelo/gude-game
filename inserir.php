<?php
$link = mysqli_connect("localhost", "root", "", "gude_game");
//echo $_POST['login'];
$query = "INSERT INTO usuarios (login, senha, email) VALUES ('{$_POST['login']}', '{$_POST['senha']}', '{$_POST['email']}')";

$result = mysqli_query($link, $query);
header('Location: cadastro.html');
//echo "<p> '{$_POST['login']}' cadastrado com sucesso.";
/* while ($row = mysqli_fetch_row($result)) {
    echo "<p> $row[0] - $row[1] - $row[2] </p>";
} */ 