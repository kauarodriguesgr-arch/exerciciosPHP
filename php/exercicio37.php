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
    <title>Leia uma temperatura em Fahrenheit e converta para Celsius</title>
</head>
<body>
    <h1>Leia uma temperatura em Fahrenheit e converta para Celsius</h1>

    <form method="POST">
        <label>Informe a temperatura em Fahrenheit: </label>
        <input type="number" id="fahrenheit" name="fahrenheit" step="0.01"/>
        <br><br>

        <button type="submit">Converter</button>
    </form>

    <?php
      if(isset($_POST['fahrenheit'])){
         $fahrenheit = $_POST['fahrenheit'];

         $resultado = $funcoes->fahrenheitParaCelsius($fahrenheit);
         echo "A temperatura em Celsius é: " . $resultado;
      }
    ?>
    
</body>
</html>