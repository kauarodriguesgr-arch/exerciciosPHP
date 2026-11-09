<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php");//Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes;//Acessando a classe

    $funcoes = new Funcoes();//Criando um vínculo com a classe Funcoes
    $resultado = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distância, tempo e calcular velocidade média</title>
</head>
<body>
    <h1>Calcular Velocidade Média</h1>

    <form method="POST">
        <label>Informe a distância (em metros): </label>
        <input type="number" id="distancia" name="distancia"/>
        <br><br>

        <label>Informe o tempo (em segundos): </label>
        <input type="number" id="tempo" name="tempo"/>
        <br><br>

        <button type="submit">Calcular Velocidade Média</button>
    </form>

    <?php
      if(isset($_POST['distancia']) && isset($_POST['tempo'])){
         $distancia = $_POST['distancia'];
         $tempo = $_POST['tempo'];

         $velocidade = $funcoes->calcularVelocidadeMedia($distancia, $tempo);
         echo "A velocidade média é: " . $velocidade . " m/s";
      }
    ?>
    
</body>
</html>