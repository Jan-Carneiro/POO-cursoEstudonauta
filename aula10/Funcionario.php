<?php 
require_once "Pessoa.php";
    class Funcionario extends Pessoa{
        //ATRIBUTOS
        private $setor;
        private $trabalhando;
               

        //MÉTODOS ESPECIAIS (construct, get, set)
        function __construct(){
            
            
        }
        
        //GET (fazer a correlação do GET com seus atributos)
        public function getSetor(){
            return $this ->setor;
        }
        public function getTrabalhando(){
            return $this ->trabalhando;
        }
                
        //SET (interligar o atributo com o seu parâmetro)
        public function setSetor($se){
            $this ->setor = $se;
        }
        public function setTrabalahndo($ta){
            $this ->trabalhando = $ta;
        }
         
        //MÉTODOS:

               
        
        public function mudarTrabalho() {
            $this->trabalhando = ! $this->trabalhando;            
        }
        
                
    }
?>