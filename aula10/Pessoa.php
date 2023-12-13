
<?php 

    class Pessoa{
        //ATRIBUTOS
        private $nome;
        private $idade;
        private $sexo;
               

        //MÉTODOS ESPECIAIS (construct, get, set)
        function __construct(){
            //$this ->desafiado = 1000;
            
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

               
        
        public function fazerAniv() {
            //quando faz aniversário, é acrescentado +1 no atributo idade.
            $this->idade ++;
            
        }
        
                
    }
?>