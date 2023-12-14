<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        require_once "Pessoa.php";
        require_once "Visitante.php";
        require_once "Aluno.php";
        require_once "Professor.php";
        require_once "Bolsista.php";
        require_once "Tecnico.php";

            $v1 = new Visitante;
            $a1 = new Aluno;
            $b1 = new Bolsista;

            print_r ($v1);
            print_r ($a1);
            print_r ($b1);
        ?>
    </pre>
</body>
</html>