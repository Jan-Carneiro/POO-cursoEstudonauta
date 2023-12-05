
<?php 
    interface Usuario{
        
        public function inserirCartao();
        public function retirarCartao();
        public function fimOperacao();
        public function verSaldo();
        public function depositar();
        public function sacar();
        
    }
?>