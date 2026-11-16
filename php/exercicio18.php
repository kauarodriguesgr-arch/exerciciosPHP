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
    <title>Calcule o tempo restante de vida até 100 anos</title>
</head>
<body>
    <h1>Calcule o tempo restante de vida até 100 anos</h1>

    <form method="POST">
        <label>Informe a idade: </label>
        <input type="number" id="idade" name="idade"/>
        <br><br>

        <button type="submit">Calcular Tempo Restante</button>
    </form>

    <?php
      if(isset($_POST['idade'])){
         $idade = $_POST['idade'];

         $resultado = $funcoes->calcularTempoRestante($idade);
         echo "O tempo restante de vida até 100 anos é: " . $resultado . " dias.";
      }
    ?>
    
</body>
</html>