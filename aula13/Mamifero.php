<?php 
require_once "Animall.php";
    class Mamifero extends Animall{
        //ATRIBUTOS
        protected $corPelo;
                       

        //MÉTODOS ESPECIAIS (construct, get, set)
        //CONSTRUCT
        function __construct(){
                    
        }
        
        //GET (fazer a correlação do GET com seus atributos)
        public function getCorPelo(){
            return $this ->corPelo;
        }
           
        //SET (interligar o atributo com o seu parâmetro)
        public function setCorPelo($cor){
            $this ->corPelo = $cor;
        }
        
         
        //MÉTODOS:

               
        
        public function emitirSom() {
            
            echo "<p>Som de mamífero</p>";
            
        }
        
                
    }
?>