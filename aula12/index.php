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

        $m = new Mamifero();
        echo '<strong><p>Mamífero</p></strong>';
        $m -> locomover();
        $m -> alimentar();
        $m -> emitirSom();

        $r = new Reptil();
        echo '<strong><p>Réptil</p></strong>';
        $r -> locomover();
        $r -> alimentar();
        $r -> emitirSom();

    ?>
</body>
</html>