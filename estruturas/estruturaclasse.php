<?php 

    class Luta{
        //ATRIBUTOS
        private $desafiado;
               

        //MÉTODOS ESPECIAIS (construct, get, set)
        function __construct(){
            $this ->desafiado = 1000;
            
        }
        
        //GET (fazer a correlação do GET com seus atributos)
        public function getDesafiado(){
            return $this ->desafiado;
        }
                
        //SET (interligar o atributo com o seu parâmetro)
        public function setDesafiado($dd){
            $this ->desafiado = $dd;
        }
         
        //MÉTODOS:

               
        
        public function lutar() {
                        
            
        }
        
                
    }
?>