<?php 
session_start();
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
                    <div>
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