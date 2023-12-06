
<?php 
    class Lutador{
        //ATRIBUTOS
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        //MÉTODOS ESPECIAIS (construct, get, set)
        //Os parâmetros do construct, que altera os atributos, são os mesmos do SET
        public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
            $this->setNome($no);
            $this->setNacionalidade($na);
            $this->setIdade($id);
            $this->setAltura($al);
            $this->setPeso($pe);
            $this->setVitorias($vi);
            $this->setDerrotas($de);
            $this->setEmpates($em);
        }
        //GET (fazer a correlação do GET com seus atributos)
        public function getNome(){
            return $this ->nome;
        }
        public function getNacionalidade(){
            return $this ->nacionalidade;
        }
        public function getIdade(){
            return $this ->idade;
        }
        public function getAltura(){
            return $this ->altura;
        }
        public function getPeso(){
            return $this ->peso;
        }
        public function getCategoria(){
            return $this ->categoria;
        }
        public function getVitorias(){
            return $this ->vitorias;
        }
        public function getDerrotas(){
            return $this ->derrotas;
        }
        public function getEmpates(){
            return $this ->empates;
        }

        //SET (interligar o atributo com o seu parâmetro)
        public function setNome($no){
            $this ->nome = $no;
        }
        public function setNacionalidade($na){
            $this ->nacionalidade = $na;
        }
        public function setIdade($id){
            $this ->idade = $id;
        }
        public function setAltura($al){
            $this ->altura = $al;
        }
        public function setPeso($pe){
            $this ->peso = $pe;
            $this->setCategoria();  
        }
        public function setCategoria() {
            $peso = $this->getPeso();
        
            if ($peso < 52.2) {
                $ca = "Inválido";
            } elseif ($peso <= 70.3) {
                $ca = "Leve";
            } elseif ($peso <= 83.9) {
                $ca = "Médio";
            } elseif ($peso <= 100.2) {
                $ca = "Pesado";
            } else {
                $ca = "Inválido";
            }
        
            $this->categoria = $ca;
        }
        
        public function setVitorias($vi){
            $this ->vitorias = $vi;
        }
        public function setDerrotas($de){
            $this ->derrotas = $de;
        }
        public function setEmpates($em){
            $this ->empates = $em;
        }
  
        //MÉTODOS:

        public function apresentar(){
            //apresenta o currículo dos lutadores
        }
        public function status(){
            //alguns dados dos lutadores aparecerão na tela
        }
        public function ganharLuta(){
            //vitória do lutador em questão
        }
        public function perderLuta(){
            //derrota do lutador em questão
        }
        public function empatarLuta(){
            //empate do lutador em questão
        }
        
    }
?>