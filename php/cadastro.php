<!DOCTYPE html>
<html lang="pt-br">
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style_home.css" media="screen" />
    <script src="https://kit.fontawesome.com/01a3efc6ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/style_cadastro.css" media="screen" />
    <script src="../js/index.js"></script>

    <title> Cadastro</title>
</head>
</body>
<nav class="navbar navbar-expand-custom navbar-mainbg">
    <a class="navbar-brand navbar-logo" href="#"><img src="../img/OdontoTech6.png"></a>
    <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <div class="hori-selector">
                <div class="left"></div>
                <div class="right"></div>
            </div>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost:8080/projeto_pratico/php/index.php"><i class="fas fa-tachometer-alt"></i>Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost:8080/projeto_pratico/php/contato.php"><i class="far fa-address-book"></i>Contato</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost:8080/projeto_pratico/php/agendamento.php"><i class="far fa-calendar-alt"></i>Agendamento</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
    <div class="content">
        <div id="cadastro">
            <form method="POST" action="processa_cad_usuario.php">
                <h1>Cadastro</h1>

                <p>
                    <label for="nome_cad">Seu nome</label>
                    <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Digite seu nome" />
                </p>

                <p>
                    <label for="email_cad">Seu e-mail</label>
                    <input id="email_cad" name="email_cad" required="required" type="email" placeholder="Digite seu email" />
                </p>

                <p>
                    <label for="senha_cad">Sua senha</label>
                    <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="Digite seu senha" />
                </p>

                <p>
                    <input type="submit" value="Cadastrar" />
                </p>

                <p class="link">
                    Já tem conta?
                    <a href="http://localhost:8080/projeto_pratico/php/login.php"> Ir para Login </a>
                </p>
            </form>
        </div>
    </div>
</div>

</body>

</html>