<?php
session_start();
    if (isset($_POST["usuario"])) {
        $_SESSION['usuario'] = $_POST['usuario'];
        $usuario = $_POST["usuario"];

        $db_host = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_name = "db_showdeingressos";

        $conexao = new mysqli($db_host, $db_username, $db_password, $db_name);
        $sql = "insert into meusingressos (usuario) values ('$usuario')";
        
        if ($conexao->connect_errno) {
            die("Erro na conexão: " . $conexao->connect_error);
        } else {
            echo "Conexão feita com sucesso!";
        }
        
        if (mysqli_query($conexao, $sql)) {
            echo "entrada de dados bem-sucedida!<br>";
            header('Location: index.php');
            
        } else {
            if ($conexao->errno == 1062) {
                echo "Esse usuário já existe!";
                header('Location: index.php');
            } else {
                echo "Erro na entrada de dados: " . $conexao->error;
            }
        }
        
    }
    else{
        echo"Erro, você não colocou um nome de usuario!";
    }
?>