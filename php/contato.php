<?php
$mensagem = "Preencha os dados para contato";
$mensagem_class = "";
$nome = "";
$email = "";
$msg = "";


if (isset($_POST["nome"], $_POST["email"], $_POST["msg"])) {
    $conexao = new PDO("mysql:host=localhost;dbname=projeto_uninove", "root", "");

    $nome = filter_input(INPUT_POST, "nome");
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $msg = filter_input(INPUT_POST, "msg");


    if (!$nome || !$email || !$msg) {
        $mensagem = "Dados Inválidos!";
        $mensagem_class = "erro";
    } else {
        $stm = $conexao->prepare('INSERT INTO contato(nome,email,descricao) VALUES(:nome,:email,:msg)');
        $stm->bindParam('nome', $nome);
        $stm->bindParam('email', $email);
        $stm->bindParam('msg', $msg);
        $stm->execute();

        $mensagem = "Mensagem enviada com Sucesso!";

        $nome = "";
        $email = "";
        $msg = "";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style_home.css" media="screen" />
    <script src="../js/index.js"></script>
    <script src="https://kit.fontawesome.com/01a3efc6ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_contato.css">

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
                    <a class="nav-link" href="http://localhost:8080/projeto_pratico/php/cadastro.php"><i class="far fa-clone"></i>Cadastro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8080/projeto_pratico/php/agendamento.php"><i class="far fa-calendar-alt"></i>Agendamento</a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <form method="post">
        <h1>Contato</h1>
            <label>Nome</label>
            <input type="text" name="nome" value="<?= $nome ?>" required />

    
            <label>E-mail</label>
            <input type="text" name="email" value="<?= $email ?>" required />


            <label>Mensagem</label>
            <textarea name="msg"><?= $nome ?></textarea>
            <button type="submit">Enviar</button>
        </form>

        <div class="mensagem"><?= $mensagem ?>
        </div>
       

    </main>
</body>

</html>
