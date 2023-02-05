<?php
    session_start(); 
        //Incluindo a conexão com banco de dados   
    include_once("../../projeto_pratico/php/conexao.php");    

    //O campo usuário e senha preenchido entra no if para validar
    if((isset($_POST['email'])) && (isset($_POST['senha']))){
        $email = mysqli_real_escape_string($conn, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
        $senha_2 = md5($senha);
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_email = "SELECT * FROM usuarios2 WHERE email = '$email' && senha = '$senha_2' LIMIT 1";
        $resultado_email = mysqli_query($conn, $result_email);
        $resultado = mysqli_fetch_assoc($resultado_email);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
            $_SESSION['usuarioId'] = $resultado['id'];
            $_SESSION['usuarioNome'] = $resultado['nome'];
            // $_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
            $_SESSION['usuarioEmail'] = $resultado['email'];
            if($_SESSION['usuarioEmail']){
            header("Location: agendamento.php");
        }
        
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{    
            //Váriavel global recebendo a mensagem de erro
            $_SESSION['loginErro'] =  "Usuário ou senha Inválido"; 
            header("Location: login.php");

        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: login.php");

    }
?>