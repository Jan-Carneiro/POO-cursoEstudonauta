<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro</title>
</head>
<body>
    <h1>Leitor</h1>
    <?php 
    require_once 'Pessoa.php';
    require_once 'Livro.php';

    $p = array();
    $p[0] = new Pessoa("Jan Carneiro", 42,"Masculino");
    $p[1] = new Pessoa("Calil", 33,"Masculino");
    $p[2] = new Pessoa("Livia", 22,"Feminino");
    $p[3] = new Pessoa("Alan", 30,"Masculino");
    $p[4] = new Pessoa("Raiane", 35,"Feminino");
    $p[5] = new Pessoa("Takaki", 50,"Masculino");
    
    $l1 = new Livro ();
    //$l1->detalhes($p[0],$p[1],$p[2],$p[3],$p[4],$p[5]);
    
    $l1 ->abrir();

    
    ?>
</body>
</html>