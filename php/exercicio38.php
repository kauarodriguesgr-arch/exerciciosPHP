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
    <title>Calcule a densidade de um objeto com base na massa e volume</title>
</head>
<body>
    <h1>Calcule a densidade de um objeto com base na massa e volume</h1>

    <form method="POST">
        <label>Informe a massa do objeto: </label>
        <input type="number" id="massa" name="massa" step="0.01"/>
        <br><br>

        <label>Informe o volume do objeto: </label>
        <input type="number" id="volume" name="volume" step="0.01"/>
        <br><br>

        <button type="submit">Calcular Densidade</button>
    </form>

    <?php
      if(isset($_POST['massa']) && isset($_POST['volume'])){
         $massa = $_POST['massa'];
         $volume = $_POST['volume'];

         $resultado = $funcoes->calcularDensidade($massa, $volume);
         echo "A densidade do objeto é: " . $resultado;
      }
    ?>
</body>
</html>