
<?php
require_once 'Controlador.php'; 
    class ControleRemoto implements Controlador{
        //ATRIBUTOS
        private $volume;
        private $ligado;
        private $tocando;
        
        //MÉTODOS ESPECIAIS (construct, get, set)
        function __construct(){
            $this ->volume = 50;
            $this ->ligado = false;
            $this ->tocando = false;
        }
        function getVolume(){
            return $this ->volume;
        }
        function getLigado(){
            return $this ->ligado;
        }
        function getTocando(){
            return $this ->tocando;
        }
        function setVolume($volume){
            $this ->volume = $volume;
        }
        function setLigado($ligado){
            $this ->ligado = $ligado;
        }
        function setTocando($tocando){
            $this ->tocando = $tocando;
        }

        //MÉTODOS:
        public function ligar(){
            $this ->setLigado (true);
        }
        public function desligar(){
            $this ->setLigado (false);
        }
        public function abrirMenu(){
            echo "<br> Está ligado?:" . (($this->getLigado()) ? "SIM" : "NÃO");
            echo "<br> Está tocando?:" . (($this->getTocando()) ? "SIM" : "NÃO");
            echo "<br> Volume: " . $this->getVolume();
            for ($i = 0; $i <= $this->getVolume(); $i += 10) {
                echo "|";
            }
            echo "<br>";            
        }
        public function fecharMenu(){
            echo "<br>Fechando menu...";
        }
        public function maisVolume(){

        }
        public function menosVolume(){

        }
        public function ligarMudo(){

        }
        public function desligarMudo(){

        }
        public function play(){

        }
        public function pause(){

        }
    }
?>