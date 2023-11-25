<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Notebook</title>
</head>
<body>
    <?php 
        require_once 'notebook.php';
        $n1 = new Notebook;
        $n1 ->modelo = "Aj57";
        $n1 ->cor = "Preto";
        $n1 ->aberto = false;
        $n1 ->ligado = false;

        var_dump ($n1);

        $n1 ->navegar();
        $n1 ->ligar();
        $n1 ->abrir();
        $n1 ->navegar();
    ?>
</body>
</html>