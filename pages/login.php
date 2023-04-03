<?php
include_once("connect.php");
    session_start(); 

    //O campo usuário e senha preenchido entra no if para validar
    if((isset($_POST['users_email'])) && (isset($_POST['users_password']))){
        $usuario = mysqli_real_escape_string($conn, $_POST['users_email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $senha = mysqli_real_escape_string($conn, $_POST['users_password']);
        $senha = sha1($senha);
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_usuario = "SELECT * FROM users WHERE users_email = '$usuario' && users_password = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
            $_SESSION['usuarioId'] = $resultado['id_users'];
            $_SESSION['usuarioNome'] = $resultado['users_name'];
            $_SESSION['usuarioNiveisAcessoId'] = $resultado['users_access_levels'];
            $_SESSION['usuarioEmail'] = $resultado['users_email'];
            if($_SESSION['usuarioNiveisAcessoId'] == "1"){
                header("Location: ../administrador.php");
            }elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
                header("Location: ../colaborador.php");
            }elseif($_SESSION['usuarioNiveisAcessoId'] == "3"){
                header("Location: ../cliente.php");
            }else{
                header("Location: ../index.php");
            }

        }else{    
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: ../index.php?msg=Usuário ou senha Inválido");
        }
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: ../index.php?msg=Usuário ou senha Inválido");
    }
?>