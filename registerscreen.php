<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title> Barretina Registro </title>
</head>
<body>

    <div class="container">
        <div class="mainBoxReg">
            <!-- Nome do site -->
            <h1 class=""> Kappa Barretina </h1>
            <div class="img-circular"></div>
            <form method="post" action="index.php">
                <button class="button3" type="submit"> Voltar </button>
            </form>
            <!-- Formulário com usuario, senha, saldo, data de nascimento e botão -->
            <div>
                <form method="post" action="register.php">
                    <input type="name" name="user" placeholder="Usuário" maxlength="16"> <br>
                    <input type="password" name="password1" placeholder="Senha  " maxlength="16"> <br>
                    <input type="password" name="password2" placeholder="Confirmar senha  " maxlength="16"> <br>
                    <input type="number" name="saldo" placeholder="Saldo" max="999999999999"> <br>
                    <input type="date" name="dataNascimento" placeholder="Data de Nascimento">
                    <!-- Botão executar o registro-->
                    <div class="center">
                        <button class="button2" type="submit"> Registrar </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>