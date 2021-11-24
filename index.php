<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Link Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
                <form method="post" action="start.php">
                    <input type="name" name="user" placeholder="Digite seu usuário" maxlength="16"> <br>
                    <input type="password" name="password" placeholder="Digite sua senha  " maxlength="16"> <br>
                    <div class="center">
                        <button class="button" type="submit" class=""> Entrar </button>
                    </div>
                </form>
                <!-- Formulário que encaminha para tela de registro -->
                <form method="post" action="registerscreen.php">
                    <div class="center">
                        <button class="button2" type="submit"> Registrar </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>