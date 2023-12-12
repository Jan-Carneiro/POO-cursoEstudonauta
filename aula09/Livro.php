<?php
require_once 'Pessoa.php';
require "Publicacao.php"; 

    class Livro implements Publicacao{
        //ATRIBUTOS
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

               

        //MÉTODOS ESPECIAIS (construct, get, set)
        function __construct($ti,$au,$tot,$le){
            $this->titulo = $ti;
            $this->autor = $au;
            $this->totPaginas = $tot;
            $this->pagAtual = 0;
            $this->aberto = false;
            $this->leitor = $le;
            
        }
        
        //GET (fazer a correlação do GET com seus atributos)
        public function getTitulo(){
            return $this ->titulo;
        }
        public function getAutor(){
            return $this ->autor;
        }
        public function getTotPaginas(){
            return $this ->totPaginas;
        }
        public function getPagAtual(){
            return $this ->pagAtual;
        }
        public function getAberto(){
            return $this ->aberto;
        }
        public function getLeitor(){
            return $this ->leitor;
        }
                
        //SET (interligar o atributo com o seu parâmetro)
        public function setTitulo($ti){
            $this ->titulo = $ti;
        }
        public function setAutor($au){
            $this ->autor = $au;
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
            echo "<hr>";
            echo "Título do Livro: ".$this->titulo."<br>";            
            echo "Autor do Livro: ".$this->autor."<br>";
            echo "Total de Páginas: ".$this->totPaginas."<br>";
            echo "Página Atual: ".$this->pagAtual."<br>";
            echo "Leitor: " . $this->leitor->getNome() . "<br>"; 
            echo $this->leitor->fazerAniversario();
            echo "<hr>";

            
        }
        public function abrir(){
            //ao chamar essa função, o atributo $aberto passa a ser verdadeiro
            $this->aberto = true;
        }
        public function fechar(){
            $this->aberto = false;
        }
        public function folhear($p){
            //essa função irá para a página que desejo e ela só funcionará, se o livro estiver aberto, ou seja, $aberto = true. Esse parâmetro $p irá modificar o atributo $pagAtual.
            if (($this->aberto == true) && $p <= $this->totPaginas) {
                $this ->pagAtual = $p;
            } else {
                echo "Ou o seu livro digital está fechado, ou a página que deseja ultrapassa as páginas totais do livro. Abra-o e/ou escolha uma página entre 0 e ".$this->totPaginas;
            }

        }
        public function avançarPag(){
            //acrescenta +1 no atributo pagAtual
            $this->pagAtual = $this->pagAtual + 1;
        }
        public function voltarPag(){
            //se o atributo pagatual for igual a zero, então o comando de baixo não pode funcionar, ou seja, a pagatual mantêm igual a zero.
            if ($this->pagAtual <> 0) {
                $this->pagAtual = $this->pagAtual - 1;
            } else {
                $this->pagAtual = $this->pagAtual + 0;
            }
            
        }
        
                
    }
?>