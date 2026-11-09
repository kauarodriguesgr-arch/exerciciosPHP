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
    <title>Quadrado e Cubo</title>
</head>
<body>
    <h1>Receba um número e calcule o quadrado e o cubo</h1>
    <form method="POST">
        <label>Informe o número: </label>
        <input type="number" id="numero" name="numero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
         if(isset($_POST['numero'])){
            $num1 = $_POST['numero'];
            
            $resultado = $funcoes->calcularQuadradoECubo($num1);//utlizando o método da classe
         }
        ?>
        </button>    
    </form>
    <?php
      echo $resultado;
    ?>    

</body>
</html>