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
    <title>Leia um ângulo em graus e converta para radianos.</title>
</head>
<body>
    <h1> Leia um ângulo em graus e converta para radianos.</h1>

    <form method="POST">
        <label>Informe o ângulo em graus: </label>
        <input type="number" id="graus" name="graus"/>
        <br><br>

        <button type="submit">Converter</button>
    </form>

    <?php
      if(isset($_POST['graus'])){
         $graus = $_POST['graus'];

         $resultado = $funcoes->grausParaRadianos($graus);
         echo "O valor em radianos é: " . $resultado;
      }
    ?>
    
</body>
</html>