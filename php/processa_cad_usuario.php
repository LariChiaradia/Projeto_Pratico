<?php
date_default_timezone_set('america/sao_paulo');
include_once("../../projeto_pratico/php/conexao.php");
$nome_usuario = $_POST['nome_cad'];
$email_usuario = $_POST['email_cad'];   
$data = date("Y-m-d H:i:s");
// $senha_usuario = $_POST['txt_senha'];
//echo "$nome_usuario - $email_usuario";
if (isset($_POST["senha_cad"])) {
    $senha_usuario = $_POST["senha_cad"];
    $senha = md5($senha_usuario);
    // echo md5($senha);
}

$result = ("SELECT COUNT(*) FROM usuarios2 WHERE email = '{$email_usuario}'");
$resultado = mysqli_query($conn, $result);

$row = $resultado->fetch_row();
if ($row[0] > 0) {
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/projeto_pratico/php/cadastro.php'>
          <script type='text/javascript'>
            alert('E-mail já cadastrado, por favor tente outro.'); 
          </script>";
} else {

    $result_usuario = "INSERT INTO usuarios2(nome, email, senha, created) VALUES ('$nome_usuario','$email_usuario', '$senha','$data')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if (mysqli_affected_rows($conn) != 0) {
        echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/projeto_pratico/php/login.php'>
                    <script type= 'text/javascript'>
                        alert('Usuario cadastrado com Sucesso.');
                    </script>
                ";
    } else {
        echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/projeto_pratico/php/cadastro.php'>
                    <script type='text/javascript'>
                        alert('O Usuario não foi cadastrado com Sucesso.');
                    </script>
                ";
    }
}
