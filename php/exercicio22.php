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
    <title>Converta um valor de dias para segundos.</title>
</head>
<body>
    <h1>Converta um valor de dias para segundos.</h1>

    <form method="POST">
        <label>Informe o valor em dias: </label>
        <input type="number" id="dias" name="dias"/>
        <br><br>

        <button type="submit">Converter</button>
    </form>

    <?php
      if(isset($_POST['dias'])){
         $dias = $_POST['dias'];

         $resultado = $funcoes->diasEmSegundos($dias);
         echo "O valor em segundos é: " . $resultado;
      }
    ?>
    
</body>
</html>