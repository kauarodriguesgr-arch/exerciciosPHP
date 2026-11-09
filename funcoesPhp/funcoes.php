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

    }//fim da Classe
?>    