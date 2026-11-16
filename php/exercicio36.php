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
    <title>Calcule o gasto de energia elétrica com base em potência e tempo de uso</title>
</head>
<body>
    <h1>Calcule o gasto de energia elétrica com base em potência e tempo de uso</h1>

    <form method="POST">
        <label>Informe a potência (em watts): </label>
        <input type="number" id="potencia" name="potencia"/>
        <br><br>

        <label>Informe o tempo de uso (em horas): </label>
        <input type="number" id="tempo" name="tempo"/>
        <br><br>

        <label>Informe o custo por kWh: </label>
        <input type="number" id="custoPorKwh" name="custoPorKwh" step="0.01"/>
        <br><br>

        <button type="submit">Calcular Gasto</button>
    </form>

    <?php
      if(isset($_POST['potencia']) && isset($_POST['tempo']) && isset($_POST['custoPorKwh'])){
         $potencia = $_POST['potencia'];
         $tempo = $_POST['tempo'];

         $resultado = $funcoes->calcularGastoEnergia($potencia, $tempo);
         echo "O gasto de energia elétrica é: " . $resultado . " kWh.";
      }
    ?>
    
</body>
</html>