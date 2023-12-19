<?php 
require_once "Animal.php";
    class Reptil extends Animal{
        //ATRIBUTOS
        private $corEscama;
                       

        //MÉTODOS ESPECIAIS (construct, get, set)
        function __construct(){
                    
        }
        
        //GET (fazer a correlação do GET com seus atributos)
        public function getCorEscama(){
            return $this ->corEscama;
        }
        
                
        //SET (interligar o atributo com o seu parâmetro)
        public function setCorEscama($cor){
            $this ->corEscama = $cor;
        }
                 
        //MÉTODOS:

               
        
        public function locomover() {
            echo "<p>Rastejando</p>";                        
        }
        public function alimentar() {
            echo "<p>Comendo vegetais</p>";                    
        }
        public function emitirSom() {
            echo "<p>Som de Réptil</p>";                    
        }
        
                
    }
?>