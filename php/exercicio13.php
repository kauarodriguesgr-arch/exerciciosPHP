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
    <title>Imposto de 18 por cento</title>
</head>
<body>
    <h1> Leia o preço de um produto e adicione 18% de imposto.</h1>

    <form method="POST">
        <label>Informe o preço: </label>
        <input type="number" id="preco" name="preco"/>
        <br><br>

        <button type="submit">Resultado
        <?php
         if(isset($_POST['preco'])){
            $preco = $_POST['preco'];
            
            $resultado = $funcoes->adicionar18porcentoimposto($preco);//utlizando o método da classe
         }
        ?>
        </button>
</form>
    <?php
      if(isset($_POST['preco'])){
         echo "O acréscimo de imposto é de: " .$resultado;
      }
    ?>
    
    
</body>
</html>