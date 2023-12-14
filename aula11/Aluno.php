<?php 
require_once 'Pessoa.php';
    class Aluno extends Pessoa{
        //ATRIBUTOS
        private $matricula;
        private $curso;

        
        //MÉTODOS ESPECIAIS (construct, get, set)
        function __construct(){
            
            
        }
        
        //GET (fazer a correlação do GET com seus atributos)
        public function getMatricula(){
            return $this ->matricula;
        }
        public function getCurso(){
            return $this ->curso;
        }
                
        //SET (interligar o atributo com o seu parâmetro)
        public function setMatricula($ma){
            $this ->matricula = $ma;
        }
        public function setCurso($cu){
            $this ->curso = $cu;
        } 
        //MÉTODOS:

               
        
        public function pagarMensalidade() {
                        
            
        }
        
                
    }
?>