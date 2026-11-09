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
    <title>Media Aritmética</title>
</head>
<body>
    <h1>Calcular Média Aritmética</h1>

    <form method="POST">
        <label>Informe o primeiro número: </label>
        <input type="number" id="num1" name="num1"/>
        <br><br>

        <label>Informe o segundo número: </label>
        <input type="number" id="num2" name="num2"/>
        <br><br>

        <button type="submit">Calcular Média Aritmética</button>
    </form>

    <?php
      if(isset($_POST['num1']) && isset($_POST['num2'])){
         $num1 = $_POST['num1'];
         $num2 = $_POST['num2'];

         $resultado = $funcoes->mediaAritmetica($num1, $num2);
         echo "A média aritmética é: " . $resultado;
      }
    ?>
</body>
</html>