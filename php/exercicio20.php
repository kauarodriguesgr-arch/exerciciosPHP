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
    <title> Leia um valor em metros e converta para centímetros.</title>
</head>
<body>
    <h1> Leia um valor em metros e converta para centímetros.</h1>

    <form method="POST">
        <label>Informe o valor em metros: </label>
        <input type="number" id="metros" name="metros"/>
        <br><br>

        <button type="submit">Converter</button>
    </form>

    <?php
      if(isset($_POST['metros'])){
         $metros = $_POST['metros'];

         $resultado = $funcoes->metrosEmCentimetros($metros);
         echo "O valor em centímetros é: " . $resultado;
      }
    ?>
    
</body>
</html>