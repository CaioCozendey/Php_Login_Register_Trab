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
            <p class="frase"> Caso o novo saldo seja R$0,00, digite o número "0" </p>
            <div >
                <form method="post">
                    <input type="number" name="saldo" placeholder="Digite seu novo saldo" class="inpCenter">
                    <div class="btnBox">
                        <button class="buttonSaldo" type="submit"> Aplicar Saldo </button>
                        <a href="index.php" class="buttonSaldoA"> Sair </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>

<?php
    $newsaldo = $_REQUEST['saldo'];

    echo $newsaldo;

?>