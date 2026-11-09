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
    <title>Área do Círculo</title>
</head>
<body>
    <h1>Informe o valor do raio do círculo: </h1>
    <form method="POST">
        <label>Informe o raio: </label>
        <input type="number" id="raio" name="raio"/>
        <br><br>

        <button type="submit">Calcular
        <?php
         if(isset($_POST['raio'])){
         $raio = $_POST['raio'];
         
         $resultado = $funcoes->raioDoCirculo($raio);//utlizando o método da classe
         }
        ?>
        </button>
    </form>
    <?php
      echo "O resultado da área do círculo é: " .$resultado;
    ?>
</body>
</html>