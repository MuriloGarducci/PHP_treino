<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="Main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIGANTE</title>
<body>
    <header>
        <h1>Treino</h1>
    </header>
    <Main>
        <p>Esse site funciona da seguinte forma: Para que você possa jogar seu lolzinho, seu CS, ou qualquer jogo que seja informado e atualizado para as médias desse sites, será passado um treino, como um "1 morte uma flexão", adaptado corretamente claro</p>
        <p>Com o intuito de não deixar totalmente sedentário, ou algo do tipo. Possa haver tambémuma atualização deste site envolvendo estudos, como uma forma de jogar e estudar em seguida, para cumprir seus desafios, e além de "se divertir" jogando, você ainda tem uma mkotivação para estudar, caso você não seja um fujão de desafios medíocres, claro</p>
<br><br>
<form method="POST" action="?" id="escolha">
    <table>
    <tr>
    <!-- <td><label for="escolha">Escolha um jogo: </label><select name="escolha"> <option value="lol">League of Legends</option><option value="CS">Counter Strike</option></select><br></td></tr> -->
    <tr><td><label for="escolha">Quantas kills? </label><input type="number" name="kill"><br></td></tr>
    <tr><td><label for="escolha">Quantas mortes? </label><input type="number" name="morte"><br></td></tr>
    <tr><td><label for="escolha">Quantas assistências? </label><input type="number" name="assist"><br></td></tr>
    <tr><td><label for="escolha">Quanto de Farm?</label><input type="number" name="farm"><br></td></tr>
    <tr>
        <td><label for="escolha">minutos:</label> <input type="number" name="minutos" id="minuto"></td>
    </tr>
    <tr><td><label for="escolha">segundos:</label> <input type="number" name="segundos" id="segundos"></td></tr>
    <tr><td><label for="escolha">Qual dia: </label><select name="dia"><option value="superior">Superior</option><option value="inferior">Inferior</option></select><br></td></tr>
    <tr><td><input type="reset" class="final-etap" value="Limpar"><input class="final-etap" type="submit" value="Enviar"></tr>
    </tr>
    </table>
</form><br><br><br><hr>
<?php
// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Define as variáveis
    $farm = isset($_POST['farm'])?$_POST['farm']:0;
    $minutos = isset($_POST['minutos'])?$_POST['minutos']:0;;
    $segundos = isset($_POST['segundos'])?$_POST['segundos']:0;;
    // $escolha = isset($_POST['escolha'])?$_POST['escolha']:0;;
    $kill = isset($_POST['kill'])?$_POST['kill']:0;;
    $morte = isset($_POST['morte'])?$_POST['morte']:0;;
    $assist = isset($_POST['assist'])?$_POST['assist']:0;;
    $dia = isset($_POST['dia'])?$_POST['dia']:0;;
    $tempo = (($minutos * 60)+$segundos)/40;
    

    // Verifica se os campos foram preenchidos
    if (empty($kill) || empty($morte) || empty($assist)) {
        echo "Por favor, preencha todos os campos.";
    } else {
        // Verifica se os valores são válidos
        if (!is_numeric($kill) || !is_numeric($morte) || !is_numeric($assist)) {
            echo "Por favor, insira números válidos.";
        } else {
            // Processa os dados
            
                echo "O seu KDA foi de:  $kill/$morte/$assist";
                if ($dia == "superior") {
                    echo "<br>Quantidade de flexão diamante: $kill";
                    echo "<br>Quantidade de flexão: $morte";
                    echo "<br>Quantidade de Dips: ",$assist;
                    echo "<br> Quantidade de abdominais: ",round($farm/10);
                    echo "<br>A quantidade de tempo em prancha: ",round($tempo-8);
                } elseif ($dia == "inferior") {
                    echo "<br>Quantidade de flexão plantar unilateral: ",$kill*3;
                    echo "<br>Quantidade de agachamentos: ",$morte+10;
                    echo "<br>Quantidade agachamento sumô: ",$assist;
                    echo "<br>Quantidade de passada andando: ",round($farm/10);
                    echo "<br>Quantidade de tempo em cadeirinha: ",round($tempo-8);
                }
                
            
        }
    }
}
?>
    </Main>
</body>
</html>