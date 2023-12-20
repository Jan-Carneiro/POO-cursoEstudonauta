<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes de Animais</title>
</head>
<body>
    <?php
    require_once 'Animal.php';
    require_once 'Mamifero.php';
    require_once 'Reptil.php';
    require_once 'Peixe.php';
    require_once 'Ave.php';
    require_once 'Canguru.php';
    require_once 'Cachorro.php';
    require_once 'Cobra.php';
    require_once 'Tartaruga.php';
    require_once 'Goldfish.php';
    require_once 'Arara.php';

        $m = new Mamifero();
        echo '<h1><strong><u><p>Mamífero</p></u></strong></h1>';
        $m -> locomover();
        $m -> alimentar();
        $m -> emitirSom();
        
            $c = new Canguru();
            echo '<h2><strong><p>Canguru</p></strong></h2>';
            $c -> locomover();
            $c -> alimentar();
            $c -> emitirSom();
            
            $k = new Cachorro();
            echo '<h2><strong><p>Cachorro</p></strong></h2>';
            $k -> locomover();
            $k -> alimentar();
            $k -> emitirSom();

        $r = new Reptil();
        echo '<h1><strong><u><p>Réptil</p></u></strong></h1>';
        $r -> locomover();
        $r -> alimentar();
        $r -> emitirSom();

            $co = new Cobra();
            echo '<h2><strong><p>Cobra</p></strong></h2>';
            $co -> locomover();
            $co -> alimentar();
            $co -> emitirSom();

            $ta = new Tartaruga();
            echo '<h2><strong><p>Tartaruga</p></strong></h2>';
            $ta -> locomover();
            $ta -> alimentar();
            $ta -> emitirSom();

        $p = new Peixe();
        echo '<h1><strong><u><p>Peixe</p></u></strong></h1>';
        $p -> locomover();
        $p -> alimentar();
        $p -> emitirSom();

            $go = new Goldfish();
            echo '<h2><strong><p>Goldfish</p></strong></h2>';
            $go -> locomover();
            $go -> alimentar();
            $go -> emitirSom();

        $a = new Ave();
        echo '<h1><strong><u><p>Ave</p></u></strong></h1>';
        $a -> locomover();
        $a -> alimentar();
        $a -> emitirSom();

            $ar = new Arara();
            echo '<h2><strong><p>Arara</p></strong></h2>';
            $ar -> locomover();
            $ar -> alimentar();
            $ar -> emitirSom();

    ?>
</body>
</html>