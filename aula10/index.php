<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
    <pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Funcionario.php';
        require_once 'Professor.php';
        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();
        $p1->setNome("Pedro");
        $p2->setNome("Maria");
        $p3->setNome("Claudio");
        $p4->setNome("Fabiana");

        //print_r ($p1);
        //print_r ($p2);
        //print_r ($p3);
        //print_r ($p4);

        $p2-> setCurso("Informática");
        $p3-> setSalario(2500);
        $p4-> setSetor("Estoque");

        print_r ($p1);
        print_r ($p2);
        print_r ($p3);
        print_r ($p4);

        $p1->fazerAniv();
        
        ?>
    </pre>
</body>
</html>