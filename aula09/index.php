<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro</title>
</head>
<body>
    <pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        
        //Classe Pessoa:
        $p[0] = new Pessoa ("João Paulo",22,"M");
        $p[1] = new Pessoa ("Beatriz",30,"F");
        $p[2] = new Pessoa ("Carlos",40,"M");

        //Classe Livro:
        $l[0] = new Livro ("Senhor dos Anéis","Conor McGregor","500",$p[0]);
        $l[1] = new Livro ("Dom Casmurro","Mackenzie","100",$p[1]);
        $l[2] = new Livro ("Disco Voador","Arthur Berleti","200",$p[2]);

        $l[1] -> detalhes();
        //$l[1] -> abrir();
        //$l[1] -> folhear(100);
        //$l[1] -> detalhes();
        //$l[1] ->avançarPag();
        //$l[1] -> detalhes();
        //$l[1] ->voltarPag();
        //$l[1] -> detalhes();

        //$l[1] -> detalhes();

        //$l[2] -> detalhes();

        //print_r($l[0]);
        ?>
    </pre>
</body>
</html>