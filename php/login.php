<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style_home.css" media="screen" />
    <script src="../js/index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/01a3efc6ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style_login.css">
    <!-- <link rel="stylesheet" href="../css/style_agendamento.css"> -->

</head>

<body>
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
                    <a class="nav-link" href="http://localhost:8080/projeto_pratico/php/cadastro.php"><i class="far fa-clone"></i>Cadastro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8080/projeto_pratico/php/agendamento.php"><i class="far fa-calendar-alt"></i>Agendamento</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Criado o formulário para o usuário colocar os dados de acesso.  -->

    <div class="container">
        <a class="links" id="paracadastro"></a>
        <a class="links" id="paralogin"></a>
        <div class="content">
            <!--FORMULÁRIO DE LOGIN-->
            <div id="login">
                <form method="POST" action="valida.php">
                    <h1>Login</h1>
                    <label>E-mail</label>
                    <input type="email" name="email" placeholder="Email" required autofocus>
                    <br>
                    <br>
                    <label>Senha</label>

                    <input type="password" name="senha" placeholder="Senha" required>
                    <br>
                    <input type="submit" value="Acessar"></input>
                    <p class="link">
                        Não tem conta?
                        <a href="http://localhost:8080/projeto_pratico/php/cadastro.php"> Cadastrar-se </a>
                </form>
                <p>
                    <?php
                    //Recuperando o valor da variável global, os erro de login.
                    if (isset($_SESSION['loginErro'])) {
                        echo $_SESSION['loginErro'];
                        unset($_SESSION['loginErro']);
                    } ?>
                </p>
                <p>
                    <?php
                    //Recuperando o valor da variável global, deslogado com sucesso.
                    if (isset($_SESSION['logindeslogado'])) {
                        echo $_SESSION['logindeslogado'];
                        unset($_SESSION['logindeslogado']);
                    }
                    ?>
                </p>

</body>

</html>