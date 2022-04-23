<?php
$link = mysqli_connect("localhost", "root", "", "gude_game");

$result = mysqli_query($link, "SELECT login, senha FROM usuarios WHERE login = '{$_POST['login']}' AND senha = '{$_POST['senha']}'");

if ($result->num_rows > 0){
    echo "<p>Usuário existe.</p>";
} else {
    echo "<p>Informações incorretas.</p>";
}