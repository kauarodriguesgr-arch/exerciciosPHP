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
    <title> Leia três valores e exiba a soma e média.</title>
</head>
<body>
    <h1> Leia três valores e exiba a soma e média.</h1>

    <form method="POST">
        <label>Informe o primeiro valor: </label>
        <input type="number" id="valor1" name="valor1"/>
        <br><br>

        <label>Informe o segundo valor: </label>
        <input type="number" id="valor2" name="valor2"/>
        <br><br>

        <label>Informe o terceiro valor: </label>
        <input type="number" id="valor3" name="valor3"/>
        <br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
      if(isset($_POST['valor1']) && isset($_POST['valor2']) && isset($_POST['valor3'])){
         $valor1 = $_POST['valor1'];
         $valor2 = $_POST['valor2'];
         $valor3 = $_POST['valor3'];

         $resultado = $funcoes->mediaTresValores($valor1, $valor2, $valor3);
         echo "A média dos valores é: " . $resultado;
      }
    ?>
    
</body>
</html>