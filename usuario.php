<?php 
session_start();
$link = mysqli_connect("localhost", "root", "", "gude_game");
$result = mysqli_query($link, "SELECT qtd_bolinhas FROM usuarios WHERE login = '{$_SESSION["login"]}'");
$dados = mysqli_fetch_assoc($result);
?>

<html>
    <head>
        <title>Página do usuário</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/estilo_geral.css" />
    </head>
    <body>
        <header>
            <h1><a href="index.php">Gude Game</a></h1>
        </header>
            <main>
                <div id="conteudo">
                    <p>Bem-vindo <?= $_SESSION["login"] ?></p>
                    <p>Você possui: <?= $dados["qtd_bolinhas"] ?> bolinhas de gude.</p>
                    <div>
                        <?php if ($dados["qtd_bolinhas"] < 5) { ?>
                            <button>Gerar bolinhas</button>
                        <?php } else { ?>
                            <button disabled>Clique aqui quando estiver sem bolinhas</button>
                        <?php } ?>
                        <a href="logout.php">
                            <input type="submit" class="submit" value="Logout"/>
                        </a>
                    </div>
                </div>
        </main>
        <footer>
            <div id="sobre">
                <p><a href="sobre.html">Sobre</a> </p>
            </div>
        </footer>
    </body>
</html>