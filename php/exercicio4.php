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
    <title>Raiz Quadrada</title>
</head>
<body>
    <h1>Informe o número que deseja calcular a raiz quadrada: </h1>
    <form method="POST">
        <label>Informe o número: </label>
        <input type="number" id="numero" name="numero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
         if(isset($_POST['numero'])){
         $num1 = $_POST['numero'];
         
         $resultado = $funcoes->calcularRaizQuadrada($num1);//utlizando o método da classe
         }
        ?>
        </button>
    </form>
    <?php
      echo "O resultado da raiz quadrada é: " .$resultado;
    ?>
</body>
</html>