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
    <title>10% de um valor</title>
</head>
<body>
    <h1>10% de um valor</h1>

    <form method="POST">
        <label>Informe o valor: </label>
        <input type="number" id="valor" name="valor"/>
        <br><br>

        <button type="submit">Calcular 10%
        <?php
         if(isset($_POST['valor'])){
            $valor = $_POST['valor'];
            
            $resultado = $funcoes->calcule10Porcento($valor);//utlizando o método da classe
         }
        ?>
        </button>
   </form>
    <?php
      if(isset($_POST['valor'])){
         echo "O 10% do valor é: " .$resultado;
      }
    ?>     
</body>
</html>