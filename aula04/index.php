<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once 'Caneta.php';

        $c1 = new Caneta();
        //print_r ($c1)

        //$c1 -> setModelo ("BIC");
        //$c1 -> setPonta ("0.5");
        //print_r ($c1);

        //$c1 -> modelo = "NIC";
        //$c1 -> ponta = 0.5;
        //print_r ($c1);

        $c1 -> setModelo ("BIC");
        $c1 -> setPonta (0.5);
        print "Eu tenho uma caneta {$c1 -> getModelo()} de ponta {$c1 -> getPonta()}";
    ?>
</body>
</html>