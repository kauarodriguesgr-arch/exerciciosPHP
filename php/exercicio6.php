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
    <title>Converter Temperatura</title>
</head>
<body>
    <h1>Converter Temperatura</h1>

    <form method="POST">
        <label>Informe a temperatura em Celsius: </label>
        <input type="number" id="celsius" name="celsius"/>
        <br><br>

        <button type="submit">Converter
        <?php
         if(isset($_POST['celsius'])){
            $celsius = $_POST['celsius'];
            
            $resultado = $funcoes->celsiusParaFahrenheit($celsius);//utlizando o método da classe
         }
        ?>
        </button>
   </form>
    <?php
      if(isset($_POST['celsius'])){
         echo "A temperatura em Fahrenheit é: " .$resultado;
      }
    ?>     
</body>
</html>