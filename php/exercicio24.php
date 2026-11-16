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
    <title> Leia um número e exiba seu inverso multiplicativo. </title>
</head>
<body>
    <h1> Leia um número e exiba seu inverso multiplicativo. </h1>

    <form method="POST">
        <label>Informe o número: </label>
        <input type="number" id="numero" name="numero"/>
        <br><br>

        <button type="submit">Exibir inverso multiplicativo</button>
    </form>

    <?php
      if(isset($_POST['numero'])){
         $numero = $_POST['numero'];

         $resultado = $funcoes->inversoMultiplicativo($numero);
         echo "O inverso multiplicativo é: " . $resultado;
      }
    ?>
    
</body>
</html>