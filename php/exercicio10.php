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
    <title>Área do Triângulo</title>
</head>
<body>
    <h1>Calcular Área do Triângulo</h1>
    <form method="POST">
        <label>Base: </label>
        <input type="number" id="base" name="base" />
        <br><br>
        <label>Altura: </label>
        <input type="number" id="altura" name="altura" />
        <br><br>
        <button type="submit">Calcular Área</button>
    </form>
    <?php
      if(isset($_POST['base']) && isset($_POST['altura'])){
          $base = $_POST['base'];
          $altura = $_POST['altura'];
          $resultado = $funcoes->calcularAreaTriangulo($base, $altura);
          echo "A área do triângulo é: $resultado";
      }
    ?>
</body>
</html>