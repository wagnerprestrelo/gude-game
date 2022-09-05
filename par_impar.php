<?php
session_start();
include "funcoes.php";
if (! isset($_SESSION["usuario_id"])){
    header('Location: login.php');
}
$link = conectarBancoDeDados();
$dados = pegarDadosUsuario($link, $_SESSION["usuario_id"]);
?>

<html>
    <head>
        <title>Gude Game - Aposta de bolinhas de gude Online</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/estilo_geral.css" />
        <link rel="stylesheet" href="css/par_impar.css" />
    </head>
    <body>
        <header>
            <h1><a href="index.php">Gude Game</a></h1>
        </header>
        <main>
            <div id=container>
                <form id="jogador" action="logica_jogo.php">
                    <label for="par-impar">Par ou Ímpar?</label> <br>
                    <select id="par-impar" name="par-impar">
                    <option value="par">Par</option>
                    <option value="impar">Ímpar</option>
                    </select>
                    <br> <br>
                    <label for="num-jogador">Escolha um número: </label> <br>
                    <select id="num-jogador" name="num-jogador">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    </select>
                    <input type="submit" id="botao-escolha">Selecionar número</input>
                    <p id="escolha-jogador"></p>
                    <p>Vitórias: </p>
                    <p id="vitorias-jogador">0</p>
                </form>
                <div id="adversario">
                    <p>Número do adversário:</p>
                    <p id="escolha-adversario"></p>
                    <p>Vitórias: </p>
                    <p id="vitorias-adversario">0</p>
                </div>

                <?php if (isset($_GET["vitoria"])) { ?>
                  <div id ="resultado">
                    <p>Resultado: </p>
                    
                    <!--
                    <p id="resultado-jogador"></p>
                    <p id="soma"></p>
                    <p id="resultado-adversario"></p>
                    <p id="igual"></p>
                    <p id="resultado-final"></p>
                    <p id="resultado-par-impar"></p>
                    <p id="ganhou-ou-perdeu">
              -->
                        <?php
                        if (isset($_GET["vitoria"])) {
                            if ($_GET["vitoria"] == 1) {
                                echo "Vitória";
                            } else { 
                                echo "Derrota";
                            }
                        } 
                        echo "<br> O número foi ".$_GET["numero"];
                          if ($_GET["resultado"] == "par") {
                            echo "<br> Um número Par";
                          } else {
                            echo "<br> Um número Ímpar";
                          }
                        ?>
                    </p>
                  </div>
                <?php } ?>
                
                <div>
                    <p>Você possui: <?= $dados["qtd_bolinhas"] ?> bolinhas de gude.</p>
                </div>
            </div>
        </main>
        <footer>
            <div id="sobre">
                <p><a href="sobre.html">Sobre</a> </p>
            </div>
        </footer>

        <script src='js/par_impar.js'></script>
    </body>
</html>