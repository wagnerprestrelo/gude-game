<?php
$link = mysqli_connect("localhost", "root", "", "gude_game");
$result = mysqli_query($link, "SELECT id, login, senha FROM usuarios WHERE login = '{$_POST['login']}' AND senha = '{$_POST['senha']}'");

if ($result->num_rows > 0){
    session_start();
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $_SESSION["usuario_id"] = $row['id'];
    header('Location: usuario.php');
} else {
    echo "<p>Informações incorretas.</p>";
}