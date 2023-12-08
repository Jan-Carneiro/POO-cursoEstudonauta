<?php 
require_once 'Pessoa.php';
    class Livro{
        //ATRIBUTOS
        private $titulo;
        private $autor;
        private $totpaginas;
        private $pagatual;
        private $aberto;
        private $leitor;
               

        //MÉTODOS ESPECIAIS (construct, get, set)
        function __construct($ti,$at,$tot){
            $this->setTitulo($ti);
            $this->setAutor($at);
            $this->setTotPaginas($tot);
            
        }
        
        //GET (fazer a correlação do GET com seus atributos)
        public function getTitulo(){
            return $this ->titulo;
        }
        public function getAutor(){
            return $this->autor;
        }
        public function getTotPaginas(){
            return $this->totpaginas;
        }
        public function PagAtual(){
            return $this->pagatual;
        }
        public function getAberto(){
            return $this->aberto;
        }
        public function getLeitor(){
            return $this->leitor;
        }
                
        //SET (interligar o atributo com o seu parâmetro)
        public function setTitulo($ti){
            $this ->titulo = $ti;
        }
        public function setAutor($at){
            $this ->autor = $at;
        }
        public function setTotPaginas($tot){
            $this ->totpaginas = $tot;
        }
        public function setPagAtual($atu){
            $this ->pagatual = $atu;
        }
        public function setAberto($ab){
            $this ->aberto = $ab;
        }
        public function setLeitor($le){
            $this ->leitor = $le;
        }
         
        //MÉTODOS:

               
        
        public function detalhes($l1,$l2,$l3,$l4,$l5,$l6) {
            echo "<p> Título do Livro: ".$this->getTitulo(). "</p>";          
            
        }
        
                
    }
?>