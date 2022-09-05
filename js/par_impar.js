var vitJogador = 0;
var vitAdversario = 0;

function escolhaJogador(){
    var numJogador = parseInt(document.getElementById("num-jogador").value);
    document.getElementById("escolha-jogador").innerHTML = numJogador;
    var numAdversario = parseInt(Math.random() * 10);
    document.getElementById("escolha-adversario").innerHTML = numAdversario;
    //document.getElementById("botao-escolha").disabled = true;
    var resultadoFinal = numJogador + numAdversario;
    document.getElementById("resultado-jogador").innerHTML = numJogador;
    document.getElementById("soma").innerHTML = " + ";
    document.getElementById("resultado-adversario").innerHTML = numAdversario;
    document.getElementById("igual").innerHTML = " = "
    document.getElementById("resultado-final").innerHTML = resultadoFinal;
    if(resultadoFinal % 2 == 0){
        document.getElementById("resultado-par-impar").innerHTML = "<p>O resultado foi um número par.</p>";
        var resultadoParImpar = "par"
    } else{
        document.getElementById("resultado-par-impar").innerHTML = "<p>O resultado foi um número ímpar.</p>";
        var resultadoParImpar = "impar"
    }
    var parOuImpar = document.getElementById("par-impar");
    if (parOuImpar.value == resultadoParImpar) {
    var parOuImpar = document.getElementById("par-impar");
        window.location = "par_impar_vitoria.php?resultado="+resultadoFinal;
        /*document.getElementById("ganhou-ou-perdeu").innerHTML = "<p>Você venceu!</p>";
        vitJogador++;
        document.getElementById("vitorias-jogador").innerHTML = vitJogador;*/
    } else {
        window.location = "par_impar_derrota.php?resultado="+resultadoFinal;
        /*document.getElementById("ganhou-ou-perdeu").innerHTML = "<p>Você perdeu.</p>";
        vitAdversario++;
        document.getElementById("vitorias-adversario").innerHTML = vitAdversario;*/
    }
}