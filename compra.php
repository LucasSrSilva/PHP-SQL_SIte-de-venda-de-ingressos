<?php
session_start();
if (isset($_SESSION["usuario"]) && isset($_GET["compra"])) {
    $usuario = $_SESSION["usuario"];
    $evento = $_GET["evento"];
    $inteira = $_GET["inteira"];
    $meia = $_GET["meia"];

    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "db_showdeingressos";

    $conexao = new mysqli($db_host, $db_username, $db_password, $db_name);

    $colunainteira = $evento;
    $colunameia = $evento . "meia";
    
    if ($conexao->connect_errno) {
        die("Erro na conexão: " . $conexao->connect_error);
    } else {
        echo "Conexão feita com sucesso!";
    }
        
    $sql = "UPDATE meusingressos SET $colunainteira = $colunainteira + $inteira, $colunameia = $colunameia + $meia WHERE usuario = '$usuario';";

        if ($conexao->query($sql) === true) {
            header("Location: ingressos.php");
        } else {
            echo "Erro: " . $conexao->error;
        }
     
}
else{
    echo "erro";
}
?>


