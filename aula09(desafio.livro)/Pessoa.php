<?php 

    class Pessoa{
        //ATRIBUTOS
        private $nome;
        private $idade;
        private $sexo;       

        //MÉTODOS ESPECIAIS (construct, get, set)
        
        function __construct($no,$id,$se){
            $this->setNome($no); //$this->nome = $no;
            $this->setIdade($id); //$this->idade = $id;
            $this->setSexo($se); //$this->sexo =$se;
            
        }
        
        //GET (fazer a correlação do GET com seus atributos)
        public function getNome(){
            return $this ->nome;
        }
        public function getIdade(){
            return $this ->idade;
        }
        public function getSexo(){
            return $this ->sexo;
        }
                
        //SET (interligar o atributo com o seu parâmetro)
        public function setNome($no){
            $this ->nome = $no;
        }
        public function setIdade($id){
            $this ->idade = $id;
        }
        public function setSexo($se){
            $this ->sexo = $se;
        }
         
        //MÉTODOS:

               
        
        public function fazerAniver() {
              $this->idade = $this ->idade + 1; //ou $this->idade ++;            
            
        }
        
                
    }
?>