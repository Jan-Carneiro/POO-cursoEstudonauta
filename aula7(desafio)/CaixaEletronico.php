
<?php
    require_once 'Usuario.php';
    class CaixaEletronico implements Usuario{
        //ATRIBUTOS
        private $cliente;
        private $saldo;
        private $operacao;

        //MÉTODOS ESPECIAIS (construct, get, set)
        function __construct(){
            $this ->saldo = 1000;
            
        }
        function getCliente(){
            return $this ->cliente;
        }
        function getSaldo(){
            return $this ->saldo;
        }
        function getOperacao(){
            return $this ->operacao;
        }
        function setCliente($cliente){
            $this ->cliente = $cliente;
        }
        function setSaldo($saldo){
            $this ->saldo = $saldo;
        }
        function setOperacao($operacao){
            $this ->operacao = $operacao;
        }

        //MÉTODOS:

        public function inserirCartao() {
            $this -> setOperacao (true);
            $this -> setCliente ("Jan Carneiro Batista");

            echo "<p>Cliente: " . $this->getCliente() . "</p>";
            echo "<p>Seu saldo é de " . $this->getSaldo() . "</p>";
            
        }
        
        public function retirarCartao(){
            if ($this -> getOperacao() == false){
                echo "O cartão pode ser retirado";
            } else{
                echo "O cartão não pode ser retirado, pois você está em operação. Clique na tecla FIM para finalizar a sua operação";
            }
        }
        public function fimOperacao(){
            $this -> setOperacao (false);
            echo "Retire o seu cartão!";
        }
        public function verSaldo(){

        }
        public function depositar(){

        }
        public function sacar(){

        }
    }
?>