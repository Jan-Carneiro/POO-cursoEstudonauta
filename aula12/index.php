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

        $m = new Mamifero();
        $m -> locomover();
        $m -> alimentar();
        $m -> emitirSom();

    ?>
</body>
</html>