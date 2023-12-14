<?php 
require_once 'Pessoa.php';
    class Professor extends Pessoa{
        //ATRIBUTOS
        private $especialidade;
        private $salario;
               

        //MÉTODOS ESPECIAIS (construct, get, set)
        function __construct(){
            
            
        }
        
        //GET (fazer a correlação do GET com seus atributos)
        public function getEspecialidade(){
            return $this ->especialidade;
        }
        public function getSalario(){
            return $this ->salario;
        }
                
        //SET (interligar o atributo com o seu parâmetro)
        public function setEspecialidade($es){
            $this ->especialidade = $es;
        }
        public function setSalario($sa){
            $this ->salario = $sa;
        }
         
        //MÉTODOS:

               
        
        public function receberAumento() {
                        
            
        }
        
                
    }
?>