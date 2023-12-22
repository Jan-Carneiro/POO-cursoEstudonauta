<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //Progrma Principal
    require_once 'Animall.php';
    require_once 'Mamifero.php';
    require_once 'Lobo.php';
    require_once 'Cachorro.php';
    
    $m = new Mamifero();
    $m->emitirSom();

    $l = new Lobo();
    $l->emitirSom();

    $c = new Cachorro(); 
    $c->emitirSom();
    $c->reagirFrase("Deita");
    $c->reagirHora(13,0);
    $c->reagirDono(false);
    $c->reagirIdadePeso(10,30);
?>
</body>
</html>