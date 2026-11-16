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
    <title>Leia um número e exiba sua parte inteira e decimal</title>
</head>
<body>

    <h1>Leia um número e exiba sua parte inteira e decimal</h1>

    <form method="POST">
        <label>Informe o número: </label>
        <input type="number" id="numero" name="numero" step="0.01"/>
        <br><br>

        <button type="submit">Exibir partes</button>
    </form>

    <?php
      if(isset($_POST['numero'])){
         $numero = $_POST['numero'];

         $resultado = $funcoes->partesInteiraDecimal($numero);
         echo "A parte inteira é: " . $resultado['inteira'] . "<br>";
         echo "A parte decimal é: " . $resultado['decimal'];
      }
    ?>
    
</body>
</html>