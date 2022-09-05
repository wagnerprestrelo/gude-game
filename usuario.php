<?php 
session_start();
include "funcoes.php";
$link = conectarBancoDeDados();
if (isset($_GET["id"])) {
  $dados = pegarDadosUsuario($link, $_GET["id"]);
  $isUsuarioLogado = false;
} else {
  $dados = pegarDadosUsuario($link, $_SESSION["usuario_id"]);
  $isUsuarioLogado = true;
}
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
                    <p>Usuário: <?= $dados["login"] ?></p>
                    <p>Possui: <?= $dados["qtd_bolinhas"] ?> bolinhas de gude.</p>
                    <?php if ($isUsuarioLogado == true) { ?>
                      <div>
                          <a href='par_impar.php'>Par ou Ímpar</a>
                      </div>
                      <div>
                          <?php if ($dados["qtd_bolinhas"] < 5) { ?>
                              <button id="gerar-bolinhas">Gerar bolinhas</button>
                          <?php } else { ?>
                              <button disabled>Clique aqui quando estiver sem bolinhas</button>
                          <?php } ?>
                          <a href="logout.php">
                              <input type="submit" class="submit" value="Logout"/>
                          </a>
                      </div>
                    <?php } ?> 
                </div>
        </main>
        <footer>
            <div id="sobre">
                <p><a href="sobre.html">Sobre</a> </p>
            </div>
        </footer>

        <script>
            document.getElementById("gerar-bolinhas").onclick = function (){
                window.location = "gerar_bolinhas.php";
            }
        </script>
    </body>
</html>