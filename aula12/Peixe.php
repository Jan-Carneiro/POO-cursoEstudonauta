<?php 
require_once "Animal.php";
    class Peixe extends Animal{
        //ATRIBUTOS
        private $corEscama;
                       

        //MÉTODOS ESPECIAIS (construct, get, set)
        //CONSTRUCT      
            
        
        
        //GET (fazer a correlação do GET com seus atributos)
        public function getCorEscama(){
            return $this ->corEscama;
        }
                        
        //SET (interligar o atributo com o seu parâmetro)
        public function setCorEscama($cor){
            $this ->corEscama = $cor;
        }
                 
        //MÉTODOS:

               
        
        public function soltarBolha() {
            echo "<p>Soltar Bolha</p>";
        }
        public function locomover() {
            echo "<p>Nadando</p>";                        
        }
        public function alimentar() {
            echo "<p>Comendo substâncias</p>";                    
        }
        public function emitirSom() {
            echo "<p>Peixe não faz som</p>";                    
        }
                
    }
?>