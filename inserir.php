<?php
$link = mysqli_connect("localhost", "root", "", "gude_game");
//echo $_POST['login'];
//$query = "SELECT login FROM usuarios WHERE login = '{$_POST['login']}'";
$result = mysqli_query($link, "SELECT login, email FROM usuarios WHERE login = '{$_POST['login']}' OR email = '{$_POST['email']}'");

if ($result->num_rows > 0){
    echo "<p>Usuário e/ou email já cadastrado(s).</p>";
} else {
    $result = mysqli_query($link, "INSERT INTO usuarios (login, senha, email) VALUES ('{$_POST['login']}', '{$_POST['senha']}', '{$_POST['email']}')");
    header('Location: cadastro.html');
}


//echo "<p> '{$_POST['login']}' cadastrado com sucesso.";
/* while ($row = mysqli_fetch_row($result)) {
    echo "<p> $row[0] - $row[1] - $row[2] </p>";
} */ 