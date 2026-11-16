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
    <title>Calcule o salário mensal a partir do valor da hora e horas trabalhadas.</title>
</head>
<body>
    <h1>Calcule o salário mensal a partir do valor da hora e horas trabalhadas.</h1>

    <form method="POST">
        <label>Informe o valor da hora: </label>
        <input type="number" id="valorHora" name="valorHora"/>
        <br><br>

        <label>Informe a quantidade de horas trabalhadas: </label>
        <input type="number" id="horasTrabalhadas" name="horasTrabalhadas"/>
        <br><br>

        <button type="submit">Calcular Salário Mensal</button>
    </form>

    <?php
      if(isset($_POST['valorHora']) && isset($_POST['horasTrabalhadas'])){
         $valorHora = $_POST['valorHora'];
         $horasTrabalhadas = $_POST['horasTrabalhadas'];

         $resultado = $funcoes->calcularSalarioMensal($valorHora, $horasTrabalhadas);
         echo "O salário mensal é: " . $resultado;
      }
    ?>
    
</body>
</html>