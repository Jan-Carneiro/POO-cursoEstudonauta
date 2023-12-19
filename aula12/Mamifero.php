<?php 
require_once 'Animal.php';

    class Mamifero extends Animal{
        //ATRIBUTOS
        private $corPelo;
               

        //MÉTODOS ESPECIAIS (construct, get, set)
        function __construct(){
                        
        }
        
        //GET (fazer a correlação do GET com seus atributos)
        public function getCorPelo(){
            return $this ->corPelo;
        }
                
        //SET (interligar o atributo com o seu parâmetro)
        public function setCorPelo($pel){
            $this ->corPelo = $pel;
        }
         
        //MÉTODOS:
              
        
        public function locomover() {
            echo "Correndo";                        
        }
        public function alimentar() {
            echo "Mamando";                    
        }
        public function emitirSom() {
            echo "Som de Mamífero";                    
        }
        
                
    }
?>