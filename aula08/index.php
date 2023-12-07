<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ultra Emoji Combat</h1>
    <pre>
    <?php
        require_once 'Lutador.php';
        $L = array();
        $L[0] = new Lutador("Pretty Boy","França",31, 1.75, 68.9, 11, 3, 1);
        $L[1] = new Lutador("Putscript","Brasil",29, 1.68, 57.8, 14, 2, 3);
        $L[2] = new Lutador("Snap Shadow","EUA",35, 1.65, 80.9, 12, 2, 1);
        $L[3] = new Lutador("Dead Code","Austrália",28, 1.93, 81.6, 13, 0, 2);
        $L[4] = new Lutador("UfoCobol","Brasil",37, 1.70, 119.3, 5, 4,3);
        $L[5] = new Lutador("Nerdaart","EUA",30, 1.81, 105.7, 12, 2,4);
        
        $L[0]->apresentar();
        echo "<br>";
        $L[1]->apresentar();
        echo "<br>";
        $L[0] ->status();


?>


    </pre>
</body>
</html>