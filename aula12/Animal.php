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

               
        //métodos abstratos em classes abstratas. As classes abstratas não podem ser instanciadas. Método abstrato é declarado, mas não implementado na progenitora, vemos isso também nas Interfaces.
        
        abstract function locomover();
                  
        abstract function alimentar();
            
        abstract function emitirSom();
                
    }
?>