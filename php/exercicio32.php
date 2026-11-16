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
    <title>Leia um valor e exiba seu valor em porcentagem.</title>
</head>
<body>
    <h1>Leia um valor e exiba seu valor em porcentagem.</h1>

    <form method="POST">
        <label>Informe o valor: </label>
        <input type="number" id="valor" name="valor" step="0.01"/>
        <br><br>

        <label>Informe a porcentagem: </label>
        <input type="number" id="porcentagem" name="porcentagem" step="0.01"/>
        <br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
      if(isset($_POST['valor']) && isset($_POST['porcentagem'])){
         $valor = $_POST['valor'];
         $porcentagem = $_POST['porcentagem'];

         $resultado = $funcoes->calcularPorcentagem($valor, $porcentagem);
         echo "O valor em porcentagem é: " . $resultado;
      }
    ?>
</body>
</html>