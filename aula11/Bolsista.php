<?php 
require_once 'Aluno.php';
    class Bolsista extends Aluno{
        //ATRIBUTOS
        private $bolsa;
               

        //MÉTODOS ESPECIAIS (construct, get, set)
        function __construct(){
            
            
        }
        
        //GET (fazer a correlação do GET com seus atributos)
        public function getBolsa(){
            return $this ->bolsa;
        }
                
        //SET (interligar o atributo com o seu parâmetro)
        public function setBolsa($bo){
            $this ->bolsa = $bo;
        }
         
        //MÉTODOS:

               
        
        public function renovarBolsa() {
                                    
        }
        //public function renovarBolsa() {
        //CRIAREI UMA SOBREPOSIÇÃO DA FUNÇÃO pagarMensalidade() da classe Aluno                            
        //}
                
    }
?>