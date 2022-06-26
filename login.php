<?php
session_start();
if (isset($_SESSION["usuario_id"])){
    header('Location: usuario.php');
}
?>

<html>
    <head>
        <title>Gude Game - Aposta de bolinhas de gude Online</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/estilo_geral.css" />
    </head>
    <body>
        <header>
            <h1><a href="index.php">Gude Game</a></h1>
        </header>
        <main>
            <form action="processar_login.php" method="post" onsubmit="return validar()">
                <fieldset>
                    <legend>Login</legend>
                    <div>
                        <label for="login">Usuário:</label> 
                        <input name ="login" id="login" class="login" type="text" placeholder="Digite seu nome de usuário" />
                    </div>
                    <div>
                        <label for="senha">Senha:</label> 
                        <input name ="senha" id = "senha" class="senha" type="password" placeholder="Digite sua senha" />
                    </div>
                    <div>
                        <input type="submit" class="submit" value="Logar"/>
                        <a href="cadastro.html">Cadastro</a>
                    </div>
                </fieldset>
            </form>
        </main>
        <footer>
            <div id="sobre">
                <p><a href="sobre.html">Sobre</a> </p>
            </div>
        </footer>
    </body>

    <script>
        function validar(){
            var login = document.getElementById("login").value;
            var senha = document.getElementById("senha").value;
            if (login == "") {
                alert ("Login não preenchido");
                return false;
            }
            if (senha == "") {
                alert ("Senha não preenchida");
                return false;
            } else {
                return true;
            }
        }
    </script>
</html>