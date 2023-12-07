
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
        private function setCategoria() {
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

        public function apresentar() {
            // Apresenta o currículo dos lutadores
            echo "----------- APRESENTAÇÃO ----------<br>";
            echo "Lutador: " . $this->getNome() ;
            echo " , nascido no ".$this->getNacionalidade();
            echo ", com ".$this->getIdade() . " anos de idade";
            echo ", com ".$this->getAltura() . " m de altura" . ", ";
            echo "pesando " .$this->getPeso(). " kg" . "<br>";
            echo "Perdeu: " .$this->getDerrotas(). " lutas" . "<br>";
            echo "Empatou: ".$this->getEmpates(). " lutas" . "<br>";
        }
        
        public function status(){
            //alguns dados dos lutadores aparecerão na tela
            echo "---------- STATUS APÓS A LUTA ---------- <br>";
            echo $this->getNome(). "<br>" ;
            echo $this->getCategoria(). "<br>";
            echo $this->getVitorias(). " vitórias <br>";
            echo $this->getDerrotas(). " derrotas <br>";
            echo $this->getEmpates(). " empates <br>";
           
        }
        public function ganharLuta(){
            //vitória do lutador em questão
            $this->setVitorias($this->getVitorias() + 1);
        }
        public function perderLuta(){
            //derrota do lutador em questão
            $this->setDerrotas($this->getDerrotas()+1);
        }
        public function empatarLuta(){
            //empate do lutador em questão
            $this->setEmpates($this->getEmpates()+1);
        }
        
    }
?>