<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once 'caneta.php';
        
        $c1 = new Caneta;
        $c1 ->modelo = "Bic cristal";
        $c1 ->cor = "Azul";
        //$c1 ->ponta = 0.5;
        //$c1 ->carga = 99;        
                
        $c1 ->rabiscar();
        $c1 ->tampar();
        $c1 ->destampar();
        
        var_dump ($c1);

    ?>    
</body>
</html>
