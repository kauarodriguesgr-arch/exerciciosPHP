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
    <title>Leia um valor e calcule sua raiz cúbica</title>
</head>
<body>
    <h1>Leia um valor e calcule sua raiz cúbica</h1>

    <form method="POST">
        <label>Informe o valor: </label>
        <input type="number" id="valor" name="valor"/>
        <br><br>

        <button type="submit">Calcular raiz cúbica</button>
    </form>

    <?php
      if(isset($_POST['valor'])){
         $valor = $_POST['valor'];

         $resultado = $funcoes->raizCubica($valor);
         echo "A raiz cúbica do valor é: " . $resultado;
      }
    ?>
    
</body>
</html>