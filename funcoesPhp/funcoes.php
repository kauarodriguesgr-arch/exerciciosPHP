<?php
    namespace Projeto\Exercicios\funcoesPhp;

    Class Funcoes{
     
     private float $num1;
     private float $num2;
     private float $resultado;

     //Criando um construtor = Instância as variáveis -> Cria as variáveis na memória do Servidor
     public function __construct(){
        $this->num1 = 0;
        $this->num2 = 0;
        $this->resultado = 0;
     }//Fim do Construtor

     //Métodos de acesso e modificadores
      public function __get(string $dado):mixed
      {
        return $this->dado;
      }//FIm do Get

      public function __set(string $variavel, string $novoDado):void
      {
        $this->variavel = $novoDado;
      }//Fim do Set

      public function somarDoisNumeros(float $num1, float $num2){
        $this->resultado = $num1 + $num2;
        return $this->resultado;
        }//Fim do Método Somar

        public function subtrairDoisNumeros(float $num1, float $num2){
        $this->resultado = $num1 - $num2;
        return $this->resultado;
        }//Fim do Método Subtrair

        public function multiplicarDoisNumeros(float $num1, float $num2){
        $this->resultado = $num1 * $num2;
        return $this->resultado;
        }//Fim do Método Multiplicar

        public function dividirDoisNumeros(float $num1, float $num2){
            if($num2 <=0){
                return "Impossível dividir por zero!";
            }else{
                $this->resultado = $num1 / $num2;
                return $this->resultado;
            }
        }//Fim do Método Dividir

        public function delta(int $a, int $b, int $c){
          $delta = pow($b,2)-4*$a*$c;
          return $delta;

        }//fim do delta
        
        public function calcularX1X2(int $a, int $b, int $c){
            $del = $this->delta($a,$b,$c);
            if($del < 0){
                return "Impossível calcular X1 e X2, delta negativo!";
            }
            else{
                $x1 = (-$b + sqrt($del))/(2*$a);
                $x2 = (-$b - sqrt($del))/(2*$a);
                return "X1 = $x1 <br><br> X2 = $x2";
            }
         }//fim do método

        public function calcularDobro(float $num1){
            $this->resultado = $num1 * 2; //Multiplicando o número por 2
            return $this->resultado; //Input do resultado
        }//fim do método

        public function calcularMedia(float $num1, float $num2, float $num3){
            $this->resultado = ($num1 + $num2 + $num3)/3; //Calculando a média entre os três números
            return $this->resultado;
        }//fim do método

        public function calcularRaizQuadrada(float $num1){
            $this->resultado = sqrt($num1);
            return $this->resultado;
        }//fim do método

        public function raioDoCirculo(float $raio){
            $this->resultado = 3.14 * pow($raio,2);
            return $this->resultado;
        }//fim do método
        
        public function celsiusParaFahrenheit(float $celsius){
            $this->resultado = ($celsius * 9/5) + 32;
            return $this->resultado;
        }//fim do método

        public function calcule10Porcento(float $num1){
            $this->resultado = $num1 * 0.10;
            return $this->resultado;
        }//fim do método

         public function calcularIdadeEmMeses(int $idade){
            $this->resultado = $idade * 12;
            return $this->resultado;
        }//fim do método

        public function parOuImpar(int $num1){
            if($num1 % 2 == 0){ //Calculo do número par ou ímpar
                return "O número $num1 é par!"; //Input caso o número seja par
               
            }else{
                return "O número $num1 é ímpar!"; //Input caso o número seja ímpar
            }
        }//fim do método

        public function calcularAreaTriangulo(float $base, float $altura){
            $this->resultado = ($base * $altura)/2;
            return $this->resultado;
        }//fim do método

        public function calcularCaixaRetangular (float $comprimento, float $largura, float $altura){
            $volume = $comprimento * $largura * $altura;
            return $volume;
        }//fim do método

        public function calcularQuadradoECubo(float $num1){
            $quadrado = pow($num1,2);
            $cubo = pow($num1,3);
            return "O quadrado do número $num1 é: $quadrado <br><br> O cubo do número $num1 é: $cubo";
        }//fim do método

        public function adicionar18porcentoimposto(float $preco){
            $this->resultado = $preco * 0.18;
            return $this->resultado;
        }//fim do método

        public function calcularVelocidadeMedia(float $distancia, float $tempo){
            $velocidade = $distancia / $tempo;
            return $velocidade;
        }//fim do método

        public function mediaAritmetica(float $num1, float $num2){
            $this->resultado = ($num1 + $num2)/2;
            return $this->resultado;
        }//fim do método

        public function calcularSalarioMensal(float $valorHora, float $horasTrabalhadas){
            $this->resultado = $valorHora * $horasTrabalhadas;
            return $this->resultado;
        }//fim do método

        public function converterIdadeEmDias(int $idade){
            $this->resultado = $idade * 365;
            return $this->resultado;
        }//fim do método

        public function calcularTempoRestante(int $idade){
            $anosRestantes = 100 - $idade;
            $diasRestantes = $anosRestantes * 365;
            return $diasRestantes;
        }//fim do método

        public function mediaTresValores(float $valor1, float $valor2, float $valor3){
            $this->resultado = ($valor1 + $valor2 + $valor3)/3;
            return $this->resultado;
        }//fim do método

        public function metrosEmCentimetros(float $metros){
            $this->resultado = $metros * 100;
            return $this->resultado;
        }//fim do método

        public function calcularAreaTrapezio(float $baseMaior, float $baseMenor, float $altura){
            $this->resultado = (($baseMaior + $baseMenor) * $altura) / 2;
            return $this->resultado;
        }//fim do método

        public function diasEmSegundos(int $dias){
            $this->resultado = $dias * 24 * 60 * 60;
            return $this->resultado;
        }//fim do método

        public function somarDigitos(int $numero){
            $soma = 0;
            while($numero > 0){
                $soma += $numero % 10;
                $numero = (int)($numero / 10);
            }
            return $soma;
        }//fim do método

        public function inversoMultiplicativo(float $numero){
            if($numero != 0){
                $this->resultado = 1 / $numero;
                return $this->resultado;
            } else {
                return "Erro: Não é possível calcular o inverso multiplicativo de zero.";
            }
        }//fim do método

        public function calcularHipotenusa(float $cateto1, float $cateto2){
            $this->resultado = sqrt(pow($cateto1, 2) + pow($cateto2, 2));
            return $this->resultado;
        }//fim do método

        public function decimalParaBinario(int $numero){
            if($numero < 0){
                return "Erro: Número negativo não pode ser convertido para binário.";
            }
            $binario = "";
            do {
                $binario = ($numero % 2) . $binario;
                $numero = (int)($numero / 2);
            } while ($numero > 0);
            return $binario;
        }//fim do método

        public function dechex(int $numero){
            if($numero < 0){
                return "Erro: Número negativo não pode ser convertido para hexadecimal.";
            }
            $hexadecimal = "";
            $hexChars = "0123456789ABCDEF";
            do {
                $hexadecimal = $hexChars[$numero % 16] . $hexadecimal;
                $numero = (int)($numero / 16);
            } while ($numero > 0);
            return $hexadecimal;
        }//fim do método

        public function raizCubica(float $numero){
            if($numero < 0){
                return "Erro: Número negativo não pode ter raiz cúbica real.";
            }
            $this->resultado = pow($numero, 1/3);
            return $this->resultado;
        }//fim do método

        public function calcularMontanteJurosSimples(float $capital, float $taxa, float $tempo){
            $this->resultado = $capital * (1 + ($taxa * $tempo));
            return $this->resultado;
        }//fim do método

        public function calcularMontanteJurosCompostos(float $capital, float $taxa, float $tempo){
            $this->resultado = $capital * pow((1 + $taxa), $tempo);
            return $this->resultado;
        }//fim do método

        public function grausParaRadianos(float $graus){
            $this->resultado = $graus * (pi() / 180);
            return $this->resultado;
        }//fim do método

        public function calcularPorcentagem(float $valor, float $porcentagem){
            $this->resultado = ($valor * $porcentagem) / 100;
            return $this->resultado;
        }//fim do método

        public function mediaPonderada(float $nota1, float $peso1, float $nota2, float $peso2){
            $this->resultado = (($nota1 * $peso1) + ($nota2 * $peso2)) / ($peso1 + $peso2);
            return $this->resultado;
        }//fim do método

        public function partesInteiraDecimal(float $numero){
            $parteInteira = (int)$numero;
            $parteDecimal = $numero - $parteInteira;
            return ["inteira" => $parteInteira, "decimal" => $parteDecimal];
        }//fim do método

        public function adicionarRendimento(float $saldo){
            $this->resultado = $saldo * 1.05; // Adiciona 5% de rendimento
            return $this->resultado;
        }//fim do método

        public function calcularGastoEnergia(float $potencia, float $tempo, float $custoPorKwh){
            $energiaConsumida = ($potencia * $tempo) / 1000; // Convertendo para kWh
            $this->resultado = $energiaConsumida * $custoPorKwh;
            return $this->resultado;
        }//fim do método

        public function farenheitParaCelsius(float $farenheit){
            $this->resultado = ($farenheit - 32) * 5/9;
            return $this->resultado;
        }//fim do método

        public function calcularDensidade(float $massa, float $volume){
            if($volume <= 0){
                return "Erro: O volume deve ser maior que zero.";
            }
            $this->resultado = $massa / $volume;
            return $this->resultado;
        }//fim do método

        public function multiploMaisProximoDe10(int $numero){
            $resto = $numero % 10;
            if($resto < 5){
                return $numero - $resto; // arredonda para baixo
            } else {
                return $numero + (10 - $resto); // arredonda para cima
            }
        }//fim do método

        public function valorEmOctal(int $numero){
            if($numero < 0){
                return "Erro: Número negativo não pode ser convertido para octal.";
            }
            $octal = "";
            do {
                $octal = ($numero % 8) . $octal;
                $numero = (int)($numero / 8);
            } while ($numero > 0);
            return $octal;
        }//fim do método

        public function exibirCrescente(int $numero){
            if($numero < 1){
                return "Erro: O número deve ser inteiro positivo.";
            }
            $resultado = "";
            for($i = 1; $i <= $numero; $i++){
                $resultado .= $i . " ";
            }
            return ($resultado);
        }//fim do método

        public function contagemRegressiva(int $numero){
            if($numero < 0){
                return "Erro: O número deve ser inteiro não-negativo.";
            }
            $resultado = "";
            for($i = $numero; $i >= 0; $i--){
                $resultado .= $i . " ";
            }
            return ($resultado);
        }//fim do método

        public function somarNumerosInteirosAteN(int $n){
            if($n < 1){
                return "Erro: O número deve ser inteiro positivo.";
            }
            $soma = 0;
            for($i = 1; $i <= $n; $i++){
                $soma += $i;
            }
            return $soma;
        }//fim do método

    }//fim da Classe
?>    