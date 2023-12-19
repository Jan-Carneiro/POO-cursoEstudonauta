<?php 

    abstract class Animal{
        //ATRIBUTOS
        protected $peso;
        protected $idade;
        protected $membros;
               

        //MÉTODOS ESPECIAIS (construct, get, set)
        function __construct(){
                        
        }
        
        //GET (fazer a correlação do GET com seus atributos)
        public function getPeso(){
            return $this ->peso;
        }
        public function getIdade(){
            return $this ->idade;
        }
        public function getMembros(){
            return $this ->membros;
        }

                
        //SET (interligar o atributo com o seu parâmetro)
        public function setPeso($pe){
            $this ->peso = $pe;
        }
        public function setIdade($id){
            $this ->idade = $id;
        }
        public function setMembros($me){
            $this ->membros = $me;
        }

         
        //MÉTODOS:

               
        
        public function locomover() {
                  
        }
        public function alimentar() {
                   
        }
        public function emitirSom() {
                   
        }
                
    }
?>