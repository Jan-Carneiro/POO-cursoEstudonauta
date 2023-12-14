<?php
require_once 'Aluno.php'; 

    class Tecnico extends Aluno{
        //ATRIBUTOS
        private $registroProfissional;
               

        //MÉTODOS ESPECIAIS (construct, get, set)
        function __construct(){
                        
        }
        
        //GET (fazer a correlação do GET com seus atributos)
        public function getRegistroProfissional(){
            return $this ->registroProfissional;
        }
                
        //SET (interligar o atributo com o seu parâmetro)
        public function setRegistroProfisional($rg){
            $this ->registroProfissional = $rg;
        }
         
        //MÉTODOS:

               
        
        public function praticar() {
                        
            
        }
        
                
    }
?>