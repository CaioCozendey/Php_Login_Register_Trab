<!DOCTYPE html>
<html lang="pt-br">

<head>
     <!-- Link CSS -->
    <link href="style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title> Barretina </title>
</head>

<body>
    <div class="container">
        <div class="mainBox">
            <!-- Nome do site -->
            <h1 class=""> Kappa Barretina </h1>
            <div class="img-circular"></div>
            <!-- Formulário com usuario, senha e botão de login -->
            <p class="frase"> Caso o novo saldo seja 0, digite o número "0" </p>
            <input type="number" name="saldo" placeholder="Digite seu novo saldo">
            <div class="center">
                <form method="post">
                        <button class="buttonSaldo" type="submit"> Novo Saldo </button>
                </form>
                <form method="post" action="index.php">
                    <button class="buttonSaldo" type="submit"> Sair </button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>

<?php

    $newsaldo = $_REQUEST['novoSaldo'];

    echo $newsaldo;

?>