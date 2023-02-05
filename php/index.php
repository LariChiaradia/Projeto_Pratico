<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style_home.css" media="screen" />
    <script src="../js/index.js"></script>
    <script src="https://kit.fontawesome.com/01a3efc6ed.js" crossorigin="anonymous"></script>
    <title>Home Page</title>

</head>
<body>
    <header>
    <!-- Navbar -->
    <?php include("header.php") ?>
    </header>
    
    <!-- Imagem Marketing -->
     <div class="imagem">
            <!-- <img src="img/marketing.jpg"> -->
     </div>

    <!-- Cards com os produtos ou serviços prestados -->
     <?php include("cards.php") ?>

    <!-- Formulário de contato ou cadastro -->
    <div>
        
    </div>

    <!-- Agendamentos -->
    <div>
        
    </div>

    <!-- footer / Informações adicionais e criadores -->
    <div>
        <?php include("rodape.php") ?>
    </div>

</body>
</html>