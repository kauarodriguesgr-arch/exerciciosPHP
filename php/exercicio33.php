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
    <title> Calcule a média ponderada entre três notas com pesos diferentes</title>
</head>
<body>
    <h1> Calcule a média ponderada entre três notas com pesos diferentes</h1>

    <form method="POST">
        <label>Informe a primeira nota: </label>
        <input type="number" id="nota1" name="nota1"/>
        <br><br>

        <label>Informe o peso da primeira nota: </label>
        <input type="number" id="peso1" name="peso1"/>
        <br><br>

        <label>Informe a segunda nota: </label>
        <input type="number" id="nota2" name="nota2"/>
        <br><br>

        <label>Informe o peso da segunda nota: </label>
        <input type="number" id="peso2" name="peso2"/>
        <br><br>

        <label>Informe a terceira nota: </label>
        <input type="number" id="nota3" name="nota3"/>
        <br><br>

        <label>Informe o peso da terceira nota: </label>
        <input type="number" id="peso3" name="peso3"/>
        <br><br>

        <button type="submit">Calcular Média Ponderada</button>
    </form>

    <?php
      if(isset($_POST['nota1']) && isset($_POST['peso1']) && isset($_POST['nota2']) && isset($_POST['peso2']) && isset($_POST['nota3']) && isset($_POST['peso3'])){
         $nota1 = $_POST['nota1'];
         $peso1 = $_POST['peso1'];
         $nota2 = $_POST['nota2'];
         $peso2 = $_POST['peso2'];
         $nota3 = $_POST['nota3'];
         $peso3 = $_POST['peso3'];

         $resultado = $funcoes->mediaPonderada($nota1, $peso1, $nota2, $peso2, $nota3, $peso3);
         echo "A média ponderada é: " . $resultado;
      }
    ?>

    
</body>
</html>