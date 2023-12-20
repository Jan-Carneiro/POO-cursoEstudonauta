<?php 
require_once "Animal.php";
    class Ave extends Animal{
        //ATRIBUTOS
        private $corPena;
                       

        //MÉTODOS ESPECIAIS (construct, get, set)
        //CONSTRUCT
        
        //GET (fazer a correlação do GET com seus atributos)
        public function getCorPena(){
            return $this ->corPena;
        }
                        
        //SET (interligar o atributo com o seu parâmetro)
        public function setCorPena($corpen){
            $this ->corPena = $corpen;
        }
                 
        //MÉTODOS:

               
        
        public function fazerNinho() {
            
            echo "<p>Construindo um ninho</p>";
            
        }
        public function locomover() {
            echo "<p>Voando</p>";          
        }
        public function alimentar() {
            echo "<p>Comendo frutas</p>";       
        }
        public function emitirSom() {
            echo "<p>Som de ave</p>";       
        }
        
                
    }
?>