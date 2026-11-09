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
    <title>Exibir se um número é ímpar ou par</title>
</head>
<body>
    <h1>Leia um número e exiba se ele é ímpar ou par: </h1>
    <form method="POST">
        
        <label>Informe o número: </label>
        <input type="number" id="numero" name="numero"/>
        <br><br>

        <button type="submit">Exibir
        <?php
         if(isset($_POST['numero'])){
            $num1 = $_POST['numero'];
            
            $resultado = $funcoes->parOuImpar($num1);//utlizando o método da classe
         }
        ?>
        </button>
    </form>
    <?php
      echo $resultado;
    ?>
</body>
</html>