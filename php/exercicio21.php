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
    <title>Calcule a área de um trapézio com base na base maior, base menor e altura. </title>
</head>
<body>
    <h1>Calcule a área de um trapézio com base na base maior, base menor e altura. </h1>

    <form method="POST">
        <label>Informe o valor da base maior: </label>
        <input type="number" id="baseMaior" name="baseMaior"/>
        <br><br>

        <label>Informe o valor da base menor: </label>
        <input type="number" id="baseMenor" name="baseMenor"/>
        <br><br>

        <label>Informe o valor da altura: </label>
        <input type="number" id="altura" name="altura"/>
        <br><br>

        <button type="submit">Calcular Área</button>
    </form>

    <?php
      if(isset($_POST['baseMaior']) && isset($_POST['baseMenor']) && isset($_POST['altura'])){
         $baseMaior = $_POST['baseMaior'];
         $baseMenor = $_POST['baseMenor'];
         $altura = $_POST['altura'];

         $resultado = $funcoes->calcularAreaTrapezio($baseMaior, $baseMenor, $altura);
         echo "A área do trapézio é: " . $resultado;
      }
    ?>
    
</body>
</html>