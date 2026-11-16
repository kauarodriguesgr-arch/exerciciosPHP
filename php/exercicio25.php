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
    <title> Calcule a hipotenusa de um triângulo retângulo com base nos catetos.</title>
</head>
<body>
    <h1> Calcule a hipotenusa de um triângulo retângulo com base nos catetos.</h1>

    <form method="POST">
        <label>Informe o comprimento do primeiro cateto: </label>
        <input type="number" id="cateto1" name="cateto1"/>
        <br><br>

        <label>Informe o comprimento do segundo cateto: </label>
        <input type="number" id="cateto2" name="cateto2"/>
        <br><br>

        <button type="submit">Calcular hipotenusa</button>
    </form>

    <?php
      if(isset($_POST['cateto1']) && isset($_POST['cateto2'])){
         $cateto1 = $_POST['cateto1'];
         $cateto2 = $_POST['cateto2'];

         $resultado = $funcoes->calcularHipotenusa($cateto1, $cateto2);
         echo "A hipotenusa é: " . $resultado;
      }
    ?>
</body>
</html>