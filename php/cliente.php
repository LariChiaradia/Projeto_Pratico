<?php
    session_start();
    header("Location: agendamento.php");
    echo "Usuario: ". $_SESSION['usuarioNome'];   

?>
<br>
<a href="sair.php">Sair</a>