<?php 
require_once 'Pessoa.php';
require_once 'Publicacao.php';

    class Livro implements Publicacao{
        //ATRIBUTOS
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;
               

        //MÉTODOS ESPECIAIS (construct, get, set)
        function __construct($ti,$au,$totPag,$le){
            $this->titulo = $ti;
            $this->autor = $au;
            $this->totPaginas = $totPag;
            $this->leitor = $le;
            $this->aberto = false;
            $this->pagAtual = 0;
        }
        
        //GET (fazer a correlação do GET com seus atributos)
        public function getTitulo(){
            return $this ->titulo;
        }
        public function getAutor(){
            return $this->autor;
        }
        public function getTotPaginas(){
            return $this->totPaginas;
        }
        public function getPagAtual(){
            return $this->pagAtual;
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
            $this ->totPaginas = $tot;
        }
        public function setPagAtual($atu){
            $this ->pagAtual = $atu;
        }
        public function setAberto($ab){
            $this ->aberto = $ab;
        }
        public function setLeitor($le){
            $this ->leitor = $le;
        }
         
        //MÉTODOS:

               
        
        public function detalhes() {
            echo "Livro: ".$this->titulo." escrito por ".$this->autor;            
            echo "<br> Páginas: ".$this->totPaginas." / Página atual: ".$this->pagAtual;
            echo "<br> Sendo lido por ".$this->leitor->getNome();
        }
        public function abrir(){
            $this->aberto = true;
        }
        public function fechar(){
            $this->aberto = false;
        }
        public function folhear($p){
            if ($p > $this->totPaginas){
                $this-> pagAtual = 0;
            } else{
                $this-> pagAtual = $p;
            }
        }
        public function avançarPag(){
            $this->pagAtual = $this->pagAtual + 1; //ou $this->pagatual ++;
            
        }
        public function voltarPag(){
            $this->pagAtual = $this->pagAtual - 1; //ou $this->pagatual --;
        }
        
                
    }
?>