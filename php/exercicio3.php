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
    <title>Calcule a média entre três números.</title>
</title>
</head>
<body>
     <h1>Leia três números e exiba a média: </h1>
    <form method="POST">
        <label>Informe o primeiro número: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe o segundo número: </label>
        <input type="number" id="segundoNumero" name="segundoNumero"/>
        <br><br>

        <label>Informe o terceiro número: </label>
        <input type="number" id="terceiroNumero" name="terceiroNumero"/>
        <br><br>

        <button type="submit">Calcular Média
        <?php
         if(isset($_POST['primeiroNumero'])){
         $num1 = $_POST['primeiroNumero'];
         $num2 = $_POST['segundoNumero'];
         $num3 = $_POST['terceiroNumero'];

         $resultado = $funcoes->calcularMedia($num1,$num2,$num3);//utlizando o método da classe
         }
        ?>
        </button>
    </form>
    <?php
      echo "O resultado da média é: " .$resultado;
    ?>

    
</body>
</html>