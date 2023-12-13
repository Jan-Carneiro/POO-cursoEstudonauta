<?php 
require_once "Pessoa.php";
    class Aluno extends Pessoa{
        //ATRIBUTOS
        private $matr;
        private $curso;
               

        //MÉTODOS ESPECIAIS (construct, get, set)
        function __construct(){
            
            
        }
        
        //GET (fazer a correlação do GET com seus atributos)
        public function getMatr(){
            return $this ->matr;
        }
        public function getCurso(){
            return $this ->curso;
        }
                
        //SET (interligar o atributo com o seu parâmetro)
        public function setMatr($ma){
            $this ->matr = $ma;
        }
        public function setCurso($cu){
            $this ->curso = $cu;
        }
         
        //MÉTODOS:

               
        
        public function cancelarMatr() {
            //tornará o atributo matr false;
            echo "<p>A matrícula será cancelada</p>";
            
        }
        
                
    }
?>