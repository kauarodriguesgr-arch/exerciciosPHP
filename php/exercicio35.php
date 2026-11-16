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
    <title>Leia o saldo de uma conta e adicione uma taxa fixa de rendimento</title>
</head>
<body>
    <h1>Leia o saldo de uma conta e adicione uma taxa fixa de rendimento</h1>

    <form method="POST">
        <label>Informe o saldo da conta: </label>
        <input type="number" id="saldo" name="saldo" step="0.01"/>
        <br><br>

        <button type="submit">Adicionar Rendimento</button>
    </form>

    <?php
      if(isset($_POST['saldo'])){
         $saldo = $_POST['saldo'];

         $resultado = $funcoes->adicionarRendimento($saldo);
         echo "O saldo com rendimento é: " . $resultado;
      }
    ?>
    
</body>
</html>