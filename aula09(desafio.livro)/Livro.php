<?php 
require_once 'Pessoa.php';
require_once 'Leitor.php';
    class Livro{
        //ATRIBUTOS
        private $titulo;
        private $autor;
        private $totpaginas;
        private $pagatual;
        private $aberto;
        private $leitor;
               

        //MÉTODOS ESPECIAIS (construct, get, set)
        function __construct(){
            
            
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
        public function getPagAtual(){
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
            echo "<p> Autor: ".$this->getAutor(). "</p>";
            echo "<p> Número de páginas: ".$this->getTotPaginas(). "</p>";
            echo "<p> _____________________________________________________________";
            echo "<p> ______________________LEITOR___________________";
            echo "<p> _____________________________________________________________";
            echo "<p> Nome: ".$l1->getNome(). "</p>";
            echo "<p> Idade: ".$l1->getIdade(). "</p>";
            echo "<p> Sexo: ".$l1->getSexo(). "</p>";
            echo "<p> Livro: ".$this->setTitulo("Senhor dos Anéis"). "</p>";
            echo "<p> _____________________________________________________________";
            echo "<p> _____________________________________________________________";
            echo "<p> ______________________LEITORES DO LIVRO___________________";
            echo "<p> _____________________________________________________________";
            echo "<p> Leitor: ".$l2->getNome(). "</p>";
            echo "<p> Leitor: ".$l2->getIdade(). "</p>";
            echo "<p> Leitor: ".$l2->getSexo(). "</p>";
            echo "<p> _____________________________________________________________";
            echo "<p> _____________________________________________________________";
            echo "<p> ______________________LEITORES DO LIVRO___________________";
            echo "<p> _____________________________________________________________";
            echo "<p> Leitor: ".$l3->getNome(). "</p>";
            echo "<p> Leitor: ".$l3->getIdade(). "</p>";
            echo "<p> Leitor: ".$l3->getSexo(). "</p>";
            echo "<p> _____________________________________________________________";
            echo "<p> _____________________________________________________________";
            echo "<p> ______________________LEITORES DO LIVRO___________________";
            echo "<p> _____________________________________________________________";
            echo "<p> Leitor: ".$l4->getNome(). "</p>";
            echo "<p> Leitor: ".$l4->getIdade(). "</p>";
            echo "<p> Leitor: ".$l4->getSexo(). "</p>";
            echo "<p> _____________________________________________________________";
            echo "<p> _____________________________________________________________";
            echo "<p> ______________________LEITORES DO LIVRO___________________";
            echo "<p> _____________________________________________________________";
            echo "<p> Leitor: ".$l5->getNome(). "</p>";
            echo "<p> Leitor: ".$l5->getIdade(). "</p>";
            echo "<p> Leitor: ".$l5->getSexo(). "</p>";
            echo "<p> _____________________________________________________________";
            echo "<p> _____________________________________________________________";
            echo "<p> ______________________LEITORES DO LIVRO___________________";
            echo "<p> _____________________________________________________________";
            echo "<p> Leitor: ".$l6->getNome(). "</p>";
            echo "<p> Leitor: ".$l6->getIdade(). "</p>";
            echo "<p> Leitor: ".$l6->getSexo(). "</p>";
            echo "<p> _____________________________________________________________";
        }
        public function abrir(){
            echo "oi";
        }
        public function fechar(){

        }
        public function folhear(){

        }
        public function avançarPag(){

        }
        public function voltarPag(){

        }
        
                
    }
?>