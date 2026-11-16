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
    <title>Calcule o montante de uma aplicação com juros simples.</title>
</head>
<body>
    <h1>Calcule o montante de uma aplicação com juros simples.</h1>

    <form method="POST">
        <label>Informe o capital: </label>
        <input type="number" id="capital" name="capital"/>
        <br><br>

        <label>Informe a taxa de juros (%): </label>
        <input type="number" id="taxa" name="taxa"/>
        <br><br>

        <label>Informe o tempo (em anos): </label>
        <input type="number" id="tempo" name="tempo"/>
        <br><br>

        <button type="submit">Calcular Montante</button>
    </form>

    <?php
      if(isset($_POST['capital']) && isset($_POST['taxa']) && isset($_POST['tempo'])){
         $capital = $_POST['capital'];
         $taxa = $_POST['taxa'];
         $tempo = $_POST['tempo'];

         $resultado = $funcoes->calcularMontanteJurosSimples($capital, $taxa, $tempo);
         echo "O montante da aplicação é: " . $resultado;
      }
    ?>
    
</body>
</html>