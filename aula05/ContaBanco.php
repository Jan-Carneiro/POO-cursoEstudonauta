<?php 
    class ContaBanco{
        //ATRIBUTOS
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;
        //MÉTODOS
        public function abrirConta ($t){
            $this -> setTipo($t);
            $this -> setStatus (true);
            if ($t == "CC"){
                $this -> setSaldo (50);
            } elseif ($t == "CP"){
                $this -> setSaldo (150);
            }
        }
        public function fecharConta (){
            if ($this -> getSaldo()>0){
                echo "<p>Conta ainda tem dinheiro, não posso fechá-la</p>";
            } elseif ($this -> getSaldo()<0){
                echo "<p> Conta está em débito. Impossível encerrar!</p>";
            } else{
                $this -> setStatus (false);
            }
        }
        public function depositar ($v){
            if ($this -> getStatus()){
                $this -> setSaldo ($this -> getSaldo() + $v);
            } else{
                echo "<p>Conta fechada. Não consigo depositar</p>";
            }   
        }
        public function sacar (){
            
        }
        public function pagarMensal (){
            
        }
        //MÉTODOS ESPECIAIS
        public function __construct(){
            
        }
        public function getNumConta(){
            return $this -> numConta;
        }
        public function getTipo(){
            return $this -> tipo;
        }
        public function getDono(){
            return $this -> dono;
        }
        public function getSaldo(){
            return $this -> saldo;
        }
        public function getStatus(){
            return $this -> status;
        }
        public function setNumConta($numConta){
            $this -> numConta = $numConta;
        }
        public function setTipo($tipo){
            $this -> tipo = $tipo;
        }
        public function setDono($dono){
            $this -> dono = $dono;
        }
        public function setSaldo($saldo){
            $this -> saldo = $saldo;
        }
        public function setStatus($status){
            $this -> status = $status;
        }

    }
?>