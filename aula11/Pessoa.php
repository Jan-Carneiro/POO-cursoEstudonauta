<?php 

    abstract class Pessoa{
        //ATRIBUTOS
        protected $nome;
        protected $sexo;
        protected $idade;       

        //MÉTODOS ESPECIAIS (construct, get, set)
        function __construct(){
                        
        }
        
        //GET (fazer a correlação do GET com seus atributos)
        public function getNome(){
            return $this ->nome;
        }
        public function getSexo(){
            return $this ->sexo;
        }
        public function getIdade(){
            return $this ->idade;
        }
                
        //SET (interligar o atributo com o seu parâmetro)
        public function setNome($no){
            $this ->nome = $no;
        }
        public function setSexo($se){
            $this ->sexo = $se;
        }
        public function setIdade($id){
            $this ->idade = $id;
        }
         
        //MÉTODOS:

               
        
        public final function fazerAniversario() {
            //Chamando essa função,fará mais 1 ano no atributo idade
            $this->idade ++;                    
            
        }
        
                
    }
?>