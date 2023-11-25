
<?php 
    class Notebook{
        var$modelo;
        var$cor;
        var$aberto;
        var$ligado;

        function navegar(){
            if ($this->aberto && $this->ligado) {
                echo "<p>Navegando na internet</p>";
            } else {
                echo "<p>Preciso ligar ou abrir o computador para poder navegar na internet</p>";
            }
            
        }
        function ligar(){
            $this ->ligado = true;
        }
        function abrir(){
            $this ->aberto = true;
        }
    }
?>