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
    <title>Caixa retangular</title>
</head>
<body>
    <h1>Calcular Volume da Caixa Retangular</h1>
    <form method="POST">
        <label>Comprimento: </label>
        <input type="number" id="comprimento" name="comprimento"/>
        <br><br>
        <label>Largura: </label>
        <input type="number" id="largura" name="largura"/>
        <br><br>
        <label>Altura: </label>
        <input type="number" id="altura" name="altura"/>
        <br><br>
        <button type="submit">Calcular Volume</button>
    </form>
    <?php
      if(isset($_POST['comprimento']) && isset($_POST['largura']) && isset($_POST['altura'])){
          $comprimento = $_POST['comprimento'];
          $largura = $_POST['largura'];
          $altura = $_POST['altura'];
          $resultado = $funcoes->calcularCaixaRetangular($comprimento, $largura, $altura);
          echo "O volume da caixa retangular é: $resultado";
      }
    ?>
</body>
</html>