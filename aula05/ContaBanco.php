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
            
        }
        public function depositar (){
            
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