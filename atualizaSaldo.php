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
            <div>
                <form method="post">
                    <input>
                    <div class="center">
                    <a href="atualizaSaldo.php"> <button class="buttonSaldo" type="submit"> Novo Saldo </button></a>
                    <a href="index.php"><button class="buttonSaldo" type="submit"> Sair </button></a>
                    </div>  
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