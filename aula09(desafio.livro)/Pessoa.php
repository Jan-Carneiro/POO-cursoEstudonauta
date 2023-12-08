<?php 

    class Pessoa{
        //ATRIBUTOS
        private $nome;
        private $idade;
        private $sexo;       

        //MÉTODOS ESPECIAIS (construct, get, set)
        
        function __construct($no,$id,$se){
            $this->setNome($no);
            $this->setIdade($id);
            $this->setSexo($se);
            
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
            echo "--------------------------PARABÉNS-------------------------";
            echo "<p>O ".$this->getNome(). " do sexo ".$this->getSexo()." está fazendo aniverário hoje, completanto ".$this->getIdade()." anos de idade </p>";
            echo "-----------------------------------------------------------------------";                
            
        }
        
                
    }
?>