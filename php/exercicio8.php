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
    <title>Ler a idade</title>
</head>
<body>

<h1> Leia a idade de uma pessoa em anos e exiba em meses.</h1>

    <form method="POST">
        <label>Informe a idade: </label>
        <input type="number" id="idade" name="idade"/>
        <br><br>

        <button type="submit">Resultado
        <?php
         if(isset($_POST['idade'])){
            $idade = $_POST['idade'];
            
            $resultado = $funcoes->calcularIdadeEmMeses($idade);//utlizando o método da classe
         }
        ?>
        </button>
   </form>
    <?php
      if(isset($_POST['idade'])){
         echo "A idade em meses é: " .$resultado;
      }
    ?>
    
</body>
</html>