<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
</head>
<body>
    <h1>Caixa Eletrônico</h1>

    <pre>
        <?php
            require_once 'CaixaEletronico.php';

            $c1 = new CaixaEletronico();

            $c1 -> inserirCartao ();
            $c1 -> retirarCartao ();
            $c1 -> fimOperacao();
            $c1 ->inserirCartao();
            $c1 -> retirarCartao();
            $c1 -> fimOperacao();
        ?>
    </pre>
</body>
</html>